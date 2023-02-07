<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- <link rel="stylesheet" href="css/style.css" /> -->

    <title>Thailand Address</title>
  </head>
  <body>
    <form action="<?= base_url('TestLocal/testinsert')?>" method="post">
    <div class="w3-container w3-margin-top">
      <!-- Start Search Content -->
      <div class="w3-content">
        <div class="w3-row w3-margin">
          <h3><i class="fa fa-home"></i> Thailand Search Address</h3>
          <div class="autocomplete">
            <input
              id="search"
              type="text"
              name="address"
              class="w3-input w3-border w3-xlarge"
              placeholder="Enter address..."
              autocomplete="off"
            />
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
      </div>
      <!-- End Search Content -->

      <!-- Start Address Input Content-->
      <div class="w3-content">
        <div class="w3-row-padding w3-padding-16">
          <div class="w3-half">
            <label>ตำบล / แขวง</label>
            <input
              id="district"
              type="text"
              name="district"
              class="w3-input w3-border w3-xlarge"
              placeholder="ตำบล / แขวง"
            />
          </div>
          <div class="w3-half">
            <label>อำเภอ / เขต</label>
            <input
              id="amphoe"
              type="text"
              name="amphoe"
              class="w3-input w3-border w3-xlarge"
              placeholder="อำเภอ / เขต"
            />
          </div>
        </div>
        <div class="w3-row-padding w3-padding-16">
          <div class="w3-half">
            <label>จังหวัด</label>
            <input
              id="province"
              type="text"
              name="province"
              class="w3-input w3-border w3-xlarge"
              placeholder="จังหวัด"
            />
          </div>
          <div class="w3-half">
            <label>รหัสไปรษณีย์</label>
            <input
              id="zipcode"
              type="text"
              name="zipcode"
              class="w3-input w3-border w3-xlarge"
              placeholder="รหัสไปรษณีย์"
            />
          </div>
        </div>
      </div>
      <!-- End Address Input Content-->
    </div>

    <!-- <script src="../js/main.js"></script> -->
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
    <button type="submit">ok</button>
    </form>
  </body>
</html>

