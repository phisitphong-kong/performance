<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h3>บันทึกการตลาด</h3>
    <h3>ผลรวมเป้าหมาย</h3>
    <?= $possible;?>
    <form action="<?= base_url('Marketing/calper')?>" method="post">
    <input type="text" name="per" value="<?= $per;?>">เปอร์เซ็นการตลาด
    <button type="submit">คำนวณ</button>                
    </form>
    <h3>ผลเปอร์เซ็น</h3>
    <?php echo $possible*($per/100);?>
<table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>รายการ</th>
                <th>จำนวนเงิน</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php if($mar) :?>
                <?php foreach($mar as $market) :?>
                    <tr>
                        <td><?php echo $market['id_mar'];?></td>
                        <td><?php echo $market['name_mar'];?></td>
                        <td><?php echo $market['amount_mar'];?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>    
        </tbody>
    </table>
    <h3>ผลรวมการตลาด</h3>
    <?= $amount;?>
</body>
</html>