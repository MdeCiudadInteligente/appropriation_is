var app=null;
var absPath='<?php echo Router::url( $this->here, true ); ?>';

$(document).ready(function(){
	app=new App;
});


var App = function(){
	app = this;
	app.bind();
}


App.prototype.bind=function(){


}



$('.nd_grupo').each(function(){

    var element=$(this);
    var server_ruta='modulos/programar_aulas/mods/mod_autocomplete_grupos.php';

    $(element).autoSuggest(server_ruta,
        {	minChars: 2,
            formatList: function(data, elem){
            var nombre= data.descripcion;
            var asis_min=data.asis_min;
            var num_docentes=data.num_docentes;
            var estado_grupo=data.estado;
            var asis_min=data.asis_min;
            var codigo=data.codigo_materia;
            var materiao=data.materia;
            var programa=data.programa;
            var dependencia=data.dependencia;
            var tipo=data.tipo;
            var new_elem = elem.html('<div class=\'suggest_info clearer_auto\'> <div class=\'suggest_info_name clearer_auto\'> <b>Nombre:</b> '+nombre+' </div>  <div class=\'suggest_info_name clearer_auto\'> <b>Numero Docentes:</b> '+num_docentes+' </div>  <div class=\'suggest_info_name clearer_auto\'> <b>Min-Asistentes:</b> '+asis_min+' </div> <div class=\'suggest_info_desc clearer_auto\'> <b>Materia:</b> '+nombre+' </div> </div> <div class=\'suggest_info_desc clearer_auto\'> <b>Codigo-Materia:</b> '+codigo+' </div> <div class=\'suggest_info_tags clearer_auto\'> <b>Programa:</b> '+programa+' </div> <div class=\'suggest_info_tags clearer_auto\'> <b>Dependencia:</b> '+dependencia+' </div> <div class=\'suggest_info_tags clearer_auto\'> <b>Tipo:</b> '+tipo+' </div>  </div>');
            return new_elem;
        },
            emptyText:'No se encontraron resultados',
            selectedItemProp: 'descripcion',
            selectedValuesProp:'id',
            searchObjProps: 'descripcion,codigo_materia,materia,programa,dependencia,tipo',
            selectionLimit:1,
            limitText:'Debe seleccionar una unica materia',
            starText: 'Seleccione la Materia',
            resultClick: function(data){

            //Variables de datos

            var id=data.attributes.id;
            var grupo=data.attributes.descripcion;

            $('.grupo_selected').html(grupo);

            var h_in=$(element).closest('td').find('.nd_grupo_value');

            $(h_in).val(id);

        },selectionRemoved: function(elem){
            elem.remove();
            var h_in=$(element).closest('td').find('.nd_grupo_value');
            $(h_in).val('');
            $('.grupo_selected').html('');

            },
            selectionAdded: function(elem){
            }
        });
});
