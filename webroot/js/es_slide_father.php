<?php

include("../../includes/funciones.php");
include("../../bd/coneccion.php");

   $link=Conectarse(); 
	
	$input = $_GET["q"];
	$data = array();
	// query your DataBase here looking for a match to $input
	$query = mysql_query("	SELECT  t1.*,(select t2.Url FROM es_slideshow2 t3 , es_archivos t2 WHERE t1.id_imagen_thumb=t2.id and t3.id=t1.id )  as url_thumb, 
							t2.Url as url_content, (select concat(Abs_ruta,'archivos/') from general ) as ruta_server
							FROM es_slideshow2 t1 left join es_archivos t2 ON t1.id_imagen_contenido=t2.id 
							WHERE t1.tipo=2 AND (t1.Tags LIKE '%$input%' OR t1.Nombre LIKE '%$input%') ORDER BY t1.orden ASC, t1.id ASC");
	while ($row = mysql_fetch_assoc($query)) {
		$json = array();
		$json['id'] = $row['id'];
		$json['name'] = $row['nombre'];
		$json['descrpcion'] = $row['descripcion'];
		$json['tags'] = $row['tags'];
		$json['url_content'] = $row['url_content'];
		$json['ruta_server'] = $row['ruta_server'];
		$data[] = $json;
	}
	header("Content-type: application/json");
	echo json_encode($data);
	
	
?>