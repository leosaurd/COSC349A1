<?php
/**The general values of the connection, not secure*/
$servername = "192.168.2.13";
$username = "admin";
$password = "password";
$dbname = "init";

/** A log server to test connections, unsure if viable */
$logserver = "192.168.2.12";
$loguser = "root";
$logpass = "";

/** A testing shell ssh script for the connection, to see if it will work to print data to the monitoring server*/
/** Currently disabled due to testing other variables. Purely here as an example of SSH in php to a server, which will then take our data */
/** Considerably inefficient, due to needing multiple SSHes when needing to pull data one by one - using libraries might be better*/
/** shell_exec("SSH " . $loguser . $logserver . $logpass . "echo test");*/

/**the connection that has been generated*/
$conn = new mysqli($servername, $username, $password, $dbname);

/** if it fails display error message */
if($conn->connect_error){
    die("Connection to database failed, " . $conn->connect_error);
}

/** Get values from the index.html */
$first_name = mysqli_real_escape_string($conn, $_REQUEST["fname"]);
$last_name = mysqli_real_escape_string($conn, $_REQUEST["lname"]);
$pnumber = mysqli_real_escape_string($conn, $_REQUEST["pnumber"]);

/**Inserting data to connected table */
$sql = "INSERT INTO data (adata, bdata, cdata) VALUES ('$first_name', '$last_name', '$pnumber')";
if(mysqli_query($conn, $sql)){
    echo "Contact added successfully.";
} else{
    echo "Contact record failed. " . mysqli_error($conn);
}

mysqli_close($conn);
?>
