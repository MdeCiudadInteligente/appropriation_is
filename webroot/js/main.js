var app=null;

$(document).ready(function(){
	app=new App;
});


var App = function(){
	app = this;
	app.bind();
}


App.prototype.bind=function(){
    app.bindAutocompletePersona('.person-autocomplete');
}


App.prototype.bindAutocompletePersona=function(selector){

    if($(selector).length){
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
                selectionLimit:100,
                starText: 'Seleccione la persona',

                resultClick: function(data){
                    //Variables de datos
                    var id=data.attributes.documento;
                    var data_name=$('.results-input').data('input-name');
                    var elementID='val-input-'+id;
                    $('.results-input').append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
                },selectionRemoved: function(elem){
                    var prop_data=elem.data('prop-data');
                    var doc=prop_data['documento'];
                    var elementID='val-input-'+doc;
                    $('#'+elementID).remove();
                    elem.remove();
                },selectionAdded:function(elem){
                    console.log('addElement',elem.data());
                }
        });    
    }

};