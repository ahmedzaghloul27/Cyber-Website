let homeWindow = document.querySelector('.home-window');
let homeWindowBg = document.querySelector('.home-window-bg');
let homeWindowBgImages = document.querySelectorAll('.home-window-bg img');

// -------------------------header---------------------------
(function () {

  var doc = document.documentElement;
  var w = window;

  var prevScroll = w.scrollY || doc.scrollTop;
  var curScroll;
  var direction = 0;
  var prevDirection = 0;
  var header = document.getElementById('header');

  var checkScroll = function () {
    curScroll = w.scrollY || doc.scrollTop;
    if (curScroll > prevScroll) {
      //scrolled up
      direction = 2;
    }

    else if (curScroll < prevScroll) {
      direction = 1;
    }

    if (direction !== prevDirection) {
      toggleHeader(direction, curScroll);
    }
    prevScroll = curScroll;
  };

  var toggleHeader = function (direction, curScroll) {
    if (direction === 2 && curScroll > 126) {
      header.classList.add('hide');
      prevDirection = direction;
    }
    else if (direction === 1) {
      header.classList.remove('hide');
      prevDirection = direction;
    }
  };
  window.addEventListener('scroll', checkScroll);
})();


let arrowRight = document.querySelectorAll('.genre-container .right-arrow');
let arrowLeft = document.querySelectorAll('.genre-container .left-arrow');
let gameContainer = document.querySelectorAll('.game-card-container');
let gameCard = document.querySelector('.game-card-container .game-card');

for (let i = 0; i < gameContainer.length; i++) {
  arrowRight[i].addEventListener('click', () => {
    const slideWidth = gameCard.clientWidth;
    gameContainer[i].scrollLeft += slideWidth;
  })
  arrowLeft[i].addEventListener('click', () => {
    const slideWidth = gameCard.clientWidth;
    gameContainer[i].scrollLeft -= slideWidth;
  });
};

//   -----------checkbox------------

function onlyOne(check) {
  var checkbox = document.getElementsByName('check')
  checkbox.forEach((item) => {
    if (item !== check) item.checked = false
  })
}

function goBack() {
  window.history.back();
}

let leftLoginWindow = document.querySelector('.login-window .left-content');
let rightLoginWindow = document.querySelector('.login-window .right-content');
let signButton = document.querySelector('.login-window .sign');

signButton.addEventListener('click', () => {
  leftLoginWindow.style.left = '-600px';
  rightLoginWindow.style.width = '100%';
  rightLoginWindow.style.border = '0px';
})


