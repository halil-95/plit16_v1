<!DOCTYPE html>
<html lang="en-Us">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="site created on the basis of another site all original ones from this site have been changed to test according to the created account - this is the second site">
    <meta name="keywords" content="HTML, CSS, stylus, JavaScript, cms, wordpress, php, fansyBox">
    <meta name="codertime.site" content="plit7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- стили -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/font/goodpro/stylesheet.css">
    <link rel="stylesheet" href="dist/font/fontella/css/fontello.css">
    <link rel="stylesheet" href="node_modules/@fancyapps/ui/dist/fancybox/fancybox.css">
    <base href="https://portf.codertime.site">
    <!-- script icon  -->
    <title
        title="a one-page landing site created on the basis of another site; this site focused on the portfolio and minimized errors">
        codertime.site created on the basis of another site</title>
</head>

<body>
   <?php include("templates/header.php");?>
    <form action="" method="post" id="call-me" style="display: none;">
        <label for="POST-name">Name:</label>
        <input id="POST-name" type="text" name="name" />
        <input type="submit" value="Save" />
    </form>
    <main class="main">
        <section class="herous__block">
            <div class="herous container flex-row">
                <div class="herous__left hero">
                    <div class="hero__text">
                        <h1>Мы производим бетон, раствор, железобетонные плиты перекрытия, перемычки,
                            фундаментные блоки и реализуем мешковой цемент</h1>
                    </div>
                    <div class="hero__subscribe">
                        <p>
                            Мы являемся производителем железобетонных изделий. Все наши изделия сертифицированы,
                            по-этому мы
                            можем гарантировать их высокое качество. Являясь производителем, мы можем реализовывать свою
                            продукцию по самой низкой стоимости, чем все посредники. Если вам нужно купить
                            железобетонные
                            изделия разных размеров, хорошего качества и по доступной цене, обращайтесь к нам! У нас вы
                            точно
                            найдете то, что нужно!</p>
                    </div>
                </div>
                <div class="herous__right">
                    <form action="/action_page.php" class="herous__form form">
                        <h2>ОТПРАВИТЬ ЗАЯВКУ И ПОЛУЧИТЬ СКИДКУ</h2>
                        <div class="form__name"><input type="text" id="name" name="fname" placeholder="Имя*"></div>
                        <div class="form__number"><input type="text" id="name" name="lname" placeholder="Телефон*">
                        </div>
                        <div class="form__email"><input type="text" id="name" name="email" placeholder="Email*"></div>
                        <div class="form__button"><input type="submit" value="Submit" class="button"></div>
                    </form>
                </div>
            </div>
        </section>
        <section class="benefit__block ">
            <div class="benefit container">
                <div class="benefit__title title">
                    <h2>НАШИ ПРЕИМУЩЕСТВА</h2>
                </div>
                <div class="benefit__way way">
                    <div class="way__list">
                        <div class="way__list__icon">
                            <span class="icon-add-image"></span>
                        </div>
                        <div class="way__list__subscribe">
                            <p>Возможность производства любой длины, до 12 метров</p>
                        </div>
                    </div>
                    <div class="way__list">
                        <div class="way__list__icon">
                            <span class="icon-add-image"></span>
                        </div>
                        <div class="way__list__subscribe">
                            <p>Возможность производства любой длины, до 12 метров</p>
                        </div>
                    </div>
                    <div class="way__list">
                        <div class="way__list__icon">
                            <span class="icon-add-image"></span>
                        </div>
                        <div class="way__list__subscribe">
                            <p>Возможность производства любой длины, до 12 метров</p>
                        </div>
                    </div>
                    <div class="way__list">
                        <div class="way__list__icon">
                            <span class="icon-add-image"></span>
                        </div>
                        <div class="way__list__subscribe">
                            <p>Возможность производства любой длины, до 12 метров</p>
                        </div>
                    </div>
                    <div class="way__list">
                        <div class="way__list__icon">
                            <span class="icon-add-image"></span>
                        </div>
                        <div class="way__list__subscribe">
                            <p>Возможность производства любой длины, до 12 метров</p>
                        </div>
                    </div>
                    <div class="way__list">
                        <div class="way__list__icon">
                            <span class="icon-add-image"></span>
                        </div>
                        <div class="way__list__subscribe">
                            <p>Возможность производства любой длины, до 12 метров</p>
                        </div>
                    </div>
                    <div class="way__list">
                        <div class="way__list__icon">
                            <span class="icon-add-image"></span>
                        </div>
                        <div class="way__list__subscribe">
                            <p>Возможность производства любой длины, до 12 метров</p>
                        </div>
                    </div>
                    <div class="way__list">
                        <div class="way__list__icon">
                            <span class="icon-add-image"></span>
                        </div>
                        <div class="way__list__subscribe">
                            <p>Возможность производства любой длины, до 12 метров</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="squery">
                <div class="container">
                    <img src="/dist/image/svg/triangle.svg" title="some img" alt="some text">
                </div>
            </div>
        </section>
        <section class="offer__block">
            <div class="offer container">
                <div class="offer__title title">
                    <h2>МЫ ПРЕДЛАГАЕМ</h2>
                </div>
                <div class="offer__portfolio">
                    <div class="offer__top">
                        <div class="offer__left">
                            <img src="dist/image/plita.jpg" title="some img" alt="some text">
                        </div>
                        <div class="offer__right">
                            <p><strong>Пустотные плиты</strong> перекрытия, как легко можно понять из самого названия,
                                имеют
                                внутри воздушные полости («пустоты»), которые облегчают конструкцию и придают
                                дополнительный
                                звуко-
                                и теплоизолирующий эффект.
                                <strong>В чем преимущества пустотных плит перекрытия ПБ перед монолитными
                                    плитами?</strong>
                            </p>
                            <p>Стоят пустотные плиты дешевле, а их прочность, хоть и ниже, чем у монолитных, вполне
                                достаточная
                                для
                                использования в строительном деле. Ведь они изготавливаются из высокопрочного тяжелого
                                бетона.</p>

                            <p>Позволяют экономить тепло, а это, соответственно, снижает затраты на отопление дома.
                                Благодаря
                                облегченной конструкции, такие плиты дают меньшую нагрузку на фундамент и несущие стены,
                                что
                                продлевает эксплуатацию дома.</p>

                            <p> Индивидуальный подход и готовое разнообразие габаритных размеров позволяет заказчику
                                подобрать
                                практически любые плиты.</p>

                            <p>Монтаж таких плит производится быстро и легко, и не требует высокой квалификации
                                работников.
                                Необходимо лишь расположить плиты строго горизонтально, на предварительно нанесенном
                                слое
                                цементного
                                раствора.

                                hello</p>
                            <button class="button"><a href="#price">Скачать прайс-листы</a></button>
                        </div>
                    </div>
                    <div class="offer__bottom">
                        <div class="offer__bottom__block">
                            <div class="partfolio__image">
                                <img src="dist/image/bg.jpg" title="some img" alt="sasa">
                            </div>
                            <div class="partfolio__text"><strong>some text</strong>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    amet quod distinctio, quasi sequi fugiat asperiores alias tenetur explicabo
                                    provident,
                                    iure eius pariatur numquam tempora atque accusantium cumque ex repellendus.</p>
                            </div>
                        </div>
                        <div class="offer__bottom__block">
                            <div class="partfolio__image">
                                <img src="dist/image/bg.jpg" title="some img" alt="sasa">
                            </div>
                            <div class="partfolio__text"><strong>some text</strong>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    amet quod distinctio, quasi sequi fugiat asperiores alias tenetur explicabo
                                    provident,
                                    iure eius pariatur numquam tempora atque accusantium cumque ex repellendus.</p>
                            </div>
                        </div>
                        <div class="offer__bottom__block">
                            <div class="partfolio__image">
                                <img src="dist/image/bg.jpg" title="some img" alt="sasa">
                            </div>
                            <div class="partfolio__text">
                                <strong>some text</strong>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    amet quod distinctio, quasi sequi fugiat asperiores alias tenetur explicabo
                                    provident,
                                    iure eius pariatur numquam tempora atque accusantium cumque ex repellendus.</p>
                            </div>
                        </div>
                        <div class="offer__bottom__block">
                            <div class="partfolio__image">
                                <img src="dist/image/bg.jpg" title="some img" alt="sasa">
                            </div>
                            <div class="partfolio__text"><strong>some text</strong>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    amet quod distinctio, quasi sequi fugiat asperiores alias tenetur explicabo
                                    provident,
                                    iure eius pariatur numquam tempora atque accusantium cumque ex repellendus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="map__blocks container">
                <div class="map__block">
                    <div class="map__block__title title">
                        <p>наш адресс</p>
                    </div>
                    <div class="map__block__geo">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?ll=49.230127%2C55.879612&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNjE1MTc1Nzk5EmTQoNC-0YHRgdC40Y8sINCg0LXRgdC_0YPQsdC70LjQutCwINCi0LDRgtCw0YDRgdGC0LDQvSwg0JrQsNC30LDQvdGMLCDRg9C70LjRhtCwINCb0LjQv9Cw0YLQvtCy0LAsIDMzIgoNKuxEQhW0hV9C&z=15"
                            width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;">
                        </iframe>
                    </div>
                </div>
                <div class="map__block">
                    <div class="map__block__title title">
                        <p>наш адресс</p>
                    </div>
                    <div class="map__block__geo">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?ll=49.134585%2C55.738039&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNjE0MzI1MjI5EmrQoNC-0YHRgdC40Y8sINCg0LXRgdC_0YPQsdC70LjQutCwINCi0LDRgtCw0YDRgdGC0LDQvSwg0JrQsNC30LDQvdGMLCDQotC10YXQvdC40YfQtdGB0LrQsNGPINGD0LvQuNGG0LAsIDUyIgoN0olEQhXA815C&z=17"
                            width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="prices" id="price">
            <div class="prices__blocks container">
                <div class="price__block price">
                    <div class="price__icon">
                        <img src="dist/image/fbs.jpg" title="some img" alt="some text">
                    </div>
                    <div class="price__text">
                        <p>Дорожная плита</p>
                    </div>
                    <div class="price__button"><button>Скачать прайс</button></div>
                </div>
                <div class="price__block price">
                    <div class="price__icon">
                        <img src="dist/image/fbs.jpg" title="some img" alt="some text">
                    </div>
                    <div class="price__text">
                        <p>Дорожная плита</p>
                    </div>
                    <div class="price__button"><button>Скачать прайс</button></div>
                </div>
                <div class="price__block price">
                    <div class="price__icon">
                        <img src="dist/image/fbs.jpg" title="some img" alt="some text">
                    </div>
                    <div class="price__text">
                        <p>Дорожная плита</p>
                    </div>
                    <div class="price__button"><button>Скачать прайс</button></div>
                </div>
                <div class="price__block price">
                    <div class="price__icon">
                        <img src="dist/image/fbs.jpg" title="some img" alt="some text">
                    </div>
                    <div class="price__text">
                        <p>Дорожная плита</p>
                    </div>
                    <div class="price__button"><button>Скачать прайс</button></div>
                </div>
            </div>
        </section>
        <section class="order">
            <div class="order__block container">
                <div class="order__title title">
                    <h2>ЗАКАЖИ СЕЙЧАС И ПОЛУЧИ СКИДКУ</h2>
                </div>
                <div class="order__subscribe">
                    <p>Отправьте заявку и в самое короткое время мы свяжемся с Вами.
                        Мы ответим на все интересующие вопросы.</p>
                </div>
                <div class="order__button"><button>Отправить заявку</button>
                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="reviews__block container">
                <div class="reviews__title title">
                    <h2>ОТЗЫВЫ О НАС</h2>
                </div>
                <div class="reviews__images">
                    <div class="reviews__image"><img src="dist/image/2.jpg" title="some img" alt="some text"></div>
                    <div class="reviews__image"><img src="dist/image/2.jpg" title="some img" alt="some text"></div>
                    <div class="reviews__image"><img src="dist/image/2.jpg" title="some img" alt="some text"></div>
                    <div class="reviews__image"><img src="dist/image/2.jpg" title="some img" alt="some text"></div>
                    <div class="reviews__image"><img src="dist/image/2.jpg" title="some img" alt="some text"></div>
                    <div class="reviews__image"><img src="dist/image/2.jpg" title="some img" alt="some text"></div>
                    <div class="reviews__image"><img src="dist/image/2.jpg" title="some img" alt="some text"></div>
                    <div class="reviews__image"><img src="dist/image/2.jpg" title="some img" alt="some text"></div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="contact__block container">
                <div class="contact__left">
                    <div class="contact__left__adress">
                        420054, г. Казань,
                        ул. Техническая, 52, офис 209
                        email: 2905022@bk.ru
                        420075, г. Казань,
                        ул. Липатова, д. 33
                        email: 2905020@mail.ru
                    </div>
                </div>
                <div class="contact__right">
                    <div class="contact__right__number">
                        8 (987) 290-50-22
                        8 (987) 290-50-20
                        8 (987) 290-50-47
                        8 (987) 290-50-18
                    </div>
                </div>
            </div>
        </section>
        <section class="copy">
            <div class="copy__block container">
                <div class="copy__title title">
                    <h3>Плиты перекрытия</h3>
                </div>
                <div class="copy__subscribe">
                    <div class="copy__subscribe__content">
                        <p>
                            Мы производим железобетонные плиты перекрытия ПБ
                        </p>
                    </div>
                </div>
                <div class="copy__address">
                    <div class="copy__address__content">
                        <p>
                            420054, г. Казань, ул. Техническая, 52, офис 209
                        </p>
                    </div>
                </div>
                <div class="copy__email">
                    <div class="copy__email__content">
                        email: 2905022@bk.ru
                    </div>
                </div>
                <div class="copy__phone">
                    <div class="copy__phone__content">
                        8 (987) 290-50-22 8 (987) 290-50-20 8 (987) 290-50-47 8 (987) 290-50-18
                    </div>
                </div>
                <div class="copy__text">
                    <div class="copy__text__content">
                        <p>
                            © 2024 Плиты перекрытия. Копирование запрещено.
                            жби купить, железобетонное изделие, железобетонная плита, купить перекрытие плита,
                            пб плита, перекрытие плита размер, перекрытие цена, плита перекрытий казань, плита
                            пустотный,
                            плита
                            размер цена
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>
<!-- script  -->
<script src="node_modules/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
<script>

  Fancybox.bind('[data-fancybox]', {
    // Custom options for all galleries
  });    
</script>
<script src="script.js"></script>

</html>