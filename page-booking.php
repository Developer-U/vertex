<?php ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">  
    <link rel="shortcut icon" href="/wp-content/themes/vertex/img/favicon.ico">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=68f9a0ea-6fba-4a6e-9f0a-5a716b0b30d5&lang=ru_RU" type="text/javascript">
    </script>
    
    <title>Vertex - отель в Красной Поляне</title>

    <?php wp_head(); ?>
</head>

<body>
<?php ?>

<section class="booking">
    <div class="container">
        <div class="row booking__box row align-items-end justify-content-center">
            <h1 class="booking__heading col-md-10 col-12">Забронируйте номер на&nbsp;лучших&nbsp;условиях!</h1>           
        </div> 
    </div>    
</section>  

<section class="form">
    <div class="container">
    <div id='tl-booking-form'>
            <script type='text/javascript'>

                (function(w) {
                    var q = [
                        ['setContext', 'TL-INT-vertexhotel', 'ru'],
                        ['embed', 'booking-form', {
                            container: 'tl-booking-form'
                        }]
                    ];
                    var t = w.travelline = (w.travelline || {}),
                        ti = t.integration = (t.integration || {});
                    ti.__cq = ti.__cq? ti.__cq.concat(q) : q;
                    if (!ti.__loader) {
                        ti.__loader = true;
                        var d = w.document,
                            p = d.location.protocol,
                            s = d.createElement('script');
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
                        (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
                    }
                })(window);
            </script>
        </div>
    </div>
</section>

<section class="booking-contact">
    <div class="container">
        <div class="col-lg-9 col-12 social-box social-booking row more__box justify-content-between align-items-center">
            <div class="col-sm-5 col-12 social-box__left">
                <h3 class="social-box__heading">
                    Мы всегда на&nbsp;связи
                </h3>
            </div>

            <div class="col-sm-7 col-12 social-box__block row justify-content-center">
                <ul class="col-lg-9 col-md-10 col-sm-11 col-12 socials social-box__list row justify-content-between cols-4">
                    <li class="socials__item col-auto">
                        <a href="<?php the_field('whatsapp', 'options'); ?>" class="socials__link whatsapp" target="_blank"></a>

                        <div class="socials__tooltip">
                            Кликните, чтобы попасть&nbsp;в&nbsp;чат 
                        </div>
                    </li>

                    <li class="socials__item col-auto">
                    <a href="tel:<?php the_field('номер_телефона', 'options'); ?>" class="socials__link phone"></a>

                        <div class="socials__tooltip socials__tooltip_down">
                            Кликните, чтобы позвонить 
                        </div>
                    </li> 

                    <li class="socials__item col-auto">
                        <a href="<?php the_field('telegram', 'options'); ?>" class="socials__link telegram" target="_blank"></a>

                        <div class="socials__tooltip">
                            Кликните, чтобы попасть&nbsp;в&nbsp;чат 
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <a href="/" class="booking__button gold-button col-sm-6 col-12">на главную</a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
    <script type="text/javascript">
	    document.addEventListener( 'wpcf7mailsent', function( event ) {      
        
        setTimeout(function() {         
            window.location.replace("/thanks/");                         
        }, 100);  

        } ); 
    </script>  

<?php wp_footer(); ?>
</body>
</html>