 
    <!-- scripts concatenated and minified via ant build script-->
    <script src="assets/js/modernizr-2.6.1.min.js"></script>
    <script src="assets/js/conditional.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/jquery.inview.js"></script>
    <script src="assets/js/retina.js"></script>
    <script src="assets/js/bp-script.js"></script>
    
    <!-- begin jquery.sticky script-->
    <script type="text/javascript" src="assets/js/jquery.sticky.js"></script>
	<script>
        $(window).load(function(){
          $("#header_wrapper").sticky({ topSpacing: 0 });
        });
    </script>
    <!-- end jquery.sticky script--> 
  
    <!-- begin scrollTo script-->
    <script src="assets/js/jquery.scrollTo-min.js"></script>
    <script type="text/javascript">
		(function($){
			$(document).ready(function() {	
			/* This code is executed after the DOM has been completely loaded */
				
				$("a.scrool").click(function(e){
		
					var full_url = this.href;
					var parts = full_url.split("#");
					var trgt = parts[1];
					var target_offset = $("#"+trgt).offset();
					var target_top = target_offset.top;
					
					$('html,body').animate({scrollTop:target_top -0}, 1000);
					return false;
					
				});
						
			});
		})(jQuery);
		(function() {
			'use strict';

			window.addEventListener('load', function() {
				var form = document.getElementById('contact-form');
				form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
				}, false);
			}, false);
		})();
    </script>
	<!-- end menu scrollTo script-->
    
    <!--begin shrink header script -->
    <script>
        $(function(){
        var shrinkHeader = 0;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if ( scroll >= shrinkHeader ) {
                $('#header_wrapper').addClass('shrink');
                }
                else {
                    $('#header_wrapper').removeClass('shrink');
                }
        });
        function getCurrentScroll() {
            return window.pageYOffset;
            }
        });
	</script>
    <!--end shrink header script -->
    
    <!--begin fitvids script -->
    <script src="assets/js/jquery.fitvids.js"></script>
	<script>
		// Basic FitVids Test
		$("#container").fitVids();
    </script>
    <!--end fitvids script -->
    
    <!-- begin map script-->
   <!-- <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>-->
    <!--  <script src="assets/js/jquery.mapmarker.js"></script>-->
    <script type="text/javascript">
	/*(function($){
		$(document).ready(function() {		
			var myMarkers = {"markers": [ {"latitude": "51.507207", "longitude": "-0.127223"}
				]
			};		
			$("#g_map_380").mapmarker({
				center: "51.507207,-0.127223",	
				zoom: 15,		
				controls: false,
				mapType: 'ROADMAP',
				scrollwheel: false,
				draggable: true,
				doubleclickzoom: true,
				customMarkers: true,
				markers: myMarkers,
				styling: 1,
				featureType: "all",
				elementType: "all",
				visibility: "on",
				invert_lightness: false,
				color: "",
				hue: "",
				saturation: -100,
				lightness: 10,
				gamma: 1
			});
		});
	})(jQuery);*/
	</script>
    <!-- end map script-->
    
