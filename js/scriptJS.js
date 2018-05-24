"use strict"
var class_label = "good_for_people__child_or_man";
var class_content = "good_for_people__content";

//Делаем начальную позицию для элементов
function set_start_position(class_label, class_content) {
    document.querySelector('.' + class_label + ' span').className += " active";
    var elements_content = document.getElementsByClassName(class_content);
    for (var i = 1; i < elements_content.length; i++) {
        elements_content[i].setAttribute("style", "display:none;");
    }
}

set_start_position(class_label, class_content);

//функция, которая меняет активность
function change_active() {
    //проверка на активность
    if(this.className=="active"){
       return false;
    }
    //меняем активность заголовка
    function change_active_label(class_click) {
        document.getElementsByClassName("active")[0].classList.remove("active");
        class_click.classList.add("active");
    }
    //показываем активное содержимое
    function change_active_content(class_click) {
        // я устал и хочу спать. Затра допишу
    }
    change_active_label(this);
};

for (var i = 0; i < document.querySelectorAll('.' + class_label + ' span').length; i++) {
    document.querySelectorAll('.' + class_label + ' span')[i].addEventListener("click", change_active);
};


/*
$(".good_for_people__child_or_man span").on('click', function (e) {
var index = $(this).index();
var current = $(this)
console.log(index)
$('.good_for_people__child_or_man span').removeClass('active');
current.addClass('active');
$('.good_for_people__child_or_man').css('display', 'none');
$('.good_for_people__child_or_man').removeClass('actives');
$('.good_for_people__child_or_man:eq(' + index + ')').addClass('actives');
$('.good_for_people__child_or_man:eq(' + index + ')').fadeIn(700);
})*/


/*
Версия Мишани

var cha = document.querySelectorAll('.good_for_people__child_or_man span');

//Проходимся по всем span 
for (var i=0; i<cha.length;i++){
//Слушаем событие клика
    cha[i].addEventListener("click",function(){
    //Если класс уже имеется прерываем функции
        if(this.classList.contains('active')){
            return false;
        }
        //Добавляем класс active
        this.classList.add("active");
        for (var j=0; j<cha.length; j++){
        //Удаляем у остальных класс active
            if(cha[j]!=this){
                cha[j].classList.remove('active');
            }
        }
        // ....PROFIT!
    });
}

*/
