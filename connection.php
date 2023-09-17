<?php
 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
 

$conn = new mysqli($servername,
    $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
 
$sqlquery = "INSERT INTO table VALUES
    ('John', 'Doe', 'john@example.com')"
 
if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn = mysqli_connect("localhost", "root", "", "staff");
         
      
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $first_name =  $_REQUEST['Name'];
        $last_name = $_REQUEST['Telephone'];
        $gender =  $_REQUEST['City'];
  
       
        $sql = "INSERT INTO college  VALUES ('$first_name',
            '$last_name','$gender','$address','$email')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>