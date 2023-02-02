<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>edit name</h3>
    <form action="<?= base_url('NamesCrud/edit/'.$user_obj['user_id']);?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="user_id" value="<?= $user_obj['user_id']?>">
        <input type="text" name="firstname" value="<?= $user_obj['firstname']?>">
        <input type="text" name="lastname" value="<?= $user_obj['lastname']?>">
        <br>
        <img src="../uploads/<?= $user_obj['image']?>">
        <input type="file" name="image" value="<?= $user_obj['image']?>">
        <button type="submit">confirm</button>
    </form>

</body>
</html>