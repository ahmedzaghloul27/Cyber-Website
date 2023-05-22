let homeWindow = document.querySelector('.home-window');
let homeWindowBg = document.querySelector('.home-window-bg');
let homeWindowBgImages = document.querySelectorAll('.home-window-bg img');

// -----------------add game library

function gameLibrary(){
    const action = document.querySelector('.action .game-card-container');
    const fun = document.querySelector('.fun .game-card-container');
    const adventrure = document.querySelector('.adventrure .game-card-container');

    const gameCards = [
      { name: 'Game 1', image: 'Images/game1.jpg', genre: action },
      { name: 'Game 2', image: 'Images/game2.jpg', genre: fun },
      { name: 'Game 3', image: 'Images/etshov2.jpg', genre: adventrure },
      { name: 'crazy baby', image: 'Images/etshov2.jpg', genre: fun },
    ];

    gameCards.forEach((card) => {

      const gameCard = document.createElement('div');
      gameCard.classList.add('game-card');

      const gameThumb = document.createElement('div');
      gameThumb.classList.add('game-thumb');
      const image = document.createElement('img');
      image.src = card.image;
      gameThumb.appendChild(image);

      const gameName = document.createElement('h2');
      gameName.textContent = card.name;

      const downloadButton = document.createElement('button');
      downloadButton.textContent = 'Download';

      gameCard.appendChild(gameThumb);
      gameCard.appendChild(gameName);
      gameCard.appendChild(downloadButton);
      card.genre.appendChild(gameCard);

    });

}

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




// ----------------------------------------------------------------


let leftLoginWindow = document.querySelector('.login-window .left-content');
let rightLoginWindow = document.querySelector('.login-window .right-content');
let signButton = document.querySelector('.login-window .sign');
let signWindow = document.querySelector('.sign-window');
let continueButton = document.querySelector('.sign-window .continue-button');

signButton.addEventListener('click', () => {
  leftLoginWindow.style.left = '-600px';
  rightLoginWindow.style.width = '100%';
  rightLoginWindow.style.border = '0px';
  setTimeout(function() {
    rightLoginWindow.style.right = '2000px';
    signWindow.style.right = '-600px';
  }, 1000);
})

continueButton.addEventListener('click', () => {
  signWindow.style.right = '0px';
  continueButton.style.right = '700px';
});


//------------check confirm password

let password = document.getElementById("reg-password");
let confirm_password = document.getElementById("reg-password-confirm");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;




