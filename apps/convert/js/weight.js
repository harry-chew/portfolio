//Grab page elements
const weightLbs = document.getElementById('weight-lbs');
const weightKg = document.getElementById('weight-kg');

//Attach event listener to those elements
weightLbs.addEventListener("keyup", convertToKg);
weightKg.addEventListener("keyup", convertToLbs)

//convert from Kg to Lbs
function convertToLbs() {
  let kg = weightKg.value;
  let lbs = kg * 2.20462262;
  weightLbs.value = lbs;
  //If Kg has nothing in field, remove data from Lbs field
  if(kg == "") {
    weightLbs.value = "";
  }
}

//convert from Lbs to Kg
function convertToKg() {
  let lbs = weightLbs.value;
  let kg = lbs / 2.20462262;
  //If Lbs has nothing in field, remove data from Kg field
  weightKg.value = kg;
  if(lbs == "") {
    weightKg.value = "";
  }
}
