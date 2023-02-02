<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php base_url('name')?>" method="post">

    <input type="submit">...
    </form>
</body>
</html>
<?php 
function name(){
    echo 'name';
}
?>