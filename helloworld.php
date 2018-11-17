<?php


$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    // Method is POST
} elseif ($method == 'GET') {
    // Method is GET
    $vtest="NULL";
    if(isset($_GET["test"])){
    	$vtest=$_GET["test"];
    }
} elseif ($method == 'PUT') {
    // Method is PUT
} elseif ($method == 'DELETE') {
    // Method is DELETE
} else {
    // Method unknown
}

echo 'Hello, World - I am watching you@!';
echo '<p>This is version <b>1.1</b> <span style="color:red">NOW</span></p>';
echo '<div>';
echo '<h3>We have receive the testing string: '.$vtest.'</h3>';
echo '</div>';
echo '<br \><br />';
