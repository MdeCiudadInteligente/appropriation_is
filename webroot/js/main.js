var app=null;
var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

$(document).ready(function(){
	app=new App;
});


var App = function(){
	app = this;
	app.bind();
}


App.prototype.bind=function(){

    if($('#datepicker').length){
        console.log('datePicker');
        $( "#datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          closeText: 'Fermer',
          prevText: 'Previo',
          nextText: 'Proximo',
          yearRange: "2007:2020",
          monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
          monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre annÃ©e',
          dayNames: ['Domingo','Lunes','Martes','Mi\u00e9rcoles','Jueves','Viernes','S\u00e1bado'],
          dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','SÃ¡b'],
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
          monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre annÃ©e',
          dayNames: ['Domingo','Lunes','Martes','Mi\u00e9rcoles','Jueves','Viernes','S\u00e1bado'],
          dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','SÃ¡b'],
          dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
          dateFormat: 'yy-mm-dd', firstDay: 0,
          initStatus: 'Selecciona la fecha', 
          isRTL: false        
        });
    }
    
    app.bindAutocompletePersona('.person-autocomplete');
    app.bindAutocompleteSites('.Site-autocomplete');
    app.bindAutocompleteThematics('.Thematics-autocomplete');
    app.bindAutocompletePopulationType('.PopulationTypes-autocomplete');
    app.bindAutocompleteTraAlly('.TraAllies-autocomplete');
    app.bindAutocompleteTraProcess('.TraProcesses-autocomplete');
    app.bindAutocompleteTrainers('.Trainers-autocomplete');
    
    app.removeRequired();
    app.setMobileNav();
    if(isMobile){
        app.setMobileScreen();
    }
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
                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">×</a>'+completename+'</li>');
            });

            $('.close-load').on('click',function(){
                var parentLi=$(this).closest('li');
                var relInput='#'+parentLi.data('relvalue');
                console.log($(relInput));
                parentLi.remove();
                $(relInput).remove();

            });
        }


    }



};

App.prototype.setMobileNav=function(){
    var desktopNav=$('.actions ul').clone();
    $('.mobile-ovelay-menu').append(desktopNav);
    $('.close-menu').on('click',function(){
        $('.mobile-ovelay-menu').removeClass('active');
    });
    $('.open-menu').on('click',function(){
        $('.mobile-ovelay-menu').addClass('active');
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
            autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">×</a>'+completename+'</li>');
        });

        $('.close-load').on('click',function(){
            var parentLi=$(this).closest('li');
            var relInput='#'+parentLi.data('relvalue');
            console.log($(relInput));
            parentLi.remove();
            $(relInput).remove();

        });
    }
    

};
/* Autocomplete thematics */

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
                starText: 'Seleccione la temática',
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
            autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">×</a>'+completename+'</li>');
        });

        $('.close-load').on('click',function(){
            var parentLi=$(this).closest('li');
            var relInput='#'+parentLi.data('relvalue');
            console.log($(relInput));
            parentLi.remove();
            $(relInput).remove();

        });
    }
    

};

/* Autocomplete population type */
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
            starText: 'Seleccione el tipo de poblaci�n',

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
             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">×</a>'+name+'</li>');
         });

         $('.close-load').on('click',function(){
             var parentLi=$(this).closest('li');
             var relInput='#'+parentLi.data('relvalue');
             console.log($(relInput));
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
             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">×</a>'+name+'</li>');
         });

         $('.close-load').on('click',function(){
             var parentLi=$(this).closest('li');
             var relInput='#'+parentLi.data('relvalue');
             console.log($(relInput));
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
		             autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">×</a>'+name+'</li>');
		         });

		         $('.close-load').on('click',function(){
		             var parentLi=$(this).closest('li');
		             var relInput='#'+parentLi.data('relvalue');
		             console.log($(relInput));
		             parentLi.remove();
		             $(relInput).remove();

		         });
		      }
			 }
		};
		

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
				            selectedItemProp: 'cedula',
				            selectedValuesProp:'cedula',
				            searchObjProps: 'cedula, name, lastname, profesion, tipo',
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
				                autoList.prepend('<li id="as-selection-1" data-relvalue="'+id+'" class="as-selection-item blur"><a class="as-close close-load">×</a>'+name+'</li>');
				            });
			
				            $('.close-load').on('click',function(){
				                var parentLi=$(this).closest('li');
				                var relInput='#'+parentLi.data('relvalue');
				                console.log($(relInput));
				                parentLi.remove();
				                $(relInput).remove();
			
				            });
				  }


	  }

};		

