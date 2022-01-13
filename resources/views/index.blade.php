<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/styles/styles.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/styles/styles-media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
    <title>Int-Service - заправка та відновлення катриджів м. Луцьк</title>
    <meta name="og:title" content="Головна">
    <meta name="og:url" content="https://int-service.com.ua/">
    <meta name="og:type" content="website">
    <meta name="description" content="Заправка та відновлення картриджів. Технічне обслуговування принтерів. Виїзд спеціаліста у Луцьку">
</head>
<body>
    <div class="intro">
        <div class="container">
            <nav class="navigation">
                <img src="{{ asset('assets') }}/images/logo.png" alt="Logo" class="logo">
                <ul class="menu">
                    <li class="menu__item"><a href="#main">Головна</a></li>
                    <li class="menu__item"><a href="#services">Послуги</a></li>
                    <li class="menu__item"><a href="#contacts">Контакти</a></li>
                    <li class="menu__item"><a href="{{ route('pricing.index') }}">Прайс</a></li>
                </ul>

                <a class="btn-floating btn-large halfway-fab waves-effect waves-light red accent-2 menu-mobile__trigger">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="menu-mobile sidenav" id="slide-out">
                    <img class="responsive-img" src="{{ asset('assets') }}/images/logo.png">
                    <li class="menu-mobile__item"><a href="#main">Головна</a></li>
                    <li class="menu-mobile__item"><a href="#services">Послуги</a></li>
                    <li class="menu-mobile__item"><a href="#contacts">Контакти</a></li>
                    <li class="menu-mobile__item"><a href="{{ route('pricing.index') }}">Прайс</a></li>
                </ul>
            </nav>

            <div class="intro__flex" id="main">
                <div class="intro__text-container">
                    <h1 class="text-container__title">Ми займаємось

                        <div class="text-container__changer-container">
                            <span class="changer-container__item">заправкою</span>
                            <span class="changer-container__item">відновленням</span>
                            <span class="changer-container__item">ремонтом</span>
                        </div>

                        принтерів</h1>
                    <p class="text-container__description">Ми займаємось заправкою та відновленням картриджів для принтерів, копірів та іншої офісної техніки, реалізуємо оригінальні і сумісні чорнила, картриджі, розхідні матеріали для друку</p>
                    <a href="#contacts" class="text-container__button">Замовити <i class="material-icons">arrow_forward</i></a>
<!--                    <a class="waves-effect waves-light btn-large"><i class="material-icons right">cloud</i>button</a>-->

                </div>

                <div class="intro__image">
                    <img src="{{ asset('assets') }}/images/intro.jpg" alt="Intro Image" class="intro__image--image">
                </div>
            </div>
            <div class="intro__icons">
                <a href="tel:+380953118455"><i class="material-icons">phone_in_talk</i></a>
                <a href="https://goo.gl/maps/yHGUvYjLNRiPLagp6"><i class="material-icons">map</i></a>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <h1 class="about-us__title">Хто ми?</h1>

            <p class="about-us__description">
                Ми займаємось заправкою та відновленням картриджів для принтерів, копірів та іншої офісної техніки, реалізуємо оригінальні і сумісні чорнила, картриджі, розхідні матеріали для друку. Ми є партнером мережі “Сінт-Майстр” – ведучої компанії на українському ринку ресайклінгу, яка за 19 років роботи, створила найширшу мережу ресайклінг-центрів у країні, і обслуговує понад 30 000 постійних клієнтів в усіх регіонах України.
            </p>

            <div class="row" id="services">
                <!-- <div class="col s12 m6"> -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets') }}/images/zapravka.png" onerror="this.style.display = 'none'">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Заправка картриджів</span>
                            <p>Очищення всіх складових частин картриджа, полірування і промивка барабанів та лез відповідними розчинами, наповнення високоякісним тонером</p>
{{--                            <a href="#contacts" class="card__link">Замовити <i class="material-icons">arrow_forward</i></a>--}}

                        </div>
                    <!-- </div> -->
                </div>

                <!-- <div class="col s12 m6"> -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets') }}/images/vidnovlennya.png" onerror="this.style.display = 'none'">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Відновлення картриджів</span>
                            <p>Заміна барабанів, лез та інших рухомих частин на нові та наповнення тонером. При дотриманні правил експлуатації принтера можлива 4-6 разова заправка картриджів після відновлення</p>
{{--                            <a href="#contacts" class="card__link">Замовити <i class="material-icons">arrow_forward</i></a>--}}

                        </div>
                    </div>
                <!-- </div> -->
            </div>


            <div class="row">
                <!-- <div class="col s12 m6"> -->
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets') }}/images/vichnyy.png" alt="" onerror="this.style.display = 'none'">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Вічний картридж</span>
                            <p>Отримайте постійно працюючий картридж, який не потребує відновлення</p>
{{--                            <a href="#contacts" class="card__link">Замовити <i class="material-icons">arrow_forward</i></a>--}}

                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <div class="contacts">
        <div class="container">
            <h1 class="contacts__title" id="">Контакти</h1>

            <div class="container__flex">
                <div class="contacts__text" id="contacts">
                    <p><strong>Адреса: </strong>Луцьк, вул.Гаврилюка, 14</p>
                    <p>
                        Vodafone: <a href="tel:+380953118455">+380953118455</a> <br>
                        Київстар: <a href="tel:+380971331355">+380971331355</a> <br>
                        Укртелеком: <a href="tel:+380332721612">+380332721612</a> <br>
                    </p>
                </div>

                <div class="contacts__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2524.7317689160204!2d25.323719612442023!3d50.74346364755437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599ec1bd72bed%3A0xc0f11173418e9ec0!2z0YPQuy4g0JPQsNCy0YDQuNC70Y7QutCwLCAxNCwg0JvRg9GG0LosINCS0L7Qu9GL0L3RgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAsIDQzMDAw!5e0!3m2!1sru!2sus!4v1639343922350!5m2!1sru!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        <div class="container">
            <nav class="navigation">
                <img src="{{ asset('assets') }}/images/logo.png" alt="Logo" class="logo footer__logo">
                <ul class="menu">
                    <li class="menu__item"><a href="#main">Головна</a></li>
                    <li class="menu__item"><a href="#services">Послуги</a></li>
                    <li class="menu__item"><a href="#contacts">Контакти</a></li>
                    <li class="menu__item"><a href="{{ route('pricing.index') }}">Прайс</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <script src="{{ asset('assets') }}/js/main.js"></script>
</body>
</html>
