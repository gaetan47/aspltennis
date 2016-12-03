<?php
/**
 * Controlleur de la page Accueil
 * 
 * @author gaetanlussagnet
 */
class AccueilControleur {
	
	/**
	 * Initialisation de twig
	 * @return Twig_Environment
	 */
	private static function before(){
		$ini_array = parse_ini_file("configuration.ini");
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem('src/vue');
		$twig = new Twig_Environment($loader, array('cache' => 'cache','auto_reload'=>$ini_array['autoreload']));
		
		return $twig;
	}
	
	/**
	 * Route accueil/index
	 * @param array $arg
	 */
	public static function index ($arg = array()){
		$twig = self::before();
		
		//Arguments du template
		$coucou = count($arg) > 0 ? $arg[0] : '';
		
		//Rendu de la vue
		echo $twig->render('AccueilVue.twig',array('param1' => $coucou));
		
	}
	
}