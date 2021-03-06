<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">
    <title>Uno Dose</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    
    
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="public_html/css/layouts/side-menu.css">
        <!--<![endif]-->
</head>

<body>
<div>
<?php
    include ( 'public_html/side-menu.php');
?>

</div>

<div>
    <?php
        include ('public_html/home.php');
    ?>
</div>

</body>

<?php    
    include ('public_html/error.php');
?>

</html>