<?php 

namespace Database;

class DataQuery{

    public $conexion;

    public function __construct(){
        $this->conexion = Connection::start();
    }
    
    public function getAll($table){
        $sql = "SELECT * FROM {$table}";
        try {
            $query = $this->conexion->prepare($sql);
            $query->execute();
            $resul= $query->fetchAll(\PDO::FETCH_OBJ);
            return $resul;
        } catch (\PDOException $po) {
            dd($po->getMessage());
        }

    }

    public function getId($table, $id){
        $sql="SELECT * FROM {$table} WHERE id= ?";
        try {
            $query = $this->conexion->prepare($sql);
            $query->bindParam(1,$id);
            $query->execute();
            $resul = $query->fetch(\PDO::FETCH_OBJ);
            return $resul; 
        } catch (\PDOException $po) {
            dd($po->getMessage());
        }
    }

    public function create($table, $params){
        $key = implode(',',array_keys($params));
        $values = ':'.implode(',:',array_keys($params));
        $sql= "INSERT INTO {$table} ($key) VALUES($values)";
        try{
            $query = $this->conexion->prepare($sql);
            $query->execute($params);
            return $query;
        }catch(\PDOException $po){
            dd($po->getMessage());
        }
    }

    public function update($id, $params){
        $keys = array_keys($params);
        $values = array_values($params);
        $sql= "UPDATE personal SET $keys[0]=?,$keys[1]=?,$keys[2]=?,$keys[3]=? WHERE id = $id";
        try {
            $query= $this->conexion->prepare($sql);
            $query->bindParam(1,$values[0]);
            $query->bindParam(2,$values[1]);
            $query->bindParam(3,$values[2]);
            $query->bindParam(4,$values[3]);
            $query->execute();
            return $query;
        } catch (\PDOException $po) {
            dd($po->getMessage());
        }
    }

    public function delete($id){
        $sql="DELETE FROM personal WHERE id= ?";
        try {
            $query = $this->conexion->prepare($sql);
            $query->bindParam(1,$id);
            $query->execute();
            return $query; 
        } catch (\PDOException $po) {
            dd($po->getMessage());
        }
    }
    public function getJoin(){
        $sql= "SELECT * FROM asistencia INNER JOIN personal ON( asistencia.id = personal.id)";
        try {
            $query = $this->conexion->prepare($sql);
            $query->execute();
            $resul= $query->fetchAll(\PDO::FETCH_OBJ);
            return $resul;
        } catch (\PDOException $po) {
            dd($po->getMessage());
        }
    }
}