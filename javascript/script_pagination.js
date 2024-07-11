// Пагинация для страницы карточек в каталоге
const cardsPerPage = 4; // Количество карточек на странице
const dataContainer = document.querySelector('.catalog_cards');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');
const pageLinks = document.querySelectorAll('.catalog_pagination__number-link');
const cards = Array.from(dataContainer.getElementsByClassName('catalog_card'));

// Вычисление общего количества страниц
const totalPages = Math.ceil(cards.length / cardsPerPage);
let currentPage = 1;
// Функция для показа карт на одной странице
function displayPage (page) {
  const startIndex = (page - 1) * cardsPerPage;
  const endIndex = startIndex + cardsPerPage;
  cards.forEach((card, index) => {
    if (index >= startIndex && index < endIndex) {
      card.style.display = 'grid';
    } else {
      card.style.display = 'none';
    }
  });
}
// Функция для обновления кнопок пагинации
function updatePagination () {
  nextButton.disabled = currentPage === totalPages;
  pageLinks.forEach((link) => {
    const page = parseInt(link.getAttribute('data-page'));
    link.classList.toggle('active', page === currentPage);
  });
}
// Event listener для кнопки "Назад"
prevButton.addEventListener('click', () => {
  if (currentPage > 1) {
    currentPage--;
    displayPage(currentPage);
    updatePagination();
  }
});
// Event listener для кнопки "Вперед"
nextButton.addEventListener('click', () => {
  if (currentPage < totalPages) {
    currentPage++;
    displayPage(currentPage);
    updatePagination();
  }
});
// Event listener для кнопок с номерами страниц
pageLinks.forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const page = parseInt(link.getAttribute('data-page'));
    if (page !== currentPage) {
      currentPage = page;
      displayPage(currentPage);
      updatePagination();
    }
  });
});
// Инициализация загрузки страниц
displayPage(currentPage);
updatePagination();
