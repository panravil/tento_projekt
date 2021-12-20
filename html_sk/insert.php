<?php

    $servername = "";
    $username = "";
    $password = "";
// Parsing connnection string
foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_") !== 0) {
        continue;
    }
    
    $servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

// Create connection
$conn = new mysqli($servername, $username, $password, 'tento_php');

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all 5 values from the form data(input)
    $first_name = $_REQUEST['firstName'];
    $last_name = $_REQUEST['lastName'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $zip_code = $_REQUEST['zipCode'];
    $receipt_code = $_REQUEST['receiptCode'];
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO formdata (firstName,lastName,email,phone,zipCode,receiptCode)  VALUES ('$first_name',
                '$last_name', '$email' , '$phone' , '$zip_code', '$receipt_code' )";
    if (mysqli_query($conn, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$first_name\n $last_name\n "
            . "$gender\n $address\n $email");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);
?>