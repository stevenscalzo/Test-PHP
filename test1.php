<?php
$peso = 0;
$altura = 0.0;
function calculoIMC(){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        if($peso > 0 && $altura >0){
            if($peso >= 9 && $peso <= 200){
                if($altura >= 0.5 && $altura <= 3){
                   echo $peso / ($altura * $altura); 
                } else echo "La altura debe estar entre 0.5 y 3 mts";
                
            } else echo "El peso debe estar entre 10 y 200 kg";
            
        } else echo "Los valores deben ser numeros positivos";
        
    }  
}

?>
<html>
    <body>
        <form method="post" action="">
            <label><h1>Calculadora de IMC</h1></label>
            <label>Ingrese su peso en Kg: </label>
            <input type="int" name="peso" value="<?php echo $peso;?>">
            <label>Ingrese su altura en mts: </label> 
            <input type="float" name="altura" value="<?php echo $altura;?>">
            <p class="respuesta"><?= calculoIMC();?></p>
            <input type="submit" value="Calcular">
        </form>
    </body>
    
</html>
