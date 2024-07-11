// Регулировка стоимости
const rangeInput = document.querySelectorAll('.range-input input');
const priceInput = document.querySelectorAll('.price-input input');
const range = document.querySelector('.slider .progress');
const priceGap = 10000;

priceInput.forEach((input) => {
  input.addEventListener('input', (e) => {
    const minPrice = parseInt(priceInput[0].value);
    const maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === 'input-min') {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + '%';
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + '%';
      }
    }
  })
})

rangeInput.forEach((input) => {
  input.addEventListener('input', (e) => {
    const minVal = parseInt(rangeInput[0].value);
    const maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === 'range-min') {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + '%';
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + '%';
    }
  })
})

// Изменение состояний (видимость) при наведении на каталог и  подменю в каталоге
const subCatalog = document.querySelector('.subcatalog');
const catalog = document.querySelector('.catalog');
const plusIcon = document.querySelector('.icon-plus');

catalog.addEventListener('mouseover', function () {
  subCatalog.style.display = 'grid';
  plusIcon.src = 'img/icon_minus.png';
  plusIcon.style.opacity = '0.2';
});
catalog.addEventListener('mouseleave', function () {
  subCatalog.style.display = 'none';
  plusIcon.src = 'img/plus.png';
});

// Радио-слайдер для примеров гаджетов
const slideFirst = document.querySelector('.first');
const slideSecond = document.querySelector('.second');
const slideThird = document.querySelector('.third');

const radioSlider = document.querySelector('.radio-slider');
const firstRadio = document.getElementById('first-radio');
const secondRadio = document.getElementById('second-radio');
const thirdRadio = document.getElementById('third-radio');

firstRadio.addEventListener('click', function () {
  slideFirst.style.display = 'flex';

  slideSecond.style.display = 'none';
  slideThird.style.display = 'none';

  radioSlider.style.top = '400px';
});
secondRadio.addEventListener('click', function () {
  slideSecond.style.display = 'flex';

  slideFirst.style.display = 'none';
  slideThird.style.display = 'none';

  radioSlider.style.top = '350px';
});
thirdRadio.addEventListener('click', function () {
  slideThird.style.display = 'flex';

  slideSecond.style.display = 'none';
  slideFirst.style.display = 'none';

  radioSlider.style.top = '400px';
});

// Слайдер для изображений квадракоптера
const buttonLeft1 = document.getElementById('slider-1_button-left');
const buttonRight1 = document.getElementById('slider-1_button-right');
const slides1 = document.getElementsByClassName('slider-1_image');
let currentSlide1 = 0;

function slide1Switch (slideNumber) {
  for (let i = 0; i < slides1.length; i++) {
    if (i !== slideNumber) {
      slides1[i].classList.remove('slider-1_image__active');
    } else {
      slides1[i].classList.add('slider-1_image__active');
    }
  }
};
function validSlide1NumberCheck (slideNumber) {
  let validNumber = slideNumber;

  if (slideNumber < 0) {
    validNumber = slides1.length - 1;
  } else if (slideNumber > slides1.length - 1) {
    validNumber = 0;
  }

  currentSlide1 = validNumber;

  return currentSlide1;
}
buttonLeft1.onclick = function () {
  const newSlide = currentSlide1 - 1;
  slide1Switch(validSlide1NumberCheck(newSlide));
}
buttonRight1.onclick = function () {
  const newSlide = currentSlide1 + 1;
  slide1Switch(validSlide1NumberCheck(newSlide));
};

// Слайдер для изображений фитнес-браслета
const buttonLeft2 = document.getElementById('slider-2_button-left');
const buttonRight2 = document.getElementById('slider-2_button-right');
const slides2 = document.getElementsByClassName('slider-2_image');
let currentSlide2 = 0

function slide2Switch (slideNumber) {
  for (let i = 0; i < slides2.length; i++) {
    if (i !== slideNumber) {
      slides2[i].classList.remove('slider-2_image__active');
    } else {
      slides2[i].classList.add('slider-2_image__active');
    }
  }
};
function validSlide2NumberCheck (slideNumber) {
  let validNumber = slideNumber;

  if (slideNumber < 0) {
    validNumber = slides2.length - 1;
  } else if (slideNumber > slides2.length - 1) {
    validNumber = 0;
  }

  currentSlide2 = validNumber;

  return currentSlide2;
}
buttonLeft2.onclick = function () {
  const newSlide = currentSlide2 - 1;
  slide2Switch(validSlide2NumberCheck(newSlide));
}
buttonRight2.onclick = function () {
  const newSlide = currentSlide2 + 1;
  slide2Switch(validSlide2NumberCheck(newSlide));
};

// Слайдер для изображений фитнес-палки
const buttonLeft3 = document.getElementById('slider-3_button-left');
const buttonRight3 = document.getElementById('slider-3_button-right');
const slides3 = document.getElementsByClassName('slider-3_image');
let currentSlide3 = 0;

function slide3Switch (slideNumber) {
  for (let i = 0; i < slides3.length; i++) {
    if (i !== slideNumber) {
      slides3[i].classList.remove('slider-3_image__active');
    } else {
      slides3[i].classList.add('slider-3_image__active');
    }
  }
};
function validSlide3NumberCheck (slideNumber) {
  let validNumber = slideNumber;

  if (slideNumber < 0) {
    validNumber = slides3.length - 1;
  } else if (slideNumber > slides3.length - 1) {
    validNumber = 0;
  }

  currentSlide3 = validNumber;

  return currentSlide3;
}
buttonLeft3.onclick = function () {
  const newSlide = currentSlide3 - 1;
  slide3Switch(validSlide3NumberCheck(newSlide));
}
buttonRight3.onclick = function () {
  const newSlide = currentSlide3 + 1;
  slide3Switch(validSlide3NumberCheck(newSlide));
};

// Меню с дополнительными услугами
const buttonDelivery = document.getElementById('delivery_button');
const buttonGuarantee = document.getElementById('guarantee_button');
const buttonCredit = document.getElementById('credit_button');

const delivery = document.querySelector('.delivery_desc');
const guarantee = document.querySelector('.guarantee_desc');
const credit = document.querySelector('.credit_desc');

buttonDelivery.addEventListener('click', function () {
  delivery.style.display = 'grid';
  guarantee.style.display = 'none';
  credit.style.display = 'none';

  buttonGuarantee.classList.remove('btn_active');
  buttonCredit.classList.remove('btn_active');
  buttonDelivery.classList.add('btn_active');
});
buttonGuarantee.addEventListener('click', function () {
  guarantee.style.display = 'grid';
  delivery.style.display = 'none';
  credit.style.display = 'none';

  buttonDelivery.classList.remove('btn_active');
  buttonCredit.classList.remove('btn_active');
  buttonGuarantee.classList.add('btn_active');
});
buttonCredit.addEventListener('click', function () {
  credit.style.display = 'grid';
  guarantee.style.display = 'none';
  delivery.style.display = 'none';

  buttonDelivery.classList.remove('btn_active');
  buttonGuarantee.classList.remove('btn_active');
  buttonCredit.classList.add('btn_active');
});

// Настройка изменения стилей для блока "delivery-rare-item"
const deliveryRareItem = document.querySelector('.delivery-rare-item');
const deliveryImg = document.querySelector('.image_wrapper');
const buttonImportant = document.querySelector('.important');

deliveryRareItem.addEventListener('mouseover', function () {
  deliveryImg.style.backgroundColor = '#FFC500';
  buttonImportant.style.opacity = '1';
});
deliveryRareItem.addEventListener('mouseout', function () {
  deliveryImg.style.backgroundColor = '#FFE17F';
  buttonImportant.style.opacity = '0.5';
});
