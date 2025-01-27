<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alta de Curso</title>
        <!-- jQuery -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
		<!-- SweetAlert2 -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    	<script type="text/javascript">
        	$(function() {
        		$('#fini').datepicker({
        			dateFormat: 'dd/mm/yy', 
        			changeMonth: true, 
        			changeYear: true, 
        			yearRange: '2024:2033',
        			onSelect: function(selectedDate) {
        			}
        		});
				$('#ffin').datepicker({
        			dateFormat: 'dd/mm/yy', 
        			changeMonth: true, 
        			changeYear: true, 
        			yearRange: '2024:2033',
        			onSelect: function(selectedDate) {
        			}
        		});
        	});
	    </script>
		<!-- CSS -->
	    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
		<!-- JS -->
		<script src="view/js/utils.js"></script>
	    <script src="module/course/model/validate_course.js"></script>
		<script src="module/course/model/select_lang.js"></script>
		<!-- CLOUDFARE -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<!-- PLANTILLA -->
		<!-- Página web de la plantilla; https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_start_page&stacked=h -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
			.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
			.fa-anchor,.fa-coffee {font-size:200px}
		</style>
    </head>
    <body>