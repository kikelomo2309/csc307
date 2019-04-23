<!DOCTYPE html>
<html>
<body>
<?php
function myTest() {
    $x = 5; // local scope
    echo "<p>variable x inside function is: $x</p>";
}
myTest();
// using x outside the function will generate an error
echo "<p>variable x outside function is: $x</p>";
?>
</body>
</html>
    

