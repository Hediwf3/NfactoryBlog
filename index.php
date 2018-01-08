<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
<link rel="stylesheet" href="./assets/css/screen.css">

</head>
<body>


<?php include_once("./include/header.php");?>
<div id="main">
<?php
if (isset($_GET['page']) && $_GET['page'] != "") {
    $page = $_GET['page'];    
}

else {
    $page = "default";
}

$page = "./include/" . $page . ".inc.php";




$incFiles = glob("./include/*.inc.php");

if(in_array($page, $incFiles)){
    include($page);
} 
else {

    include("./include/default.inc.php");
}


?>
</div>
<?php include_once("./include/footer.php");?>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
