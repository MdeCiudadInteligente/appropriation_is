var app=null;
var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;
var waypoints=null;

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
          yearRange: "2007:2020",
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
          yearRange: "2007:2020",
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
        console.log(url);
        location.href=url;
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
                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+completename+'</li>');
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
                
                var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.nombre+' </div><div class=\'suggest_info clearer_auto\'>  <b>DirecciÃ³n:</b> '+data.direccion+' </div></div>');
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
            autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+completename+'</li>');
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
                var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div><div class=\'suggest_info clearer_auto\'>  <b>Prefijo:</b> '+data.prefijo+' </div><div class=\'suggest_info clearer_auto\'>  <b>DescripciÃ³n:</b> '+data.description+' </div></div>');
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
            autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+completename+'</li>');
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
            
            emptyText:'No se encontraron tipos de poblaciÃ³n',
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
             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+name+'</li>');
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
             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+name+'</li>');
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
		             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+name+'</li>');
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


App.prototype.goToParameterView=function(url,parameters){
    location
};

App.prototype.putHtmlonAside=function(html,width){
    $('#right-content-aside .main-content').html(html);
    $('#right-content-aside').addClass('active').css({'width':width});
}

App.prototype.putHtmlonBottom=function(html,height,autoClose){
    $('#bottom-content-aside .main-content').html(html);
    $('#bottom-content-aside').addClass('active').css({'height':height});
    if(typeof autoClose != 'undefined'){
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
					             var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div><div class=\'suggest_info clearer_auto\'>  <b>Apellido:</b> '+data.lastname+' </div><div class=\'suggest_info clearer_auto\'>  <b>Documento:</b> '+data.cedula+' </div><div class=\'suggest_info clearer_auto\'>  <b>ProfesiÃ³n:</b> '+data.profesion+' </div><div class=\'suggest_info clearer_auto\'>  <b>Tipo:</b> '+data.tipo+' </div></div>');
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
				                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+name+'</li>');
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
             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+name+'</li>');
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
                                 var new_elem = elem.html('<div class="suggest-cont"><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.name+' </div><div class=\'suggest_info clearer_auto\'>  <b>Apellido:</b> '+data.lastname+' </div><div class=\'suggest_info clearer_auto\'>  <b>Documento:</b> '+data.cedula+' </div><div class=\'suggest_info clearer_auto\'>  <b>ProfesiÃ³n:</b> '+data.nivel_escolar+' </div><div class=\'suggest_info clearer_auto\'>  <b>Tipo:</b> '+data.estado_civil+' </div><div class=\'suggest_info clearer_auto\'>  <b>Nombre:</b> '+data.barrio+' </div></div>');
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
                                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+name+'</li>');
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
				            emptyText:'<div class="no-index-person"><span>No se encontro la persona</span><div class="add-person">Ingresar persona</div> </div>',
				            selectedItemProp: 'complete_name',
				            selectedValuesProp:'cedula',
				            searchObjProps: 'cedula,complete_name,doc',
				            selectionLimit:limit,
                            extraParams:'&id='+id,
				            startText: 'Ingresar Nombre, Documento o Email',
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
				                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">Ã—</a>'+name+'</li>');
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

App.prototype.notifyProcess=function(notice,data,AceptExtraClass,CancelExtraClass,height,autoClose){
    var AceptExtraClass=(typeof AceptExtraClass != 'undefined')?AceptExtraClass:'';
    var CancelExtraClass=(typeof CancelExtraClass != 'undefined')?CancelExtraClass:'';
    var height=(typeof height != 'undefined')?height:'200px';
    var noticeHtml="<div class='notice'>"+notice.message+"</div>";
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

App.prototype.ajaxView=function(serviceUrl,data,container,callback){
    var callback=(typeof callback != 'undefined')?callback:function(data){
        console.log(data);
    };
    $.ajax({
        url:serviceUrl,
        type:'POST',
        data:data,
        success:callback(data)
    });
};
