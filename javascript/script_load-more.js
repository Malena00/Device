// Подгрузка карточек по нажатию на кнопку "Загрузить ещё"
const cardsForPage = 4; // Количество карточек на странице
const cardsContainer = document.querySelector('.catalog_cards');
const AllCards = Array.from(cardsContainer.getElementsByClassName('catalog_card'));
const loadMoreButton = document.querySelector('.load-more_button')

// Функция для показа 4 карт
function displayPage (page) {
  const startIndex = (page - 1) * cardsForPage;
  const endIndex = startIndex + cardsForPage;
  Allcards.forEach((card, index) => {
    if (index >= startIndex && index < endIndex) {
      card.style.display = 'grid';
    } else {
      card.style.display = 'none';
    }
  });
}

// Event listener для кнопки "Загрузить ещё"
loadMoreButton.addEventListener('click', () => {
  AllCards.forEach((card) => {
    card.style.display = 'grid';
    loadMoreButton.style.display = 'none';
  });
});

// Инициализация загрузки страниц
displayPage(1);
