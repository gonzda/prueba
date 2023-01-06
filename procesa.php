<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php
    $nomb =$_POST["nombres"];
    $apel =$_POST["apellidos"];
   echo "Nombre: ".ucwords($nomb)." ".ucwords($apel);
    
    ?>
<body>
</body>
</html>