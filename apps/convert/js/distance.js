//Grab page elements
const distMiles = document.getElementById('dist-m');
const distKm = document.getElementById('dist-k');

//Attach event listener to those elements
distMiles.addEventListener("keyup", convertToKilometer);
distKm.addEventListener("keyup", convertToMiles)

//convert from KM to Miles
function convertToMiles() {
  let k = distKm.value;
  let m = k * 0.62137119;
  distMiles.value = m;
  //If KM has nothing in field, remove data from Miles field
  if(k == "") {
    distMiles.value = "";
  }
}

//convert from Miles to KM
function convertToKilometer() {
  let m = distMiles.value;
  let k = m / 0.62137119;
  //If Miles has nothing in field, remove data from KM field
  distKm.value = k;
  if(m == "") {
    distKm.value = "";
  }
}
