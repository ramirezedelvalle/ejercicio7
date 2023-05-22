<?php
require 'Conexion.php';

class alumnos extends Conexion{
    public $alu_cod;
    public $alu_nom;
    public $alu_ape;
    public $alu_tel;
    public $alu_dia;
    public $alu_mes;
    public $alu_fech;
    public $alu_mail;


    public function __construct($args = [] )
    {
        $this->alu_cod = $args['alu_cod'] ?? '';
        $this->alu_nom = $args['alu_nom'] ?? '';
        $this->alu_ape = $args['alu_ape'] ?? '';
        $this->alu_tel = $args['alu_tel'] ?? '';
        $this->alu_dia = $args['alu_dia'] ?? '';
        $this->alu_mes = $args['alu_mes'] ?? '';
        $this->alu_fech = $args['alu_fech'] ?? '';
        $this->alu_mail = $args['alu_mail'] ?? '';
        
    }

    public function guardar(){
        $sql = "INSERT INTO alumnos(alu_cod, alu_nom, alu_ape, alu_tel, alu_dia, alu_mes, alu_fech, alu_mail) 
        values('$this->alu_cod', '$this->alu_nom', '$this->alu_ape', '$this->alu_tel', '$this->alu_dia', '$this->alu_mes', 
        '$this->alu_fech', '$this->alu_mail')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
