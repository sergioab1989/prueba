<!DOCTYPE html> 
<html>
<head>
    <!-- Llamada de archivo estilos.css ubicada en directorio CSS-->
	<link rel="stylesheet" href="CSS/estilos.css">
    <title>Resultado Calculo IMC</title>
</head>
<body>
    <?php
    //Variables estatura y peso, a las cuales se les pasa con metodo GET valores de formulario proveniente de archivo index.php
    //A variable estatura se le multiplica por 0.01 para obtener estatura en metros.
    $estatura = $_GET['estatura']*0.01;
    $peso = $_GET['peso'];
    //Variable imc, a la cual se le asigna valor que devuelve función CalculoIMC, la cual recibe por parametros las variables estatura y peso
    $imc = CalculoIMC($estatura,$peso);
    //Se imprime en pantalla con metodo echo tanto el titulo como los resultados del calculo del IMC, con estructura html para aplicar estilo programado en archivo estilos.css 
    echo "<header>
            <div>
                <h1>Resultado IMC</h1>
            <div>
        </header><br/>";
    //Se muestra en pantalla estatura, peso, formula IMC,su resultado y diagnostico usando función DiagnosticoIMC que recibe por parametro variable imc
    echo "<article>
            <div>
                <p>Su estatura es de ".$estatura," metros</p>		
                <p>Su peso es de ".$peso," kilos</p>		
                <p>IMC = ",$peso,"/",$estatura,"² = ",$imc,"</p>		
                <p>Su diagnostico es: ", DiagnosticoIMC($imc),"</p>		
            </div>	
          </article>";
    ?>
</body>
</html>
<?php
//Función que permite calcular el valor de IMC, recibe por parametro estatura y peso
function CalculoIMC($est,$ps){
    //Retorna el resultado redondeado en un decimal entre peso dividido por estatura al cuadrado (elevado a 2). Formula para calculo de IMC
    return round($ps/pow($est,2),1);
}
//Función que imprime en pantalla diagnostico segun variable recibida por parameto, que sería el IMC
function DiagnosticoIMC($i){
    //Si variable i es menor que 18.5 imprime diagnostico Bajo Peso 
    if ($i < 18.5 ) {
        echo "Bajo Peso";
    }elseif ($i >= 18.5 and $i < 25 ) {
        //Sino se cumple condición anterior, valida si variable i es mayor o igual que 18.5 y es menor que 25, imprime diagnostico Saludable
        echo "Saludable";
    }elseif ($i >= 25 and $i < 30 ) {
        //Sino se cumple condición anterior, valida si variable i es mayor o igual que 25 y es menor que 30, imprime diagnostico Sobrepeso
        echo "Sobrepeso";
    }elseif ($i >= 30 and $i < 40 ) {
        //Sino se cumple condición anterior, valida si variable i es mayor o igual que 30 y es menor que 40, imprime diagnostico Obesidad
        echo "Obesidad";
    }else {
        //Sino se cumple ninguna condición anterior, variable i es mayor que 40, imprime diagnostico Obesidad Severa
        echo "Obesidad Severa";
    }
}
?>