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
                console.log(id);

            },selectionRemoved: function(elem){
                elem.remove();
 
            },
    });    

};