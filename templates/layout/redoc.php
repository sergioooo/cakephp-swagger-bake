<?php
$this->assign('title', $title);
?>
<!DOCTYPE html>
<html>
<head>
    <!-- REDOC -->
    <title><?php echo $this->fetch('title'); ?></title>
    <!-- needed for adaptive design -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Roboto:300,400,700" rel="stylesheet">

    <!--
    ReDoc doesn't change outer page styles
    -->
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<?php
echo $this->fetch('content');
?>
</body>
</html>