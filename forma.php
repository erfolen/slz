<?php
include 'inc.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=clearStr($_POST['name']);
    $description=clearStr($_POST['description']);
    $status=clearStr($_POST['status']);
    $sql="INSERT INTO zapdel (data, name, description, status) VALUE('$data','$name','$description','$status')";
    mysqli_query($link,$sql) or die(mysqli_error($link));
    header('Location: admin.php');
    exit;
}
?>
<form action="" method="post" >
    <br> <label>Имя:</label><input type="text" name="name"><br>
    <br> <label>Описание:</label><textarea rows="5" cols="60" name="description"></textarea><br>
    <br> <label>Статус:</label>
         <select name="status">
             <option >TODO</option>
             <option >DOING</option>
             <option >DONE</option>
         </select><br>
   <br> <input type="submit" value="Создать">
</form>

