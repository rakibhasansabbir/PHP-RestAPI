<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$project = explode('/', $_SERVER['REQUEST_URI'])[1];
//$ids = isset($_GET['id']) ? $_GET['id'] : die();
//$json_string = file_get_contents("http://localhost/".$project."/server/read_one.php?id=".$ids);
//$value = json_decode($json_string);

?>

<div class="container">
    <h1>Check Status</h1>

<!--    --><?php //foreach ($value->data as $idx => $data): ?>
        <form action="http://localhost/<?php echo $project?>/client/clientView.php?id={id}" method="get">

            <div class="form-group">
                <label for="paidAmount">StudentID:</label>
                <input type="text" class="form-control"  name="id" placeholder="Place your id here Ex: 1/2/3....">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

        </form>

<!--    --><?php //endforeach; ?>

</div>


</body>
</html>