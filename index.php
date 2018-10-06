<?php require 'header.php'?>

<section class="main_container">
    <div class="main_container__poster">
        <div class="main_container__text">
            <h1>Обучение сборке кубика Рубика</h1>
            <p>и других головоломок для детей и взрослых в Санкт–Петербурге</p>
            <div class="first_work">Записаться на первое занятие</div>
        </div>
        <div class="main_container__photo">
            <img src="img/photo.png" alt="">
        </div>
    </div>
    <div id="aboutSpeedcubing" class="slider">
        <div class="row slider_row">
            <div class="slider_row__col1">
                <h1>Спидкубинг</h1>
                <p>Это скоростная сборка кубика Рубика и других головоломок. Да, тысячи людей по всей планете не только
                    умеют собирать «магический куб», но и делают это очень быстро. <span>Мы — одни из них.</span></p>
                <p>И мы с удовольствием приобщаем к сообществу спидкуберов всех желающих.</p>
            </div>
            <div class='sliders'>
                <?php
                $slide=$conn->query('select * from slide order by seqNum');
                $dataSlide=$slide->fetchAll();
                for($i=0;$i<count($dataSlide);$i++){
                    if($i==0){
                        $classSlide='sliderOne showing_slide';
                    }
                    else{
                        $classSlide='sliderOne';
                    }

                    ?>
                <div class="<?php echo $classSlide?>" style="background-image: url('<?php echo $dataSlide[$i]['backgroundImage']?>');">
                    <?php echo $dataSlide[$i]['text']?>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="good_for_people">
    <div id="benefit" class="good_for_people__child_or_man">
            <span>
                В чем польза для детей
            </span>
            <span>
                Польза для взрослых
            </span>
    </div>
    <div class="good_for_people__content">
        <div>
            <div><img src="img/bulb.png" alt=""></div>
            <h2>Логика и мышление</h2>
            <p>Которая в свою очередь улучшает мозговую деятельность. представляет исход своих действий.</p>
        </div>
        <div>
            <div><img src="img/brain.png" alt=""></div>
            <h2>Развитие памяти</h2>
            <p>Для сборки кубика опытные спидкуберы должны запомнить и уметь применять не менее 100 алгоритмов!</p>
        </div>
        <div>
            <div><img src="img/smail.png" alt=""></div>
            <h2>Необычный навык</h2>
            <p>Легкий способ привлечь к себе внимание и удивить любого, даже самого искушенного человека!</p>
        </div>
        <div>
            <div><img src="img/aircraft.png" alt=""></div>
            <h2>Повод для путешествий</h2>
            <p>С компанией единомышленников на соревнования по спидкубингу во всех уголках земного шара!</p>
        </div>
    </div>
    <div class="good_for_people__content">
        <div>
            <div><img src="img/bulb.png" alt=""></div>
            <h2>Мышление и логика</h2>
            <p>Которая в свою очередь улучшает мозговую деятельность. представляет исход своих действий.</p>
        </div>
        <div>
            <div><img src="img/brain.png" alt=""></div>
            <h2>Развитие памяти</h2>
            <p>Для сборки кубика опытные спидкуберы должны запомнить и уметь применять не менее 100 алгоритмов!</p>
        </div>
        <div>
            <div><img src="img/smail.png" alt=""></div>
            <h2>Необычный навык</h2>
            <p>Легкий способ привлечь к себе внимание и удивить любого, даже самого искушенного человека!</p>
        </div>
        <div>
            <div><img src="img/aircraft.png" alt=""></div>
            <h2>Повод для путешествий</h2>
            <p>С компанией единомышленников на соревнования по спидкубингу во всех уголках земного шара!</p>
        </div>
    </div>
</section>
<form action="" class="form_body">

    <p>Оставьте заявку на первое <span>индивидуальное</span> занятие!</p>


    <input class="form_body__name" type="text" placeholder="Представьтесь">

    <input class="form_body__number_phone" type="text" placeholder="Номер телефона">

    <input class="form_body__button" type="button" value="ОСТАВИТЬ ЗАЯВКУ">

</form>
<section class="about_us row">
    <div id="abuotUs" class="col-5 about_us__col1">
        <h2>О нас</h2>
        <p>Мы — объединение педагогов по спидкубингу, обучаем сборке кубика Рубика и других головоломок детей и взрослых
            в Санкт-Петербурге. </p>
        <p>Регулярно участвуем в соревнованиях по спидкубингу в Санкт-Петербурге и других российских и европейских
            городах. Мццы очень гордимся нашими учениками, которые также становятся полноправными участниками таких
            мероприятий. </p>
    </div>
    <div class="row col-7">
        <div class="col-4 offset-md-2">
            <h2>более 100</h2>
            <p>детей и взрослых мы научили собирать кубик</p>
        </div>
        <div class="col-4 offset-md-2">
            <h2>3 минуты</h2>
            <p>в среднем тратят новички на сборку кубика</p>
        </div>
        <div class="col-4 offset-md-2">
            <h2>5 занятий</h2>
            <p>хватит, чтобы ребенок научился собирать кубик </p>
        </div>
        <div class="col-4 offset-md-2">
            <h2>0 сомнений</h2>
            <p>просто записывайтесь на занятия и мы научим!</p>
        </div>
    </div>
</section>
<section id="price" class="employment">
    <h2>Формы занятий</h2>
    <div class="">
        <?php
        $serviceQuery=$conn->query('select * from service');
        $dataService=$serviceQuery->fetchAll();
        for($i=0;$i<count($dataService);$i++){
            ?>
            <div class="employment__col">
                <a href="">
                    <h3><?php echo $dataService[$i]['name']?></h3>
                    <ul>
                        <li>От <?php echo $dataService[$i]['price']?> рублей</li>
                        <li>Занятие <?php echo $dataService[$i]['time']?> минут</li>
                        <?php echo $dataService[$i]['text']?>
                    </ul>
                    <span>Записаться</span>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</section>

<?php require 'footer.php'?>

