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
    <h3>บันทึกต้นทุนบริการ</h3>
    <form action="<?= base_url('Service/cal')?>" method="post">
<table class="table">
        <thead>
            <tr>
                <th>เดือน/ปี</th>
                <th>รายการ</th>
                <th>เป้าหมาย</th>
                <th>ทำได้จริง</th>
                <th>ขาด-เกิน</th>
                <th>จัดการ</th>
               
            </tr>
        </thead>
        <tbody>
            <?php if($ser) :?>
                <?php foreach($ser as $service) :?>
                    <tr>
                        <td><?= $service['dateser'];?></td>
                        <td><?= $service['order_ser'];?></td>
                        <td><?= $service['goal_ser'];?></td>
                        <td><?= $service['possible_ser'];?></td>
                        <td <?php if($service['profitloss_ser'] < 0){echo 'style="color:red;"';}else{echo 'style="color:#11ff00;"';}?>><?= $service['profitloss_ser'];?></td>
                        <td><a href="<?= base_url('del_ser/'.$service['id_ser'])?>" class="btn btn-danger">ลบ</a></td>
                    </tr>  
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
        
        <tbody id="all">
        </tbody>
    </table>
    <button type="button" class="btn btn-outline-primary" name="add" id="add">เพิ่มรายการ</button>
    <br>
    <button type="submit" class="btn btn-primary">บันทึก</button>
    </form>
    <h3>รวมเป้าหมาย</h3>
    <?php echo $go_ser;?>
    <h3>รวมที่ทำได้</h3>
    <?php echo $possible_ser;?>
    <h3>รวมขาดเกิน</h3>
    <?php echo $profit_ser;?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
</body>
</html>
<script>
    $(document).ready(function(){

        var i = 1;
        $('#add').click(function(){
            i++;
            $('#all').append(`<tr id="row`+i+`">
                <td><input type="month" name="date_ser[]" value="<?= set_value('date_ser'); ?>"></td>
                <td><input type="text" name="order_ser[]" value="<?= set_value('order_ser')?>"></td>
                <td><input type="text" name="goal_ser[]" value="<?= set_value('goal_ser')?>"></td>
                <td><input type="text" name="possible_ser[]" value="<?= set_value('possible_ser')?>"></td>
                <td><button type="button" class="btn btn-outline-danger btn_remove" name="remove" id="`+i+`" >ลบ</button></td>
            </tr>`);
        });
        $(document).on('click','.btn_remove',function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>