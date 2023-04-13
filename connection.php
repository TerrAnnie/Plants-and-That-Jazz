<?php





function getLink(){
    $server_name = "localhost";
    $username ="root";
    $password = "";

    $connection = new mysqli($server_name, $username, $password);
    
if ($connection-> connect_error){
    die("Connection failed: ". $connection->connect_error);
}
else{
    echo "Connected Succesfully";
}
    return $connection;
}



function query($query){
    return mysqli_query(getlink(), $query);
    
    
}

?>