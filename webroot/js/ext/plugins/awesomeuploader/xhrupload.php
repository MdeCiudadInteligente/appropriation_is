<?php
/*
Copyright (c) 2010, Andrew Rymarczyk
All rights reserved.

Redistribution and use in source and minified, compiled or otherwise obfuscated 
form, with or without modification, are permitted provided that the following 
conditions are met:

    * Redistributions of source code must retain the above copyright notice, 
		this list of conditions and the following disclaimer.
    * Redistributions in minified, compiled or otherwise obfuscated form must 
		reproduce the above copyright notice, this list of conditions and the 
		following disclaimer in the documentation and/or other materials 
		provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND 
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED 
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE 
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE 
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL 
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR 
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER 
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, 
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE 
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

$save_path = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
$valid_chars_regex = '.A-Z0-9_ !@#$%^&()+={}\[\]\',~`-';	// Characters allowed in the file name (in a Regular Expression format)
//$extension_whitelist = array('csv', 'gif', 'png','tif');	// Allowed file extensions
$MAX_FILENAME_LENGTH = 260;

//Header 'X-File-Name' has the dashes converted to underscores by PHP:
if(!isset($_SERVER['HTTP_X_FILE_NAME']) ){
	HandleError('Missing file name!');
}

$file_name = preg_replace('/[^'.$valid_chars_regex.']|\.+$/i', '', $_SERVER['HTTP_X_FILE_NAME']);
if (strlen($file_name) == 0 || strlen($file_name) > $MAX_FILENAME_LENGTH) {
	HandleError('Nombre de archivo inv�lido');
}
	
if(file_exists($save_path . $file_name) ){
	HandleError('Ya existe un archivo con ese nombre!');
}

//echo 'Reading php://input stream...<BR>Writing to file: '.$uploadPath.$fileName.'<BR>';
/*
// Validate file extension
	$path_info = pathinfo($file_name);
	$file_extension = $path_info["extension"];
	$is_valid_extension = false;
	foreach ($extension_whitelist as $extension) {
		if (strcasecmp($file_extension, $extension) == 0) {
			$is_valid_extension = true;
			break;
		}
	}
	if (!$is_valid_extension) {
		HandleError("Invalid file extension");
		exit(0);
	}
*/

$file = file_get_contents('php://input');
file_put_contents($save_path.$file_name, $file);
die('{"success":true}');

function HandleError($message){
	die('{"success":false,"error":'.json_encode($message).'}');
}

?>