const black = document.getElementById("checkbox__black");
const white = document.getElementById("checkbox__white");
const blue = document.getElementById("checkbox__blue");
const red = document.getElementById("checkbox__red");
const pink = document.getElementById("checkbox__pink");
const cardColor = document.querySelector("catalog_card__color");
const cardsContainer = document.querySelector('.catalog_cards');
const allCards = Array.from(cardsContainer.getElementsByClassName('catalog_card'));

const showButton = document.getElementsByClassName("show");

showButton.addEventListener('click', () => {
    allCards.forEach((cardColor, card) => {
        if (cardColor.innerText === "черный") {
            card.style.display = 'grid';
        } else {
            card.style.display = 'none';
        }
        });
  });
