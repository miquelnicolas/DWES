<?php
$nombre = "Miquel";
echo "Mi nombre es: $nombre";
?>
<h1>Título</h1>
<?php
echo "<h2>Otra cosa 
<br>
 y otra cosa </h2>";
?>
<?php
$meses = [
        'Enero', 'Febrero', 'Marzo',
        'Abril', 'Mayo', 'Junio',
        'Julio', 'Agosto', 'Septiembre',
        'Octuber', 'Noviembre', 'Diciembre'
];
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes del año</title>
</head>
<body>
<h1>Mes del año</h1>
<ul>
    <?php
    foreach($meses as $mes){
        echo '<li>' .$mes . '</li>';
    }
    ?>
</ul>
</body>
