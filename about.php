<?php 
$page_title = 'О компании';
$header_style = "page-bg-grey";
$breadcrumb_style = "breadcrumb-item-link-gr";
include_once('header-page.php');?>
<div class="container container-expert">
  <img src="img/expert-logo.jpg" alt="Экспертное мнение" class="expert-image">
  <div class="expert-content">
    <div class="seporator"></div>
    <h2 class="section-title">мы - эксперты в области производства химии</h2>
    <p class="expert-text">
      Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
    </p>
  </div>
</div>
<div class="container container-swiper">
  <?php include_once('./template-parts/about-swiper-block.php');?>
</div>
<section class="section productions">
  <div class="container productions-container">
    <div class="productions-wrapper">
      <div class="clients-content">
       <div class="seporator seporator-production"></div>
         <h2 class="section-title title-production">
            Наше производство
          </h2>
          <p class="productions-text">
            Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
            Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.
          </p>
        <ul class="clients-list">
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-icon">
              <use href="img/sprite.svg#Car"></use>
            </svg>
              Автомобильная химия
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-icon">
              <use href="img/sprite.svg#Car"></use>
            </svg>
              Бытовая химия
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-icon">
              <use href="img/sprite.svg#Eat"></use>
            </svg>
             Дезинфицирующие средства
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-icon">
              <use href="img/sprite.svg#Brush"></use>
            </svg>
              Пищевые аэрозоли
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-icon">
              <use href="img/sprite.svg#Cosmetic"></use>
            </svg>
              Косметическая продукция
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="client-icon">
              <use href="img/sprite.svg#Car-cosm"></use>
            </svg>
              Краски аэрозольные
          </li>
        </ul>
      </div>
      <img src="img/produktions-img.png" alt="Наше производство" class="production-image">
    </div>
  </div>
</section>
<?php 
include_once('./template-parts/founder-block.php');
include_once('./template-parts/aerosol-products-block.php');
?>
<?php include_once('./template-parts/blog-swiper-block.php') ?>
<?php include_once('footer.php');?>