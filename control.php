<?php

for ($x=0; $x < 10; $x++) { 
    require_once("view1.php");
}

print "\n";

for ($x=0; $x < 3; $x++) { 
    require("view2.php");
}

?>