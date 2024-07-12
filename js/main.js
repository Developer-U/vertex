jQuery(function($) {
  // Скролл меню в хедере 
  $('[data-fancybox]').fancybox({
    protect: true,
    hash : false,
    loop: true,
    arrows: true,
    backFocus: true,
    clickSlide: "close"
  });

  $(window).scroll(function(){
     if($(this).scrollTop()>=200) {
       $('.header').css({      
         'background-color':'rgba(0,0,0, .7)'                 
       }); 
     } else {
       $('.header').css({      
         'background-color':'rgba(0,0,0, .2)'                 
       });
     }
   });

   /*----switch переключатель зима-лето----*/
   var flag = false;
  var vinterVideo = $('.hero__video.vinter');
  var summerVideo = $('.hero__video.summer');   
   $('.switch-btn').click(function(){      
       
      if(flag == false) {
        $('.switch-btn').removeClass('switch-on');
        summerVideo.fadeIn();
        vinterVideo.fadeOut();
        flag = true;
      } else {
        $('.switch-btn').addClass('switch-on');
        summerVideo.fadeOut();
        vinterVideo.fadeIn();
        flag = false;
      }
      
    });

    
 
   /*-----Скроллинг плавный------*/
 
   $('.js-slideTo').on('click', function(e){
     event.preventDefault();
 
     let href = $(this).attr('href');
 
     let headerHeight = $('.header').height();
 
     let offset = $(href).offset().top - headerHeight;
 
     $('body, html').animate({
       scrollTop: offset,
     }, 800);
   });



  // Открытие попапа Забронировать

  let ReserveOpen = $('.js-reserveOpen')
  ,ReserveItem = $('.js-reserve')
  ,ReserveClose = $('.js-reserveClose');

  ReserveOpen.on('click', function(e){
  event.preventDefault();

  ReserveItem.fadeIn(700);

    $('body').css ({
        'height': '100vh',
        'overflow-y': 'hidden',
        'padding-right': '15px' 
    }); 
  });

  ReserveClose.on('click', function(){
  ReserveItem.fadeOut(500);

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    }); 
  });

  $('.js-reserve').on('click', function(event){
  if(this == event.target) {
      ReserveItem.fadeOut('500', function(){
      });
  }

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    });   

  });

  // Открытие попапа Забронировать VIP SPA

  let vipSpaOpen = $('.js-vipSpaOpen')
  ,vipSpaContainer = $('.js-vipSpaContainer')
  ,vipSpaClose = $('.js-vipSpaClose');

  vipSpaOpen.on('click', function(e){
  event.preventDefault();

  vipSpaContainer.fadeIn(700);

    $('body').css ({
        'height': '100vh',
        'overflow-y': 'hidden',
        'padding-right': '15px' 
    }); 
  });

  vipSpaClose.on('click', function(){
  vipSpaContainer.fadeOut(500);

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    }); 
  });

  $('.js-vipSpaContainer').on('click', function(event){
  if(this == event.target) {
      vipSpaContainer.fadeOut('500', function(){
      });
  }

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    });   

  });

  // Открытие попапа Прайс Price

  let priceOpen = $('.js-spaOpen')
  ,priceContain = $('.vip-spa__container')
  ,priceClose = $('.js-priceClose');

  priceOpen.on('click', function(e){
  event.preventDefault();

  priceContain.fadeIn(700);

    $('body').css ({
        'height': '100vh',
        'overflow-y': 'hidden',
        'padding-right': '15px' 
    }); 
  });

  priceClose.on('click', function(){
  priceContain.fadeOut(500);

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    }); 
  });

  $('.vip-spa__container').on('click', function(event){
  if(this == event.target) {
      priceContain.fadeOut('500', function(){
      });
  }

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    });   

  });


  // Открытие попапа Узнать про трансфер

  let transferOpen = $('.js-transferOpen')
  ,transferContainer = $('.js-transferContainer')
  ,transferClose = $('.js-transferClose');

  transferOpen.on('click', function(e){
  event.preventDefault();

  transferContainer.fadeIn(700);

    $('body').css ({
        'height': '100vh',
        'overflow-y': 'hidden',
        'padding-right': '15px' 
    }); 
  });

  transferClose.on('click', function(){
  transferContainer.fadeOut(500);

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    }); 
  });

  $('.js-transferContainer').on('click', function(event){
  if(this == event.target) {
      transferContainer.fadeOut('500', function(){
      });
  }

    $('body').css ({
        'height': '',
        'overflow-y': '',
        'padding-right': '' 
    });   

  });

});

window.addEventListener('DOMContentLoaded', function(){

  // Слайдер в блоке Hero

  const swiper = new Swiper('.hero-slider_ru_RU', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,  
  
    keyboard: {
        enabled: true,
        pageUpDown: true,
    },
    freeMode: {
        enabled: true,
    },
    autoplay: {
        delay: 4000,            
        waitForTransition: true,
    },    
  });

  const swiper_en = new Swiper('.hero-slider_en_US', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,  
  
    keyboard: {
        enabled: true,
        pageUpDown: true,
    },
    freeMode: {
        enabled: true,
    },
    autoplay: {
        delay: 4000,            
        waitForTransition: true,
    },    
  }); 
  


  // Слайдер в блоке Gallery

  const gallerySliderRu = new Swiper('.gallery__slider_ru_RU', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    backFocus: false,
    slidesPerView: 2,
    spaceBetween: 4, 
   
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },  
    
    breakpoints: {
      1200: {
        slidesPerView: 3,
      }
    }
  });

 

  const gallerySliderEn = new Swiper('.gallery__slider_en_US', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 2,
    spaceBetween: 4,    

   
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },
    
    breakpoints: {
      1200: {
        slidesPerView: 3,
      }
    }
  });

  // Слайдер в блоке About

  new Swiper('.swiper-about', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,           


    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },

    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 3000,            
        waitForTransition: true,
    },    
  });

  // Слайдер в блоке Spa

  new Swiper('.spa-box__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,           


    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },

    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 3000,            
        waitForTransition: true,
    },    
  });

   // Слайдеры в блоке Apart

   new Swiper('#swiper-app1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,
  

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },
    
    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 2500,            
        waitForTransition: true,
    },    
  });

  new Swiper('#swiper-app2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,
  

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },
    
    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 2500,            
        waitForTransition: true,
    },    
  });

  new Swiper('#swiper-app3', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,
  

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },
    
    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 2500,            
        waitForTransition: true,
    },    
  });

  new Swiper('#swiper-app4', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,
  

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },
    
    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 2500,            
        waitForTransition: true,
    },    
  });

  new Swiper('#swiper-app5', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,
  

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },
    
    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 2500,            
        waitForTransition: true,
    },    
  });

  new Swiper('#swiper-app6', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,
  

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },
    
    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 2500,            
        waitForTransition: true,
    },    
  });


  // Слайдер в блоке Villa

  new Swiper('.swiper-villa', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,
              
    

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
      type: 'progressbar'
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },

        
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },

    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 4000,            
        waitForTransition: true,
    },    
  });

  // Слайдер в блоке Vip Spa

  new Swiper('.vip__slider', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,    

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    }, 

    freeMode: {
      enabled: true,
    },

    autoplay: {
      delay: 4000,            
      waitForTransition: true,
    },  
  });

  // Слайдер в блоке Transfer

  new Swiper('.transfer__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 700,
              
    

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
      type: 'progressbar'
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },

        
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },

    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    // autoplay: {
    //     delay: 2500,            
    //     waitForTransition: true,
    // },    
  });

 
  // Слайдер в блоке Actions

  new Swiper('.swiper-actions', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 700, 
    
    //Responsive
    breakpoints: {
      //window > = 768

      768: {
        slidesPerView: 2
      }
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next3',
      prevEl: '.swiper-button-prev3',
    },

        
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },

    // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    autoplay: {
        delay: 2500,            
        waitForTransition: true,
    },    
  });


 
  // Слайдер в блоке Reviews

  new Swiper('.swiper-reviews', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 700, 
    
    //Responsive
    breakpoints: {
      //window > = 768

      768: {
        slidesPerView: 2
      },

      992: {
        slidesPerView: 3
      }
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next3',
      prevEl: '.swiper-button-prev3',
    },

      // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },

    // autoplay: {
    //     delay: 2500,            
    //     waitForTransition: true,
    // },    
  });

  // Слайдер Price / Прайс VIP SPA в попапе

  new Swiper('.swiper-price', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 700, 
    
    //Responsive
    // breakpoints: {
    //   1136: {
    //     slidesPerView: 2
    //   }
    // },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },

      // Управлять слайдером с клавиатуры
    keyboard: {
        //включаем
        enabled: true,
        //управление клавишами pageUp/pageDown
        pageUpDown: true,
    },

    freeMode: {
        enabled: true,
    },     
  });

  // Открытие попапов номеров

  document.querySelectorAll('.appart-box__more').forEach(function(btnTabs){
    btnTabs.addEventListener('click', function(event){
      const path = event.currentTarget.dataset.path;

      document.querySelectorAll('.appart__article').forEach(function(Tab){
        Tab.classList.remove('active');
      });

      document.querySelector(`[data-target = "${path}"]`).classList.add('active');

      document.querySelectorAll('.article-one__close').forEach(function(close){
        close.addEventListener('click', function(){
          document.querySelector(`[data-target = "${path}"]`).classList.remove('active');
        });
      });
    });
  });


  // Табы горнолыжные услуги Ski

  document.querySelectorAll('.ski-box__button').forEach(function(Tab){
    Tab.addEventListener('click', function(el){

      const way = el.currentTarget.dataset.way;
      
      document.querySelectorAll('.ski-articles__article').forEach(function(Article){
        Article.classList.remove('active');

        document.querySelector(`[data-target = "${way}"]`).classList.add('active');
      });
    });
  });


  // Открытие скрытого текста в блоке Отзывы reviews

  
  const contain = document.querySelectorAll('.more-text');
  const content = document.querySelectorAll('.reviews-slide__text');
  const btn = document.querySelectorAll('.reviews__more');
  const btnClose = document.querySelectorAll('.reviews__close');

  content.forEach(function(oneContent){
    
    const text = oneContent.dataset.text;   
    

    const oneBtnAttrClose = document.querySelector(`.reviews__close[data-close = "${text}"]`);

    const oneContentAttr = document.querySelector(`.reviews-slide__text[data-text = "${text}"]`);

    const oneBtnAttr = document.querySelector(`.reviews__more[data-path = "${text}"]`); 
    
    const heightOfContent = oneContentAttr.getBoundingClientRect().height;
    

    
    if(heightOfContent >= 160) {
      btn.forEach(function(oneBtn){             
        
        oneBtnAttr.classList.add('open');
        
        oneBtnAttr.addEventListener('click', function(){
          this.classList.remove('open');

          document.querySelector(`[data-text = "${text}"]`).classList.add('open');

          document.querySelector(`[data-close = "${text}"]`).classList.add('open');            
                    
          
        });
      });

    } else {    
        oneBtnAttr.classList.remove('open');         
    }    

    btnClose.forEach(function(oneBtnClose){
      oneBtnAttrClose.addEventListener('click', function(){
        this.classList.remove('open');

        document.querySelector(`[data-text = "${text}"]`).classList.remove('open');
          
        oneBtnAttr.classList.add('open');     
      });
    }); 
  });


  // Бургерное меню

  // Создаём плавность анимации появления мобильного меню
  // Сначала объявим функцию FadeIn

  const fadeIn = (el, timeout, display) => {
    el.style.opacity = 0;
    el.style.display = display || 'block';
    el.style.transition = `opacity ${timeout}ms`;
    setTimeout(() => {
      el.style.opacity = 1;
    }, 10);
  }

  // Объявим функцию FadeOut

  const fadeOut = (el, timeout) => {
    el.style.opacity = 1;
    el.style.transition = `opacity ${timeout}ms`;
    el.style.opacity = 0;

    setTimeout(() => {
      el.style.display = 'none';
    }, timeout);
  };

  var menu = document.querySelector('#menu')
      ,burger = document.querySelector('#burger')
      ,burgerClose = document.querySelector('#burger.open')
      ,flag = false;

    burger.addEventListener('click', function(){      
      if(!flag) {
        fadeIn(menu, 1000, 'flex');
        flag = true;  
      } else {
        fadeOut(menu, 1000);
        flag = false;
      }       

      burger.classList.toggle('open');

      // Скрытие меню при нажатии на один из пунктов меню

      document.querySelectorAll('.menu__link').forEach(function(oneItem){
          oneItem.addEventListener('click', function(){          

            fadeOut(menu, 1500);
            flag = false;
          
            burger.classList.remove('open');
          });
      });

      burgerClose.addEventListener('click', function(){
        fadeOut(menu, 1500);
        flag = false;
      
        burger.classList.remove('open');
      });
  }); 
   

  ymaps.ready(init);
  function init(){
    // Создание карты.
    var myMap = new ymaps.Map("map", { 
        center: [43.684538106303094, 40.25733315707775],
 
        zoom: 14
    });

    var myPlacemark = new ymaps.Placemark([43.684538106303094, 40.25733315707775], {}, {
      iconLayout: 'default#image',
      iconImageHref: '/wp-content/themes/vertex/img/mark.svg',
      iconImageSize: [50, 42.5],
      iconImageOffset: [-3, -42]      
    });

    myMap.geoObjects.add(myPlacemark);
  }  
  
   



});





