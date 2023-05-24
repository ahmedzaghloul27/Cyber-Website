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


//--------------------------------gametik
let gamtikArrowUp = document.querySelector('.scrolls1');
let gamtikArrowDown = document.querySelector('.scrolls2');
let gametikContainer = document.querySelector('.op-frame');
// let gametikContainer2 = document.querySelector('.gamtik-test');


let games = ['<iframe seamless="seamless" allowtransparency="true" allowfullscreen="true" frameborder="0"  src="https://zv1y2i8p.play.gamezop.com/g/H1WmafkP9JQ"> </iframe>',
'<iframe seamless="seamless" allowtransparency="true" allowfullscreen="true" frameborder="0" style="width: 100%;height: 100%;border: 0px;" src="https://zv1y2i8p.play.gamezop.com/g/mKZZW9NXW"> </iframe>',
'<iframe seamless="seamless" allowtransparency="true" allowfullscreen="true" frameborder="0" style="width: 100%;height: 100%;border: 0px;" src="https://zv1y2i8p.play.gamezop.com/g/zMxz8LNrp"> </iframe>'

 
]

gameContainer.insertAdjacentHTML( 'beforeend', games[0] );

gamtikArrowDown.addEventListener('click',()=>{
  gameContainer.insertAdjacentHTML( 'beforeend', games[1] );
  
})