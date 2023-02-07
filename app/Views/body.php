<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://kit.fontawesome.com/f3ebb4cd40.css" crossorigin="anonymous">    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap"rel="stylesheet"/>
    <link href="https://css.gg/css?=" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"crossorigin="anonymous"></script>
    <title>เข้าสู่ระบบ</title>
    <style>
        * {
          font-family: 'Krub', sans-serif;
        }
        body{
            background-color: #006EBB;
        }
        #button_1 {
            background-color: #006EBB;
            color: white;
            transition: background-color 1s ease;
            transition: border-color 1s ease;
            transition: color 0.7s ease;
            border-radius: 25px;
            font-family: "Prompt", sans-serif;
        }
        #button_1:hover {
            background-color: white;
            border-color: #006EBB;
            color: #006EBB;
        }
        #btn_back{
            border-color: #ffffff;
            color: #ffffff;
            transition: background-color 1s ease;
            transition: border-color 1s ease;
            border-radius: 25px;
            transition: color 0.7s ease;
            border-width: 3px;
            font-family: "Prompt", sans-serif;
        }
        #btn_back:hover{
            background-color: #ffffff;
            color: #006EBB;
            border-width: 3px;
        }
        #text{
          font-family: "Prompt", sans-serif;
        }
        #re{
          color: red;
          transition: color 0.7s ease;
        }
        #re:hover{
          color: royalblue;
        }
        
        
        
    </style>
</head>
<body>
    <button class="btn btn-outline-danger btn-lg mt-4 ms-3" id="btn_back"> <b><</b> ย้อนกลับ</button>
    <div class="justify-content-center align-content-center">
        <div class="d-flex align-items-center justify-content-center gap-3 me-5 mb-0 ">
          <img src="svg/login/logo.svg" alt="" height="70%">
          <p class=" h1 d-flex text-center" id="text" style="color: #ffffff;"> Corporate Performance</p> 
        </div>
    <div class="container mt-2">
        <div class="row justify-content-center align-content-center">
          <div class="col-8 text-start mb-5" style="background-color: #ffffff;border-radius: 25px; box-shadow: #C8C8C8 3px 3px;">
            <!-- text body -->
            <div class="d-flex align-items-center justify-content-center gap-3 mt-5 mb-4 ">
            <p class=" fs-1 d-flex text-center h1" id="text" style="color: #006EBB">เข้าสู่ระบบ</p> 
            </div>

            <div class="row">
            <div class="col-8 mx-auto">
            <div class="form-floating mb-4">
                <input style="border-radius: 25px;border-width: 2px;" type="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label class="ms-2" style="color: #939191;" for="floatingInput">อีเมล</label>
              </div>
              <div class="form-floating mb-4">
                <input style="border-radius: 25px;border-width: 2px;" type="password" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label class="ms-2" style="color: #939191;" for="floatingInput">รหัสผ่าน</label>
              </div>
              <!-- captcha -->
              <!-- <div class="col d-flex ">
                <div class="col d-flex">
                    <div class="col-10 form-floating mb-3 align-items-center justify-content-center me-2">
                        <input style="border-radius: 25px;border-width: 1.5px;" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label class="ms-2" for="floatingInput" style="color: #939191;">กรุณากรอกรหัส CAPTCHA</label>
                    </div>
                    <div class="col-1 d-grid gap-2 col-4 justify-content-start mb-2 " >
                        <button  class="btn btn-primary h-75 mt-2" style="border-radius: 25px;" id="button_1">ส่งรหัส</button>
                    </div>
                </div>
            </div> -->
              
              <button class="mt-3 btn btn-primary d-grid w-25 col mx-auto fs-5 mb-3" type="button" id="button_1" >เข้าสู่ระบบ</button>
              <p class="text-center mb-5 fs-6">คุณยังไม่มีบัญชีใช่หรือไม่? <span><a href="" id="re">สมัครสมาชิก</a></span></p>
            
            </div>
            
  
          </div>
            
            
          </div>        
        </div>  
    </div>
  </div>
</body>
</html>