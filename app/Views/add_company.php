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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />


    <title>เพิ่มข้อมูลบริษัท</title>
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
            transition: width 5s ease;
            border-radius: 25px;
            transition: color 0.7s ease;
            border-width: 2px;
            font-family: "Prompt", sans-serif;
        }
        #btn_back:hover{
            background-color: #ffffff;
            color: #006EBB;
        }
        #text{
          font-family: "Prompt", sans-serif;
        }
        
        
        
    </style>
</head>
<body>
    <!--  -->
    <form action="<?= base_url('Business/insert')?>" method="post">
        <div class="row">

            <div class="col justify-content-center align-content-center" style="background-color: #006EBB;width: 100%;height: 100%;">
                <button class="btn btn-outline-primary btn-lg mt-5 ms-5 mb-3" id="btn_back"> <b><</b> ย้อนกลับ</button>
                    <div class="d-flex align-items-center justify-content-center gap-3 mb-0">
                        <img src="uploads/logo.svg" alt="" height="50%">
                        <p class=" h1 d-flex text-center" id="text" style="color: #ffffff;">Corporate Performance</p> 
                    </div>
                        <div class=" mt-0 d-flex justify-content-center">
                            <img src="uploads/img.svg" alt="">
                        </div>
            </div>

                <div class="container col justify-content-center" style="background-color: #ffffff;width: 100%;height: auto;border-radius: 20px 0px 0px 20px;" >
                    <div style="height: 80px;"></div>
                    <p class="mt-5 h1 ms-5 text-center" id="text">กรุณาระบบข้อมูลธุรกิจ</p>
                    <p class="text-start ms-5 mt-3 fs-4">เลือกรูปแบบธุรกิจ :</p>

                        <div class="col  gap-2 justify-content-start ms-5 mb-5 fs-4">
                            <div class="form-check ms-5">
                                <input class="form-check-input ms-5" type="radio" name="type_bu" id="flexRadioDefault1" value="ห้างหุ้นส่วน/บริษัทจำกัด">
                                <label class="form-check-label ms-2" for="flexRadioDefault1">
                                    ห้างหุ้นส่วน / บริษัทจำกัด
                                </label>
                              </div>
                              <div class="form-check ms-5">
                                <input class="form-check-input ms-5" type="radio" name="type_bu" id="flexRadioDefault2" value="บุคคลธรรมดา/ฟรีแลนซ์" checked>
                                <label class="form-check-label ms-2" for="flexRadioDefault2">
                                    บุคคลธรรมดา / ฟรีแลนซ์
                                </label>
                              </div>
                        </div>
                        

                    <div class="col-12 d-flex gap-2 justify-content-center mb-4 ">
                        <div class="col-10 form-floating mb-4 ">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control  fs-5" name="name_bu" id="floatingInput" placeholder="name@example.com">
                            <label class="ms-2" style="color: #939191;" for="floatingInput">ชื่อบริษัท</label>
                        </div>
                    </div>

                    <div class="col-12 d-flex gap-2 justify-content-center mb-4 ">
                        <div class="col-10 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control fs-5" name="taxplayer_id" id="floatingInput" placeholder="name@example.com">
                            <label class="ms-2" style="color: #939191;" for="floatingInput">เลขประจำตัวผู้เสียภาษี</label>
                        </div>
                    </div>


                    <div class="col-12 d-flex gap-2 justify-content-center mb-4 ">
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control fs-5" name="add_home" id="floatingInput" placeholder="name@example.com">
                            <label class="ms-2" style="color: #939191;" for="floatingInput">บ้านเลขที่</label>
                        </div>
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control fs-5" name="add_loca" id="floatingInput" placeholder="name@example.com">
                            <label class="ms-2" style="color: #939191;" for="floatingInput">สถานที่/อาคาร</label>
                        </div>
                    </div>

                    <div class="col-12 d-flex gap-2 justify-content-center mb-4 ">
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control fs-5" name="add_alley" id="floatingInput" placeholder="name@example.com">
                            <label class="ms-2" style="color: #939191;" for="floatingInput">ซอย</label>
                        </div>
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control fs-5" name="add_road" id="floatingInput" placeholder="name@example.com">
                            <label class="ms-2  " style="color: #939191;" for="floatingInput">ถนน</label>
                        </div>
                    </div>
                    

                
                    <div class="col-12 d-flex gap-2 justify-content-center mb-4 ">
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" id="search" type="text" name="address" class="form-control fs-5" placeholder="Enter address..." autocomplete="off"/>
                            <label class="ms-2" style="color: #939191;" for="floatingInput">ค้าหาที่อยู่</label>
                            <div id="matchList">
                             <!-- Create math list by JS functions -->
                             <!-- <ul class="w3-ul w3-hoverable w3-border">
                             <li>address 1</li>
                             <li>address 2</li>
                             <li>address 3</li>
                             </ul> -->
                            </div>
                        </div>
                    </div>
                    


                    <div class="col-12 d-flex gap-2 justify-content-center mb-4 ">
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control fs-5"  id="district" name="district" placeholder="name@example.com" autocomplete="off">
                            <label class="ms-2" style="color: #939191;" for="floatingInput">แขวง/ตำบล</label>
                        </div>
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control  fs-5" id="amphoe" name="amphoe" placeholder="name@example.com" autocomplete="off">
                            <label class="ms-2" style="color: #939191;" for="floatingInput">เขต/อำเภอ</label>
                        </div>
                    </div>

                    <div class="col-12 d-flex gap-2 justify-content-center mb-4 ">
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control fs-5" id="province" name="province" placeholder="name@example.com" autocomplete="off">
                            <label class="ms-2" style="color: #939191;" for="floatingInput">จังหวัด</label>
                        </div>
                        <div class="col-5 form-floating mb-4">
                            <input style="border-radius: 25px;border-width: 2px;" type="text" class="form-control fs-5 " id="zipcode" name="zipcode" placeholder="name@example.com" autocomplete="off">
                            <label class="ms-2 " style="color: #939191;" for="floatingInput">รหัสไปรษณีย์</label>
                        </div>
                    </div>

                    <div class="col-12 d-flex gap-2 justify-content-center">
                        
                    </div>
                    <button class="mt-2 btn btn-primary btn-lg h-auto w-25  d-grid col mx-auto fs-5 mb-5" type="submit" id="button_1" >ยืนยัน</button>
                    
                          
                </div>
        </div>
        </form>
<script>const search = document.getElementById("search");
const matchList = document.getElementById("matchList");

const itemDistrict = document.getElementById("district");
const itemAmphoe = document.getElementById("amphoe");
const itemProvince = document.getElementById("province");
const itemZipcode = document.getElementById("zipcode");

// Get thailand
const getThailand = async () => {
  const response = await fetch("https://gist.githubusercontent.com/ChaiyachetU/a72a3af3c6561b97883d7af935188c6b/raw/0e9389fa1fc06b532f9081793b3e36db31a1e1c6/thailand.json");

  addresses = await response.json();
  //console.log(address);
};

// Search thailand.json and filter it
const searchAddress = (searchText) => {
  // Get matches to current text input
  let matchItems = addresses.filter((address) => {
    const regex = new RegExp(`^${searchText}`, "gi");
    return (
      address.district.match(regex) ||
      address.districtEng.match(regex) ||
      address.amphoe.match(regex) ||
      address.amphoeEng.match(regex) ||
      address.province.match(regex) ||
      address.provinceEng.match(regex)
    );
  });

  if (searchText.length === 0) {
    matchItems = [];
    matchList.innerHTML = "";

    itemDistrict.value = "";
    itemAmphoe.value = "";
    itemProvince.value = "";
    itemZipcode.value = "";
  }

  //console.log(matchItems);
  // Add to match list
  outputHtml(matchItems);
};

// Show results in HTML
const outputHtml = (matchItems) => {
  if (matchItems.length > 0) {
    const html = matchItems
      .map(
        (item) =>
          `<li><span class="w3-large">${item.district}, ${item.amphoe}, ${item.province}, ${item.zipcode}</span><br><span class="w3-small w3-opacity">${item.districtEng}, ${item.amphoeEng}, ${item.provinceEng}, ${item.zipcode}</span></li>`
      )
      .join("");

    //console.log(html);
    matchList.innerHTML = `<ul class="match-items w3-ul w3-hoverable w3-border">${html}</ul>`;
    // Selection item
    matchList.addEventListener("click", selection);
  }
};

function selection(event) {
  const item = event.target;
  //console.log(item.firstChild.textContent);
  search.value = item.firstChild.textContent;
  matchList.innerHTML = "";

  const items = item.firstChild.textContent.split(", ");
  //console.log(items);

  itemDistrict.value = items[0];
  itemAmphoe.value = items[1];
  itemProvince.value = items[2];
  itemZipcode.value = items[3];
}

// Eventlistener
window.addEventListener("DOMContentLoaded", getThailand);
search.addEventListener("input", () => searchAddress(search.value));</script>

                      
          
    

        
</body>
</html>