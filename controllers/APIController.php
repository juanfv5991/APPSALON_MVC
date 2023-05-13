<?php

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
use Model\Servicio;

class APIController {
    public static function index() {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar() {

        // Almacena la cita y devuelve el ID
        $cita = new Cita($_POST); // Crea un objeto cita con la info de POST.
        $resultado = $cita->guardar(); // Guarda en la variable resultado todo lo que esta en el objeto cita
        
        $id = $resultado['id'];
        // Almacena la Cita y el Servicio

        // Almacena los Servicios con el ID de la cita
        $idServicios = explode(",", $_POST['servicios']); // Es para mostrar el arreglo de los id de los servicios separados por coma en navegador en la parte de Network
        
        foreach($idServicios as $idServicio) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
        }

       

        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar() {
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $cita = Cita::find($id);
            $cita->eliminar();
            header('Location:' . $_SERVER['HTTP_REFERER'] );
        }
    }
}