

<?php


$fieldsserialize2 = array(
			    array("field"=>"id"),
                array("field"=>"sitio"),
                array("field"=>"f_reunion"),
                array("field"=>"tipo"),
                array("field"=>"titulo"),
                array("field"=>"descripcion"),
                array("field"=>"compromisos"),
                array("field"=>"creation_date"),
                array("field"=>"modification_date"),
			    array("field"=>"id")
);
		
$data=serialize($fieldsserialize2 );


	function set_grid_fields($array){

	    $string="[";

	    foreach ($array as $key => $value){
	        $add="{name:'".$value['dataIndex']."'},";
	        $string.=$add;
	    }

	    $string=substr($string,0,-1);

	    $string.="]";

	    return $string;
	}


	$gridOptions=array(
			'gridId'=>'gridMeetings',
			'gridTitle'=>'Reuniones',
			'serviceUrl'=>'Meetings/index_service.json',
			'fields'=>array(
			    array("dataIndex"=>"id"),
                array("dataIndex"=>"sitio",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
                array("dataIndex"=>"f_reunion",'header'=>'Fecha','sortable'=>true,'align'=>"left","column"=>true),
                array("dataIndex"=>"tipo",'header'=>'Tipo','sortable'=>true,'align'=>"left","column"=>true),
                array("dataIndex"=>"titulo",'header'=>'Titulo','sortable'=>true,'align'=>"left","column"=>true),
                array("dataIndex"=>"descripcion",'header'=>'Descripcion','sortable'=>true,'align'=>"left","column"=>true),
                array("dataIndex"=>"compromisos",'header'=>'compromisos','sortable'=>true,'align'=>"left","column"=>true),
                array("dataIndex"=>"creation_date",'header'=>'Descripcion','sortable'=>true,'align'=>"left","column"=>false),
                array("dataIndex"=>"modification_date",'header'=>'Descripcion','sortable'=>true,'align'=>"left","column"=>false)
			),
			'expander'=>array(
				'fields'=>array(
					array('title'=>'Descripcion','field'=>'descripcion'),
					array('title'=>'Compromisos','field'=>'compromisos')
				)
			),
			'printCrud'=>true,
			'baseParams'=>array('start'=>0,'limit'=>100)
	);


?>





<div class="meetings-cont">

<script type='text/javascript'>
var actionViewUrl="<?php echo  Router::url(array('controller' => $this->name, 'action' => 'View')); ?>"
var editViewUrl="<?php echo  Router::url(array('controller' => $this->name, 'action' => 'edit')); ?>"
var delViewUrl="<?php echo  Router::url(array('controller' => $this->name, 'action' => 'delete')); ?>"
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
	baseParams:{table: '', dbid:'',query:'',start:0,limit:100 }
});


var expander = new Ext.ux.grid.RowExpander({
        tpl : new Ext.Template(
			'<p><b>Descripcion:</b> {descripcion}</p>',
			'<p><b>Compromisos:</b> {compromisos}</p>'
		)
});


grid2.funciones = {
	refresh: function(){grid2.store.reload();}
}

grid2.render = function(){grid2.grid.render('grid2');};

grid2.render_crud = function(val,meta,record){
	var ver="<a href='"+actionViewUrl+"/"+val+"' target='_blank'><i title='Ver' class='icon-desktop-1 view'></i></a>";
	var editar="<a href='"+editViewUrl+"/"+val+"'><i title='Editar' class='icon-export edit'></i></a>";
	var eliminar="<form method='post' style='display:none;' id='post_"+val+"578464"+val+"5848' name='post_"+val+"578464"+val+"5848' action='"+delViewUrl+"/"+val+"'><input type='hidden' value='POST' name='_method'></form> <a onclick='if (confirm(&quot;Are you sure you want to delete # "+val+"?&quot;)) { document.post_"+val+"578464"+val+"5848.submit(); } event.returnValue = false; return false;' href='#'><i title='Eliminar' class='icon-cancel-1 cancel'></i></a>";
	return "<div class='function-cont'>"+ver+editar+eliminar+"</div>";
}; 

grid2.columns = [
	expander,
    {dataIndex:'sitio', header:'Sitio', sortable:true,align:'left'},
    {dataIndex:'f_reunion', header:'Fecha',sortable:true,align:'center'},
    {dataIndex:'titulo', header:'Titulo', sortable:true,align:'left'},
    {dataIndex:'descripcion', header:'Descripcion', sortable:true,align:'left'},
    {dataIndex:'id', align:'center', header:'Funciones',width:120, renderer: grid2.render_crud}
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
	width: '100%',
	style: '',
	bbar:new Ext.PagingToolbar({ 
		pageSize: 100,
		store: grid2.store,
		beforePageText:'Pagina',
		afterPageText : 'de {0}',
		displayInfo: true,
		displayMsg: 'Mostrando Registros {0} - {1} de {2}',
		emptyMsg: 'No hay registros en la base de datos'
	})
});

jQuery(document).ready(grid2.render, grid2); 

</script>

<div  class='grid_cont'>
    <div id='grid2'></div>
</div>


<div class="meetings index">
	<h2><?php echo __('Meetings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
	 	<td>
	 			<?php echo 'Número de reuniones:'.$totalm; ?>
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
		<?php echo $this->Html->link(__('View'), array('action' => 'view')); ?>
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


</div>	
