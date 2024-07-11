<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/device/css/style.css" type="text/css">
    <title>Catalog</title>
</head>

<body>
    <header class="header">
        <nav>
            <div class="nav-header">
                <a href="/device/index.html" class="header-logo">
                    <svg width="145" height="37" viewBox="0 0 145 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.2188 0.388916V35.6889H19.6135V33.2889C17.9124 35.1889 15.5107 36.3889 12.1084 36.3889C5.5038 36.3889 0 30.5889 0 23.0889C0 15.5889 5.5038 9.78892 12.1084 9.78892C15.5107 9.78892 18.0124 10.9889 19.6135 12.8889V0.388916H27.2188ZM19.6135 23.0889C19.6135 19.2889 17.1118 16.8889 13.6094 16.8889C10.107 16.8889 7.60524 19.2889 7.60524 23.0889C7.60524 26.8889 10.107 29.2889 13.6094 29.2889C17.1118 29.1889 19.6135 26.8889 19.6135 23.0889Z"
                            fill="black" />
                        <path
                            d="M43.7298 29.5888C45.8313 29.5888 47.5325 28.7888 48.5332 27.6888L54.6374 31.1888C52.1356 34.5888 48.4331 36.3888 43.6298 36.3888C35.0238 36.3888 29.6201 30.5888 29.6201 23.0888C29.6201 15.5888 35.0238 9.78882 43.0294 9.78882C50.4345 9.78882 55.8382 15.4888 55.8382 23.0888C55.8382 24.1888 55.7381 25.1888 55.538 26.0888H37.6256C38.6263 28.6888 40.9279 29.5888 43.7298 29.5888ZM48.333 20.4888C47.5325 17.5888 45.2309 16.4888 42.9293 16.4888C40.0273 16.4888 38.126 17.8888 37.4255 20.4888H48.333Z"
                            fill="black" />
                        <path
                            d="M82.1563 10.489L72.8499 35.689H64.2439L54.9375 10.489H63.3433L68.647 26.489L73.9506 10.489C73.9506 10.489 82.1563 10.489 82.1563 10.489Z"
                            fill="black" />
                        <path d="M83.458 10.489H91.0633V35.689H83.458V10.489Z" fill="black" />
                        <path
                            d="M93.665 23.0888C93.665 15.5888 99.369 9.78882 107.074 9.78882C111.978 9.78882 116.281 12.3888 118.482 16.2888L111.878 20.0888C110.977 18.2888 109.176 17.2888 106.974 17.2888C103.672 17.2888 101.27 19.6888 101.27 23.0888C101.27 26.5888 103.672 28.8888 106.974 28.8888C109.176 28.8888 111.077 27.7888 111.878 26.0888L118.482 29.8888C116.381 33.7888 112.078 36.3888 107.074 36.3888C99.369 36.3888 93.665 30.5888 93.665 23.0888Z"
                            fill="black" />
                        <path
                            d="M132.892 29.5888C134.993 29.5888 136.695 28.7888 137.695 27.6888L143.799 31.1888C141.298 34.5888 137.595 36.3888 132.792 36.3888C124.186 36.3888 118.782 30.5888 118.782 23.0888C118.782 15.5888 124.286 9.78882 132.191 9.78882C139.597 9.78882 145 15.4888 145 23.0888C145 24.1888 144.9 25.1888 144.7 26.0888H126.788C127.788 28.6888 130.09 29.5888 132.892 29.5888ZM137.595 20.4888C136.795 17.5888 134.493 16.4888 132.191 16.4888C129.289 16.4888 127.388 17.8888 126.688 20.4888H137.595Z"
                            fill="black" />
                        <path d="M83.458 0.388916V10.4889L91.0633 0.388916H83.458Z" fill="black" />
                    </svg>
                </a>
                <div class="additional-menu">
                    <form class="search">
                        <img class="search-icon" src="/device/img/search-icon.svg" alt="Иконка поиска">
                        <input type="search" class="search-input" id="text-to-find" placeholder="Текст поиска">
                        <button id="clear" class="clear-results">Очистить</button>
                        <button name="search" class="search-button"
                            onclick="javascript: FindOnPage('text-to-find'); return false;">Найти</button>
                    </form>
                    <!-- <div class="login">
                        <a href="#" class="additional-menu_link">
                            <div class="menu-item_container">
                                <svg class="icon" width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.5 12.3889H13.5C13.3 9.78892 11.4 7.58892 8.8 6.88892C9.8 6.28892 10.5 5.18892 10.5 3.88892C10.5 1.98892 8.9 0.388916 7 0.388916C5.1 0.388916 3.5 1.98892 3.5 3.88892C3.5 5.18892 4.2 6.28892 5.2 6.88892C2.6 7.58892 0.7 9.78892 0.5 12.3889Z" fill="black"/>
                                </svg>
                                <span>Коля Петухов</span>
                            </div>
                        </a>
                        <button name="logout" class="logout">Выйти</button>
                    </div> -->
                    <!-- <div class="cart">
                        <a href="#" class="additional-menu_link">
                            <div class="menu-item_container">
                                <span></span>
                                <svg class="icon" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.3 5.38892L11.8 5.58892L8.6 0.688916C8.5 0.488916 8.2 0.388916 8 0.388916C7.8 0.388916 7.5 0.488916 7.4 0.688916L4.2 5.58892H0.7C0.3 5.58892 0 5.88892 0 6.28892C0 6.38892 0 6.38892 0 6.48892L1.9 13.2889C2.1 13.9889 2.6 14.3889 3.3 14.3889H12.7C13.4 14.3889 13.9 13.9889 14.1 13.2889L16 6.38892C16 6.28892 16 6.28892 16 6.18892C16 5.78892 15.7 5.38892 15.3 5.38892ZM8 2.28892L10.2 5.48892H5.9L8 2.28892Z" fill="black"/>
                                </svg>
                                <span>Корзина</span>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
            <div class="main-menu">
                <div class="catalog">
                    <a href="/device/catalog.php" class="catalog_link">Каталог товаров</a>
                    <button class="catalog_icon-plus" type="button">
                        <img class="icon-plus" src="/device/img/plus.png" alt="Иконка для открытия каталога">
                    </button>
                    <ul class="subcatalog">
                        <li><a class="subcatalog-item_link" href="/device/categories/vr.php">Виртуальная реальность</a></li>
                        <li><a class="subcatalog-item_link" href="/device/categories/monopods.php">Моноподы для селфи</a></li>
                        <li><a class="subcatalog-item_link" href="/device/categories/action-cameras.php">Экшн-камеры</a></li>
                        <li><a class="subcatalog-item_link" href="/device/categories/fitnes-braicelets.php">Фитнес-браслеты</a></li>
                        <li><a class="subcatalog-item_link" href="/device/categories/smart-watches.php">Умные часы</a></li>
                        <li><a class="subcatalog-item_link" href="/device/categories/quadcopters.php">Квадракоптеры</a></li>
                    </ul>
                </div>
                <ul class="menu">
                    <li class="menu-item">
                        <a href="/device/index.html#extra-services" class="menu-item_link">Доставка</a>
                    </li>
                    <li class="menu-item">
                        <a href="/device/index.html#guarantee" class="menu-item_link">Гарантия</a>
                    </li>
                    <li class="menu-item">
                        <a href="/device/index.html#contacts" class="menu-item_link">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>