@extends('layout')

@section('content')
<div class="contacts-page">
    <h1>Контакты</h1>

    <div class="contacts-top">
        <div>
            <h2>Телефоны контактных центров</h2>
            <p>+7 (999) 999-99-99 (Москва)</p>
            <p>+7 (777) 999-99-99 (Питер)</p>
            <h2>Наша почта</h2>
            <p>eda@eda.ru</p>
            <h2>Время работы</h2>
            <p>Ежедневно с 10:00 до 23:00</p>
        </div>
        <img src="../img/person-contacts.png">
    </div>

    <div class="contacts-bottom">
        <h2>Адрес</h2>
        <p>Пресненская наб., 2, Москва, 123317</p>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.5406577801696!2d37.53728371593039!3d55.74910968055239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bdc692199cb%3A0x10cb59b23b9433ad!2sPresnenskaya%20Naberezhnaya%2C%202%2C%20Moskva%2C%20123317!5e0!3m2!1sen!2sru!4v1590705594166!5m2!1sen!2sru" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
    </div>
</div>
@endsection