<?php
$nombre = "";
$apellido = "";
$edad = 0;

function datosPersona(){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];

        
        $nombre = quitar_tildes($nombre);
        $apellido = quitar_tildes($apellido);
        $nombre = strtoupper($nombre);
        $apellido = strtoupper($apellido);
        $nombre = trim($nombre);
        $apellido = trim($apellido);

        if(strlen($nombre) != 0 && strlen($apellido) != 0){
            if($edad >= 10 && $edad <= 99){
                echo "El usuario se llama " . $nombre . " " . $apellido . " y tiene " .
                $edad . " años";

            } else echo "La edad debe estar entre 10 y 99 años";

        } else echo "Debe rellenar nombre y apellido";


        
    }
}

function quitar_tildes($cadena) {
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyyby';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    return utf8_encode($cadena);
    }


?>

<html>
    <body>
        <form method="post" action="">
            <label><h1>Datos de persona</h1></label>
            <label>Ingrese su nombre: </label>
            <input type="texto" name="nombre" value="<?php echo $nombre;?>">
            <label>Ingrese su apellido: </label> 
            <input type="textot" name="apellido" value="<?php echo $apellido;?>">
            <label>Ingrese su edad: </label>
            <input type="int" name="edad" value="<?php echo $edad;?>">
            <p class="respuesta"><?= datosPersona();?></p>
            <input type="submit" value="Agregar">
        </form>
    </body>
    
</html>