<?php
session_start();
?>
<?php
include_once("FormularioCollector.php");
$nota = $_SESSION['torres'];
$id =2;

$DemoCollectorObj = new FormularioCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>notas</title>
    <link rel="stylesheet" href="../mitabla.css">
          
</head>
<body>
    <header>
        <h1>nota</h1>
        <div class="nota">
        <?php
	    echo "<p>Hola" . $_SESSION['torres'] . "</p>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>USUARIO</h1>
    <a href="readFormulario.php"><button>CREAR</button></a>

    <table class="rwd-table">
        <tr>    
            <th>Id</th>
            <th>Nombre</th>
            <th>Parcial</th>
            <th>Final</th>
            <th>Mejoramiento</th>
            <th>Aprueba</th>
        </tr>
        <?php
            foreach ($DemoCollectorObj->showNotas() as $c){
            echo "<tr>";
            echo "<td>" . $c->getId() . "</td>";                       
	    echo "<td>" . $c->getNombre() . "</td>";   
	    echo "<td>" . $c->getOParcial() . "</td>";
        echo "<td>" . $c->getOFinals() . "</td>";
          echo "<td>" . $c->getMejoramiento() . "</td>";
	    echo "<td>" . $c->getAprueba() . "</td>";  
                
        }
  	    echo "<a href='logout.php'><button>SALIR</button></a>";

        ?>

    </table>

   
 
</body>
</html>
