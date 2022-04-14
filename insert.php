<?php
/**Trying to connect to sqldatabase */
$link = mysqli_connect("localhost", "root", "", "data");
 
/** if it fails display error message */
if($link === false){
    die("Connection to server failed");
}
 
/** Input santisation  to improve security*/
$conn = new mysqli(hostname:'localhost', username:'admin', password:'password', database:'data')
$fname = $conn->real_escape_string($_POST['first_name']);
$lname = $conn->real_escape_string($_POST['last_name']); 
$pnum = $conn->real_escape_string($_POST['pnumber']); 

/**Inserting data to connected table */
$sql = "INSERT INTO data (adata, bdata, cdata) VALUES ('$first_name', '$last_name', '$pnumber')";
if(mysqli_query($link, $sql)){
    echo "Contact added successfully.";
} else{
    echo "Contact record failed.";
}

$query = $mysqli->query("SELECT * FROM data");
if ($result = $mysqli->query($query)){//while the sql dbase has data
    while($row = $result->fetch_assoc()){// we will loop through it to display it
        $data1 = $row["col1"];
        echo $data1 <br>
        $data2 = $row["col2"];
        echo $data2 <br>
        $data3 = $row["col3"];
        echo $data3 <br>
}
}
result->free();
mysqli_close($link);
?>