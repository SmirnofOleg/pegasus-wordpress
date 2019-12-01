$(document).ready(function () {
	var link = $('.menu-link');
	var link_active = $('.active');
	var menu = $('.menu-main');
	var nav_link = $('.menu-main a') //убираем меню по клику на ссылку

	link.click(function () {
		link.toggleClass('menu-link_active');
		menu.toggleClass('menu-main_active');
	});

	nav_link.click(function () {
		link.toggleClass('menu-link_active');
		menu.toggleClass('menu-main_active');
	});


});