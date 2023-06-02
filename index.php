<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: cuánto vale la velocidad con la cual recorre el segundo tramo?.
</h2>
        <p>Descripción:</p>
        <p>Dos centros de cómputo que trabajan en el procesamiento de datos enviados por satélite necesitan intercambiar información. Como ésta es confidencial, no pueden usar medios electrónicos y deben utilizar un mensajero en camioneta. El mensajero tarda un tiempo T en ir de un centro a otro. La velocidad media en todo el trayecto es de 60 km/h y son constantes las velocidades en cada uno de los dos tramos recorridos en un tiempo T/2. Si la velocidad en el primer tramo es de 50 km/h.<br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/problema.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        Tiempo = Distancia / Velocidad
Fórmula de la velocidad media:
Velocidad media = Distancia total / Tiempo total
Fórmula de la distancia recorrida:
Distancia = Velocidad * Tiempo
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        velocidad media: 60 km/hr
velocidad en el primer tramo: 50 km/hr<br>
      
      </section>
      <section class="calculos">
        <h2>Solución para Calcular la distancia total</h2>
        <p>a)La velocidad promedio se calcula como:
Velocidad promedio = Distancia / Tiempo
Sabemos que la velocidad promedio es de 60 km/h. Entonces tenemos:
60 km/h = D / T
Para el primer tramo, la velocidad es de 50 km/h y el tiempo es T/2. Podemos usar la misma fórmula para calcular la distancia del primer tramo:
50 km/h = D1 / (T/2)
D1 = 50 * (T/2) = 25T
Ahora, para calcular la distancia del segundo tramo, podemos restar la distancia del primer tramo a la distancia total:
D2 = D - D1 = D - 25T
Finalmente, para calcular la velocidad en el segundo tramo, usamos la fórmula de la velocidad promedio nuevamente:
60 km/h = D2 / (T/2)
Despejando la velocidad:
Velocidad en el segundo tramo = 60 * (T/2) / (D - 25T)<br>
        </p>
        
        
        <button onclick="calcula_velocidad();">Presiona para calcular</button>
      </section>
      <?php
     function calcularVelocidadSegundoTramo() {
  $D = 100; // Distancia total en km
  $T = 2; // Tiempo total en horas

  $D1 = 25 * $T;
  $D2 = $D - $D1;
  $velocidadSegundoTramo = (60 * ($T/2)) / $D2;
  
  return $velocidadSegundoTramo;
}
?>
 
      <section class="resultado">
        <h2>Resultado del inciso A:</h2>
        <div id="resultadoA"></div>
        <?php
 print "<h1>  distancia total = ".calcula_velocidad(). " La velocidad) </h1>";
?>
        
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>
</body>
</html>
