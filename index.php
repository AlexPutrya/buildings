<?php
include_once 'Buildings.cl.php';
$building = new Buildings();
//$building->addBuilding('Собор Парижской Богоматери');
//$building->delBuilding(3);
//$building->editBuilding(2, "Белая Альтанка");
$building_list =$building->buildingList();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buildings</title>
         <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
        <?php
        echo "<div class='test'>";
            echo "<ul>";
        foreach($building_list as $key=>$value){
                echo "<li id='{$key}'><a href='#'> $value</a></li>";
        }
            echo "</ul>";
        echo "<li><a id='hide' href='#'> Добавить</a></li>";
        echo "</div><br>";
        ?>
    </div>
    </body>
</html>
