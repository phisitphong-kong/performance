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
    <?= $go;?>
    <form action="<?= base_url('Marketing/calper')?>" method="post">
    <input type="text" name="per" value="<?= $per;?>">เปอร์เซ็นการตลาด
    <button type="submit">คำนวณ</button>                
    </form>
    <h3>ผลเปอร์เซ็น</h3>
    <?php echo $go*($per/100);?>
    <form action="<?= base_url('Marketing/cal')?>" method="post">
<table class="table">
        <thead>
            <tr>
                <th>เดือน/ปี</th>
                <th>รายการ</th>
                <th>จำนวนเงิน</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php if($mar) :?>
                <?php foreach($mar as $market) :?>
                    <tr>
                        <td><?php echo $market['date_mar'];?></td>
                        <td><?php echo $market['name_mar'];?></td>
                        <td><?php echo $market['amount_mar'];?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>    
        </tbody>
        <tbody id="all">
        </tbody>
    </table>

    <button type="button" name="add" id="add" class="btn btn-outline-primary">เพิ่มรายการ</button>
    <br>
    <button type="submit" class="btn btn-primary">บันทึก</button>
    </form>                   
    <h3>ผลรวมการตลาด</h3>
    <?= $amount;?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
</body>
</html>
<script>
    $(document).ready(function(){

        var i = 1;
        $('#add').click(function(){
            i++;
            $('#all').append(`<tr id="row`+i+`">
                <td><input type="month" name="date_mar[]" value="<?= set_value('date_mar'); ?>"></td>
                <td><input type="text" name="name_mar[]" value="<?= set_value('name_mar')?>"></td>
                <td><input type="text" name="amount_mar[]" value="<?= set_value('amount_mar')?>"></td>
                <td><button type="button" class="btn btn-outline-danger btn_remove" name="remove" id="`+i+`" >ลบ</button></td>
            </tr>`);
        });
        $(document).on('click','.btn_remove',function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>