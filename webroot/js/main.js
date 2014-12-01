var app=null;

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

    app.bindAutocompletePersona('.person-autocomplete');
    app.bindAutocompleteSites('.Site-autocomplete');
}


App.prototype.bindAutocompletePersona=function(selector){

    if($(selector).length){
        var limit=($(selector).data('limit'))?$(selector).data('limit'):100;
        console.log($(selector).data('limit'));
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

App.prototype.bindAutocompleteSites=function(selector){

    if($(selector).length){
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
                selectionLimit:1,
                starText: 'Seleccione la persona',

                resultClick: function(data){
                    //Variables de datos
                    var id=data.attributes.id_site;
                    var data_name=$('.results-input-site').data('input-name');
                    var elementID='val-input-'+id;
                    $('.results-input-site').append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
                },selectionRemoved: function(elem){
                    var prop_data=elem.data('prop-data');
                    var id_site=prop_data['id_site'];
                    var elementID='val-input-'+id_site;
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