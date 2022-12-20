<?php
    if(isset($_POST['First_name']))
    {
        $server="localhost";
        $user="root";
        $password="KIRTAN@12";
        $database="KIRTAN";
        $connection=mysqli_connect($server,$user,$password,$database);
        if(!$connection)
        {
            die(mysqli_connect_error());
        }
        echo "connected";
        echo "<br>";
        $name = $_POST["First_name"];
        $surname = $_POST["Surname"];
        $number = $_POST["Mobile"];
        $address = $_POST["Address"];
        $password = $_POST["Password"];

        $sql = "INSERT INTO FORM VALUES('$name','$surname','$number','$address','$password')";
        $query = mysqli_query($connection,$sql);
        if($query)
        {
            echo "Inserted";
        }
    }
?>