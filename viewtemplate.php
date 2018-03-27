<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kenta Generator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="header">
            <ul class="nav nav-pills pull-right">
                <li><a href="kenta.php">Home</a>
                </li>
                <li class="active"><a href="?action=template">View Template</a>
                </li>
            </ul>
            <h3 class="text-muted">Kenta Generator</h3>
        </div>
        <div class="jumbotron">
<?php
$template = file_get_contents('template.txt');
echo nl2br($template);
?>
        </div>
        <div class="footer">
            <p>&copy; Mtwerkers 2014</p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>