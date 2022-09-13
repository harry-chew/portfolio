const tempC = document.getElementById("temp-c");
const tempF = document.getElementById("temp-f");

tempC.addEventListener("keyup", convertToFahrenheit);
tempF.addEventListener("keyup", convertToCelsius)

function convertToFahrenheit() {
  let c = tempC.value;
  let f = (c * 1.8) + 32;
  tempF.value = f;
  if(c == "") {
    tempF.value = "";
  }
}
function convertToCelsius() {
  let f = tempF.value;
  let c = (f - 32) / 1.8;
  tempC.value = c;
  if(f == "") {
    tempC.value = "";
  }
}
