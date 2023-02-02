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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"crossorigin="anonymous"></script>
    <title>Navbar</title>
</head>
<style>
   * {
        font-family: "Prompt", sans-serif;
      }
      #button {
        background-color: #A8B5C0;
        border-color: #A8B5C0;
        color: #002646;
        transition: background-color 0.7s ease;
        transition: border-color 0.7s ease;
        transition: color 2s ease;
        border-radius: 25px;
      }
      #button:hover {
        background-color: white;
        color: #002646;
        border-color: white;
      }
</style>
<body>
    <!-- navbar -->
    <nav
      class="navbar navbar-expand-lg"
      style="background-color: #002646; height: 55px"
    >
      <div class="container-fluid">
        <a class="navbar-brand position-absolute" style="color: white;">
          <!-- logo -->
          <img
            src="../uploads/logo.png"
            alt=""
            style="width: 50px; height: auto; "
          />Corporate Performance
          
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end container-fluid"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav">
            <a class="nav-link ms-3"  href="#" style="color: white"
              >หน้าหลัก</a
            >
            <a class="nav-link ms-3" href="" style="color: white">เกี่ยวกับเรา</a>
            <a class="nav-link ms-3" href="" style="color: white"
              >ติดต่อเรา</a
            >
            <a
              class="nav-link btn btn-primary ms-3 me-5"
              id="button" type="button"
              href="#"
              >เข้าสู่ระบบ</a
            >
          </div>
        </div>
      </div>
    </nav>
    
</body>
</html>