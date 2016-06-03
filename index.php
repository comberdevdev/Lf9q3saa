<?php
	session_start();
    include 'routes.php';
    require 'includes/config.php';


    $uri = urldecode($_SERVER['REQUEST_URI']);
    ///cmsComberweb/Lf9q3saa/

    $uriTratada = substr($uri, 1);
    $uriExplode = explode('/', $uriTratada);

    if ($uriExplode[1] == 'Lf9q3saa') {
        $route = $routes[$uriExplode[2]];

        if(!empty($route)){
            carregaParametros($uriExplode);
            carregaRoute($route);
        } else {
            $prefixo = $prefixos[$uriExplode[2]];

            if (!empty($prefixo)) {
                $route = $prefixo[$uriExplode[3]];

                if(!empty($route)){
                    carregaParametros($uriExplode, 'S');
                    carregaRoute($route);
                }
            }
        }
    }

    function carregaRoute($route) {
        include "controller/".$route["Controller"].".php";
        $class = $route["Controller"];
        eval("\$Controller = new $class();");
        eval("\$Controller->\$route['Method']();");
    }

    function carregaParametros($uriExplode, $temPrefixo = 'N') {
        $tamanhoRoute = count($uriExplode);

        $parametros = array();

        if ($tamanhoRoute > 2) {
            foreach ($uriExplode as $key => $value) {
                if ($temPrefixo == 'N') {
                    if ($key > 2) {
                        $parametros[] = $value;
                    }
                } else {
                    if ($key > 3) {
                        $parametros[] = $value;
                    }
                }

            }

            unset($_SESSION['parametrosGet']);
            $_SESSION['parametrosGet'] = $parametros;
        }

        if (!empty($_POST)) {
        	unset($_SESSION['parametrosPost']);
            $_SESSION['parametrosPost'] = $_POST;
        }
    }
?>    