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
                 var id=data.attributes.id_population_type;
                 var data_name=$('.results-input').data('input-name');
                 var elementID='val-input-'+id;
                 $('.results-input').append('<input id="'+elementID+'" type="hidden" value="'+id+'" name="'+data_name+'">');
             },selectionRemoved: function(elem){
                 var prop_data=elem.data('prop-data');
                 var idpt=prop_data['id_population_type'];
                 var elementID='val-input-'+idpt;
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
              console.log($(relInput));
              parentLi.remove();
              $(relInput).remove();

          });
       }
	 }
};