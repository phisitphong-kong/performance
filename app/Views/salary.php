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
    <h3>บันทึกเงินเดือนของพนักงาน</h3>
    <form action="<?= base_url('employ/updatesalary')?>" method="post">
<table class="table">
        <thead>
            <tr>
                <th>เดือน/ปี</th>
                <th>ชื่อ</th>
                <th>แผนก</th>
                <th>ตำแหน่ง</th>
                <th>เงินเดือน</th>
                <th>ค่าประกันสังคม</th>
                <th>เงินเดือนที่หักประกันสังคม</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if($em) :?>
                <?php foreach($em as $employ) :?>
                    <tr>
                        <td><input type="hidden" name="id_emp[]" value="<?= $employ['id_emp']?>"><?= $employ['datework_emp'];?></td>
                        <td><?php echo $employ['name_emp'];?></td>
                        <td><?php echo $employ['department_emp'];?></td>
                        <td><?php echo $employ['position_emp'];?></td>
                        <td><input type="text" name="salary_emp[]" value="<?= $employ['salary_emp']?>" required></td>
                        <td><input type="text" name="security_emp[]" value="<?= $employ['security_emp']?>"></td>
                        <td><?= $employ['totalsalary_emp']?></td>
                        
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>    
        </tbody>
    </table>
    <button class="btn btn-success" type="submit">บันทึก</button>
    </form>
    <h3>รวม</h3>
    <?php echo $sum;?>
    <h3>จ่ายประกันสังคม</h3>
   <?php echo $security; ?>
    <h3>รวมเงินเดือนที่หักประกันสังคม</h3>
   <?php echo $total; ?>
   
</body>
</html>