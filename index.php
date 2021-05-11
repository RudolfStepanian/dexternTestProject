<?php
require('Test.php');
require_once('SMath.php');

echo('
<form action="index.php" method="post"><br>
First number:<input type="number" name="first_number"step="0.001"><br>
Second Number:<input type="number" name="second_number"step="0.001"><br>
<input type="submit" name="submit" value="Count sum"><br>
</form>
');

if ($_REQUEST != null){
    echo 'Result is '.Math::Sum($_REQUEST['first_number'], $_REQUEST['second_number']);
}    

?>