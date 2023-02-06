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
    <h3>บันทึกต้นทุนสินค้า</h3>
    <form action="<?= base_url('Cgs/cal')?>" method="post">
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
            <?php if($csg) :?>
                <?php foreach($csg as $csg_show) :?>
                    <tr>
                        <td><?= $csg_show['datecgs'];?></td>
                        <td><?= $csg_show['order_cgs'];?></td>
                        <td><?= $csg_show['goal_cgs'];?></td>
                        <td><?= $csg_show['possible_cgs'];?></td>
                        <td <?php if($csg_show['profitloss_cgs'] < 0){echo 'style="color:red;"';}else{echo 'style="color:#11ff00;"';}?>><?= $csg_show['profitloss_cgs'];?></td>
                        <td><a href="<?= base_url('del_cgs/'.$csg_show['id_cgs'])?>" class="btn btn-danger">ลบ</a></td>
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
    <?php echo $go_csg;?>
    <h3>รวมที่ทำได้</h3>
    <?php echo $possible_cs;?>
    <h3>รวมขาดเกิน</h3>
    <?php echo $profit_cs;?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
</body>
</html>
<script>
    $(document).ready(function(){

        var i = 1;
        $('#add').click(function(){
            i++;
            $('#all').append(`<tr id="row`+i+`">
                <td><input type="month" name="date_cgs[]" value="<?= set_value('date_cgs'); ?>"></td>
                <td><input type="text" name="order_cgs[]" value="<?= set_value('order_cgs')?>"></td>
                <td><input type="text" name="goal_cgs[]" value="<?= set_value('goal_cgs')?>"></td>
                <td><input type="text" name="possible_cgs[]" value="<?= set_value('possible_cgs')?>"></td>
                <td><button type="button" class="btn btn-outline-danger btn_remove" name="remove" id="`+i+`" >ลบ</button></td>
            </tr>`);
        });
        $(document).on('click','.btn_remove',function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>