<?
include 'inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Организация списка личных задач</title>
    <link href="css\bootstrap.min.css" rel="stylesheet">
    <link href="css\main.css" rel="stylesheet">
</head>
<body>
<h1>
    Список задач:
</h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 border">
            <h3>TODO</h3>
        </div>
        <div class="col-sm-4 border">
            <h3>DOING</h3>
        </div>
        <div class="col-sm-4 border">
            <h3>DONE</h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-4 border">
            <ol>
                <?php
                viv_index(TODO);
                ?>
            </ol>
        </div>
        <div class="col-4 border">
            <ol>
                <?php
                viv_index(DOING);
                 ?>
            </ol>
        </div>
        <div class="col-4 border">
            <ol>
                <?php
               viv_index(DONE);
                ?>
            </ol>
        </div>
    </div>
</div>
</body>
</html>