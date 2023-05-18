<?php
 $urldest='';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
<form action="<?php  echo $urldest; ?>" method="post">
    Nombre: <input type="text" name="nombre"><br>
    apellido: <input type="text" name="apellido"><br>
    email: <input type="email" name="email"><br>
    telefono: <input type="text"><br>

<p>selecciones su esperiencia academica</p>



    <select name="experiencia">
  <option value="b">bachiller</option>
  <option value="t">tenico</option>
  <option value="T">tecnologo</option>
  <option value="p">profesional</option>
  <option value="EU">estudiante U</option>


</select>



<p>selecciona tus conocimientos</p><br>


python: <input type="checkbox" value="python" name="lenguajes[]"><br>
html: <input type="checkbox" value="html" name="lenguajes[]"><br>
css: <input type="checkbox" value="css" name="lenguajes[]"><br>
java script: <input type="checkbox" value="js" name="lenguajes[]"><br>
php: <input type="checkbox" value="php" name="lenguajes[]"><br>
node: <input type="checkbox" value="node" name="lenguajes[]"><br>
c#: <input type="checkbox" value="c#" name="lenguajes[]"><br>
typescript: <input type="checkbox" value="ts" name="lenguajes[]"><br>


<p>nivel de ingles</p>

<select name="ingles">
  <option value="L">bajo</option>
  <option value="I">intermedio</option>
  <option value="A">alto</option>
</select><br><br>




    <input type="reset" value="refrescar" >
     <input type="submit" value="descubre tu valoracion">
    </form>

    
</body>
</html>

<?php

$longitud = count($_POST['lenguajes']);

foreach($_POST['lenguajes'] as $lenguajes) {
    echo "<p>Valor recibido: $lenguajes </p>";


if($longitud <= 2){
$urldest = window.location.replace("http://localhost:4000/case1.php"); 
} 
}
?>


