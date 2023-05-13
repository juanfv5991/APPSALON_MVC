<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index(Router $router) {

        if (!$_SESSION['nombre']) {
            session_start();
          }
        // debuguear($_SESSION);

        isAuth(); // Esta es una funcion creada en funciones.php que revisa si el usuario esta autenticado atravez de $_SESSION['login']
        
        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
}