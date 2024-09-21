<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

    
        .Father{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Son{
            background-color:  rgb(127, 63, 84);
            border-radius: 20px;
            padding: 30px;
            color: white;
        }

        input{
            font-size: 20px;
            padding: 5px 10px;
            margin-top: 5px;
            border: none;
            outline: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="Father">
        <div class="Son">

            <h1>Insert data</h1>

            <form action="" method="post">
            <input type="text" placeholder="Enter id" id="" name="no1"><br>
            <input type="text" placeholder="Enter name"  name="no2"><br>
            <input type="Submit" value="Insert" name="Savekaro">
            </form>
            
        </div>
    </div>
    
</body>
</html>

<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "color";

     $locations = mysqli_connect("localhost","root","","color");

     if(isset($_POST["Savekaro"])){
          
        $a = $_POST["no1"];
        $b = $_POST["no2"];

        $mys = "insert into my_color(id, name) values('$a','$b')";

        mysqli_query($locations,$mys);

        echo "<script>alert('Data Inserted !')</script>";
    
    }

    $abc = "select * from my_color";

    $c = mysqli_query($locations, $abc);

    while($mydata = mysqli_fetch_array($c)){

        echo $mydata[0],". " ,$mydata[1], "<br>";
        }

?>