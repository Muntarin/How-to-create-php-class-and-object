<?php
require_once './Example.php';

$example = new Example();
//$example ->one($_POST['game']);

echo $_POST['game'];

?>
<form action="" method="post">
    <input type="text" name="game"/>
    <input type="submit" name="btn" value="Submit"/>

</form>
