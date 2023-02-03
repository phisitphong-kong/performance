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
                <th>เดือน/ปี</th>
                <th>รายการ</th>
                <th>เป้าหมาย</th>
                <th>ทำได้จริง</th>
                <th>ขาด-เกิน</th>
                <th>จัดการ</th>
               
            </tr>
        </thead>
        <tbody>
            <?php if($re) :?>
                <?php foreach($re as $resub) :?>
                    <tr>
                        <td><?= $resub['dateadd_re'];?></td>
                        <td><?= $resub['order_re'];?></td>
                        <td><?= $resub['goal_re'];?></td>
                        <td><?= $resub['possible_re'];?></td>
                        <td <?php if($resub['profitloss_re'] < 0){echo 'style="color:red;"';}else{echo 'style="color:#11ff00;"';}?>><?= $resub['profitloss_re'];?></td>
                        <td><a href="<?= base_url('deletes/'.$resub['id_re'])?>" class="btn btn-danger">ลบ</a></td>
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
    <?php echo $re_goal;?>
    <h3>รวมที่ทำได้</h3>
    <?php echo $possible;?>
    <h3>รวมขาดเกิน</h3>
    <?php echo $profit;?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
</body>
</html>
<script>
    $(document).ready(function(){

        var i = 1;
        $('#add').click(function(){
            i++;
            $('#all').append(`<tr id="row`+i+`">
                <td><input type="month" name="dateadd_re[]" value="<?= set_value('dateadd_re'); ?>"></td>
                <td><input type="text" name="order_re[]" value="<?= set_value('order_re')?>"></td>
                <td><input type="text" name="goal_re[]" value="<?= set_value('goal_re')?>"></td>
                <td><input type="text" name="possible_re[]" value="<?= set_value('possible_re')?>"></td>
                <td><button type="button" class="btn btn-outline-danger btn_remove" name="remove" id="`+i+`" >ลบ</button></td>
            </tr>`);
        });
        $(document).on('click','.btn_remove',function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>