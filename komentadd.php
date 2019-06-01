<?php
include 'inc.php';
if (isset($_GET['red'])) {
    $red = abs((int)$_GET['red']);
       if ($red) {
        $sql="SELECT  name, description, status FROM zapdel WHERE zapdel.id='$red'";
        $res = mysqli_query($link, $sql) or die(mysqli_error($link));
        $row = mysqli_fetch_assoc($res);
        }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $komentari_dop=clearStr($_POST['komentari_dop']);
    $sql_dop="INSERT INTO koment (data, komentari, id_zap) VALUE('$data','$komentari_dop','$red')";
    mysqli_query($link,$sql_dop) or die(mysqli_error($link));
    header('Location: admin.php');
    exit;
}
?>
<form action="" method="post" >
    <br> Имя:  <?=$row['name']?><br>
    <br> Описание: <?=$row['description']?><br>
    <br> <label>Статус: <?=$row['status']?></label><br>
    <?php
    $sql_kom="SELECT data, komentari From koment WHERE id_zap='$red'";
    $res_kom = mysqli_query($link, $sql_kom) or die(mysqli_error($link));
    while ($row_kom = mysqli_fetch_assoc($res_kom)) {
        $data=$row_kom['data'];
        $komentari=$row_kom['komentari'];
        echo <<<HTML
        <li>  $data -- $komentari</a></li>
HTML;
    }
    ?>
    <br> <label>Коментарий:</label><textarea rows="5" cols="60" name="komentari_dob"></textarea><br>
    <br> <input type="submit" value="Сохранить">
</form>