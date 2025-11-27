<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        background-color: #eaeaea;
        border-radius: 20px;
        margin-top: 20%;
        margin-left: 50%;
        transform:translateX(-50%);
    }
    input{
        padding: 10px;
        font-size: large;
        border-radius: 10px;
        border:1.5px solid grey;
    }
    input:focus{
        outline:none;

    }
    input[type="submit"]{
        width: 100%;
        background-color: rgb(87, 204, 87);
    }
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
    th{
        font-size: x-large;
    }
</style>
<body>
    <form method="post">
    <table style="padding: 20px; text-align: left; ">
        <tr>
            <th>Create account</th>
        </tr>
            <tr>
                <td>
                    <input type="text" required name="email" placeholder="email">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" required name="pass1" placeholder="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" required name="pass2" placeholder="confirm- password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit">
                </td>
            </tr>
    </table>
</form>

    <?php
        if(isset($_POST['submit'])){
            $pass1=$_POST['pass1'];
            $pass2=$_POST['pass2'];

            if(strlen($pass1)<8){
                echo"<script>alert('password must be 8 char long');</script>";
            }
            else{
                if($pass1==$pass2){
                header("location:databse.php");                
                exit();
            }
                else{
                echo"<script>alert('error');</script>";
                }
            }
        }
    ?>
</body>
</html>