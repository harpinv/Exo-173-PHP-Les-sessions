<?php
session_start();
?>

<body style= "background-color: <?php
echo $_POST['couleur'];
?>">
   <button><a href="couleur2.php">page 2</a></button>
   <button><a href="couleur3.php">page 3</a></button>
   <button><a href="couleur4.php">page 4</a></button>
</body>
<?php

$_SESSION['couleur'] = $_POST['couleur'];


