<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Aliance Production</title>
  </head>

  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="/about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="/contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Дезинфицирующие средства</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#"
                >Косметическая продукция</a
              >
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Современные марки</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a>
            </li>
            <li class="mobile-submenu-item">
              <a class="mobile-submenu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="/contacts.php" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="mark-icon" width="24" height="24">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address class="mobile-info-address">
          г. Мосвка, Холодильный пер. 4к1с8
        </address>
      </div>
      <!-- /.mobile-info -->
      <div class="mobile-info">
        <svg class="mail-icon" width="24" height="24">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-mail"
          >a.dragunov@tdaliance.ru</a
        >
      </div>
      <!-- /.mobile-info -->
      <div class="social">
        <a class="social-link" href="#">
          <svg class="vk-icon" width="24" height="24">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a class="social-link" href="#">
          <svg class="inst-icon" width="24" height="24">
            <use href="img/sprite.svg#inst"></use>
          </svg>
        </a>
      </div>
      <!-- /.social -->
    </div>
    <!-- /.mobile-menu -->
    <nav class="navbar">
      <a href="#" class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </a>
      <a href="./" class="header-logo">
        <svg class="logo-svg logo-light">
          <use href="img/sprite.svg#logo-light"></use>
        </svg>
        <svg class="logo-svg logo-dark">
          <use href="img/sprite.svg#logo"></use>
        </svg>
      </a>
      <ul class="header-nav">
        <li class="header-nav-item">
          <a href="/about.php" class="header-nav-link">О компании</a>
        </li>
        <li class="header-nav-item">
          <a href="/contracts.php" class="header-nav-link">Контрактное производство</a>
        </li>
        <li class="header-nav-item">
          <a href="/trademarks.php" class="header-nav-link">Собственные торговые марки</a>
        </li>
        <li class="header-nav-item">
          <a href="#" class="header-nav-link">Новости</a>
        </li>
        <li class="header-nav-item">
          <a href="/contacts.php" class="header-nav-link">Контакты</a>
        </li>
      </ul>
      <div class="header-phone">
        <svg class="phone-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <a href="tel:+74996861014" class="header-phone-link"
          >+7 (499) 686-10-14</a
        >
      </div>
      <!-- /.heder-phone -->
      <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
        <svg class="button-icon" width="24" height="24">
          <use href="img/sprite.svg#phone"></use>
        </svg>
        <span class="button-text">Получить консультацию</span>
      </button>
    </nav>
    <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">
            Комплексное обеспечение товарами и расходными материалами бизнеса
          </h1>
          <p class="header-text">
            Высокий уровень вовлечения представителей целевой аудитории является
            четким доказательством простого факта: высококачественный прототип
            будущего проекта напрямую зависит от анализа существующих паттернов
            поведения.
          </p>
          <button class="button-company button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
        </div>
        <!-- /.header-content -->

        <!-- основной блок слайдера -->
        <div class="header-swiper swiper">
          <!-- обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- слайды -->
            <li class="swiper-slide header-features-item">
              <svg class="features-icon" width="36" height="36">
                <use href="img/sprite.svg#time"></use>
              </svg>
              <p class="header-features-text">Непрерывная работа c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-icon" width="36" height="36">
                <use href="img/sprite.svg#cetificate"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-icon" width="36" height="36">
                <use href="img/sprite.svg#control"></use>
              </svg>
              <p class="header-features-text">
                Контроль качества на всех этапах
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-icon" width="36" height="36">
                <use href="img/sprite.svg#delivery"></use>
              </svg>
              <p class="header-features-text">
                Возможны поставки по всей России
              </p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="features-icon" width="36" height="36">
                <use href="img/sprite.svg#speed"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>
          <!-- Кнопки навигации  -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg class="features-icon-button" width="36" height="24">
                <use href="img/sprite.svg#slider-button-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
              <svg class="features-icon-button" width="36" height="24">
                <use href="img/sprite.svg#slider-button-next"></use>
              </svg>
            </div>
          </div>
          <!-- /.slider-buttons -->
        </div>
        <!-- /.header-features -->
      </div>
      <!-- /.container -->
    </header>
    <!-- /.header -->
    <section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">схема работы</h2>

        <!-- Slider main container -->
        <div class="steps-swiper swiper">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper steps">
            <!-- Slides -->
            <li class="swiper-slide steps-item">
              <span class="steps-num">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">
                Безусловно, сплочённость команды профессионалов позволяет
                оценить значение форм воздействия.
              </p>
              <a href="#" class="button-link">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">02</span>
              <h3 class="steps-title">Заключение договора</h3>
              <p class="steps-text">
                Лишь интерактивные прототипы призваны к ответу.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">
                А также стремящиеся вытеснить традиционное производство,
                нанотехнологии функционально разнесены на независимые элементы.
              </p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-num">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">
                В частности, экономическая повестка сегодняшнего дня говорит о
                возможностях приоритизации разума над эмоциями.
              </p>
            </li>
          </ol>
          <!-- If we need navigation buttons -->
          <div class="steps-slider-buttons primary-buttons-wrapper">
            <div class="steps-slider-button-prev primary-button-prev">
              <svg width="30" height="20">
                <use href="img/sprite.svg#slider-button-prev"></use>
              </svg>
            </div>
            <div class="steps-slider-button-next primary-button-next">
              <svg width="30" height="20">
                <use href="img/sprite.svg#slider-button-next"></use>
              </svg>
            </div>
          </div>
          <!--slider-buttons-->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section secrion-light -->
    <?php $contracts_block = "Контрактное производство"; 
    include_once('./template-parts/contracts-block.php')?>
    <!-- /.section production -->
    <?php $block_titile = "собственные марки"; 
    include_once('./template-parts/trademarks-block.php')?>
    <!-- /.trademarks -->
    <?php $founder_block = "Подробнее о компании";  
    include_once('./template-parts/founder-block.php')
    ?>
    <!-- /.section founder -->
    <?php 
    include_once('./template-parts/aerosol-products-block.php')
    ?>
    <!-- /.section clients -->
    <section class="section blog">
      <div class="container container-blog">
        <div class="seporator seporator-blog"></div>
        <h2 class="section-title title-blog">
          Блог экспертов в области производства
        </h2>
        <!-- Slider main container -->
        <div class="swiper blog-swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper blog-swiper-wrapper">
            <!-- Slides -->
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/blog-2.jpg"
                alt="blog photo"
                class="blog-card-images"
              />
              <div class="blog-card-content">
                <h3 class="blog-card-title">
                  Современная методология разработки одухотворила всех
                  причастных
                </h3>
                <p class="blog-card-text">
                  Действия представителей оппозиции, превозмогая сложившуюся
                  непростую экономическую ситуацию, в равной степени
                  предоставлены...
                </p>
              </div>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/blog-1.jpg"
                alt="blog photo"
                class="blog-card-images"
              />
              <div class="blog-card-content">
                <h3 class="blog-card-title">
                  Сложно сказать, почему жизнь прекрасна
                </h3>
                <p class="blog-card-text">
                  Сложно сказать, почему элементы политического процесса
                  функционально разнесены на независимые элементы. Безусловно,
                  высокотехнологичная...
                </p>
              </div>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/blog-2.jpg"
                alt="blog photo"
                class="blog-card-images"
              />
              <div class="blog-card-content">
                <h3 class="blog-card-title">
                  Современная методология разработки одухотворила всех
                  причастных
                </h3>
                <p class="blog-card-text">
                  Действия представителей оппозиции, превозмогая сложившуюся
                  непростую экономическую ситуацию, в равной степени
                  предоставлены...
                </p>
              </div>
            </a>
            <a href="#" class="swiper-slide blog-card">
              <img
                src="img/blog/blog-1.jpg"
                alt="blog photo"
                class="blog-card-images"
              />
              <div class="blog-card-content">
                <h3 class="blog-card-title">
                  Сложно сказать, почему жизнь прекрасна
                </h3>
                <p class="blog-card-text">
                  Сложно сказать, почему элементы политического процесса
                  функционально разнесены на независимые элементы. Безусловно,
                  высокотехнологичная...
                </p>
              </div>
            </a>
          </div>
          <!-- If we need navigation buttons -->
          <div class="blog-slider-footer">
            <a href="#" class="button-link">Весь блог</a>
            <div class="blog-slider-buttons primary-buttons-wrapper">
              <div class="blog-slider-button-prev primary-button-prev">
                <svg width="30" height="20">
                  <use href="img/sprite.svg#slider-button-prev"></use>
                </svg>
              </div>
              <div class="blog-slider-button-next primary-button-next">
                <svg width="30" height="20">
                  <use href="img/sprite.svg#slider-button-next"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include_once('footer.php');?>
  </body>
</html>
