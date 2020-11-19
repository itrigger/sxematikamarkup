<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>


<!--main page slider-->
<div class="main-page--slider-wrapper">
  <div id="main-page--slider">

    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
          <div class="slide-wrap slide-wrap-bg1">
            <div class="in">
              <div class="flex">
                 <div class="title">Скупка радиодеталей в&nbsp;Ижевске выгодно!</div>
                      <div class="desc">Нашли дома радиолом, мы готовы у вас его купить по самой выгодной цене!</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide-wrap slide-wrap-bg2">
            <div class="in">
              <div class="flex">
                   <div class="title">Приезжаем <span>в&nbsp;течение 1&nbsp;часа!</span></div>
                      <div class="desc">Вам никуда не нужно ездить: оформите заявку прямо на сайте, и&nbsp;мы с&nbsp;вами свяжемся!</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slide-wrap slide-wrap-bg3">
            <div class="in">
              <div class="flex">
                 <div class="title">Продать радиолом в&nbsp;Ижевске просто!</div>
                      <div class="desc">Вам никуда не нужно ездить: оформите заявку прямо на сайте и&nbsp;мы с&nbsp;вами свяжемся!</div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Add Pagination -->
      <div class="in">
	  	     <!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
	   
    </div>
  </div>
</div>
<!--end of main page slider-->

<!--calculator module-->
<div class="in">
  <div class="calculator gray-radio-bg" id="main-page--calculator">
    <div class="els-header">Что продаёте?
      <div class="spinner loader">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
      <div class="loading_text"></div>
    </div>
    <div class="flex els-body flex-column">
      <div class="els-row els-row-1" data-id="1">
        <div class="el-wrap ew1">
          <select class="el-type el-type-1" name="el-type">
            <option disabled hidden selected value="">Выберите тип элемента</option>
          </select>
        </div>
        <div class="el-wrap ew2">
          <select class="el-name el-name-1" name="el-name">
            <option disabled hidden selected value="">Наименование</option>
          </select>
        </div>
        <div class="el-wrap ew3 labeled-input">
          <label>Количество
            <input placeholder="" type="text" value="1" class="inputCount inputCount-1"/> <span class="typeOfCount typeOfCount-1">кг.</span>
          </label>
        </div>
        <div class="el-wrap ew4 labeled-input input-dark to-right">
          <label>Сумма</label>
          <div class="row-total row-total-1"><span>0</span> ₽</div>
        </div>
      </div>
    </div>
    <div class="els-footer">
      <div class="el-add-row-btn">
        <div class="btn-plus"><span>+</span></div>
        Добавить элемент
      </div>
      <div class="els-total-price">
        <span class="yellow-rounded">Итого</span>
        <div class="els-total-price-num" id="els-total-price-num">
          <span>0</span> ₽
        </div>
      </div>
      <div class="send-btn-wrapper">
        <a class="btn btn-secondary" onclick="ym(<?php echo do_shortcode('[WP-Coder id="7"]');?>,'reachGoal','calculator'); return true;">Оформить продажу</a>
        <a class="btn btn-primary" id="print" onclick="ym(<?php echo do_shortcode('[WP-Coder id="7"]');?>,'reachGoal','print'); return true;">Распечатать</a>
      </div>
    </div>
  </div>
</div>
<!--end of calculator module-->
<div id="printtable"><table></table></div>
<!--main page categories-->
<div class="main-page--categories-wrapper">
  <div class="in">
    <div class="flex-wrapper">
      <div class="flex-grid desktop">
        <div class="d-col-2 t-col-2 m-col-2">
          <div class="main-page--categories_title">
            Скупаем радиолом оптом и в розницу
          </div>
          <div class="categories--btn-custom_wrapper">
            <a class="categories--btn-custom" href="/katalog/">
              <span class="span-block">
                <span>Весь каталог</span>
              </span>
            </a>
          </div>
        </div>
        <a class="d-col-3 t-col-3 m-col-3 cat-block" href="/katalog/kondensatory/">
          <div class="title">Конденсаторы</div>
          <div class="pic pic-condensator"></div>
        </a>
        <div class="d-col-7 t-col-7 m-col-7">
          <div class="flex flex-grid">
            <a class="d-col-7-2 t-col-2 m-col-2 cat-block" href="/katalog/tranzistory/">
              <div class="title">Транзисторы</div>
              <div class="pic pic-tranzistor"></div>
            </a>
            <a class="d-col-7-2 t-col-7-2 m-col-7-2 cat-block" href="/katalog/potenciometry/">
              <div class="title">Потенциометры</div>
              <div class="pic pic-potenziometr"></div>
            </a>
			<a class="d-col-7-3 t-col-7-3 m-col-7-3 cat-block" href="/katalog/rezistory/">
              <div class="title">Резисторы</div>
              <div class="pic pic-rezistor"></div>
            </a>
          </div>
          <div class="flex flex-grid">
           <!-- <a class="d-col-7-3 t-col-7-3 m-col-7-3 cat-block" href="/katalog/potenciometry/">
              <div class="title">Катушки</div>
              <div class="pic pic-katushka"></div>
            </a> -->
            <a class="d-col-7-3 t-col-7-3 m-col-7-2 cat-block" href="/katalog/mikroshemy/">
              <div class="title">Микросхемы</div>
              <div class="pic pic-microshema"></div>
            </a>
            <a class="d-col-7-2 t-col-7-2 m-col-7-2 cat-block" href="/katalog/pereklyuchateli/">
              <div class="title">Переключатели</div>
              <div class="pic pic-pereklyuchateli"></div>
            </a>
			<a class="d-col-7-2 t-col-7-2 m-col-7-2 cat-block" href="/katalog/lampy/">
              <div class="title">Лампы</div>
              <div class="pic pic-lampy"></div>
            </a>
          </div>
        </div>
      </div>
	  
	  <div class="mobile mobile--mainpage--categories-wrapper">
		  <div class="main-page--categories_title">
            Скупаем радиолом оптом и в розницу
          </div>

		<div class="mobile--mainpage--categories">
			 <a class="cat-block" href="/katalog/kondensatory/">
			  <div class="title">Конденсаторы</div>
			  <div class="pic pic-condensator"></div>
			</a>
			 <a class="cat-block" href="/katalog/tranzistory/">
              <div class="title">Транзисторы</div>
              <div class="pic pic-tranzistor"></div>
            </a>
            <a class="cat-block" href="/katalog/potenciometry/">
              <div class="title">Потенциометры</div>
              <div class="pic pic-potenziometr"></div>
            </a>
			<a class="cat-block" href="/katalog/rezistory/">
              <div class="title">Резисторы</div>
              <div class="pic pic-rezistor"></div>
            </a>
			<a class="cat-block" href="/katalog/mikroshemy/">
              <div class="title">Микросхемы</div>
              <div class="pic pic-microshema"></div>
            </a>
            <a class="cat-block" href="/katalog/pereklyuchateli/">
              <div class="title">Переключатели</div>
              <div class="pic pic-pereklyuchateli"></div>
            </a>
			<a class="cat-block" href="/katalog/lampy/">
              <div class="title">Лампы</div>
              <div class="pic pic-lampy"></div>
            </a>
			<div class="categories--btn-custom_wrapper">
				<a class="categories--btn-custom" href="/katalog/">
				  <span class="span-block">
					<span>Весь каталог</span>
				  </span>
				</a>
          </div>
		</div>
		  
	  </div>
	  
    </div>
  </div>
</div>
<!--end of main page categories-->

<!--how-to-sell-->
<div class="block-hts">
  <div class="in">
    <h1>Как продать радиодетали?</h1>
    <div class="h1_desc">
		Не важно сколько радиодеталей у вас на руках. Радиолом можно сдать в любом количестве и по высокой цене. 
		Нам интересны радиодетали с содержание драгметаллов, новые и б/у, микросхемы, техническое серебро. Вы можете продать платы, лампы, диоды, резисторы, переключатели, разъемы, реле, конденсаторы, транзисторы.
    </div>
   <div class=" hts-3-blocks">

      <div class="swiper-container cont2">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div>
              <div class="custom-size--left">
                <div>
                <div class="title">Сформируйте продажу через калькулятор на сайте</div>
				<div class="btn-group">
				  <a class="btn btn-white sm" href="#main-page--calculator">Продать</a>
				</div>
				</div>
				<div class="pic"><img alt="" src="/img/hts-10.png"></div>
              
            </div>
          </div>
          </div>
		  <div class="swiper-slide">
            <div>
              <div class="custom-size--middle">
                <div>
                <div class="title">Или отправьте фото нашему специалисту</div>
                <div class="btn-group">
                  <a class="btn btn-white sm btn-wt" href="https://wa.me/<?php echo do_shortcode('[WP-Coder id="3"]');?>?text=Здравствуйте.%20Хочу%20узнать%20цены%20на%20радиодетали." onclick="ym(<?php echo do_shortcode('[WP-Coder id="7"]');?>,'reachGoal','whatsapp');VK.Goal('conversion'); return true;" target="_blank">Вацап</a>
                  <a class="btn btn-white sm btn-vb desktop" title="Должен быть установлен вайбер для ПК" href="viber://chat?number=<?php echo do_shortcode('[WP-Coder id="3"]');?>" onclick="ym(<?php echo do_shortcode('[WP-Coder id="7"]');?>,'reachGoal','viber');VK.Goal('conversion'); return true;" target="_blank">Вайбер</a>
				  <a href="viber://add?number=<?php echo do_shortcode('[WP-Coder id="3"]');?>" target="_blank" onclick="ym(<?php echo do_shortcode('[WP-Coder id="7"]');?>,'reachGoal','viber');VK.Goal('conversion'); return true;" class="btn btn-white sm btn-vb mobile">Вайбер</a>	  
                </div>
                </div>
                <div class="pic"><img alt="" src="/img/hts-08.png"></div>
              </div>
            </div>
          </div>
          
          <div class="swiper-slide">
            <div>
              <div class="custom-size--right">
                <div>
                <div class="title">Либо закажите звонок, и мы вам перезвоним</div>
                <div class="btn-group">
                  <a class="btn btn-white sm" href="#callbackwidget">Звонок</a>
                </div>
                </div>
                <div class="pic"><a href="#callbackwidget"><img alt="" src="/img/hts-09.png"></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>


    </div>
  </div>
</div>
<!--end of how-to-sell-->

<!--block process-->
<div class="block-process">
  <div class="in">
    <h1>Процесс приема и оценки радиолома</h1>
    <div class="flex">
      <div class="fr4 block-process-1">
        <div class="title">Осмотр и оценка</div>
        <div class="desc">
          Для удобства подсчета стоимости скупки радиодетали необходимо отсортировать и распределить по группам. Состав
          радиодеталей определяется их стандартами.
        </div>
      </div>
      <div class="fr4 block-process-2">
        <div class="title">Спектральный анализ</div>
        <div class="desc">
          При необходимости установления фактического количества драгметаллов в б/у радиодеталях, которые клиент сдает в
          скупку, используется только профессиональное оборудование-специальные XRF-анализаторы.
        </div>
      </div>
      <div class="fr4 block-process-3">
        <div class="title">Подсчет / взвешивание и оплата</div>
        <div class="desc">
          На основе полученных данных о составе материала происходит расчет стоимости подлежащего скупки радиолома. Цена
          радиодеталей устанавливается по биржевым котировкам (LME) на момент установления стоимости.
        </div>
      </div>
    </div>
  </div>
</div>
<!--end of block process-->

<!--block blog-->
<div class="in">
  <div class="main-page--blog gray-radio-bg">
    <div class="flex">
      <div class="blog--title">
        <h2>Блог</h2>
        <a class="btn-custom" href="/blog">Больше статей</a>
      </div>
	  <?php
	  $args = array('category' => 19, 'post_type' => 'post', 'posts_per_page' => 3,);
	  $catPost = get_posts($args); //change this
	  foreach ($catPost as $post) : setup_postdata($post); ?>
		<div class="blog--item">
			<a class="pic" href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($id, 'thumbnail'); ?></a>
			<a class="padded" href="<?php the_permalink() ?>">
				 <span class="title"><?php the_title(); ?></span>
				 <span class="desc"><?php the_excerpt(); ?></span>
			</a>
		</div>
	  <?php endforeach; ?>
    </div>
  </div>
</div>
<!--end of block blog-->

<!--main-page-map-->
<div class="main-page-map">
  <div class="in">
    <h1>Скупка радиодеталей в
      <div class="selector main-page-map--selector">
        <div class="selector-title"><span>Ижевске</span></div>
        <ul class="selector-dd">
			<li data-lat="55.7922129" data-lng="37.4944932"><span data-title="Москве">Москва</span></li>
			<li data-lat="59.864526" data-lng="30.4673039"><span data-title="Санкт-Петербурге">Санкт-Петербург</span></li>
			<li data-lat="45.0974759" data-lng="38.9753053"><span data-title="Краснодаре">Краснодар</span></li>
			<li data-lat="44.0546225" data-lng="42.8988972"><span data-title="Ессентуках">Ессентуки</span></li>
			<li data-lat="44.9667273" data-lng="34.108616"><span data-title="Симферополе">Симферополь</span></li>
			<li data-lat="51.6584213" data-lng="39.1874443"><span data-title="Воронеже">Воронеж</span></li>
			<li data-lat="56.2906501" data-lng="44.0405924"><span data-title="Нижнем Новгороде">Нижний Новгород</span></li>
			<li class="active" data-lat="56.8431039" data-lng="53.206947"><span data-title="Ижевске">Ижевск</span></li>
			<li data-lat="53.2018621" data-lng="44.9945709"><span data-title="Пензе">Пенза</span></li>
        </ul>
      </div>
    </h1>
  </div>
  <div class="map">
    <div class="map_bubble">
      <div class="pic">
        <img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg">
      </div>
      <div class="desc">
        <div class="title"><?php echo do_shortcode('[WP-Coder id="6"]');?></div>
        <div class="tel"> <a href="tel:<?php echo do_shortcode('[WP-Coder id="2"]');?>"><?php echo do_shortcode('[WP-Coder id="1"]');?></a> </div>
        <div class="email"><a href="mailto:<?php echo do_shortcode('[WP-Coder id="4"]');?>"><?php echo do_shortcode('[WP-Coder id="4"]');?></a></div>
      </div>
    </div>
     <div id="map"></div>
</div>
</div>
<script>
 var sites = [
    ['Москва', 55.7922129, 37.4944932, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Москва, Маршала Бирюзова&nbsp;8 корпус&nbsp;1, Метро Октябрьское поле</div><div class="tel"><a href="tel:89854708800">8 985 470 88 00</a></div><div class="email"><a href="mailto:moscow@sxematika.ru">moscow@sxematika.ru</a></div></div>'],
	['Санкт-Петербург', 59.864526, 30.4673039, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Санкт-Петербург, пр-кт&nbsp;Обуховской Обороны, д.217</div><div class="tel"><a href="tel:89151833096">8 915 183 30 96</a></div><div class="email"><a href="mailto:piter@sxematika.ru">piter@sxematika.ru</a></div></div>'],   
    ['Краснодар', 45.0974759, 38.9753053, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Краснодар, ул.&nbsp;Кореновская,&nbsp;32</div><div class="tel"><a href="tel:89181469720">8 918 146 97 20</a></div><div class="email"><a href="mailto:krasnodar@sxematika.ru">krasnodar@sxematika.ru</a></div></div>'],
    ['Ессентуки', 44.0546225, 42.8988972, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Ессентуки, ул.&nbsp;Пятигорская,&nbsp;д.135</div><div class="tel"><a href="tel:89151832322">8 915 183 23 22</a></div><div class="email"><a href="mailto:essentuki@sxematika.ru">essentuki@sxematika.ru</a></div></div>'],
    ['Симферополь', 44.9667273, 34.108616, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Симферополь, ул.&nbsp;Садовая,&nbsp;5</div><div class="tel"><a href="tel:89151833180">8 915 183 31 80</a></div><div class="email"><a href="mailto:simferopol@sxematika.ru">simferopol@sxematika.ru</a></div></div>'],
    ['Воронеж', 51.6584213, 39.1874443, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Воронеж, ул.&nbsp;Пушкинская,&nbsp;36</div><div class="tel"><a href="tel:89151833143">8 915 183 31 43</a></div><div class="email"><a href="mailto:voronezh@sxematika.ru">voronezh@sxematika.ru</a></div></div>'],  
	['Нижний Новгород', 56.2906501, 44.0405924, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Нижний Новгород, ул.&nbsp;Вячеслава Шишкова,&nbsp;1</div><div class="tel"><a href="tel:89151832952">8 915 183 29 52</a></div><div class="email"><a href="mailto:nizhnii@sxematika.ru">nizhnii@sxematika.ru</a></div></div>'],
    ['Ижевск', 56.8431039, 53.206947, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Ижевск, ул.&nbsp;Красноармейская,&nbsp;135</div><div class="tel"><a href="tel:89151832803">8 915 183 28 03</a></div><div class="email"><a href="mailto:izhevsk@sxematika.ru">izhevsk@sxematika.ru</a></div></div>'],   
	['Пенза', 53.2018621, 44.9945709, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Пенза ,ул. Суворова, д.143а</div><div class="tel"><a href="tel:89151832791">8 915 183 27 91</a></div><div class="email"><a href="mailto:penza@sxematika.ru">penza@sxematika.ru</a></div></div>'],   
	['Москва 2', 55.6999574, 37.9299035, 1, '<div class="pic"><img alt="" src="/wp-content/themes/sxematika/assets/img/map_legend_pic-04.jpg"></div><div class="desc"><div class="title">Москва, м-он Некрасовка, ул.Недорубова, д.5, метро Некрасовка</div><div class="tel"><a href="tel:89013317104">8 901 331-71-04</a></div><div class="email"><a href="mailto:moscow1@sxematika.ru">moscow1@sxematika.ru</a></div></div>'],   
  ];
var map;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: new google.maps.LatLng(56.8431039, 53.206947),
    mapTypeId: 'terrain',
	 disableDefaultUI: true,
    // add back fullscreen, streetview, zoom
    zoomControl: true,
	 zoomControlOptions: {
        position: google.maps.ControlPosition.RIGHT_TOP
    },
    fullscreenControl: true
  });
   var image = "https://sxematika.ru/wp-content/themes/sxematika/assets/img/map.png";

  var eqfeed_callback = function eqfeed_callback(sites) {
    var _loop = function _loop(i) {
      var latLng = new google.maps.LatLng(sites[i][1], sites[i][2]);
      var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon: image
      });
      marker.addListener('click', function () {
		jQuery('.map_bubble').html(sites[i][4]);
		 map.setCenter({
		  lat: sites[i][1],
		  lng: sites[i][2]
		});
		map.setZoom(13);
      });
    };

    for (var i = 0; i < sites.length; i++) {
      _loop(i);
    }
  };

  eqfeed_callback(sites);

  jQuery(".main-page-map .selector-dd li").on("click", function () {
    jQuery(this).parent().parent().find(".selector-title span").text(jQuery(this).find("span").attr("data-title"));
    jQuery(this).parent().find("li").each(function () {
      jQuery(this).removeClass("active");
    });
    jQuery(this).addClass("active");
    var indexx = $(this).index();
    jQuery(".map_bubble").html(sites[indexx][4]);
    var tlat = parseFloat($(this).attr("data-lat"));
    var tlng = parseFloat($(this).attr("data-lng"));
    map.setCenter({
      lat: tlat,
      lng: tlng
    });
    if(indexx != 0){
		map.setZoom(12);	
	} else {
		map.setZoom(9);	
	} 
  });
  

}
</script>
<script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8-RUSssa3Yxj7K__QWAjzkLBLP9BKuCw&callback=initMap">
</script>
<!--end of main-page-map-->


<?php
get_footer();
