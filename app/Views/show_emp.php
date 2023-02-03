<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body{
        background-color:#eeeff4;
    }
    
tr:nth-child(even) {
  background-color: #D2E2EA;
}

</style>
<body>
    <div class="container">
    <h3>ข้อมูลของพนักงาน</h3>
    <form action="<?= base_url('employ')?>" method="post">
        <input type="text" name="research" value="<?= set_value('research');?>" placeholder="Search">
        <button class="btn btn-dark" type="submit">ค้นหา</button>
    </form>

    <form action="<?= base_url('employ')?>" method="post">
    <input type="month" name="search_month" value="<?= set_value('search_month')?>">
    <button class="btn btn-dark" type="submit">ค้นหา</button>
    </form>
    <a class="btn btn-danger mt-5 mb-1"style="border-radius:20px;" href="">reset</a>


<table class="table">
        <thead>
            <tr style="background-color:#006ebb;color:white;">
                <th>เดือน/ปี</th>
                <th>ชื่อ</th>
                <th>แผนก</th>
                <th>ตำแหน่ง</th>
                <th>สถานะ</th>
                <th>เงินเดือน</th>
                <th>จัดการ</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if($em) :?>
                <?php foreach($em as $employ) :?>
                    <tr style="border-color:none;">
                        <td><?php echo $employ['month'];?></td>
                        <td><?php echo $employ['name_emp'];?></td>
                        <td><?php echo $employ['department_emp'];?></td>
                        <td><?php echo $employ['position_emp'];?></td>
                        <td <?php if($employ['status_emp'] == 'ลาออก'){?>style="color:red;"<?php }else{?>style="color:#11ff00;"<?php }?>><?php echo $employ['status_emp'];?></td>
                        <td><?php echo $employ['salary_emp'];?></td>
                        <td><a class="btn btn-danger" style="border-radius:20px;" href="<?= base_url('edituser/'.$employ['id_emp'])?>">แก้ไข</a></td>
                        
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>    
        </tbody>
    </table>
   <a class="btn btn-primary"style="border-radius:20px;" href="<?= base_url('add')?>">เพิ่มข้อมูลพนักงาน</a>
   
   
                </div>
</body>
</html>