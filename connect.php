<?php
if(isset($_POST['submit']))
{
    $name= $_POST['name'];
    $phone=$_POST['phone'];
    $gmail=$_POST['gmail'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    /* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
    $link = mysqli_connect ($host, $username, $password, $dbname);

    // Check connection
    if($link === false){
        die ("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // Attepmt insert query execution
    $sql = "INSERT INTO contact (name, phone, gmail, subject, message) VALUES ('$name', '$phone', '$gmail', '$subject', '$message')";

    // Insert in database
    $record_save = mysqli_query($link, $sql);

    if($record_save){
        echo "Records added successfully. Thank you! We will contact you soon.";
    }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    // Close connection
    mysqli_close($link);
}
?>