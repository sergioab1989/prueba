<!DOCTYPE html> 
<html>
<head>
	<!-- Llamada de archivo estilos.css ubicada en directorio CSS-->
	<link rel="stylesheet" href="CSS/estilos.css">
    <title>Calculadora IMC</title>
</head>
<body>    
    <header>
        <div>
            <h1>Calculadora IMC</h1>
        </div>
    </header>    
	<br/> 
	<article>
		<div>
			<p>El índice de masa corporal (IMC) es un número que se calcula con base en el peso y la estatura de la persona. Para la mayoría de las personas, el IMC es un indicador confiable de la gordura y se usa para identificar las categorías de peso que pueden llevar a problemas de salud.</p>		
		</div>
	</article>
	<br/>	
	<img src='img/formula_imc.png' width='200' height='100'><br/>
	<article>
		<!-- Formulario el cual pide ingresar estatura en centimetros y peso en kilogramos de usuario para calculo de IMC con metodo GET para enviar datos de formulario a archivo calcular_imc.php -->
		<form action="calcular_imc.php" method="GET">
			<!-- Se usaron objetos input de tipo number y con atributo required para que no se ingrese texto y sea obligatorio el ingreso de datos -->
			<p>Ingrese su estatura en centimetros: <input type="number" name="estatura" required></p>
			<p>Ingrese su su peso en kilogramos: <input type="number" name="peso" required></p>
			<!-- botón de tipo submit que permite pasar con metodo GET datos de input con nombres estatura y peso a archivo calcular_imc.php-->
			<input type="submit" value="Calcular IMC">
		</form>
	</article>
</body> 

