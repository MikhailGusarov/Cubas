/*TODO Функция для блока "Польза для детей/польза для взрослых
при желании можно добавить сколько угодно блоков*/
(function () {
    "use strict";
    var class_label = "good_for_people__child_or_man",
        class_content = "good_for_people__content";


    //Делаем начальную позицию для элементов

    document.querySelector('.' + class_label + ' span').classList.add("active");
    var elements_content = document.querySelectorAll('.' + class_content);
    for (var i = 1; i < elements_content.length; i++) {
        elements_content[i].style.display = 'none';
    }

    //функция, которая меняет активность
    function change_active() {
        //проверка на активность
        if (this.classList.contains("active")) {
            return false;
        }
        //меняем активность заголовка

        document.querySelectorAll(".active")[0].classList.remove("active");
        this.classList.add("active");

        //ищем номер активного элемента

        for (i = 0; i < document.querySelectorAll('.' + class_label + ' span').length; i++) {
            if (document.querySelectorAll('.' + class_label + ' span')[i].className == "active") {
                var active_num= i;
            }
        }

        //показываем активное содержимое

        var elements_content = document.querySelectorAll('.' + class_content);
        for (var i = 0; i < elements_content.length; i++) {
            if (i == active_num) {
                elements_content[i].style.display = null;
            } else {
                elements_content[i].style.display = 'none';
            }

        }

    }
    //действие клика
    for (var i = 0; i < document.querySelectorAll('.' + class_label + ' span').length; i++) {
        document.querySelectorAll('.' + class_label + ' span')[i].addEventListener("click", change_active);
    }
// TODO Слайдер
    function showModalCall() {
        document.querySelector('.feedback_back').classList.add("active_modal");
    }
    document.querySelector('.feedback_call__button').addEventListener('click',showModalCall);
    var hide_obj=document.querySelectorAll('.close_modal');
    for(var i=0;i<hide_obj.length;i++) {
        hide_obj[i].addEventListener('click',e=>{
            if(!e.target.closest(".feedback_call") || e.target.closest(".feedback_call__close")){
                document.querySelector('.feedback_back').classList.remove("active_modal");
            }
        });
    }
})(document, window)







