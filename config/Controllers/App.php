<?php 
	class App extends Database
	{	

		public static function CreateView($viewName)
		{
			require_once 'resources/views/'.$viewName.'.php';
		}

		public static function ViewPartial($partialName,$tree)
		{
			include 'resources/partials/'.$tree.'/'.$partialName.'.php';
		}

		public static function asset($assetName)
		{
			if (isset($_GET['url']) && $_GET['url'] != 'index') {
				$tree = '../';
			}else{
				$tree = './';
			}
			echo  $tree.'assets/'.$assetName;
		}
	}
?>