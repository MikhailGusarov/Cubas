var elems = document.getElementsByClassName("good_for_people__content")[0];
elems.className+=" actives";
var cha = document.querySelector('.good_for_people__child_or_man span');
cha.className+=" active";

document.querySelectorAll('.good_for_people__child_or_man span').click(function(Event){
    console.log('cli')
    
})

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