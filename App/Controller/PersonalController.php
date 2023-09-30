<?php

namespace App\Controller;
use Database\DataQuery;

class PersonalController{

    public function index(){
        return views('registro');
    }

    public function store(){
        $data= [
            'rut'=>$_REQUEST['rut'],
            'nombre'=>$_REQUEST['nombre'],
            'apellido'=>$_REQUEST['apellido'],
            'contrasena'=>md5($_REQUEST['contrasena']),
            'cargo'=>$_REQUEST['cargo'],
            'estado'=>true
        ];
        $query = new DataQuery();
        $query->create("personal",$data);
        redirect("/perfiles");
    }

    public function edit($id){
        $query= new DataQuery();
        $data =get_object_vars($query->getId("personal",$id));
        return views("edit", ['data'=>$data]);
    }

    public function update($id){
        $data= [
            'rut'=>$_REQUEST['rut'],
            'nombre'=>$_REQUEST['nombre'],
            'apellido'=>$_REQUEST['apellido'],
            'cargo'=>$_REQUEST['cargo'],
        ];
        $query = new DataQuery();
        $query->update($id, $data);
        redirect("/perfiles");
    
    }

    public function destroy($id){
       $query = new DataQuery();
       $query->delete($id);
       redirect("/perfiles");
    }

}