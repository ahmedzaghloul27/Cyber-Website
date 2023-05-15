let homeWindow = document.querySelector('.home-window');
let homeWindowBg = document.querySelector('.home-window-bg');
let homeWindowBgImages = document.querySelectorAll('.home-window-bg img');

// -------------------------header---------------------------
(function(){

    var doc = document.documentElement;
    var w = window;
  
    var prevScroll = w.scrollY || doc.scrollTop;
    var curScroll;
    var direction = 0;
    var prevDirection = 0;
    var header = document.getElementById('header');
  
    var checkScroll = function() {
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
  
    var toggleHeader = function(direction, curScroll) {
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

//   -----------checkbox------------

  function onlyOne(check) {
    var checkbox = document.getElementsByName('check')
    checkbox.forEach((item) => {
        if (item !== check) item.checked = false
    })
}

// --------------------------transition page----------------------------

// window.transitionToPage = function(href) {
//     document.querySelector('body').style.opacity = 0
//     setTimeout(function() { 
//         window.location.href = href
//     }, 500)
// }

// document.addEventListener('DOMContentLoaded', function(event) {
//     document.querySelector('body').style.opacity = 1
// })