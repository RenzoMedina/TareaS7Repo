<?php
namespace App\Controller;
use Database\DataQuery;
class ClaseController{

    public function store(){
        $data =[
            "id_docente"=>intval($_REQUEST['id_docente']),
            "nombre_curso"=>$_REQUEST['nombre_curso'],
            "fecha_curso"=>$_REQUEST['fecha_curso'],
            "hora_inicio"=>$_REQUEST['hora_inicio'],
            "hora_final"=>$_REQUEST['hora_final'],
            "asistio"=>$_REQUEST['asistencia'],
            "inicio_clase"=>$_REQUEST['clase_inicio'],
            "final_clase"=>$_REQUEST['clase_final'],
            "justificacion"=>$_REQUEST['justificada'],
            "observaciones"=>$_REQUEST['observaciones'],
        ];  
            $query = new DataQuery();
            
            if(!$query->create("asistencia",$data)){
                redirect("/", "error");
                die();
            }
            redirect("/","ok");
        }
        
}