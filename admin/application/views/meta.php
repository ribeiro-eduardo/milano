<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Milano Construtora</title>
		
		<!-- Incluindo o CSS das fontes -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

		<!-- Incluindo o css principal da aplicação -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
		<!-- Incluindo o css do bootstrap e dataTables-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css'); ?>">

		<!-- Incluindo os JS jquery, dataTables e principal-->
		<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>			
		<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.js')?>"></script>
		<script src="<?php echo base_url('assets/js/main.js')?>"></script>

		<!-- Incluindo os arquivos necessários para o funcionamento do jQuery File Uploader -->
		<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/vendor/jquery.ui.widget.js')?>"></script>
		<!-- The Templates plugin is included to render the upload/download listings -->
		<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
		<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
		<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
		<!-- The Canvas to Blob plugin is included for image resizing functionality -->
		<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
		<!-- blueimp Gallery script -->
		<script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
		<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/jquery.iframe-transport.js')?>"></script>
		<!-- The basic File Upload plugin -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/jquery.fileupload.js')?>"></script>
		<!-- The File Upload processing plugin -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/jquery.fileupload-process.js')?>"></script>
		<!-- The File Upload image preview & resize plugin -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/jquery.fileupload-image.js')?>"></script>
		<!-- The File Upload audio preview plugin -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/jquery.fileupload-audio.js')?>"></script>
		<!-- The File Upload video preview plugin -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/jquery.fileupload-video.js')?>"></script>
		<!-- The File Upload validation plugin -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/jquery.fileupload-validate.js')?>"></script>
		<!-- The File Upload user interface plugin -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/jquery.fileupload-ui.js')?>"></script>
		<!-- The main application script -->
		<script src="<?php echo base_url('assets/jQuery-File-Upload-master/js/main.js')?>"></script>

		<!-- Generic page styles -->
		<link rel="stylesheet" href="<?php echo base_url('assets/jQuery-File-Upload-master/css/style.css')?>">
		<!-- blueimp Gallery styles -->
		<link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
		<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
		<link rel="stylesheet" href="<?php echo base_url('assets/jQuery-File-Upload-master/css/jquery.fileupload.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/jQuery-File-Upload-master/css/jquery.fileupload-ui.css')?>">
		<!-- CSS adjustments for browsers with JavaScript disabled -->
		<noscript><link rel="stylesheet" href="<?php echo base_url('assets/jQuery-File-Upload-master/css/jquery.fileupload-noscript.css')?>"></noscript>
		<noscript><link rel="stylesheet" href="<?php echo base_url('assets/jQuery-File-Upload-master/css/jquery.fileupload-ui-noscript.css')?>"></noscript>

	</head>
	<body>