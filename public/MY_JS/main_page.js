var Print_timer;
var header_carusel = $('#header_carusel');
var header_carusel_elem_1 = $('#slide_1')[0];
var header_carusel_elem_2 = $('#slide_2')[0];
var header_carusel_elem_3 = $('#slide_3')[0];

$(document).ready(function () {
    //Первая отрисовка текста после загрузки страницы
    slideCarouselPrint();
    //Чтение события и запуск пи срабатывании
    header_carusel.on('slid.bs.carousel', function () {
        slideCarouselPrint();
    });
});

//Печатает текст в заголовке
function print_text(text, elem, delay) {
    if (text.length > 0) {
        elem.innerHTML = elem.innerHTML.split('|').join('');
        elem.innerHTML += text[0] + "|";

        Print_timer = setTimeout(
            function () {
                print_text(text.slice(1), elem, delay);
            }, delay
        );
    } else elem.innerHTML = elem.innerHTML.split('|').join('');
}

//Выводит текст в слайды в зависимости от индекса
function slideCarouselPrint() {
    clearTimeout(Print_timer);
    header_carusel_elem_1.innerHTML = '';
    header_carusel_elem_2.innerHTML = '';
    header_carusel_elem_3.innerHTML = '';

    var index = $('.carousel-item.active', header_carusel).index() + 1;

    if (index === 1) {
        print_text('Добро пожаловать на форум для разработчиков!', header_carusel_elem_1, 70);
    } else if (index === 2) {
        print_text('Используйте свои знания отвечая на вопросы и помогая разобраться другим!', header_carusel_elem_2, 60);
    } else {
        print_text('Задавайте вопросы и ответы не заставят себя долго ждать!', header_carusel_elem_3, 50);
    }
}
