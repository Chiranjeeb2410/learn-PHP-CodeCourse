<?php

$fileIsUploaded = upload_file();

$fileIsUploaded = false;

if ($fileIsUploaded) {

	echo 'File no. '. $fileIsUploaded .' is uploaded';

}

?>
