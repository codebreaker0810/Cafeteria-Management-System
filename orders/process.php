<?php 
$data=json_decode($_POST['item']);
var_dump( $data);
for($i=0;i<sizeof($data);i++)
{
	echo sizeof($data);

}

?>