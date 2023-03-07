const wordPressCardButton = document.getElementById('wordPressCardButton');
const wordPressModal = document.getElementById('wordPressModal');
const wordPressModalClose = document.getElementById('wordPressModalClose');

wordPressCardButton.addEventListener('click', wordPressFull);
//wordPressModal.addEventListener('click', showWebsite)
wordPressModalClose.addEventListener('click', showWebsite);


const codePressCardButton = document.getElementById('codePressCardButton');
const codeModal = document.getElementById('codeModal');
const codeModalClose = document.getElementById('codeModalClose');

codePressCardButton.addEventListener('click', codeFull);
//wordPressModal.addEventListener('click', showWebsite)
codeModalClose.addEventListener('click', showWebsite);

const webAppCardButton = document.getElementById('webAppCardButton');
const webAppModal = document.getElementById('webAppModal');
const webAppModalClose = document.getElementById('webAppModalClose');

webAppCardButton.addEventListener('click', webAppFull);
//wordPressModal.addEventListener('click', showWebsite)
webAppModalClose.addEventListener('click', showWebsite);

function wordPressFull(e) {
  //show modal
  disableScroll();
  wordPressModal.style = "display:block;";
}

function codeFull(e) {
  disableScroll();
  codeModal.style = "display:block;";
}

function webAppFull(e) {
  disableScroll();
  webAppModal.style = "display:block;";
}
function showWebsite(e) {
  enableScroll();
  wordPressModal.style = "display:none;";
  codeModal.style = "display:none;";
  webAppModal.style = "display:none;";
}



function disableScroll() {
    // Get the current page scroll position
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,

        // if any scroll is attempted, set this to the previous value
        window.onscroll = function() {
            window.scrollTo(scrollLeft, scrollTop);
        };
}

function enableScroll() {
    window.onscroll = function() {};
}
