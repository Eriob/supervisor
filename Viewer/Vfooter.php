	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2015 &copy; SuperVisor by Alababa <a href="http://intechinfo.fr" title="Alababa Theme SupervisorS4" target="_blank">IN'TECH INFO</a>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script>

function sendIp(ip, i) {
  var opts = {
  lines: 11 // The number of lines to draw
, length: 10 // The length of each line
, width: 5 // The line thickness
, radius: 10 // The radius of the inner circle
, scale: 1 // Scales overall size of the spinner
, corners: 1 // Corner roundness (0..1)
, color: '#FFFFFF' // #rgb or #rrggbb or array of colors
, opacity: 0.4 // Opacity of the lines
, rotate: 53 // The rotation offset
, direction: 1 // 1: clockwise, -1: counterclockwise
, speed: 2 // Rounds per second
, trail: 60 // Afterglow percentage
, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
, zIndex: 2e9 // The z-index (defaults to 2000000000)
, className: 'spinner' // The CSS class to assign to the spinner
, top: '45%' // Top position relative to parent
, left: '50%' // Left position relative to parent
, shadow: true // Whether to render a shadow
, hwaccel: true // Whether to use hardware acceleration
, position: 'absolute' // Element positioning
}

var s = "button"+i;
var target = document.getElementById(s);
var spinner = new Spinner(opts).spin(target);

  $.get("index.php?index=explore" , {ip:ip} ).done(function (data){
    //on enlève le gif
    $(s).hide(1000, function(){
            //afficher le resultat
            window.open('index.php?index=showIp&ip='+ip+'','Informations','toolbar=no, menubar=no, scrollbars=no, top=200, left=500, width=550, height=350');
    });(s).hide();
  });
}
</script>

</head>
<body>


<!-- BEGIN CORE PLUGINS -->
<!--<script src="./bootstrap/js/jquery.bpopup.js" type="text/javascript"></script>-->
<script src="./bootstrap/js/jquery.min.js" type="text/javascript"></script>
<script src="./bootstrap/js/spin.min.js" type="text/javascript"></script>
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
<!--<script src="./bootstrap/js/tasks.js" type="text/javascript"></script>-->
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
   //Tasks.initDashboardWidget();
   
});
</script>
<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->
</html>