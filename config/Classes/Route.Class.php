<?php 
	/**
	* 
	*/
	class Route 
	{
		public static $validRoutes = array();

		public static function set($route, $function)
		{
			self::$validRoutes[] = $route;
			//print_r(self::$validRoutes);
			
			if (explode('/', $_GET['url'])[0] == $route) {
				$function->__invoke();
			}
		}

		public static function asset($asset, $function)
		{
			if (in_array(explode('/', $_GET['url'])[0],self::$validRoutes)) {
				$partial = $asset."-scripts";
       			$function->ViewPartial($partial,'html_blocks/page-scripts');
			}
		}

		
	}

?>