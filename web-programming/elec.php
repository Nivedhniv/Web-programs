<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        font-weight: bold;
        font-size: x-large;
        font-family: Arial, Helvetica, sans-serif;
        border:1px solid black;
        padding:10px;
        border-radius:10px;
        }
        td{
            padding:10px;
        }
    input{
        padding: 20px;
        font-weight: bold;
        font-size: x-large;
    }
    input[type="submit"]{
       width: 100%; 
    }
</style>
<body>
    <form method="post">
        <table>
            <tr><th>Calculate</th></tr>
            <tr><td><input type="text" name="con-no" required placeholder="consumer number"></td></tr>
            <tr><td><input type="number" name="units" required placeholder="units used"></td></tr>
            <tr><td><input type="submit" name="submit" value="submit"></td></tr>
        </table>
        <br><br>
        <?php
            if(isset($_POST['submit'])){
                $consumer=$_POST['con-no'];
                $unit=$_POST['units'];
                $cost=(($unit*1.5)+320)." Rs";
                echo"<table>
                <tr><th>Electricity Bill</th></tr>
                <tr><td>Name</td><td>:<input type='text' value='name' readonly ></td></tr>
                <tr><td>Consumer no </td><td>:<input type='number'value='".$consumer."' readonly ></td></tr>
                <tr><td>Taxes </td><td>:<input type='text' value='320 Rs' readonly ></td></tr>                
                <tr><td>Total bill amount </td><td>:<input type='text' value='".$cost."' readonly ></td></tr>
                </table>";
            }
        ?>
</body>
</html>