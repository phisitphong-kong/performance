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
    <h3>บันทึกรายรับรายจ่าย</h3>
<table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>รายการ</th>
                <th>เป้าหมาย</th>
                <th>ทำได้จริง</th>
                <th>ขาด-เกิน</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if($re) :?>
                <?php foreach($re as $reven) :?>
                    <tr>
                        <td><?php echo $reven['id_re'];?></td>
                        <td><?php echo $reven['order_re'];?></td>
                        <td><?php echo $reven['goal_re'];?></td>
                        <td><?php echo $reven['possible_re'];?></td>
                        <td <?php if($reven['profitloss_re'] < 0){echo 'style="color:red;"';}else{echo 'style="color:#11ff00;"';}?>><?php echo $reven['profitloss_re'];?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>    
        </tbody>
    </table>
    <h3>รวมเป้าหมาย</h3>
    <?php echo $re_goal;?>
    <h3>รวมที่ทำได้</h3>
    <?php echo $possible;?>
    <h3>รวมขาดเกิน</h3>
    <?php echo $profit;?>
</body>
</html>