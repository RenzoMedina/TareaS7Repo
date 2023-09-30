<?php

namespace App\Controller;
use Database\DataQuery;

class HomeController{
    public function index(){
        return views("index");
    }
    public function asistencia(){
        return views("asistencia");
    }
    public function reporte(){
        $query = new DataQuery();
        $data = $query->getJoin();
        return views("reporte",['data'=>$data]);
    }
    public function clases(){
        $query = new DataQuery();
        $data = $query->getAll("personal");
        return views("asistencia_clases",['data'=>$data]);
    }
    public function perfiles(){
        $query = new DataQuery();
        $data = $query->getAll("personal");
        return views("perfil",['data'=>$data]);
    }
}