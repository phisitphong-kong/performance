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
                <th>id</th>
                <th>name_emp</th>
                <th>department_emp</th>
                <th>position_emp</th>
                <th>status_emp</th>
                <th>salary_emp</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if($em) :?>
                <?php foreach($em as $employ) :?>
                    <tr>
                        <td><input type="hidden" name="id_emp[]" value="<?= $employ['id_emp']?>"><?= $employ['id_emp'];?></td>
                        <td><?php echo $employ['name_emp'];?></td>
                        <td><?php echo $employ['department_emp'];?></td>
                        <td><?php echo $employ['position_emp'];?></td>
                        <td><?php echo $employ['status_emp'];?></td>
                        <td><input type="text" name="salary_emp[]" value="<?= $employ['salary_emp']?>"></td>
                        
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
   <?php echo $sum*(5/100); ?>
   
</body>
</html>