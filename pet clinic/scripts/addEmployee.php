<?php
include_once("./includes/db_config.php");

if (isset($_POST['Submit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $num = mysqli_real_escape_string($mysqli, $_POST['num']);
    $psw = mysqli_real_escape_string($mysqli, $_POST['psw']);


    if (empty($name) || empty($num) || empty($psw)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if (empty($num)) {
            echo "<font color='red'>Phone number field is empty.</font><br/>";
        }

        if (empty($psw)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }

        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {

        $result = mysqli_query($mysqli, "INSERT INTO employee(name,number) VALUES('$name','$num')");
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
