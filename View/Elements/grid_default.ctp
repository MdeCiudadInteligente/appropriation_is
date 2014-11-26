
<!-- Grid view  -->

<?php 
	function set_grid_fields($array,$colKey){
	    $string="[";
	    foreach ($array as $key => $value){
	        $add="{name:'".$value[$colKey]."'},";
	        $string.=$add;
	    }
	    $string=substr($string,0,-1);
	    $string.="]";
	    return $string;
	}
	$usuario_level= $this->Session->read('Auth.User.permission_level');		
	///$id_usuario--> variable of actual id user (already included)
?>


<script type='text/javascript'>
var actionViewUrl="<?php echo  Router::url(array('controller' => $this->name, 'action' => 'View')); ?>"
var editViewUrl="<?php echo  Router::url(array('controller' => $this->name, 'action' => 'edit')); ?>"
var delViewUrl="<?php echo  Router::url(array('controller' => $this->name, 'action' => 'delete')); ?>"
Ext.BLANK_IMAGE_URL = 'webroot/js/ext/resources/images/default/s.gif';
Ext.namespace('<?php echo $gridOptions['gridId']?>');
<?php echo $gridOptions['gridId']?>.store = new Ext.data.GroupingStore({
	id: 'id',
	proxy: new Ext.data.HttpProxy({
		method: 'POST',
		api: {
				read : absPath+"<?php echo $gridOptions['serviceUrl']?>"
		}
	}),
	reader: new Ext.data.JsonReader({
		totalProperty: 'total',
		successProperty: 'success',
		idProperty: 'id',
		root: 'rows',
	},
	<?php echo set_grid_fields($gridOptions['fields'],'dataIndex'); ?>),
		writer: new Ext.data.JsonWriter({
		encode: true,
		writeAllFields: false
	}),
	autoSave: true,
	baseParams:{table: '', dbid:'',query:'',start:0,limit:100 }
});

<?php 
	///If is expander print expander var
	if(is_array($gridOptions['expander'])){
?>
		var expander = new Ext.ux.grid.RowExpander({
		        tpl : new Ext.Template(
<?php	        	
					$expanders="";
					foreach ($gridOptions['expander']['fields'] as $key => $expanderCol) {
						$expanders.="'<p><b>".$expanderCol['title'].":</b> {".$expanderCol['field']."}</p>',";
		        	}
		        	$expanders=substr($expanders,0,-1);
		        	echo $expanders;
?>
				)
		});

<?php
	//End if is array expander
	}
?>

<?php echo $gridOptions['gridId']?>.funciones = {
	refresh: function(){<?php echo $gridOptions['gridId']?>.store.reload();}
}

<?php echo $gridOptions['gridId']?>.render = function(){<?php echo $gridOptions['gridId']?>.grid.render('<?php echo $gridOptions['gridId']?>');};



<?php echo $gridOptions['gridId']?>.render_crud = function(val,meta,record){
	var ver="<a href='"+actionViewUrl+"/"+val+"' target='_blank'><i title='Ver' class='icon-desktop-1 view'></i></a>";
	var editar="<a href='"+editViewUrl+"/"+val+"'><i title='Editar' class='icon-export edit'></i></a>";
	var eliminar="<form method='post' style='display:none;' id='post_"+val+"578464"+val+"5848' name='post_"+val+"578464"+val+"5848' action='"+delViewUrl+"/"+val+"'><input type='hidden' value='POST' name='_method'></form> <a onclick='if (confirm(&quot;Are you sure you want to delete # "+val+"?&quot;)) { document.post_"+val+"578464"+val+"5848.submit(); } event.returnValue = false; return false;' href='#'><i title='Eliminar' class='icon-cancel-1 cancel'></i></a>";
	var user_id=record.get('user_id');

	if(user_id==<?php echo $id_usuario ?> || user_id==0 || <?php  echo $usuario_level ?>==1 ){
		return "<div class='function-cont'>"+ver+editar+eliminar+"</div>";
	}else{
		return "<div class='grid-msj'>No tienes permisos</div>";
	}

}; 


<?php echo $gridOptions['gridId']?>.columns = [
<?php 
	///If is expander print expander var
	if(is_array($gridOptions['expander'])){
?>
	expander,

<?php
	//End if is array expander
	}
?>

<?php
	//Print dinamic grid columns 	        	
	$dinColumns="";
	foreach ($gridOptions['fields'] as $key => $column) {
			if($column['column']){
				$columnString="{";
									foreach ($column as $property => $value) {
										$columnString.=$property.":'".$value."',";
									}
				$columnString=substr($columnString,0,-1);
				$columnString.="},";
				$dinColumns.=$columnString;
			}
	}
	
	if(!$gridOptions['printCrud']){
		$dinColumns=substr($dinColumns,0,-1);
	}
	echo $dinColumns;
?>

	
<?php if($gridOptions['printCrud']){ ?>
		{dataIndex:'id', align:'center', header:'Funciones',width:120, renderer: <?php echo $gridOptions['gridId']?>.render_crud}
<?php
	  }
?>

];

<?php echo $gridOptions['gridId']?>.store.load({params:{start:0,limit:100}});


<?php echo $gridOptions['gridId']?>.grid = new Ext.grid.GridPanel({
	view: new Ext.grid.GroupingView({
				forceFit:true,
				groupTextTpl: '{text}'
	}),
    id:'<?php echo $gridOptions['gridId']?>_name',
	store: <?php echo $gridOptions['gridId']?>.store,
	columns : <?php echo $gridOptions['gridId']?>.columns,
	iconCls: 'grid-icon',
	title: "<?php echo $gridOptions['gridTitle'] ?>",
	loadMask:{msg:'Procesando datos...'},
	height: "<?php echo $gridOptions['height'] ?>",
//if the grid has expander
<?php 
	///If is expander print expander var
	if(is_array($gridOptions['expander'])){
?>
 		plugins: expander,

<?php
	//End if is array expander
	}
?>
	width: '100%',
	style: '',
	bbar:new Ext.PagingToolbar({ 
		pageSize: 100,
		store: <?php echo $gridOptions['gridId']?>.store,
		beforePageText:'Pagina',
		afterPageText : 'de {0}',
		displayInfo: true,
		displayMsg: 'Mostrando Registros {0} - {1} de {2}',
		emptyMsg: 'No hay registros en la base de datos'
	})
});

jQuery(document).ready(<?php echo $gridOptions['gridId']?>.render, '<?php echo $gridOptions['gridId']?>'); 

</script>

<div  class='grid_cont'>
    <div id='<?php echo $gridOptions['gridId']?>'></div>
</div>




