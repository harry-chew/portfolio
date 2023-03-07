const distMiles = document.getElementById('dist-m');
const distKm = document.getElementById('dist-k');

distMiles.addEventListener("keyup", convertToKilometer);
distKm.addEventListener("keyup", convertToMiles)

function convertToMiles() {
  let k = distKm.value;
  let m = k * 0.62137119;
  distMiles.value = m;
}

function convertToKilometer() {
  let m = distMiles.value;
  let k = m / 0.62137119;
  distKm.value = k;
}
