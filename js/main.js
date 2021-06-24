// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
	let matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}


function number_format() {
	let elements = document.querySelectorAll('.price_formator');
	for (let elem of elements) {
		elem.dataset.realPrice = elem.innerHTML;
		elem.innerHTML = Number(elem.innerHTML).toLocaleString('ru-RU');
	}
}

function set_size(sizeName) {
	let btn = document.getElementById('btn__to-card');
	btn.dataset.size = sizeName;
	console.log(sizeName);
}

document.addEventListener("DOMContentLoaded", () => {
	number_format();
	cart_recalc();
});

//--- Корзина ----------------------------------------------------------------------------------------------

let cart = [];
let cartCount = 0;

function cart_recalc() {
	cart = JSON.parse(localStorage.getItem("cart"));
	if (cart == null) cart = [];
	cartCount = 0;
	cartSumm = 0;
	for (let i = 0; i < cart.length; i++) {
		cartCount += Number(cart[i].count);

		cartSumm += Number(cart[i].count) * parseFloat(cart[i].price);
	}

	localStorage.setItem("cartcount", cartCount);
	localStorage.setItem("cartsumm", cartSumm);

	let elements = document.querySelectorAll('.bascet_counter');
	for (let elem of elements) {
		elem.innerHTML = cartCount;
	}

}

function add_tocart(elem, countElem) {


	let cartElem = {
		sku: elem.dataset.sku,
		size: elem.dataset.size,
		lnk: elem.dataset.lnk,
		price: elem.dataset.price,
		priceold: elem.dataset.oldprice,
		subtotal: elem.dataset.price,
		name: elem.dataset.name,
		count: (countElem == 0) ? elem.dataset.count : countElem,
		picture: elem.dataset.picture
	};

	if (cart.length == 0) {
		cart.push(cartElem);
	} else {
		let addet = true;
		for (let i = 0; i < cart.length; i++) {
			if ((cart[i].sku == cartElem.sku) && (cart[i].size == cartElem.size)) {
				cart[i].count++;
				cart[i].subtotal = Number(cart[i].count) * parseFloat(cart[i].price);
				addet = false;
				break;
			}
		}

		if (addet)
			cart.push(cartElem);
	}

	localStorage.setItem("cart", JSON.stringify(cart));
	cart_recalc();

	console.log(cartElem);
}

// JS -----------------------------------------------------------------------------------------------------

//BURGER
const iconMenu = document.querySelector(".icon-menu");
const body = document.querySelector("body");
const menuBody = document.querySelector(".mob-menu");
const menuListItemElems = document.querySelector(".mob-menu__list");
if (iconMenu) {
	iconMenu.addEventListener("click", function () {
		iconMenu.classList.toggle("active");
		body.classList.toggle("lock");
		menuBody.classList.toggle("active");
	});
}

// Закрытие моб меню при клике на якорную ссылку
if (menuListItemElems) {
	menuListItemElems.addEventListener("click", function () {
		iconMenu.classList.toggle("active");
		body.classList.toggle("lock");
		menuBody.classList.toggle("active");
	});
}

// Закрытие моб меню при клике вне области меню 
window.addEventListener('click', e => { // при клике в любом месте окна браузера
	const target = e.target // находим элемент, на котором был клик
	if (!target.closest('.icon-menu') && !target.closest('.mob-menu') && !target.closest('._popup-link') && !target.closest('.popup')) { // если этот элемент или его родительские элементы не окно навигации и не кнопка
		iconMenu.classList.remove('active') // то закрываем окно навигации, удаляя активный класс
		menuBody.classList.remove('active')
		body.classList.remove('lock')
	}
})

// Плавная прокрутка
const smotScrollElems = document.querySelectorAll('a[href^="#"]:not(a[href="#"])');

smotScrollElems.forEach(link => {
	link.addEventListener('click', (event) => {
		event.preventDefault()
		console.log(event);

		const id = link.getAttribute('href').substring(1)
		console.log('id : ', id);

		document.getElementById(id).scrollIntoView({
			behavior: 'smooth'
		});
	})
});

// Строка поиска на мобилках 
let mobsearch = document.querySelector(".mob-search");
let headsearch = document.querySelector(".header__search");
if (mobsearch) {
	mobsearch.addEventListener("click", function () {
		headsearch.classList.toggle("active");
	});
}


// Открытие меню в Sidebar
const BarIconElems = document.querySelectorAll('.sidebar__menu-open');
const BarLinkIconElems = document.querySelectorAll('.sidebar__menu-icon');
const BarSubMenuElems = document.querySelectorAll('.sidebar__submenu');

BarIconElems.forEach((btn, index) => {
	btn.addEventListener('click', () => {

		if (!btn.classList.contains('sidebar__menu-icon_active')) {

			BarSubMenuElems.forEach((BarSubMenuElem) => {
				BarSubMenuElem.classList.remove('active')
			});
			BarIconElems.forEach((BarIconElem) => {
				BarIconElem.classList.remove('sidebar__menu-icon_active')
			});
			BarLinkIconElems.forEach((BarLinkIconElem) => {
				BarLinkIconElem.classList.remove('sidebar__menu-icon_active')
			});

			BarSubMenuElems[index].classList.add('active')
			BarLinkIconElems[index].classList.add('sidebar__menu-icon_active')
			btn.classList.add('sidebar__menu-icon_active')
		} else {
			BarSubMenuElems[index].classList.remove('active')
			BarLinkIconElems[index].classList.remove('sidebar__menu-icon_active')
			btn.classList.remove('sidebar__menu-icon_active')
		}
	})
})

// jQuery -----------------------------------------------------------------------------------------------------

$ = jQuery;

// // Slider 
$('.slider').slick({
	arrows: false,
	dots: true,
	infinite: true,
	speed: 1000,
	slidesToShow: 1,
	autoplay: true,
	autoplaySpeed: 1800,
	adaptiveHeight: true
});


// Выбо колличества
$('.minus').click(function () {
	var $input = $(this).parent().find('input');
	var count = parseInt($input.val()) - 1;
	count = count < 1 ? 1 : count;
	$input.val(count);
	$input.change();
	return false;
});
$('.plus').click(function () {
	var $input = $(this).parent().find('input');
	$input.val(parseInt($input.val()) + 1);
	$input.change();
	return false;
});


// Маска телефона
var inputmask_phone = { "mask": "+9(999)999-99-99" };
jQuery("input[type=tel]").inputmask(inputmask_phone);


// Открытие модального окна
$(".popup-quest").on('click', function (e) {
	e.preventDefault();
	jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
	jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
	jQuery("#question").arcticmodal();
});

//Валидация + Отправщик
$('.newButton').click(function (e) {

	e.preventDefault();
	var name = $("#form-question-name").val();
	var tel = $("#form-question-tel").val();

	if (jQuery("#form-question-tel").val() == "") {
		jQuery("#form-question-tel").css("border", "1px solid red");
		return;
	}

	// if (jQuery("#sig-inp-e").val() == ""){
	// 	jQuery("#sig-inp-e").css("border","1px solid red");
	// 	return;
	// }

	else {
		var jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'sendphone',
				nonce: allAjax.nonce,
				name: name,
				tel: tel,
			}
		);

		jqXHR.done(function (responce) {
			jQuery(".headen_form_blk").hide();
			jQuery('.SendetMsg').show();
		});

		jqXHR.fail(function (responce) {
			alert("Произошла ошибка. Попробуйте позднее.");
		});

	}
});


