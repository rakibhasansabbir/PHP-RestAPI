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
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }


        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>
<?php
$project = explode('/', $_SERVER['REQUEST_URI'])[1];
$ids = isset($_GET['id']) ? $_GET['id'] : die();
$json_string = file_get_contents("http://localhost/".$project."/server/read_one.php?id=".$ids);
$value = json_decode($json_string);

?>

<div class="container ">

    <?php foreach ($value->data as $idx => $data): ?>


        <div class="card">

            <h1><?php echo $data->name ?></h1>
            <p class="title"><b>Address: </b><?php echo $data->address ?></p>
            <p><b>Student ID : </b> <?php echo $data->student_id ?></p>
            <p><b>Payment status : </b> <?php echo $data->feesStatus ?></p>
            <p>
                <small><b>Total amount : </b> <?php echo $data->feesAmount ?> &nbsp &nbsp </small>
                <small><b>Paid amount : </b><?php echo $data->paidAmount ?> &nbsp &nbsp</small>
                <small><b>Due amount : </b><?php echo $data->dueAmount ?></small>
            </p>

            <p>
                <a class="btn btn-danger" href="http://localhost/<?php echo $project?>/client/index.php">Back</a>
                <a class="btn btn-success" href="http://localhost/<?php echo $project?>/client/clientPayment.php?id=<?php echo $data->student_id ?>" class="btn btn-info">Update Payment</a>
        </div>

    <?php endforeach; ?>

</div>


</body>
</html>