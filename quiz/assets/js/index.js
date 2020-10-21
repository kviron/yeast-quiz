let countPages = document.querySelectorAll('.yq__page').length;
const startButton = document.querySelector('#yq-start');
const forwardButton = document.querySelector('.yq-button--next');
const backButton = document.querySelector('.yq-button--prev');
let progressBar = document.querySelector("#yq_progressbar");
let step = 100/(countPages - 1);
let progressBarWidth = 0;

function setProgressBar(operand){
    if (operand === '+'){
        progressBarWidth = progressBarWidth + step;
        progressBar.style.width = progressBarWidth + "%";
    }
    if (operand === '-'){
        progressBarWidth = progressBarWidth - step;
        progressBar.style.width = progressBarWidth + "%";
    }
}

function stateButton(){
    let activePageId = document.querySelector('.yq-active-page').getAttribute('id');
    if (activePageId === 'yq-page-1'){
        backButton.classList.add('yq-button--disable');
        progressBar.style.width = '0%';
    }
    if (activePageId === 'yq-page-'+ countPages){
        forwardButton.classList.add('yq-button--disable');
    }
    if (activePageId !== 'yq-page-1' && activePageId !== 'yq-page-'+countPages){
        backButton.classList.remove('yq-button--disable');
        forwardButton.classList.remove('yq-button--disable');
    }
}

function stepForward() {
    let activePageId = document.querySelector('.yq-active-page').getAttribute('id');

    for (let i = 1; i <= countPages; i++) {
        if (activePageId === 'yq-page-' + i){
            if (countPages >= (i + 1)){
                document.querySelector(`#yq-page-${i}`).classList.remove('yq-active-page');
                document.querySelector(`#yq-page-${i+1}`).classList.add("yq-active-page");
            }
        }
    }
    setProgressBar('+');
    stateButton();
}

function stepBack() {
    let countPages = document.querySelectorAll('.yq__page').length;
    let activePageId = document.querySelector('.yq-active-page').getAttribute('id');

    for (let i = 1; i <= countPages; i++) {
        if (activePageId === 'yq-page-' + i){
            if (countPages >= (i - 1)){
                document.querySelector(`#yq-page-${i}`).classList.remove('yq-active-page');
                document.querySelector(`#yq-page-${i-1}`).classList.add("yq-active-page");
            }
        }
    }
    setProgressBar('-');
    stateButton();
}


stateButton();
startButton.addEventListener('click', stepForward);
forwardButton.addEventListener('click', stepForward);
backButton.addEventListener('click', stepBack);