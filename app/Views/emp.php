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
<form action="<?= base_url('Employ/cal');?>" method="post">
    <table class="table">
        <thead>
            <tr>
                <th>ชื่อ</th>
                <th>แผนก</th>
                <th>ตำแหน่ง</th>
                <th>เดือนที่จ้าง</th>
                
            </tr>
        </thead>
        <tbody id="all">
            <tr>
                <td><input type="text" name="name_emp[]" value="<?= set_value('name_emp'); ?>"></td>
                <td><input type="text" name="department_emp[]" value="<?= set_value('department_emp'); ?>"></td>
                <td><input type="text" name="position_emp[]" value="<?= set_value('position_emp'); ?>"></td>
                <td><input type="month" name="datework_emp[]" value="<?= set_value('datework_emp'); ?>"></td>
                <td><button type="button" class="btn btn-success" name="add" id="add">Add</button></td>
            </tr>
        </tbody>
    </table>

    <button class="btn btn-primary" type="submit">confirm</button>
    <a class="btn btn-dark" href="<?= base_url('emp')?>">ย้อนกลับ</a>
</form>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
</body>
</html>
<script>
    $(document).ready(function(){

        var i = 1;
        $('#add').click(function(){
            i++;
            $('#all').append(`<tr id="row`+i+`">
                <td><input type="text" name="name_emp[]" value="<?= set_value('name_emp'); ?>"></td>
                <td><input type="text" name="department_emp[]" value="<?= set_value('department_emp'); ?>"></td>
                <td><input type="text" name="position_emp[]" value="<?= set_value('position_emp'); ?>"></td>
                <td><input type="month" name="datework_emp[]" value="<?= set_value('datework_emp'); ?>"></td>
                <td><button type="button" class="btn btn-danger btn_remove" name="remove" id="`+i+`" >remove</button></td>
            </tr>`);
        });
        $(document).on('click','.btn_remove',function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>