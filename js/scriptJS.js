"use strict"
/*Функция для блока "Польза для детей/польза для взрослых
при желании можно добавить сколько угодно блоков*/
function change_in_good_for_people(class_label,class_content){
//Делаем начальную позицию для элементов
function set_start_position(class_label, class_content) {
    document.querySelector('.' + class_label + ' span').className += " active";
    var elements_content = document.getElementsByClassName(class_content);
    for (var i = 1; i < elements_content.length; i++) {
        elements_content[i].setAttribute("style", "display:none;");
    }
}
//функция, которая меняет активность
function change_active() {
    //проверка на активность
    if (this.className == "active") {
        return false;
    }
    //меняем активность заголовка
    function change_active_label(class_click) {
        document.getElementsByClassName("active")[0].classList.remove("active");
        class_click.classList.add("active");
    }
    //ищем номер активного элемента
    function get_active_number() {
        for (i = 0; i < document.querySelectorAll('.' + class_label + ' span').length; i++) {
            if (document.querySelectorAll('.' + class_label + ' span')[i].className == "active") {
                return i
            }
        }
    }
    //показываем активное содержимое
    function change_active_content() {
        var elements_content = document.getElementsByClassName(class_content);
        for (var i = 0; i < elements_content.length; i++) {
            if(i==get_active_number()){
                elements_content[i].setAttribute("style", "");
            }
            else{
                elements_content[i].setAttribute("style", "display:none;");
            }
            
        }
    }
    
    change_active_label(this);
    change_active_content();
};
set_start_position(class_label, class_content);
//действие клика
for (var i = 0; i < document.querySelectorAll('.' + class_label + ' span').length; i++) {
    document.querySelectorAll('.' + class_label + ' span')[i].addEventListener("click", change_active);
};

}

change_in_good_for_people("good_for_people__child_or_man","good_for_people__content");


//функция, которая скрывает весь сайт