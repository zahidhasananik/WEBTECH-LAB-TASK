<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="int/php" href="style.php">

</head>

<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <input type="text" name="uname" placeholder=""><br>

         <button type="submit">Submit</button>

     </form>

</body>

</html>

<?php
echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td>" . 15 . "</td>";
    echo "<td>" . "x" . "</td>";
    echo "<td>" . $i . "</td>";
    echo "<td>" . "=" . "</td>";
    echo "<td>" . 15*$i . "</td>";
    echo "</tr>";
}
echo "</table>";
?>