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
    <h3>บันทึกต้นทุนบริหาร-จัดการ</h3>
    <form action="<?= base_url('Sga/cal')?>" method="post">
<table class="table">
        <thead>
            <tr>
                <th>เดือน/ปี</th>
                <th>รายการ</th>
                <th>เป้าหมาย</th>
                <th>ทำได้จริง</th>
                <th>ขาด-เกิน</th>
                
               
            </tr>
        </thead>
        <tbody>
            <?php if($sga) :?>
                <?php foreach($sga as $sga_show) :?>
                    <tr>
                        <td><?= $sga_show['datesga'];?></td>
                        <td><?= $sga_show['order_sga']; if($sga_show['order_sga'] == 'ค่าการตลาด'){;?>  (<?= $per;?>%)<?php }?></td>
                        <td><?= $sga_show['goal_sga'];?></td>
                        <td><?= $sga_show['possible_sga'];?></td>
                        <td <?php if($sga_show['profitloss_sga'] < 0){echo 'style="color:red;"';}else{echo 'style="color:#11ff00;"';}?>><?= $sga_show['profitloss_sga'];?></td>
                        <td><?php if($sga_show['id_sga']>12) :?><a href="<?= base_url('del_sga/'.$sga_show['id_sga'])?>" class="btn btn-danger">ลบ</a><?php endif; ?></td>
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
    <?php echo $go_sga;?>
    <h3>รวมที่ทำได้</h3>
    <?php echo $possible_sga;?>
    <h3>รวมขาดเกิน</h3>
    <?php echo $profit_sga;?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
</body>
</html>
<script>
    $(document).ready(function(){

        var i = 1;
        $('#add').click(function(){
            i++;
            $('#all').append(`<tr id="row`+i+`">
                <td><input type="month" name="date_sga[]" value="<?= set_value('date_sga'); ?>"></td>
                <td><input type="text" name="order_sga[]" value="<?= set_value('order_sga')?>"></td>
                <td><input type="text" name="goal_sga[]" value="<?= set_value('goal_sga')?>"></td>
                <td><input type="text" name="possible_sga[]" value="<?= set_value('possible_sga')?>"></td>
                <td><button type="button" class="btn btn-outline-danger btn_remove" name="remove" id="`+i+`" >ลบ</button></td>
            </tr>`);
        });
        $(document).on('click','.btn_remove',function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>