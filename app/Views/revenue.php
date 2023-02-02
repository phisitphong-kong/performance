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
    <form action="<?= base_url('Revenue/cal')?>" method="post">
<table class="table">
        <thead>
            <tr>
                
                <th>รายการ</th>
                <th>เป้าหมาย</th>
                <th>ทำได้จริง</th>
               
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td><input type="text" name="order_re[]" value="<?= set_value('order_re')?>"></td>
                <td><input type="text" name="goal_re[]" value="<?= set_value('goal_re')?>"></td>
                <td><input type="text" name="possible_re[]" value="<?= set_value('possible_re')?>"></td>
                
            </tr>
            <tr>
                <td><input type="text" name="order_re[]" value="<?= set_value('order_re')?>"></td>
                <td><input type="text" name="goal_re[]" value="<?= set_value('goal_re')?>"></td>
                <td><input type="text" name="possible_re[]" value="<?= set_value('possible_re')?>"></td>
            
            </tr>
             
        </tbody>
    </table>
    <button type="submit">บันทึก</button>
    </form>
    

   
</body>
</html>