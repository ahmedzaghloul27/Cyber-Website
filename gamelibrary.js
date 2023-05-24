let homeWindow = document.querySelector('.home-window');
let homeWindowBg = document.querySelector('.home-window-bg');
let homeWindowBgImages = document.querySelectorAll('.home-window-bg img');

// -----------------add game library

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


