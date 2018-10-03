<!doctype html>
<html lang="ru">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=cyrillic" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <title>Объединение педагогов по спидкубингу</title>
</head>
<body>
<div class="feedback_back close_modal">
    <div class="feedback_call modal1" style="display: none;">
        <form action="" class='feedback_call__form'>
            <h2>Обратный звонок</h2>
            <input name="feedback_call__name" type="text" placeholder="Представьтесь">
            <input name="feedback_call__phone" type="text" placeholder="Номер телефона">
            <input type="submit" value="ПЕРЕЗВОНИТЬ">
        </form>
        <img class='feedback_call__close close_modal' src="img/close.png" alt="">
    </div>


    <div class="feedback_call modal2" style="display: none;">
        <form action="" class='feedback_call__form'>
            <h2>Заявка на занятие</h2>
            <input name="feedback_call__name" type="text" placeholder="Представьтесь">
            <input name="feedback_call__phone" type="text" placeholder="Номер телефона">
            <select>
                <option>Индивидуальное занятие</option>
                <option>Групповое занятие</option>
                <option>Мастер класс</option>
            </select>
            <input type="submit" value="ОСТАВИТЬ ЗАЯВКУ">
        </form>
        <img class='feedback_call__close close_modal' src="img/close.png" alt="">
    </div>
</div>
<header class="header">
    <div class="header__logo"><a href=""><img src="img/logo.png" alt=""></a></div>
    <div class="header__nav_bar">
        <a href="#aboutSpeedcubing" class="header__nav_bar-link">
            О спидкубинге
        </a>
        <a href="#benefit" class="header__nav_bar-link">
            Польза спидкубинга
        </a>
        <a href="#abuotUs" class="header__nav_bar-link">
            О Нас
        </a>
        <a href="#price" class="header__nav_bar-link">
            занятия и цены
        </a>
        <div class="header__nav_bar-button feedback_call__button">
            <div><img src="img/phone.png" alt=""><span>Перезвоните мне</span></div>
        </div>
    </div>

</header>