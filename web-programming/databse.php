<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("con.php");
    
    $sql="SELECT*FROM your_table";
    $res=mysqli_query($con,$sql);
    if($res){
        if(mysqli_num_rows($res)>0){
        echo"<table border='1'>";
        while($row=mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo "<td>". $row['id']."</td>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['email']."</td>";
            echo "</tr>";
        }
    echo"</table>";
    }
    else{
            echo"mo data";
        }
    }
    else{
        echo"error";
    }
    
    ?>
</body>
</html>