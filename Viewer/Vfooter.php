	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2015 &copy; SuperVisor by Alababa <a href="http://intechinfo.fr" title="Alababa Theme SupervisorS4" target="_blank">IN'TECH INFO</a>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="./bootstrap/js/jquery.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="./bootstrap/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery.cokie.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="./bootstrap/js/jquery.flot.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/pulsate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="./bootstrap/js/fullcalendar.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="./bootstrap/js/metronic.js" type="text/javascript"></script>
<script src="./bootstrap/js/layout.js" type="text/javascript"></script>
<script src="./bootstrap/js/demo.js" type="text/javascript"></script>
<script src="./bootstrap/js/index.js" type="text/javascript"></script>
<script src="./bootstrap/js/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
   Index.init();   
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>