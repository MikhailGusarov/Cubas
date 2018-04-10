document.getElementsByClassName("good_for_people__content")[0].className+=" actives";
document.querySelector('.good_for_people__child_or_man span').className+=" active";
var massive_span=document.querySelectorAll('.good_for_people__child_or_man span');

var a=function(){
    document.getElementsByClassName("active")[0].classList.remove("active");
    this.classList.add("active");   
};

for(var i=0;i<massive_span.length;i++){
    massive_span[i].addEventListener("click",a);
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