<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>เข้าสู่ระบบ</h3>
    <?php if(session()->getFlashdata('msg')): ?>
        <div><?= session()->getFlashdata('msg'); ?></div>
    <?php endif; ?>
    <form action="<?= base_url('login/check')?>" method="post">
    <input type="email" name="email" value="<?= set_value('email'); ?>">อีเมล
    <span><?= isset($validation) ? display_error($validation,'email') : ''?></span>
    <br>
    <input type="password" name="password">รหัสผ่าน
    <span><?= isset($validation) ? display_error($validation,'password') : ''?></span>
    <br>
    <button type="submit">เข้าสู่ระบบ</button>
    </form>
</body>
</html>