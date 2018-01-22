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
    </script>
	<!-- end menu scrollTo script-->
    
    <!--begin shrink header script -->
    <script>
	$(function(){
	 var shrinkHeader = 705;
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
    
    <!-- begin background slideshow script-->
    <script src="assets/js/jquery.vegas.js"></script>
    <script>
	$( function() {
			$.vegas('slideshow', {
				backgrounds:[
					{ src:'http://placehold.it/1920x1280', fade:1500 },
					{ src:'http://placehold.it/1920x1280', fade:1500 }
				],
				loading:false
			})
		});
    </script>
	<!-- end background slideshow script-->
