<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- PDF FIX --}}
    @if(!isset($pdf) || !$pdf)
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @endif
    {{-- PDF FIX --}}

    <link rel="stylesheet" href="{{ asset('assets') }}/styles/pricing.css">
    <title>Int-Service - заправка та відновлення катриджів м. Луцьк | Прайс-лист</title>
    <meta name="og:title" content="Головна">
    <meta name="og:url" content="https://int-service.com.ua/pricing">
    <meta name="og:type" content="website">
    <meta name="description" content="Ціни на заправку, відновлення картриджів у м.Луцьку">

    {{-- PDF FIX --}}
    @if(isset($pdf) && $pdf)
        <style>
            * {
                font-family: DejaVu Sans !important;
                font-size: 10px !important;
            }
        </style>
    @endif
    {{-- PDF FIX --}}

</head>
<body>

<div class="pricing container">
    <h1 class="pricing__content--title">Прайс-лист
        @if(!isset($pdf) || !$pdf)
            <a class="btn-floating btn-medium waves-effect waves-light red" href="{{ route('pricing.pdf') }}"><i class="material-icons">file_download</i></a>
        @endif
    </h1>
    @if(!isset($pdf) || !$pdf)
        <ul class="pricing__content">
            <li><a href="#table1">Заправка, відновлення, обслуговування картриджів</a></li>
            <li><a href="#table2">Технічне обслуговування принтерів</a></li>
            <li><a href="#consumables">Розхідні матеріали</a></li>
            <li><a href="#contacts">Контакти</a></li>
        </ul>
    @endif

    <h1 class="table1__title">
        Прайс на заправку, відновлення та обслуговування картриджів
    </h1>
    <table class="highlight table1" id="table1">
        <thead>
        @if(!isset($pdf) || !$pdf)
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name2" type="text" class="validate table1__search">
                    <label class="active" for="first_name2">Пошук у таблиці...</label>
                </div>
            </div>
        @endif
        <tr>
            <th>Принтер</th>
            <th>Картридж</th>
            <th>Заправка (грн)</th>
            <th>Відновлення (грн)</th>
            <th>Вічний картридж (грн)</th>
        </tr>

        </thead>

        <tbody>
        @foreach($models as $item)
            <tr class="table__title">
                <td>{{ $item->name }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            @foreach($item->price as $price)
                <tr>
                    <td>{{ $price->model }}</td>
                    <td>{{ $price->cartridge }}</td>
                    <td>{{ $price->refill }}</td>
                    <td>{{ $price->repairing }}</td>
                    <td>{{ $price->eternal_cartridge }}</td>
                </tr>
            @endforeach

        @endforeach

        </tbody>
    </table>

    <p class="pricing__additional">
        * Заправка передбачає очищення всіх складових частин картриджа, полірування і промивку барабанів та лез
        відповідними розчинами, наповнення високоякісним тонером.
        <br>
        ** Відновлення картриджа передбачає заміну барабанів, лез та інших рухомих частин на нові та наповнення тонером.
        При дотриманні правил експлуатації принтера можлива 4-6 разова заправка картриджів після відновлення.
        <br>
        *** "Вічний картридж" дозволяє отримати постійно працюючий картридж, який не потребує відновлення.
    </p>

    <h1 class="pricing__table2--title">
        Прайс на технічне обслуговування принтерів
    </h1>

    <table class="highlight table2" id="table2">
        <thead>
        @if(!isset($pdf) || !$pdf)
            <div class="row">
                <div class="input-field col s6">
                    <input id="" type="text" class="validate table2__search">
                    <label class="active" for="first_name2">Пошук у таблиці...</label>
                </div>
            </div>
        @endif
        <tr>
            <th>Виробник принтера</th>
            <th>Технічне обслуговування (грн)</th>
        </tr>
        </thead>

        <tbody>
        @foreach($maintenance as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <p class="pricing__table2--additional">
        <strong>* Технічне обслуговування принтерів </strong> – чистка від тонера, змащування всіх деталей.
    </p>

    <p class="pricing__consumables" id="consumables">
        <strong>Розхідні матеріали</strong> <br>
        Здійснюємо продаж розхідних матеріалів. Деталі уточнюйте за контактними телефонами або поштою.
    </p>

    @if(!isset($pdf) || !$pdf)
        <div class="contacts">
            <h1 class="contacts__title" id="contacts">Контакти</h1>

            <div class="contacts__text">
                <p><strong>Адреса: </strong>Луцьк, вул.Гаврилюка, 14</p>
                <p>
                    Vodafone: +380953118455
                    Київстар: +380971331355
                    Укртелеком: +380332721612
                </p>
            </div>

            <div class="contacts__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2524.7317689160204!2d25.323719612442023!3d50.74346364755437!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599ec1bd72bed%3A0xc0f11173418e9ec0!2z0YPQuy4g0JPQsNCy0YDQuNC70Y7QutCwLCAxNCwg0JvRg9GG0LosINCS0L7Qu9GL0L3RgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LAsIDQzMDAw!5e0!3m2!1sru!2sus!4v1639343922350!5m2!1sru!2sus"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>
    @endif
</div>

@if(!isset($pdf) || !$pdf)
    <script src="{{ asset('assets') }}/js/pricing.js"></script>
@endif
</body>
</html>
