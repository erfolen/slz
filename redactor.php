<?php
include 'inc.php';
if (isset($_GET['red'])) {
    $red = abs((int)$_GET['red']);
    if ($red) {
        $sql = "SELECT id, data, name, description, status FROM zapdel WHERE  id='$red'";
        $res = mysqli_query($link, $sql) or die(mysqli_error($link));
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $name = $row['name'];
            $description = $row['description'];
            $status=$row['status'];
        }
    }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $status=clearStr($_POST['status']);
    $sql="UPDATE zapdel SET status='$status' WHERE id='$id'";
    mysqli_query($link,$sql) or die(mysqli_error($link));
    header('Location: admin.php');
    exit;
}
?>
<form action="" method="post" >
    <br> Имя:  <?=$name?><br>
    <br> Описание: <?=$description?><br>
    <br> <label>Статус: <?=$status?></label>
    <select name="status">
        <option >TODO</option>
        <option >DOING</option>
        <option >DONE</option>
    </select><br>
    <br> <input type="submit" value="Сохранить">
</form>