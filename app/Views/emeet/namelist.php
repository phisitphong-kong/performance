<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>user_id</th>
                <th>firstname</th>
                <th>lastname</th>
            </tr>
        </thead>
        <tbody>
            <?php if($user) :?>
                <?php foreach($user as $us) :?>
                    <tr>
                        <td><?php echo $us['user_id'];?></td>
                        <td><?php echo $us['firstname'];?></td>
                        <td><?php echo $us['lastname'];?></td>
                        <td><img src="../uploads/<?= $us['image']?>"></td>
                        <td><a href="<?= base_url('editname/'.$us['user_id']); ?>">edit</a></td>
                        <td><a href="<?php echo base_url('delete/'.$us['user_id']); ?>">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>    
        </tbody>
    </table>
</body>
</html>