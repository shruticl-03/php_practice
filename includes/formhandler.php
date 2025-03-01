<?php


// var_dump($_SERVER["REQUEST_METHOD"]);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritefruit = htmlspecialchars($_POST["favouritefruit"]);


    if (empty($firstname)) {
        exit();
        header("Location:../4.form.php");
    }

    echo "These are the data:";
    echo "<br>";
    echo "My name is: $firstname $lastname";
    echo "<br>";
    echo "My favourite fruit is: ";
    echo $favouritefruit;

    // header("Location:../4.form.php");
} else {
    header("Location:../4.form.php");
}
