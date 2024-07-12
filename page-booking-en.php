<?php
get_header(); ?>

<section class="booking">
    <div class="container">
        <div class="row booking__box row align-items-end justify-content-center">
            <h1 class="booking__heading col-md-10 col-12">Book a room on the best terms!</h1>
        </div>
    </div>
</section>

<section class="form">
    <div class="container">
        <div id='tl-booking-form'>
            <script type='text/javascript'>

                (function (w) {
                    var q = [
                        ['setContext', 'TL-INT-vertexhotel', 'en'],
                        ['embed', 'booking-form', {
                            container: 'tl-booking-form'
                        }]
                    ];
                    var t = w.travelline = (w.travelline || {}),
                        ti = t.integration = (t.integration || {});
                    ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
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
                    We are always in touch
                </h3>
            </div>

            <div class="col-sm-7 col-12 social-box__block row justify-content-center">
                <ul
                    class="col-lg-9 col-md-10 col-sm-11 col-12 socials social-box__list row justify-content-between cols-4">
                    <li class="socials__item col-auto">
                        <a href="<?php the_field('whatsapp', 'options'); ?>" class="socials__link whatsapp"
                            target="_blank"></a>

                        <div class="socials__tooltip">
                            Click to get into the chat
                        </div>
                    </li>

                    <li class="socials__item col-auto">
                        <a href="tel:<?php the_field('номер_телефона', 'options'); ?>" class="socials__link phone"></a>

                        <div class="socials__tooltip socials__tooltip_down">
                            Click to call
                        </div>
                    </li>

                    <li class="socials__item col-auto">
                        <a href="<?php the_field('telegram', 'options'); ?>" class="socials__link telegram"
                            target="_blank"></a>

                        <div class="socials__tooltip">
                            Click to get into the chat
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <a href="/en" class="booking__button gold-button col-sm-6 col-12">to the main page</a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
<script type="text/javascript">
    document.addEventListener('wpcf7mailsent', function (event) {

        setTimeout(function () {
            window.location.replace("/thanks-en/");
        }, 100);

    }); 
</script>

<?php wp_footer(); ?>
</body>

</html>