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
            <img src="{{ asset('assets') }}/images/kolhoz.jpg" alt="Kolhoz" class="intro__kolhoz-image">
            <div class="flex" id="main">
                <div class="intro__text-container">
                    <h1 class="text-container__title">
                        Ми займаємось заправкою та відновленням картриджів для принтерів, копірів та іншої офісної
                        техніки!
                    </h1>
                    <p class="text-container__description">Реалізуємо оригінальні і сумісні чорнила, картриджі, розхідні
                        матеріали для друку. Ми забезпечуємо клієнту індивідуальний підхід та пропонуємо найбільш
                        оптимальні рішення щодо вибору друкуючої техніки та схем роботи.
                        <br>
                        <br>

                        Наша компанія створена для того, щоб заощадити кошти тих, хто користується принтерами та
                        копірами для друку документів та зображень.
                        <br>
                        <br>

                        Ми дійсно якісно надаємо послуги. Адже саме якість послуг, що надаються і ввічливість наших
                        співробітників, викличуть бажання звернутись до нас повторно. А можливо, і стати нашим постійним
                        клієнтом!
                        <br>
                        <br>
                    </p>
                </div>

                <div class="intro__image">
                    <img src="{{ asset('assets') }}/images/intro.jpg" alt="Intro Image" class="intro__image--image">
                </div>
            </div>
            {{--<div class="intro__icons">
                <a href="tel:+380953118455"><i class="material-icons">phone_in_talk</i></a>
                <a href="https://goo.gl/maps/yHGUvYjLNRiPLagp6"><i class="material-icons">map</i></a>
            </div>--}}
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <h1 class="about-us__title">Хто ми?</h1>

            <p class="about-us__description">
                Ми займаємось заправкою та відновленням картриджів для принтерів, копірів та іншої офісної техніки, реалізуємо оригінальні і сумісні чорнила, картриджі, розхідні матеріали для друку. Ми є партнером мережі “Сінт-Майстр” – ведучої компанії на українському ринку ресайклінгу, яка за 19 років роботи, створила найширшу мережу ресайклінг-центрів у країні, і обслуговує понад 30 000 постійних клієнтів в усіх регіонах України.
            </p>

            <div class="row" id="services">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets') }}/images/zapravka.png" onerror="this.style.display = 'none'">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Заправка картриджів</span>
                            <p>Очищення всіх складових частин картриджа, полірування і промивка барабанів та лез відповідними розчинами, наповнення високоякісним тонером</p>
                            <!--                            <a href="#contacts" class="card__link">Замовити <i class="material-icons">arrow_forward</i></a>-->

                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets') }}/images/vidnovlennya.png" onerror="this.style.display = 'none'">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Відновлення картриджів</span>
                            <p>Заміна барабанів, лез та інших рухомих частин на нові та наповнення тонером. При дотриманні правил експлуатації принтера можлива 4-6 разова заправка картриджів після відновлення</p>
                            <!--                            <a href="#contacts" class="card__link">Замовити <i class="material-icons">arrow_forward</i></a>-->

                        </div>
                    </div>
                </div>



                <!--            <div class="row">-->
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('assets') }}/images/vichnyy.png" alt="" onerror="this.style.display = 'none'">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Вічний картридж</span>
                            <p>Отримайте постійно працюючий картридж, який не потребує відновлення</p>
                            <!--                            <a href="#contacts" class="card__link">Замовити <i class="material-icons">arrow_forward</i></a>-->

                        </div>
                    </div>
                </div>
                <!--            </div>-->
            </div>
        </div>
    </div>

    <div class="office-equipment">
        <div class="container">
            <h1 class="office-equipment__title" id="office-equipment">Ремонт оргтехніки</h1>

            <div class="container__flex">
                <div class="office-equipment__image">
                    <img src="{{ asset('assets') }}/images/orgtech_remont.jpg" alt="" class="">
                </div>

                <div class="office-equipment__text">
                    <p>Компанія “inTservice”, пропонує висококласне обслуговування та ремонт оргтехніки у Луцьку!
                        <br><br>
                        Переконайтеся на власному досвіді, що наші кваліфіковані інженери можуть усунути поломки
                        будь-якої складності у стислі терміни. Не відкладайте, приносьте несправну оргтехніку до нас, і
                        ми повернемо їй робочий стан!<br><br>
                        Наші інженери, які виконують ремонт будь-якої складності, мають вищу технічну освіту,
                        сертифікати і досвід роботи від 3-х років.<br><br>
                        Сервісні центри нашої мережі оснащені надійним ремонтним обладнанням та інвентарем, що дозволяє
                        проводити ремонт оргтехніки дуже швидко.<br><br>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="advantages" style="background: url('{{ asset('assets') }}/images/advantages_fon.jpg')">
        <div class="container">
            <h1 class="advantages__title">Наші переваги</h1>
            <div class="flex advantages__flex">
                <div class="advantages__item">
                    <img src="{{ asset('assets') }}/images/advantages_1.png" alt="">
                    <p class="advantages__text">Оперативність виконання замовлення</p>
                </div>
                <div class="advantages__item">
                    <img src="{{ asset('assets') }}/images/advantages_2.png" alt="">
                    <p class="advantages__text">Безкоштовна доставка по місту</p>
                </div>
                <div class="advantages__item">
                    <img src="{{ asset('assets') }}/images/advantages_3.png" alt="">
                    <p class="advantages__text">Наявність підмінного фонду для оперативної підтримки</p>
                </div>
                <div class="advantages__item">
                    <img src="{{ asset('assets') }}/images/advantages_4.png" alt="">
                    <p class="advantages__text">Висока якість обслуговування</p>
                </div>
                <div class="advantages__item">
                    <img src="{{ asset('assets') }}/images/advantages_5.png" alt="">
                    <p class="advantages__text">Виїзд спеціаліста до замовника</p>
                </div>
                <div class="advantages__item">
                    <img src="{{ asset('assets') }}/images/advantages_6.png" alt="">
                    <p class="advantages__text">Компанія з багаторічним стажем</p>
                </div>
            </div>


        </div>
    </div>


    <div class="contacts">
        <div class="container">
            <h1 class="contacts__title" id="">Контакти</h1>

            <div class="container__flex">
                <div class="contacts__text" id="contacts">
                    <p><strong>Адреса: </strong>м.Луцьк Київський майдан 11А</p>
                    <p>
                        <img src="{{ asset('assets') }}/images/kyivstar_logo.png" alt="" class="contacts__logo"><img src="{{ asset('assets') }}/images/telegram_logo.webp" alt="" class="contacts__logo"><img src="{{ asset('assets') }}/images/viber-logo.png" alt="" class="contacts__logo">Київстар: <a href="tel:+380971331355">+380971331355</a> <br>
                        <img src="{{ asset('assets') }}/images/vodafone_logo.png" alt="" class="contacts__logo">Vodafone: <a href="tel:+380953118455">+380953118455</a> <br>
                    </p>
                </div>

                <div class="contacts__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.7923085587986!2d25.351054516291853!3d50.74234087416949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47259a1ccb6c61cb%3A0xce2de1b6affadaee!2z0JrQuNGX0LLRgdGM0LrQuNC5INC80LDQudC00LDQvSwgMTEsINCb0YPRhtGM0LosINCS0L7Qu9C40L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgNDMwMDA!5e0!3m2!1suk!2sua!4v1642710878173!5m2!1suk!2sua"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
