<?php
class Alumno {
    protected $nombre;
    protected $apellido;
    public $notas = [];

    function __construct($nombre, $apellido, $notas){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->notas = $notas;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    

    public function imprimeCalificaciones(){
        print_r($this->notas);
    }

    public function nuevaCalificacion($calif)
    {
        if($calif >= 0 && $calif <= 10){
            $nuevasNotas = array_push($notas, $calif);
            $this->notas = $nuevasNotas;
        }
    }
    public function borraCalificacion(){
        $this->notas = array_pop($notas);
    }
    public function mediCalificacion(){
        $numeroNotas = count($this->notas);
        $sumaNotas = 0;
        for($i = 0; $i < $numeroNotas; $i++){
            $sumaNotas += $this->notas[$i];
        }
        return $sumaNotas / $numeroNotas;
    }
    

    
}
?>


