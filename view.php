<?php
    if(isset($_POST['F_name']))
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
        $name = $_POST["F_name"];

        $sql = "SELECT * FROM form WHERE Name = '$name'";
        $query = mysqli_query($connection,$sql);
        if($query)
        {
            $r = mysqli_fetch_array($query);
            if($r>0)
            {
                echo "<table style='width:100%;'>";
                echo "<tr>";
                echo "<th>";
                echo "Name";
                echo "</th>";

                echo "<th>";
                echo "Surname";
                echo "</th>";

                echo "<th>";
                echo "Number";
                echo "</th>";

                echo "<th>";
                echo "Address";
                echo "</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<th>";
                echo $r['NAME'];
                echo "</th>";

                echo "<th>";
                echo $r['SURNAME'];
                echo "</th>";

                echo "<th>";
                echo $r['NUMBER'];
                echo "</th>";

                echo "<th>";
                echo $r['ADDRESS'];
                echo "</th>";
                echo "</tr>";

                echo "</table>";

                

            }
        }
    }
?>