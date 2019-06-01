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
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            <form method="LINK" action="/forma.php">
                <input type="submit" class="btn btn-primary btn-lg zak" value="Создать задачу">
            </form>
        </div>
    </div>
</div>
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
                viv(TODO);
                ?>
            </ol>
        </div>
        <div class="col-4 border">
             <ol>
                 <?php
                viv(DOING);
                 ?>
            </ol>
        </div>
        <div class="col-4 border">
            <ol>
                <?php
               viv(DONE);
                ?>
            </ol>
        </div>
    </div>
</div>
</body>
</html>