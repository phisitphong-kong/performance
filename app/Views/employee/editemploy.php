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
    <h3>แก้ไขข้อมูลพนักงาน</h3>
    <form action="<?= base_url('Employ/editemp/'.$user['id_emp']);?>" method="post">
    <input type="hidden" name="id_emp" value="<?= $user['id_emp']?>">
    <table class="table">
        <thead>
            <tr>
                <th>ขื่อ</th>
                <th>แผนก</th>
                <th>ตำแหน่ง</th>
                <th>สถานะ</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="name_emp" value="<?= $user['name_emp']?>"></td>
                <td><input type="text" name="department_emp" value="<?= $user['department_emp']?>"></td>
                <td><input type="text" name="position_emp" value="<?= $user['position_emp']?>"></td>
                <td><input type="hidden" name="status_emp" value="<?= $user['status_emp']?>">
                    <input type="radio" name="status_emp" value="จ้างงาน">จ้างงาน<br>
                    <input type="radio" name="status_emp" value="ลาออก">ลาออก
                </td>
               
            </tr>
        </tbody>
    </table>
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>

</body>
</html>