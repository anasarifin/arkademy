<?php
require '../change_me.php';

$xCashier = $_POST["cashier"];
$product = $_POST["product"];
$category = intval($_POST["category"]);
$price = intval($_POST["price"]);

$cashier = mysqli_fetch_assoc(mysqli_query($db, "SELECT id FROM cashier WHERE name = '$xCashier'"))["id"];

if ($cashier == NULL) {mysqli_query($db, "INSERT INTO cashier VALUES ('', '$xCashier')");};

$cashier = mysqli_fetch_assoc(mysqli_query($db, "SELECT id FROM cashier WHERE name = '$xCashier'"))["id"];

mysqli_query($db, "INSERT INTO product VALUES
                ('', '$product', '$price', '$category', '$cashier')");

echo "<script>
document.location.href = '../index.php'
</script>"

?>