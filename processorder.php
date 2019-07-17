<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Order Processed</title>
<style>
div#content {width:500px; margin:3em auto;}

</style>
</head>

<body>
<div id="content">

<?php 

echo '<h2>Order Processed!</h2>';

$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];

echo '<p>You Ordered ' . $tireqty . ' tire(s). </p>';
echo '<p>You Ordered ' . $oilqty . ' oil can(s). </p>';
echo '<p>You Ordered ' . $sparkqty . ' spark plug(s). </p>';

?>


</div>
<!--

All variables are available in array $_POST['namehere']
$_POST['tireqty']
-->






</body>
</html>