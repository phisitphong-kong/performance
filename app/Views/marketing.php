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
    <form action="<?= base_url('Marketing/cal')?>" method="post">
<table class="table">
        <thead>
            <tr>
                
                <th>รายการ</th>
                <th>จำนวนเงิน</th>
               
               
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td><input type="text" name="name_mar[]" value="<?= set_value('name_mar')?>"></td>
                <td><input type="text" name="amount_mar[]" value="<?= set_value('amount_mar')?>"></td>
            </tr>
            <tr>
                <td><input type="text" name="name_mar[]" value="<?= set_value('name_mar')?>"></td>
                <td><input type="text" name="amount_mar[]" value="<?= set_value('amount_mar')?>"></td>
            </tr>
             
        </tbody>
    </table>

    <button type="submit">บันทึก</button>
    </form>
    

   
</body>
</html>