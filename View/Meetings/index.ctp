

<?php


$fieldsserialize2 = array(
			    array("field"=>"id"),
                array("field"=>"sitio","title"=>"Proyecto"),
                array("field"=>"f_reunion","title"=>"Nombre"),
                array("field"=>"tipo","title"=>"Descripcion"),
                array("field"=>"titulo","title"=>"Elegida"),
                array("field"=>"descripcion","title"=>"Elegida"),
                array("field"=>"compromisos","title"=>"Elegida"),
                array("field"=>"creation_date","title"=>"Elegida"),
                array("field"=>"modification_date","title"=>"Elegida"),
			    array("field"=>"id","align"=>"center","width"=>80,"title"=>"funciones","render"=>"funciones")
);
		
$data=serialize($fieldsserialize2 );


	function set_grid_fields($array){

	    $string="[";

	    foreach ($array as $key => $value){
	        $add="{name:'".$value['field']."'},";
	        $string.=$add;
	    }

	    $string=substr($string,0,-1);

	    $string.="]";

	    return $string;
	}




?>



<div class="meetings-cont">

<script type='text/javascript'>

Ext.BLANK_IMAGE_URL = 'webroot/js/ext/resources/images/default/s.gif';
Ext.namespace('grid2');
grid2.render = '';
grid2.editor = '';
grid2.store = new Ext.data.GroupingStore({
	id: 'id',
	proxy: new Ext.data.HttpProxy({
		method: 'POST',
		api: {
				read : absPath+"Meetings/index_service.json"
		}
	}),
	reader: new Ext.data.JsonReader({
		totalProperty: 'total',
		successProperty: 'success',
		idProperty: 'id',
		root: 'rows',
	},
	<?php echo set_grid_fields($fieldsserialize2); ?>),
		writer: new Ext.data.JsonWriter({
		encode: true,
		writeAllFields: false
	}),
	autoSave: true,
	baseParams:{table: 'aul_aulas', dbid:'id',query:'',start:0,limit:100 }
});


var expander = new Ext.ux.grid.RowExpander({
        tpl : new Ext.Template(
			'<p><b>Observaciones:</b> {observaciones}</p>'
		)
});


grid2.funciones = {
	refresh: function(){grid2.store.reload();},
	eliminar: function(){
		var rec = grid2.grid.getSelectionModel().getSelectedCell();
		if (!rec) {return false;}
		var rec = grid2.grid.store.getAt(rec[0]);
		grid2.grid.store.remove(rec);
	},
	nuevo: function(){
		var u = new grid2.grid.store.recordType();
		grid2.grid.stopEditing();
		grid2.grid.store.insert(0, u);
		grid2.grid.startEditing(0, 1);
	}
}

grid2.columns = [
	expander,
    {dataIndex:'periodo', header:'Periodo', sortable:true,align:'center',width:90},
    {dataIndex:'descripcion', header:'Descripci&oacute;n',sortable:true,align:'center',width:120},
//    {dataIndex:'asis_min', header:'Min-Asist', sortable:true,align:'center',width:90},
//    {dataIndex:'num_docentes', header:'No-Docentes', sortable:true,align:'center',width:90},
    {dataIndex:'programa', header:'Programa', sortable:true,align:'center',width:250},
    {dataIndex:'pensum', header:'Pensum', sortable:true,align:'center',width:80},
    {dataIndex:'nivel', header:'Nivel', sortable:true,align:'center',width:80},
    {dataIndex:'dependencia', header:'Dependencia', sortable:true,align:'center',width:250},
    {dataIndex:'materia_codigo', header:'Cod-Materia', sortable:true,align:'center',width:120},
    {dataIndex:'materia', header:'Materia', sortable:true,align:'center',width:250},
//    {dataIndex:'estado', header:'Estado',  sortable:true,align:'center',width:120, renderer: grid2.render_estado},
    //{dataIndex:'observaciones', header:'Observaciones',  sortable:true,align:'center',width:60},
    {dataIndex:'id', align:'center', header:'Funciones',width:120, renderer: grid2.render_funciones}
];

grid2.store.load({params:{start:0,limit:100}});


grid2.grid = new Ext.grid.GridPanel({
	view: new Ext.grid.GroupingView({
				forceFit:true,
				groupTextTpl: '{text}'
	}),
    id:'grid2_name',
	store: grid2.store,
	columns : grid2.columns,
	iconCls: 'grid-icon',
	title: 'Grupos',
	loadMask:{msg:'Procesando datos...'},
	height: 600,
	plugins: expander,
	width: 930,
	style: '',
	bbar:new Ext.PagingToolbar({ 
		pageSize: 100,
		store: grid2.store,
		beforePageText:'P�gina',
		afterPageText : 'de {0}',
		displayInfo: true,
		displayMsg: 'Mostrando Registros {0} - {1} de {2}',
		emptyMsg: 'No hay registros en la base de datos'
	})
});

grid2.render = function(){grid2.grid.render('grid2');};

grid2.grid.on('cellmousedown',function(grid, rowIndex, cellIndex, e ){
			var record = grid.getStore().getAt(rowIndex);  // Get the Record 
			var field  = grid.getColumnModel().getDataIndex(cellIndex);
			var data   = record.get(field);
			if((field=='materia' || field=='nombre'|| field=='programa'|| field=='descripcion' || field=='dependencia') && data!=''){
				$(e.getTarget()).tooltip('<b><center><font color="#1F82C3">'+field.toUpperCase()+'</font></center></b><p>'+data+'</p>',{click : true, mouse : false, sticky: 1});
			}
			else if (field=='formula_numerador' && data!=''){
				var denominador=record.get('formula_denominador'); 
				var head='FORMULA DEL INDICADOR';
				$(e.getTarget()).tooltip('<center style=\"padding-bottom: 8px; color: rgb(31, 130, 195);\"><b>FORMULA DEL INDICADOR </b>  </center><table style=\"width:99%\";><tbody><tr><td style=\"padding-top: 8px; border-bottom: 2px solid rgb(229, 168, 27); text-align: center; font-style: normal; font-family: Trebuchet MS; font-size: 13px; padding-bottom: 11px;\">'+data+' </td></tr><tr><td style=\"padding-top: 8px; text-align: center; font-style: normal; font-family: Trebuchet MS; font-size: 13px; padding-bottom: 11px;\"> '+denominador+'</td></tr></tbody></table>'  ,{click : true, mouse : false, sticky: 1});				
			}
});


jQuery(document).ready(grid2.render, grid2); 

</script>

<div style='clear: both;width: 98%;'  class='grid_recargar'>
    <div id='grid2' style='width: 100%;'></div>
</div>




</div>	



<div class="meetings index">
	<h2><?php echo __('Meetings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
	 	<td>
	 			<?php echo 'N�mero de reuniones:'.$totalm; ?>
	 	</td>
	 </tr>
	<tr>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>		
			<th><?php echo $this->Paginator->sort('meeting_date'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_type'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_commitments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meetings as $meeting): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($meeting['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
		</td>
		<td><?php echo h($meeting['Meeting']['meeting_date']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_type']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_title']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_description']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_commitments']); ?>&nbsp;</td>	
		
		<td class="actions">
		<?php echo $this->Html->link(__('View'), array('action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
		<?php $usuario_id=$meeting['Meeting']['user_id'];?>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');		
		if(($id_usuario==$usuario_id) || ($usuario_level== '1')){?>
		<?php //echo $this->Html->link(__('View'), array('action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
		<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meeting['Meeting']['id_meeting'])); ?>
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id_meeting'])); ?>
		<?php }?>
		</td>
	</tr>
<?php endforeach; ?>

	</table>
	<p>
	<?php

	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	<?php if($usuario_level== '1'){?>
	<?php echo $this->Form->create('Exportar'); ?>
	<?php echo $this->Form->end(__('Exportar a excel')); ?>
	<?php }?>

	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<?php }?>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
