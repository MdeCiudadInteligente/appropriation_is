var app=null;
var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
var waypoints=null;
var fileDataHolder=null;
var uploadObject=new Array();
var uploadFormData=new FormData();
var currentOwl;

$(document).ready(function(){
	app=new App;
});


var App = function(){
	app = this;
	app.bind();
}


App.prototype.bind=function(){

    if($('#datepicker').length){
        $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          closeText: 'Fermer',
          prevText: 'Previo',
          nextText: 'Proximo',
          yearRange: "1920:2020",
          monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre annÃƒÂ©e',
          dayNames: ['Domingo','Lunes','Martes','Mi\u00e9rcoles','Jueves','Viernes','S\u00e1bado'],
          dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','SÃƒÂ¡b'],
          dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
          dateFormat: 'yy-mm-dd', firstDay: 0,
          initStatus: 'Selecciona la fecha', 
          isRTL: false        
        });
    }

    if($('.datepickerMDE').length){
         $( ".datepickerMDE" ).datepicker({
          changeMonth: true,
          changeYear: true,
          closeText: 'Fermer',
          prevText: 'Previo',
          nextText: 'Proximo',
          yearRange: "1920:2020",
          monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre annÃƒÂ©e',
          dayNames: ['Domingo','Lunes','Martes','Mi\u00e9rcoles','Jueves','Viernes','S\u00e1bado'],
          dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','SÃƒÂ¡b'],
          dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
          dateFormat: 'yy-mm-dd', firstDay: 0,
          initStatus: 'Selecciona la fecha', 
          isRTL: false        
        });
    }
    
    $('#datepicker,.datepickerMDE').on('focus',function(){
    	$(this).blur();
    });
    
    app.bindAutocompletePersona('.person-autocomplete');
    app.bindAutocompleteSites('.Site-autocomplete');
    app.bindAutocompleteThematics('.Thematics-autocomplete');
    app.bindAutocompletePopulationType('.PopulationTypes-autocomplete');
    app.bindAutocompleteTraAlly('.TraAllies-autocomplete');
    app.bindAutocompleteTraProcess('.TraProcesses-autocomplete');
    app.bindAutocompleteTrainers('.Trainers-autocomplete');
    app.bindAutocompleteNeighborhoods('.Neighborhoods-autocomplete');
    app.bindAutocompleteTrainings('.Trainings-autocomplete');
    app.bindAutocompleteParticipants('.Participants-autocomplete');
    app.bindAutocompleteParticipantsRegister('.person-autocomplete-trainers');
    app.ajaxSubmitService('.serviceSubmit');
    app.send_service('.grid-send-service');
    app.uploaderBind();
   
    app.removeRequired();
    //app.setMobileNav();
    if(isMobile){
        app.setMobileScreen();
    }
    app.notificationBox();
    $('.view-service').on('click',function(){
        var data=$(this).data();
        var router_url=data.url;
        var name=data.name;
        var callback_namespace='app.'+data.callback;
        var postData=eval('('+data.post+')');
        var allowedIndex=eval('('+data.alowedindex+')');
        app.showServiceAside(router_url,callback_namespace,postData,name,allowedIndex);
    });

    $('.icon-menu-view .nav-view').on('click',function(){
         var rel_content=$(this).data();
         var rel_content=$('.'+rel_content.rel).html();
         $('.mobile-ovelay-menu.menu-content section').html(rel_content);
         $('.mobile-ovelay-menu.menu-content').addClass('active');
         var i_element=$(this).find('i').clone();
         $('.mobile-ovelay-menu.menu-content section h2').prepend(i_element);
         setTimeout(function(){
            $('.mobile-ovelay-menu.menu-content section h2').addClass('active');
         },200);
    });

    $(document).on('click','.cancel-view',function(){
        app.closeAside('#bottom-content-aside',true);
    });

    $('.close-menu').on('click',function(){
        $(this).closest('.mobile-ovelay-menu').removeClass('active').removeAttr('style');
    });

    waypoints = $('.icon-menu-view').waypoint({
      handler: function(direction) {
        if(direction=='down'){
            var logo=$('.mde.mde-intranet-logo').clone();
            if($('.icon-menu-view .mde.mde-intranet-logo').length==0){
                $('.icon-menu-view').prepend(logo);
            }
            setTimeout(function(){
                $('.icon-menu-view').addClass("sticky");
            },200);
        }else{
            $('.icon-menu-view').removeClass("sticky");
        }
      }
    });    

    $('.mobile-ovelay-menu').on('click','.display-sub',function(){
        var parent_menu=$(this).closest('li');
        $(parent_menu).toggleClass('active');
    });

    $('#content').on('click','.go-to-url-id',function(){
        var url=$(this).data('url')+'/'+$(this).data('id');
        location.href=url;
    });

    $('#bottom-content-aside').on('click','.print-view',function(){
        var dataService=$(this).closest('.interaction-notice').data();
        var serviceUrl=dataService.actions['next-service'];
        var data={'retrive':'1'};
        var container='#right-content-aside';
        app.ajaxView(serviceUrl,data,container);
    });

    $(document).on('click','.ajax-view',function(){
        var data=$(this).data();
        var serviceUrl=data.service;
        var container=data.aside;
        app.ajaxView(serviceUrl,data,container);
    });
    app.tooggleAcoordion('.control-accordion');
    app.wayPointClass('.waypont-toggler');
    app.registerValidations();

    $(document).on('click','.show-full-picture-view-gallery',function(){
        var galleryClass=$(this).data('galleryclass');
        var currentId=$(this).data('id');
        var requestedItemClass='.item-'+currentId;
        console.log(requestedItemClass);
        app.showGallery('.'+galleryClass,requestedItemClass);
    });
    $(document).on('click','.fake-input',function(){
        $('#file-input-md').click();
    });
}


App.prototype.afterBind=function(){
    app.bindAutocompletePersona('.person-autocomplete');
    app.bindAutocompleteSites('.Site-autocomplete');
    app.bindAutocompleteThematics('.Thematics-autocomplete');
    app.bindAutocompletePopulationType('.PopulationTypes-autocomplete');
    app.bindAutocompleteTraAlly('.TraAllies-autocomplete');
    app.bindAutocompleteTraProcess('.TraProcesses-autocomplete');
    app.bindAutocompleteTrainers('.Trainers-autocomplete');
    app.bindAutocompleteNeighborhoods('.Neighborhoods-autocomplete');
    app.bindAutocompleteTrainings('.Trainings-autocomplete');
    app.bindAutocompleteParticipants('.Participants-autocomplete');
    app.bindAutocompleteParticipantsRegister('.person-autocomplete-trainers');
    if($('#datepicker').length){
        $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          closeText: 'Fermer',
          prevText: 'Previo',
          nextText: 'Proximo',
          yearRange: "1920:2020",
          monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre annÃƒÂ©e',
          dayNames: ['Domingo','Lunes','Martes','Mi\u00e9rcoles','Jueves','Viernes','S\u00e1bado'],
          dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','SÃƒÂ¡b'],
          dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
          dateFormat: 'yy-mm-dd', firstDay: 0,
          initStatus: 'Selecciona la fecha', 
          isRTL: false        
        });
    }

    if($('.datepickerMDE').length){
         $( ".datepickerMDE" ).datepicker({
          changeMonth: true,
          changeYear: true,
          closeText: 'Fermer',
          prevText: 'Previo',
          nextText: 'Proximo',
          yearRange: "1920:2020",
          monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre annÃƒÂ©e',
          dayNames: ['Domingo','Lunes','Martes','Mi\u00e9rcoles','Jueves','Viernes','S\u00e1bado'],
          dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','SÃƒÂ¡b'],
          dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
          dateFormat: 'yy-mm-dd', firstDay: 0,
          initStatus: 'Selecciona la fecha', 
          isRTL: false        
        });
    }
    
    $('#datepicker,.datepickerMDE').on('focus',function(){
        $(this).blur();
    });
}





App.prototype.removeRequired=function(){
	$('.mde-form').find('.input.file').find('input').removeAttr('required');
	$('.mde-form').find('.input.file').removeClass('required');
}

/* Autocomplete persona */
App.prototype.bindAutocompletePersona=function(selector){

    if($(selector).length){
        var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
        var serivce_route=absPath+"People/getPerson.json";
        $(selector).autoSuggest(serivce_route,
            {   minChars: 2,
                formatList: function(data, elem){
                var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Documento:</b> '+data.documento+' </div><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.completename+' </div></div>');
                return new_elem;
                },
                emptyText:'No se encontraron personas',
                selectedItemProp: 'completename',
                selectedValuesProp:'documento',
                searchObjProps: 'documento,completename',
                selectionLimit:limit,
                starText: 'Seleccione la persona',

                resultClick: function(data){
                    //Variables de datos
                    var id=data.attributes.id_person;
                    var data_name=$('.results-input').data('input-name');
                    var elementID='val-input-'+id;
                    $('.results-input').append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
                },selectionRemoved: function(elem){
                    var prop_data=elem.data('prop-data');
                    var doc=prop_data['id_person'];
                    var elementID='val-input-'+doc;
                    $('#'+elementID).remove();
                    elem.remove();
                },selectionAdded:function(elem){

                }
        });    
    
    
        if($(selector).data('required')){
            var parentForm=$(selector).closest('form');
            var inputContainer=$($(selector).data('valcontainer'));
            var emptyMsg=$(selector).data('emptymsg');
            parentForm.on('submit',function(e){
                if(inputContainer.find('input').length==0){
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $(selector).offset().top-100
                    }, 500);
                    setTimeout(function(){
                        alert(emptyMsg);
                    },500);
                    return false;
                }
            });
        }

        if($(selector).data('load')){
            var inputContainer=$($(selector).data('valcontainer'));
            var loadPersons=inputContainer.find('input');
            var autoList=$(selector).closest('ul');
            $.each(loadPersons,function(){
                var id=$(this).attr('id');
                var completename=$(this).data('display');
                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+completename+'</li>');
            });

            $('.close-load').on('click',function(){
                var parentLi=$(this).closest('li');
                var relInput='#'+parentLi.data('relvalue');
                parentLi.remove();
                $(relInput).remove();

            });
        }


    }



};

App.prototype.setMobileNav=function(){
    var desktopNav=$('.actions ul').clone();
    $('.mobile-ovelay-menu.menu-content').append(desktopNav);
    $('.close-menu').on('click',function(){
        $(this).closest('.mobile-ovelay-menu').removeClass('active').removeAttr('style');
    });
    $('.open-menu').on('click',function(){
        $('.mobile-ovelay-menu.menu-content').addClass('active');
    });
}

App.prototype.setMobileScreen=function(){
    $('.app-container').addClass('isMobile');
}

/* Autocomplete site */
App.prototype.bindAutocompleteSites=function(selector){

    if($(selector).length){
    	var limit=($(selector).data('limit'))?$(selector).data('limit'):1;
        var serivce_route=absPath+"Sites/getSite.json";
        $(selector).autoSuggest(serivce_route,
            {   minChars: 2,
                formatList: function(data, elem){
                
                var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.nombre+' </div><div class=\'suggest_info clearer_auto\'>  <b>Dirección:</b> '+data.direccion+' </div></div>');
                return new_elem;
                },
                emptyText:'No se encontraron Sitios',
                selectedItemProp: 'nombre',
                selectedValuesProp:'nombre',
                searchObjProps: 'direccion,nombre',
                selectionLimit:limit,
                starText: 'Seleccione la persona',

                resultClick: function(data){
                    //Variables de datos
                    var id=data.attributes.id_site;
                    var data_name=$('.results-input-site').data('input-name');
                    var elementID='val-input-si-'+id;
                    $('.results-input-site').append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
                },selectionRemoved: function(elem){
                    var prop_data=elem.data('prop-data');
                    var id_site=prop_data['id_site'];
                    var elementID='val-input-si-'+id_site;
                    $('#'+elementID).remove();
                    elem.remove();
                },selectionAdded:function(elem){

                }
        });    

        if($(selector).data('required')){
            var parentForm=$(selector).closest('form');
            var inputContainer=$($(selector).data('valcontainer'));
            var emptyMsg=$(selector).data('emptymsg');
            parentForm.on('submit',function(e){
                if(inputContainer.find('input').length==0){
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $(selector).offset().top-100
                    }, 500);
                    setTimeout(function(){
                        alert(emptyMsg);
                    },500);
                    return false;
                }
            });
        }


    }

   if($(selector).data('load')){
        var inputContainer=$($(selector).data('valcontainer'));
        var loadPersons=inputContainer.find('input');
        var autoList=$(selector).closest('ul');
        $.each(loadPersons,function(){
            var id=$(this).attr('id');
            var completename=$(this).data('display');
            autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+completename+'</li>');
        });

        $('.close-load').on('click',function(){
            var parentLi=$(this).closest('li');
            var relInput='#'+parentLi.data('relvalue');
            parentLi.remove();
            $(relInput).remove();

        });
    }
    

};
/* Autocomplete thematics */

App.prototype.notificationBox=function(){
    $('#flashMessage').addClass('active');
    setTimeout(function(){
        $('#flashMessage').removeClass('active');
    },6000);
}

App.prototype.bindAutocompleteThematics=function(selector){

    if($(selector).length){
        var serivce_route=absPath+"Thematics/getThematic.json";
        $(selector).autoSuggest(serivce_route,
            {   minChars: 2,
                formatList: function(data, elem){
                var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div><div class=\'suggest_info clearer_auto\'>  <b>Prefijo:</b> '+data.prefijo+' </div><div class=\'suggest_info clearer_auto\'>  <b>Descripción:</b> '+data.description+' </div></div>');
                return new_elem;
                },
                emptyText:'No se encontraron tematicas',
                selectedItemProp: 'name',
                selectedValuesProp:'name',
                searchObjProps: 'name',
                selectionLimit:100,
                starText: 'Seleccione la temÃ¡tica',
                resultClick: function(data){
                    //Variables de datos
                    var id=data.attributes.id;
                    var data_name=$('.results-input-thematics').data('input-name');
                    var elementID='val-input-te-'+id;
                    $('.results-input-thematics').append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
                },selectionRemoved: function(elem){
                    var prop_data=elem.data('prop-data');
                    var id=prop_data['id'];
                    var elementID='val-input-te-'+id;
                    $('#'+elementID).remove();
                    elem.remove();
                },selectionAdded:function(elem){

                }
        });    

        if($(selector).data('required')){
            var parentForm=$(selector).closest('form');
            var inputContainer=$($(selector).data('valcontainer'));
            var emptyMsg=$(selector).data('emptymsg');
            parentForm.on('submit',function(e){
                if(inputContainer.find('input').length==0){
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $(selector).offset().top-100
                    }, 500);
                    setTimeout(function(){
                        alert(emptyMsg);
                    },500);
                    return false;
                }
            });
        }


    }

   if($(selector).data('load')){
        var inputContainer=$($(selector).data('valcontainer'));
        var loadPersons=inputContainer.find('input');
        var autoList=$(selector).closest('ul');
        $.each(loadPersons,function(){
            var id=$(this).attr('id');
            var completename=$(this).data('display');
            autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+completename+'</li>');
        });

        $('.close-load').on('click',function(){
            var parentLi=$(this).closest('li');
            var relInput='#'+parentLi.data('relvalue');
            parentLi.remove();
            $(relInput).remove();

        });
    }
    

};

/* Autocomplete population types */
App.prototype.bindAutocompletePopulationType=function(selector){
	 if($(selector).length){
		 
		 var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
		 var serivce_route=absPath+"PopulationTypes/getPopulationType.json";
		 $(selector).autoSuggest(serivce_route,
			{  	 minChars: 2,
	             formatList: function(data, elem){
	             var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div></div>');
	             return new_elem;
            },
            
            emptyText:'No se encontraron tipos de población',
            selectedItemProp: 'name',
            selectedValuesProp:'name',
            searchObjProps: 'name',
            selectionLimit:limit,
            starText: 'Seleccione el tipo de población',

            resultClick: function(data){
                //Variables de datos
                var id=data.attributes.id;
                var data_name=$($(selector).data('valcontainer')).data('input-name');
                var elementID='val-input-po-'+id;
                $($(selector).data('valcontainer')).append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
            },selectionRemoved: function(elem){
                var prop_data=elem.data('prop-data');
                var idpt=prop_data['id'];
                var elementID='val-input-po-'+idpt;
                $('#'+elementID).remove();
                elem.remove();
            },selectionAdded:function(elem){

            }
    });  
		 
	  if($(selector).data('required')){
	            var parentForm=$(selector).closest('form');
	            var inputContainer=$($(selector).data('valcontainer'));
	            var emptyMsg=$(selector).data('emptymsg');
	            parentForm.on('submit',function(e){
	                if(inputContainer.find('input').length==0){
	                    e.preventDefault();
	                    $('html, body').animate({
	                        scrollTop: $(selector).offset().top-100
	                    }, 500);
	                    setTimeout(function(){
	                        alert(emptyMsg);
	                    },500);
	                    return false;
	                }
	            });	 	 
	 }
	  
	  if($(selector).data('load')){
         var inputContainer=$($(selector).data('valcontainer'));
         var loadPopulationTypes=inputContainer.find('input');
         var autoList=$(selector).closest('ul');
         $.each(loadPopulationTypes,function(){
             var id=$(this).attr('id');
             var name=$(this).data('display');
             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+name+'</li>');
         });

         $('.close-load').on('click',function(){
             var parentLi=$(this).closest('li');
             var relInput='#'+parentLi.data('relvalue');
             parentLi.remove();
             $(relInput).remove();

         });
      }
	 }
};

/* Autocomplete Allies */
App.prototype.bindAutocompleteTraAlly=function(selector){
	 if($(selector).length){		 
		 var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
		 var serivce_route=absPath+"TraAllies/getTraAllies.json";
		 $(selector).autoSuggest(serivce_route,
			{  	 minChars: 2,
	             formatList: function(data, elem){
	             var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div></div>');
	             return new_elem;
            },
            
            emptyText:'No se encontraron aliados',
            selectedItemProp: 'name',
            selectedValuesProp:'name',
            searchObjProps: 'name',
            selectionLimit:limit,
            starText: 'Seleccione el aliado',

            resultClick: function(data){
                //Variables de datos
                var id=data.attributes.id;
                var data_name=$($(selector).data('valcontainer')).data('input-name');
                var elementID='val-input-al-'+id;
                $($(selector).data('valcontainer')).append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
            },selectionRemoved: function(elem){
                var prop_data=elem.data('prop-data');
                var idal=prop_data['id'];
                var elementID='val-input-al-'+idal;
                $('#'+elementID).remove();
                elem.remove();
            },selectionAdded:function(elem){

            }
    });  
		 
	  if($(selector).data('required')){
	            var parentForm=$(selector).closest('form');
	            var inputContainer=$($(selector).data('valcontainer'));
	            var emptyMsg=$(selector).data('emptymsg');
	            parentForm.on('submit',function(e){
	                if(inputContainer.find('input').length==0){
	                    e.preventDefault();
	                    $('html, body').animate({
	                        scrollTop: $(selector).offset().top-100
	                    }, 500);
	                    setTimeout(function(){
	                        alert(emptyMsg);
	                    },500);
	                    return false;
	                }
	            });	 	 
	 }
	  
	  if($(selector).data('load')){
         var inputContainer=$($(selector).data('valcontainer'));
         var loadTraAllies=inputContainer.find('input');
         var autoList=$(selector).closest('ul');
         $.each(loadTraAllies,function(){
             var id=$(this).attr('id');
             var name=$(this).data('display');
             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+name+'</li>');
         });

         $('.close-load').on('click',function(){
             var parentLi=$(this).closest('li');
             var relInput='#'+parentLi.data('relvalue');
             parentLi.remove();
             $(relInput).remove();

         });
      }
	 }
};

/* Autocomplete Processes */
App.prototype.bindAutocompleteTraProcess=function(selector){
	if($(selector).length){
		 var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
		 var serivce_route=absPath+"TraProcesses/getTraProcesses.json";
		 $(selector).autoSuggest(serivce_route,
					{  	 minChars: 2,
			             formatList: function(data, elem){
			             var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div></div>');
			             return new_elem;
		            },
		            emptyText:'No se encontraron procesos',
		            selectedItemProp: 'name',
		            selectedValuesProp:'name',
		            searchObjProps: 'name',
		            selectionLimit:limit,
		            starText: 'Seleccione el proceso',

		            resultClick: function(data){
		                //Variables de datos
		                var id=data.attributes.id;
		                var data_name=$($(selector).data('valcontainer')).data('input-name');
		                var elementID='val-input-pro-'+id;
		                $($(selector).data('valcontainer')).append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
		            },selectionRemoved: function(elem){
		                var prop_data=elem.data('prop-data');
		                var idal=prop_data['id'];
		                var elementID='val-input-pro-'+idal;
		                $('#'+elementID).remove();
		                elem.remove();
		            },selectionAdded:function(elem){

		            }
		    });  
			 if($(selector).data('required')){
		            var parentForm=$(selector).closest('form');
		            var inputContainer=$($(selector).data('valcontainer'));
		            var emptyMsg=$(selector).data('emptymsg');
		            parentForm.on('submit',function(e){
		                if(inputContainer.find('input').length==0){
		                    e.preventDefault();
		                    $('html, body').animate({
		                        scrollTop: $(selector).offset().top-100
		                    }, 500);
		                    setTimeout(function(){
		                        alert(emptyMsg);
		                    },500);
		                    return false;
		                }
		            });	 	 
		 }
			 
			 if($(selector).data('load')){
		         var inputContainer=$($(selector).data('valcontainer'));
		         var loadTraProcesses=inputContainer.find('input');
		         var autoList=$(selector).closest('ul');
		         $.each(loadTraProcesses,function(){
		             var id=$(this).attr('id');
		             var name=$(this).data('display');
		             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+name+'</li>');
		         });

		         $('.close-load').on('click',function(){
		             var parentLi=$(this).closest('li');
		             var relInput='#'+parentLi.data('relvalue');
		             parentLi.remove();
		             $(relInput).remove();

		         });
		      }
			 }
		};
		

App.prototype.showServiceAside=function(urlService,callback,postData,name,allowedIndex){
    var callback=(typeof callback != 'undefined')? callback+'(data,name,allowedIndex)':app.appendServiceHtml(data,name,allowedIndex);
    var postData=(typeof postData != 'undefined')? postData:false;
    $.ajax({
        url:urlService,
        type:'POST',
        data :postData,
        dataType:'json',
        success: function(data){
            eval(callback);            
        }      
    });
}

App.prototype.appendServiceHtml=function(data,name,allowedIndex){
    var html='<h1 class="tile-section"><span>'+name+'</span></h1>';
    var row_counter=0;
    var divider=Math.ceil(12/Object.keys(allowedIndex).length);
    var colClass="col-md-"+divider;
    var object=allowedIndex;
    $.each(data,function(index,value){
        if(row_counter==0){
            html+='<div class="row row-service-titles">';
            $.each(value,function(index,value){
                if(allowedIndex.hasOwnProperty(index)){
                    html+='<div class="'+colClass+'">'+allowedIndex[index]+'</div>';
                } 
            });
            html+='</div>';
            row_counter++;
        }
 
        html+='<div class="row row-service-value">'
        $.each(value,function(index,value){
            if(allowedIndex.hasOwnProperty(index))
                html+='<div class="'+colClass+'">'+value+'</div>';
        });
        html+='</div>';
        app.putHtmlonAside(html,'100%');
    });

}



App.prototype.putHtmlonAside=function(html,width,bootstrap){
    $('#right-content-aside .main-content').html(html);
    $('#right-content-aside').addClass('active').css({'width':width});
    if(bootstrap){
        $('#right-content-aside').find('fieldset').addClass('row');
        $('#right-content-aside').find('legend').addClass('col-md-12');
        var inputs=$('#right-content-aside').find('.input');
        $(inputs).each(function(){
          if($(this).hasClass('textarea')){
            $(this).addClass('col-md-12');
          }else if ($(this).hasClass('time')){
            $(this).addClass('col-md-6');
            $(this).wrapInner('<div class="row"></div>');
            $(this).find('label').addClass('col-md-12');
            $(this).find('select').wrap('<div class="col-md-3" style="clear:unset"></div>');
          }else{
            if($(this).find('input').hasClass('custom-col')){
              var dataGrid=$(this).find('input').attr('grid');
              var gridClass='col-md-'+dataGrid;  
              $(this).addClass(gridClass);
            }else{
              $(this).addClass('col-md-6');
            }
          }
        });
        $('#right-content-aside').find('.input.textarea').removeClass('col-md-6').addClass('col-md-12');
    }
}

App.prototype.putHtmlonBottom=function(html,height,autoClose){
    $('#bottom-content-aside .main-content').html(html);
    $('#bottom-content-aside').addClass('active').css({'height':height});
    if(autoClose){
        setTimeout(function(){
            $('#bottom-content-aside').find('.close-menu').click();
        },autoClose);
    }
}

/* Autocomplete Trainers */
App.prototype.bindAutocompleteTrainers=function(selector){
			if($(selector).length){
				 var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
				 var serivce_route=absPath+"PerTrainers/getTrainer.json";
				 $(selector).autoSuggest(serivce_route,
							{  	 minChars: 2,
					             formatList: function(data, elem){
					             var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div><div class=\'suggest_info clearer_auto\'>  <b>Apellido:</b> '+data.lastname+' </div><div class=\'suggest_info clearer_auto\'>  <b>Documento:</b> '+data.cedula+' </div><div class=\'suggest_info clearer_auto\'>  <b>Profesión:</b> '+data.profesion+' </div><div class=\'suggest_info clearer_auto\'>  <b>Tipo:</b> '+data.tipo+' </div></div>');
					             return new_elem;
				            },
				            emptyText:'No se encontraron formadores',
				            selectedItemProp: 'completeName',
				            selectedValuesProp:'cedula',
				            searchObjProps: 'cedula, name, lastname, profesion, tipo, completeName',
				            selectionLimit:limit,
				            starText: 'Seleccione el formador',

				            resultClick: function(data){
				                //Variables de datos
				                var id=data.attributes.id;
				                var data_name=$($(selector).data('valcontainer')).data('input-name');
				                var elementID='val-input-tra-'+id;
				                $($(selector).data('valcontainer')).append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
				            },selectionRemoved: function(elem){
				                var prop_data=elem.data('prop-data');
				                var idtrain=prop_data['id'];
				                var elementID='val-input-tra-'+idtrain;
				                $('#'+elementID).remove();
				                elem.remove();
				            },selectionAdded:function(elem){

				            }
				    });
				 
				 
					 if($(selector).data('required')){
				            var parentForm=$(selector).closest('form');
				            var inputContainer=$($(selector).data('valcontainer'));
				            var emptyMsg=$(selector).data('emptymsg');
				            parentForm.on('submit',function(e){
				                if(inputContainer.find('input').length==0){
				                    e.preventDefault();
				                    $('html, body').animate({
				                        scrollTop: $(selector).offset().top-100
				                    }, 500);
				                    setTimeout(function(){
				                        alert(emptyMsg);
				                    },500);
				                    return false;
				                }
				            });
				        }
			
				        if($(selector).data('load')){
				            var inputContainer=$($(selector).data('valcontainer'));
				            var loadtrainers=inputContainer.find('input');
				            var autoList=$(selector).closest('ul');
				            $.each(loadtrainers,function(){
				                var id=$(this).attr('id');
				                var name=$(this).data('display');
				                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+name+'</li>');
				            });
			
				            $('.close-load').on('click',function(){
				                var parentLi=$(this).closest('li');
				                var relInput='#'+parentLi.data('relvalue');
				                parentLi.remove();
				                $(relInput).remove();
			
				            });
				  }


	  }

};		

/* Autocomplete neighborhoods */
App.prototype.bindAutocompleteNeighborhoods=function(selector){
	 if($(selector).length){
		 
		 var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
		 var serivce_route=absPath+"Neighborhoods/getNeighborhood.json";
		 $(selector).autoSuggest(serivce_route,
			{  	 minChars: 2,
	             formatList: function(data, elem){
	             var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div></div>');
	             return new_elem;
            },
            
            emptyText:'No se encontraron barrios',
            selectedItemProp: 'name',
            selectedValuesProp:'name',
            searchObjProps: 'name',
            selectionLimit:limit,
            starText: 'Seleccione el barrio',

            resultClick: function(data){
                //Variables de datos
                var id=data.attributes.id;
                var data_name=$($(selector).data('valcontainer')).data('input-name');
                var elementID='val-input-nei-'+id;
                $($(selector).data('valcontainer')).append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
            },selectionRemoved: function(elem){
                var prop_data=elem.data('prop-data');
                var idpt=prop_data['id'];
                var elementID='val-input-nei-'+idpt;
                $('#'+elementID).remove();
                elem.remove();
            },selectionAdded:function(elem){

            }
    });  
		 
	  if($(selector).data('required')){
	            var parentForm=$(selector).closest('form');
	            var inputContainer=$($(selector).data('valcontainer'));
	            var emptyMsg=$(selector).data('emptymsg');
	            parentForm.on('submit',function(e){
	                if(inputContainer.find('input').length==0){
	                    e.preventDefault();
	                    $('html, body').animate({
	                        scrollTop: $(selector).offset().top-100
	                    }, 500);
	                    setTimeout(function(){
	                        alert(emptyMsg);
	                    },500);
	                    return false;
	                }
	            });	 	 
	 }
	  
	  if($(selector).data('load')){
         var inputContainer=$($(selector).data('valcontainer'));
         var loadNeighborhoods=inputContainer.find('input');
         var autoList=$(selector).closest('ul');
         $.each(loadNeighborhoods,function(){
             var id=$(this).attr('id');
             var name=$(this).data('display');
             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+name+'</li>');
         });

         $('.close-load').on('click',function(){
             var parentLi=$(this).closest('li');
             var relInput='#'+parentLi.data('relvalue');
             parentLi.remove();
             $(relInput).remove();

         });
      }
	 }
};


/* Autocomplete trainings */
App.prototype.bindAutocompleteTrainings=function(selector){

    if($(selector).length){
    	var limit=($(selector).data('limit'))?$(selector).data('limit'):1;
        var serivce_route=absPath+"Trainings/getTraining.json";
        $(selector).autoSuggest(serivce_route,
            {   minChars: 2,
                formatList: function(data, elem){
                
                var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Código:</b> '+data.code+' </div><div class=\'suggest_info clearer_auto\'>  <b>Lugar de Actividad:</b> '+data.activity_place+' </div></div>');
                return new_elem;
                },
                emptyText:'No se encontraron Formaciones',
                selectedItemProp: 'code',
                selectedValuesProp:'code',
                searchObjProps: 'code,activity_place',
                selectionLimit:limit,
                starText: 'Seleccione la formaci?n',

                resultClick: function(data){
                    //Variables de datos
                    var id=data.attributes.id;
                    var data_name=$('.results-input-training').data('input-name');
                    var elementID='val-input-tr-'+id;
                    $('.results-input-training').append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
                },selectionRemoved: function(elem){
                    var prop_data=elem.data('prop-data');
                    var idtr=prop_data['id'];
                    var elementID='val-input-tr-'+idtr;
                    $('#'+elementID).remove();
                    elem.remove();
                },selectionAdded:function(elem){

                }
        });    

        if($(selector).data('required')){
            var parentForm=$(selector).closest('form');
            var inputContainer=$($(selector).data('valcontainer'));
            var emptyMsg=$(selector).data('emptymsg');
            parentForm.on('submit',function(e){
                if(inputContainer.find('input').length==0){
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $(selector).offset().top-100
                    }, 500);
                    setTimeout(function(){
                        alert(emptyMsg);
                    },500);
                    return false;
                }
            });
        }


    }

    if($(selector).data('load')){
        var inputContainer=$($(selector).data('valcontainer'));
        var loadTraining=inputContainer.find('input');
        var autoList=$(selector).closest('ul');
        $.each(loadTraining,function(){
            var id=$(this).attr('id');
            var code=$(this).data('display');
            autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">×</a>'+code+'</li>');
        });

        $('.close-load').on('click',function(){
            var parentLi=$(this).closest('li');
            var relInput='#'+parentLi.data('relvalue');
            parentLi.remove();
            $(relInput).remove();

        });
    }
};


/* Autocomplete Participants */
App.prototype.bindAutocompleteParticipants=function(selector){
            if($(selector).length){
                 var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
                 var serivce_route=absPath+"PerParticipants/getParticipant.json";
                 $(selector).autoSuggest(serivce_route,
                            {    minChars: 2,
                                 formatList: function(data, elem){
                                 var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div><div class=\'suggest_info clearer_auto\'>  <b>Apellido:</b> '+data.lastname+' </div><div class=\'suggest_info clearer_auto\'>  <b>Documento:</b> '+data.cedula+' </div><div class=\'suggest_info clearer_auto\'>  <b>Profesión:</b> '+data.nivel_escolar+' </div><div class=\'suggest_info clearer_auto\'>  <b>Tipo:</b> '+data.estado_civil+' </div><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.barrio+' </div></div>');
                                 return new_elem;
                            },
                            emptyText:'No se encontraron participantes',
                            selectedItemProp: 'completeName',
                            selectedValuesProp:'cedula',
                            searchObjProps: 'cedula, name, lastname, profesion, tipo, completeName',
                            selectionLimit:limit,
                            starText: 'Seleccione el participante',

                            resultClick: function(data){
                                //Variables de datos
                                var id=data.attributes.id;
                                var data_name=$($(selector).data('valcontainer')).data('input-name');
                                var elementID='val-input-par-'+id;
                                $($(selector).data('valcontainer')).append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
                            },selectionRemoved: function(elem){
                                var prop_data=elem.data('prop-data');
                                var idtrain=prop_data['id'];
                                var elementID='val-input-par-'+idtrain;
                                $('#'+elementID).remove();
                                elem.remove();
                            },selectionAdded:function(elem){

                            }
                    });
                 
                 
                     if($(selector).data('required')){
                            var parentForm=$(selector).closest('form');
                            var inputContainer=$($(selector).data('valcontainer'));
                            var emptyMsg=$(selector).data('emptymsg');
                            parentForm.on('submit',function(e){
                                if(inputContainer.find('input').length==0){
                                    e.preventDefault();
                                    $('html, body').animate({
                                        scrollTop: $(selector).offset().top-100
                                    }, 500);
                                    setTimeout(function(){
                                        alert(emptyMsg);
                                    },500);
                                    return false;
                                }
                            });
                        }
            
                        if($(selector).data('load')){
                            var inputContainer=$($(selector).data('valcontainer'));
                            var loadparticipants=inputContainer.find('input');
                            var autoList=$(selector).closest('ul');
                            $.each(loadparticipants,function(){
                                var id=$(this).attr('id');
                                var name=$(this).data('display');
                                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+name+'</li>');
                            });
            
                            $('.close-load').on('click',function(){
                                var parentLi=$(this).closest('li');
                                var relInput='#'+parentLi.data('relvalue');
                                parentLi.remove();
                                $(relInput).remove();
            
                            });
                  }


      }

};      


App.prototype.bindAutocompleteParticipantsRegister=function(selector){
            var notFoundTimer; 
			if($(selector).length){
				 var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
                 var id=$(selector).data('id');
				 var serivce_route=absPath+"Trainings/person_status.json";
				 $(selector).autoSuggest(serivce_route,
							{  	 minChars: 2,
					             formatList: function(data, elem){
                                 var participant=(data.id_participant)?'<span class="check" ><i class="icon-check"></i></span>':'<span class="cancel" ><i class="icon-cancel-2"></i></span>'   
                                 var actual_training=(data.is_participant)?'<span class="check" ><i class="icon-check"></i></span>':'<span class="cancel" ><i class="icon-cancel-2"></i></span>'   
					             var new_elem = elem.html('<div class="suggest-cont admin-training" data-training="'+data.is_participant+'" data-participant="'+data.id_participant+'" ><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.complete_name+' </div><div class=\'suggest_info clearer_auto\'>  <b>Email:</b> '+data.email+' </div><div class=\'suggest_info clearer_auto\'>  <b>Registrado en otra formación :</b> '+participant+' </div><div class=\'suggest_info clearer_auto\'>  <b>Pertenece a esta formación</b> '+actual_training+' </div></div>');
					             return new_elem;
				            },
                            emptyText:function(resultCont){
                                var data=$('#empty-data-holder').data();
                                var notice={'message':data.message,'type':data.type};
                                var passData={'actions':{'next-service':data.service}};
                                notFoundTimer=setTimeout(function(){
                                    app.notifyProcess(notice,passData,'print-view','cancel-view','150px');
                                },data.messageTime);
                            },
                            selectedItemProp: 'complete_name',
				            selectedValuesProp:'cedula',
				            searchObjProps: 'cedula,complete_name,doc',
				            selectionLimit:limit,
                            extraParams:'&id='+id,
				            startText: 'Ingresar Nombre, Documento o Email',
                            resultsComplete:function(matchCount){
                                if(matchCount>=1){
                                    clearTimeout(notFoundTimer);
                                    app.closeAside('#bottom-content-aside',true);
                                }
                            },
				            resultClick: function(data){
                                //Variables de datos
                                var notice=data.attributes.actions.notice;
                                app.notifyProcess(notice,data.attributes,'print-view','cancel-view','200px');
				            },selectionRemoved: function(elem){
				                var prop_data=elem.data('prop-data');
				                var idtrain=prop_data['id'];
				                var elementID='val-input-par-'+idtrain;
				                $('#'+elementID).remove();
				                elem.remove();
                                app.closeAside('#bottom-content-aside',true);
				            },selectionAdded:function(elem){

				            }

				    });
				 
				 
					 if($(selector).data('required')){
				            var parentForm=$(selector).closest('form');
				            var inputContainer=$($(selector).data('valcontainer'));
				            var emptyMsg=$(selector).data('emptymsg');
				            parentForm.on('submit',function(e){
				                if(inputContainer.find('input').length==0){
				                    e.preventDefault();
				                    $('html, body').animate({
				                        scrollTop: $(selector).offset().top-100
				                    }, 500);
				                    setTimeout(function(){
				                        alert(emptyMsg);
				                    },500);
				                    return false;
				                }
				            });
				        }
			
				        if($(selector).data('load')){
				            var inputContainer=$($(selector).data('valcontainer'));
				            var loadparticipants=inputContainer.find('input');
				            var autoList=$(selector).closest('ul');
				            $.each(loadparticipants,function(){
				                var id=$(this).attr('id');
				                var name=$(this).data('display');
				                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">x</a>'+name+'</li>');
				            });
			
				            $('.close-load').on('click',function(){
				                var parentLi=$(this).closest('li');
				                var relInput='#'+parentLi.data('relvalue');
				                parentLi.remove();
				                $(relInput).remove();
			
				            });
				  }


	  }

};		


App.prototype.ajaxView=function(serviceUrl,data,container,callback){
    $.ajax({
        url:serviceUrl,
        type:'POST',
        data:data,
        success:function(data){
            if(typeof callback != 'undefined'){
                callback(data);
            }else{
                var htmlView=data;
                app.closeAside('#bottom-content-aside',true);
                app.putHtmlonAside(htmlView,'100%',true);
                app.afterBind();
                app.reloadAjaxViewGrid('#right-content-aside');
            }
        }
    });
};


App.prototype.reloadAjaxViewGrid=function(element){
    setTimeout(function(){
      var grids=$(element).find('.grid_cont .main-grid-cont');
      $(grids).each(function(){
         var grid_id=$(this).attr('id');
         eval(grid_id).grid.getView().refresh(true);
      });
    },500);
}

App.prototype.ajaxSubmitService=function(formClass,notice,callback){
    $(document).on('submit',formClass,function(e){
        var serviceUrl=$(this).data('service');
        e.preventDefault();
        var data=$(this).serialize();
        if(!$(this).hasClass('aj-upload-service')){
          $.ajax({
              url:serviceUrl,
              type:'POST',
              data:data,
              dataType:'JSON',
              success:function(data){
                  if(typeof callback != 'undefined'){
                      callback(data);
                  }else{
                      if(data.actions)
                          app.serviceResponseCallback(data.actions);
                  }
              }
          });
        }else{
           app.prepareUploadData(uploadObject,uploadFormData);
           app.loading();
           $.ajax({
              url: serviceUrl,
              data: uploadFormData,
              processData: false,
              contentType:false,
              dataType:'json',
              type: 'POST',
              success:function(data){
                  if(typeof callback != 'undefined'){
                      callback(data);
                  }else{
                      if(data.actions)
                          app.serviceResponseCallback(data.actions);
                      app.removeLoading();  
                      uploadObject=new Array();
                      uploadFormData=new FormData();
                      $('.preview-controller').html('');
                      $('#file-input-md').val('');
                  }
              }      
            });
        }
    });
}

App.prototype.send_service=function(element,callback){
    $(document).on('click',element,function(){
        var data=$(this).data();
        if(data['confirm']){
            var notice={'message':data.message,'type':data.type};
            var passData={'actions':{'next-service':data.service}};
            app.notifyProcess(notice,passData,'do-callback','cancel-view','150px',false,function(element){
              $(element).find('.do-callback').on('click',function(){
                  app.callService(data,callback);
              });
            });
        }else{
          app.callService(data,callback);
        }
    });
}

App.prototype.callService=function(data,callback){
        $.ajax({
            url:data.url,
            type:'POST',
            dataType:'JSON',
            data:data,
            success:function(data){
                if(typeof callback != 'undefined'){
                    callback(data);
                }else{
                    if(data.actions)
                        app.serviceResponseCallback(data.actions);
                }
            }
        });
}

App.prototype.serviceResponseCallback=function(actions){
    $.each(actions,function(index,value){
        switch (index){
            case 'notify':
                app.notifyProcess(value);
            break;           

            case 'closeAside':
                $.each(value,function(closeIndex,closeValue){
                    app.closeAside(closeValue.element,closeValue.wipe,closeValue.time);
                });
            break;            

            case 'reloadGrid':
                $.each(value,function(reloadIndex,reloadValue){
                    app.reloadGrid(reloadValue);
                });
            break;   

            case 'cleanform':
                $.each(value,function(formIndex,formValue){
                    app.cleanForm(formValue);
                });
            break;            
        }
    });
}

App.prototype.notifyProcess=function(notice,data,AceptExtraClass,CancelExtraClass,height,autoClose,callback){
    var AceptExtraClass=(typeof AceptExtraClass != 'undefined')?AceptExtraClass:'notice-accept-default';
    var CancelExtraClass=(typeof CancelExtraClass != 'undefined')?CancelExtraClass:'notice-cancel-default';
    var height=(typeof height != 'undefined')?height:'200px';
    var noticeHtml="<div class='notice'>"+notice.message+"</div>";
    var autoClose=(!notice.autoclose)?autoClose:notice.autoclose;
    switch(notice.type){
        case 'confirm' : 
            var interactionHtml="<div class='interaction-notice'><button class='accept "+AceptExtraClass+"'><i class='icon-check'></i>Aceptar</button><button class='cancel "+CancelExtraClass+"'><i class='icon-cancel-2'></i>Cancelar</button></div>";
        break;

        case 'flash' :
            var interactionHtml="";
        break;
    }
    var interactionHtmlData=$(interactionHtml);
    $(interactionHtmlData).data(data);
    var completeHtml=$(noticeHtml).append(interactionHtmlData);
    app.putHtmlonBottom(completeHtml,height,autoClose);
    if(typeof(callback) === "function"){
      callback($('#bottom-content-aside .main-content .notice'));
    } 
}

App.prototype.closeAside=function(id_aside,wipe,time){
    var time=(typeof time != 'undefined')?time:0.5;

    setTimeout(function(){
        $(id_aside).find('.close-menu').click();
    },time);
    if(typeof wipe != 'undefined'){
        $(id_aside).find('.main-content').html('');
    }
}

App.prototype.reloadGrid=function(gridId){
  var grid=eval(gridId);
  grid.store.reload();
}

App.prototype.cleanForm=function(parentElemet){
  var parentElemet=$(parentElemet);
  $(parentElemet).find('input').val('');
  $(parentElemet).find('.as-selections .as-selection-item').remove();
}

App.prototype.tooggleAcoordion=function(element){
  $(document).on('click',element,function(){
      var data=$(this).data();
      $(this).closest(data.container).toggleClass('closed');
  });
}

App.prototype.wayPointClass=function(element){
  if($(element).length){
    var data=$(element).data(),toggle=data.toggleclass;
    $(element).waypoint({
        handler: function(direction) {
          if(direction=='down'){
            $(element).addClass(toggle);
            $(element).addClass('closed');
          }else{
              $(element).removeClass(toggle);
          }
        }
      });  
  }
}

App.prototype.registerValidations=function(){
  $(document).on('keyup','.validate-numeric',function(){
      this.value = this.value.replace(/[^0-9\.]/g,'');
  });
}


App.prototype.uploaderBind=function(){

    $(document).on('drop dragover',function (e) {
        e.preventDefault();
    });

    $(document).on('dragover','.drag-area' ,function (e) {
            e.preventDefault();
            e = e.originalEvent;
            e.dataTransfer.dropEffect = 'copy';
    });

    $(document).on('drop','.drag-area' , app.handleUpload);
    
    $(document).on('change','#file-input-md' , app.handleUpload);


}

App.prototype.handleUpload=function(e){
        e.preventDefault();
        console.log('fire');
        e = e.originalEvent;
        var target = e.dataTransfer || e.target,
            files = target && target.files && target.files,
            options = {
                maxWidth: 1200,
                canvas: true
        };
        if (!files) {
            return;
        }

        var promise=app.populateUploadData(files,options);

        promise.done(function(){
          var promiseShow=app.upload_showControllerThumbnails(uploadObject,'.preview-controller');
          promiseShow.done(function(){
            app.removeLoading();
            $('.preview-controller').addClass('active');
          });
        });
}

App.prototype.prepareUploadData=function(uploadObject,uploadFormData){
  $.each(uploadObject,function(index,value){
        var makeFile="";
      if (value.file.size>2000000){
        makeFile=app.dataURItoBlob(value.dataURI);
        makeFile.name=value.file.name;
        uploadFormData.append('files[]',makeFile,value.file.name);
      }else{
        makeFile=value.file;
        uploadFormData.append('files[]',makeFile);
      }
  });
  return uploadFormData;
};

App.prototype.upload_showControllerThumbnails=function(uploadObject,element){
  var deferred=$.Deferred();
  $(element).html();
  $(element).addClass('files');
  var htmlObject='<div class="files row">';
  $.each(uploadObject,function(index,value){
    var thumbnail=(value && value.thumbnail)?value.thumbnail['Thumbnail']:value.dataURI;
    htmlObject+='<div class="item col-md-2"><img src="'+thumbnail+'" ></div>'; 
  });
    htmlObject+="</div>";
  $(element).html(htmlObject);
  deferred.resolve(htmlObject);
  return deferred.promise();
}


App.prototype.loading=function(){
  $('body').addClass('loading');
}

App.prototype.removeLoading=function(){
  $('body').removeClass('loading');
}


App.prototype.dataURItoBlob=function (dataURI) {
    // convert base64/URLEncoded data component to raw binary data held in a string
    var byteString;
    if (dataURI.split(',')[0].indexOf('base64') >= 0)
        byteString = atob(dataURI.split(',')[1]);
    else
        byteString = unescape(dataURI.split(',')[1]);

    // separate out the mime component
    var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];

    // write the bytes of the string to a typed array
    var ia = new Uint8Array(byteString.length);
    for (var i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }

    return new Blob([ia], {type:mimeString});
}


 App.prototype.populateUploadData=function(files,options){
      var deferred=new $.Deferred();
      app.loading();
      var file_count=files.length;
      var object_start_count=uploadObject.length;
      console.log(file_count,object_start_count);
      $.each(files,function(index,value){
          var  randomInt=Math.floor((Math.random() * 10000) + 1);
          var thumbnail=null;
          loadImage.parseMetaData(value, function (data) {
              thumbnail=data.exif;
              if (data.exif) {
                  options.orientation = data.exif.get('Orientation');
              }
          });
          if (!loadImage(
                  value,
                  function(img){
                      var content;
                      if (!(img.src || img instanceof HTMLCanvasElement)) {
                          console.log('Its not a canvas');
                          file_count=file_count-1;
                      } else {
                            var itemId='item'+randomInt;
                            var uploadPile=
                              {
                                id:itemId, 
                                file:value,
                                img:img,
                                thumbnail:thumbnail,
                                dataURI:img.toDataURL()
                              };
                            uploadObject.push(uploadPile);
                      }
                  },
                  options
              )) 
               {
                  console.log('Your browser does not support the URL or FileReader API.</span>');
               }
      });
      
      var seekComplete=setInterval(
        function(){
          var object_count=uploadObject.length;
           if(object_count==file_count){
              deferred.resolve(uploadObject);
              clearInterval(seekComplete);      
           }
      }, 200);

      return deferred.promise();
 };


 App.prototype.showGallery=function(element,selectedClass){
  var owlID=app.makeId();
    var itemCount=0;
    var html='<div class="owl-carousel owl-theme owl-gallery bottom-content" id='+owlID+'>';
    $(element).each(function(){
        var imgUrl=$(this).data('url');
        var dataName=$(this).data('name');
        var dataId=$(this).data('id');
        var uniqueImageClass='item-'+dataId;
        html+='<div class="item '+uniqueImageClass+'" data-indexowl="'+itemCount+'"><h1>'+dataName+'</h1><img src="'+imgUrl+'"></div>';
        itemCount++;
    });
        html+='</div>';
    app.putHtmlonBottom(html,'100%');    
    app.loadOwlGallery('#'+owlID);
    app.goToOwlGallery('#'+owlID,selectedClass);
 }

 App.prototype.goToOwlGallery=function(gallerySelector,itemSelector){
  console.log(gallerySelector,itemSelector);
    var dataIndex=$(gallerySelector).find(itemSelector).data('indexowl');
    currentOwl.goTo(dataIndex);
 }

 App.prototype.loadOwlGallery=function(element){
        if($(element).length>0){
        // Client slider
        $(element).owlCarousel({
             items : 1,
             autoPlay: false,
             singleItem:true,
             navigation : true
        });
        currentOwl=$(element).data('owlCarousel');
    }
 }

 App.prototype.makeId=function makeid()
  {
      var text = "";
      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for( var i=0; i < 5; i++ )
          text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
  }