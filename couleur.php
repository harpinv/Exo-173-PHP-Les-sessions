<body style= "background-color: <?php
echo $_POST['couleur'];
?>">

</body>
<?php
session_start();
$timeOfSession = 60 * 60 * 24;

session_set_cookie_params($timeOfSession);

$_SESSION['couleur'] = $_POST['couleur'];


