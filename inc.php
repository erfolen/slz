<?php
// Основные настройки
define(DB_HOST,'Localhost');
define(DB_LOGIN,'root');
define(DB_PASSWORD,'');
define(DB_NAME,'myzap');
$link=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
function clearStr ($date){
    global $link;
    return mysqli_real_escape_string($link,(strip_tags($date)));
}
$data=strftime('%Y-%m-%d');
/**
 * @param $date
 */
function viv($date){
    global $link;
    $sql="SELECT id, data, name, description FROM zapdel WHERE status ='$date' ORDER BY data ";
    $res=mysqli_query($link,$sql) or die(mysqli_error($link));
    while ($row = mysqli_fetch_assoc($res)){
        $id = $row['id'];
        $name = $row['name'];
        $data = $row['data'];
        $description = $row['description'];
        $sql_count="SELECT COUNT(komentari) AS count FROM koment WHERE id_zap='$id'";
        $res_count=mysqli_query($link,$sql_count) or die(mysqli_error($link));
        $count_zap=mysqli_fetch_assoc($res_count);
        $count_zap=$count_zap['count'];
        echo <<<HTML
<li> $data -- $name -- $description -- $count_zap <p align="right"><a href="komentadd.php?red=$id">Добавить комментарий</a> | <a href="redactor.php?red=$id">Изменить статус</a></li>
HTML;
    }
}
function viv_index($date): string
{
    global $link;
    $sql="SELECT id, data, name, description FROM zapdel WHERE status ='$date' ORDER BY data ";
    $res = mysqli_query($link,$sql) or die(mysqli_error($link));
    while ($row = mysqli_fetch_assoc($res)){
        $id = $row['id'];
        $name = $row['name'];
        $data = $row['data'];
        $description = $row['description'];
        $sql_count="SELECT COUNT(komentari) AS count FROM koment WHERE id_zap='$id'";
        $res_count=mysqli_query($link,$sql_count) or die(mysqli_error($link));
        $count_zap=mysqli_fetch_assoc($res_count);
        $count_zap=$count_zap['count'];
        echo <<<HTML
<li> $data -- $name -- $description -- $count_zap </li>
HTML;
    }
}