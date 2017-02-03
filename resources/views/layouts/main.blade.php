<!DOCTYPE html>

<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <title>Dashboard</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- Bootstrap core CSS -->
	    <link href="{{asset('')}}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Font Awesome -->
		<link href="{{asset('')}}bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<!-- ionicons -->
		<link href="{{asset('')}}bower_components/ionicons/css/ionicons.min.css" rel="stylesheet">
		
		<!-- Morris -->
		<link href="{{asset('')}}other_components/Morris/morris.css" rel="stylesheet">	

		<!-- Datepicker -->
		<link href="{{asset('')}}other_components/Datepicker/datepicker.css" rel="stylesheet">	

		<!-- Animate -->
		<link href="{{asset('')}}bower_components/animate.css/animate.min.css" rel="stylesheet">

		<!-- Owl Carousel -->
		<link href="{{asset('')}}bower_components/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
		<link href="{{asset('')}}bower_components/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">

		<!-- Simplify -->
		<link href="{{asset('')}}other_components/Simplify/css/simplify.min.css" rel="stylesheet">
	
  	    <style type="text/css">
            .jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
        </style>

        <!-- Mis Estilos -->
        <link href="{{asset('')}}css/dashboard.css" rel="stylesheet">

    </head>

  	<body class=""><div id="deleteWidgetConfirm_background" class="popup_background" style="opacity: 0; visibility: hidden; background-color: black; position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 2000; transition: all 0.3s;"></div><div id="deleteWidgetConfirm_wrapper" class="popup_wrapper" style="opacity: 0; visibility: hidden; position: fixed; overflow: auto; z-index: 2001; transition: all 0.3s; top: 0px; right: 0px; left: 0px; bottom: 0px; text-align: center; display: none;"><div class="custom-popup delete-widget-popup delete-confirmation-popup popup_content" id="deleteWidgetConfirm" data-popup-initialized="true" aria-hidden="true" role="dialog" style="opacity: 0; visibility: hidden; display: inline-block; outline: none; transition: all 0.3s; text-align: left; position: relative; vertical-align: middle;">
			<div class="popup-header text-center">
				<span class="fa-stack fa-4x">
				  <i class="fa fa-circle fa-stack-2x"></i>
				  <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
				</span>
			</div>
			<div class="popup-body text-center">
				<h5>Are you sure to delete this widget?</h5>
				<strong class="block m-top-xs"><i class="fa fa-exclamation-circle m-right-xs text-danger"></i>This action cannot be undone</strong>
			
				<div class="text-center m-top-lg">
					<a class="btn btn-success m-right-sm remove-widget-btn">Delete</a>
					<a class="btn btn-default deleteWidgetConfirm_close">Cancel</a>
				</div>
			</div>
		</div>
		<div class="popup_align" style="display: inline-block; vertical-align: middle; height: 100%;"></div>
		</div>
		<div class="wrapper">
			
			@include('layouts.sidebar-right')

			@include('layouts.top-nav')

			@include('layouts.sidebar-left')
			
			<div class="main-container">

                @yield('content')

			</div><!-- /main-container -->

		</div><!-- /wrapper -->

		<a href="http://endlesstheme.com/simplify1.0/#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>

		<!-- Delete Widget Confirmation -->
		

		
	    <!-- Le javascript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
		
		<!-- Jquery -->
		<script src="{{asset('')}}other_components/Simplify/js/jquery-1.11.1.min.js"></script>
		
		<!-- Bootstrap -->
	    <script src="{{asset('')}}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	  
		<!-- Flot -->
		<script src="{{asset('')}}bower_components/Flot/jquery.flot.js"></script>

		<!-- Slimscroll -->
		<script src="{{asset('')}}bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Morris -->
		<script src="{{asset('')}}bower_components/raphael/raphael.min.js"></script>	
		<script src="{{asset('')}}other_components/Morris/morris.min.js"></script>	

		<!-- Datepicker -->
		<script src="{{asset('')}}other_components/Datepicker/datepicker.js"></script>

		<!-- Sparkline -->
		<script src="{{asset('')}}other_components/sparkline/sparkline.min.js"></script>

		<!-- Skycons -->
		<script src="{{asset('')}}other_components/Simplify/js/skycons.js"></script>
		
		<!-- Popup Overlay -->
		<script src="{{asset('')}}bower_components/jquery-popup-overlay/jquery.popupoverlay.js"></script>

		<!-- Easy Pie Chart -->
		<script src="{{asset('')}}bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

		<!-- Sortable -->
		<script src="{{asset('')}}other_components/Simplify/js/jquery.sortable.js"></script>

		<!-- Owl Carousel -->
		<script src="{{asset('')}}bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

		<!-- Modernizr -->
		<script src="{{asset('')}}other_components/Simplify/js/modernizr.min.js"></script>
		
		<!-- Simplify -->
		<script src="{{asset('')}}other_components/Simplify/js/simplify.js"></script>
		<script src="{{asset('')}}other_components/Simplify/js/simplify_dashboard.js"></script>


		<script>
			$(function()	{

				$('.sortable-list').sortable();

				$('.todo-checkbox').click(function()	{
					
					var _activeCheckbox = $(this).find('input[type="checkbox"]');

					if(_activeCheckbox.is(':checked'))	{
						$(this).parent().addClass('selected');					
					}
					else	{
						$(this).parent().removeClass('selected');
					}
				
				});

				//Delete Widget Confirmation
				$('#deleteWidgetConfirm').popup({
					vertical: 'top',
					pagecontainer: '.container',
					transition: 'all 0.3s'
				});
			});
			
		</script>
	
  	

<div id="tooltip" style="position: absolute; display: none; border: 1px solid rgb(34, 34, 34); padding: 4px; color: rgb(255, 255, 255); border-radius: 4px; background-color: rgb(0, 0, 0); opacity: 0.9;"></div></body></html>