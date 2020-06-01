<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=396de1c6-1355-42b2-a680-55a0c525c502" type="text/javascript"></script>
<section>	
	<div class="contact-bg"></div>
	<div class="contact grid">
		<h1 class="contact-headline"><?php the_title()?></h1>
		<div class="contact-adress"><?php the_field('adress', 'option'); ?>
		<div class="contact-social">
            <?php while( have_rows('social', 'option') ): the_row(); 

// переменные
$vk = get_sub_field('vk');
$youtube = get_sub_field('youtube');
$fb = get_sub_field('fb');

?>
				<a href="<?php echo $vk; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/vk.svg" alt=""  width="20px" class="vk img-responsive"></a>
				<a href="<?php echo $fb; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt=""  width="20px" class="facebook img-responsive"></a>
				<a href="<?php echo $youtube; ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/youtube.svg" alt=""  width="20px" class="youtube img-responsive"></a>
            <?php endwhile; ?>
				
			</div>
		
		</div>
		<div class="contact-time">
		<?php the_field('time_work', 'option'); ?>
		<a href="mailto:<?php the_field('mail', 'option'); ?>" class="mail"><?php the_field('mail', 'option'); ?></a>
		<a href="tel:<?php the_field('phone', 'option'); ?>" class="contect-phone"><?php the_field('phone', 'option'); ?></a>
		
		</div>
		<div class="contact-map" id="map" data-icon-map="<?php echo get_template_directory_uri() ?>/img/map.png" data-map-pin="<?php the_field('pin_map', 'option'); ?>">
		</div>
	</div>

</section>


<script>
var icon = $('#map').attr('data-icon-map');
var mapPin = $('#map').attr('data-map-pin').split(',');
var time_work = $('.contact-adress').text();
ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: mapPin,
            zoom: 16
        }, {
            searchControlProvider: 'yandex#search'
        }),

        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Офис Love Marketing',
            balloonContent: time_work
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: icon,
            // Размеры метки.
            iconImageSize: [91, 100],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-5, -38]
        })
    myMap.geoObjects
        .add(myPlacemark)        
});

</script>

<?php get_footer(); ?>