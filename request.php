<!DOCTYPE html>
<html>
<body>
<form method="post" action ="<?php echo
$_SERVER['PHP_SELF'];?>">
NAME:<input type="text" name="fname">
<input type="submit">
</form>
<?phpif ($_SERVER["REQUEST_METHOD"] == "POST"){
// collect vaule of input field
$name =
htmlspecialchars($_REQUEST['fname']);
if (emtpy($name)) {
echo "Name is empty";
} else {
echo $name;
}
}
?>
</body>
</html>