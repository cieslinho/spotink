const navBtn = document.querySelector('.nav__btn')
const navMenu = document.querySelector('.nav__wrapper')
const navLinks = document.querySelectorAll('.nav__menu-item')

var swiper = new Swiper('.header__swiper', {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
})

navBtn.addEventListener('click', () => {
	navMenu.classList.toggle('active')

	navLinks.forEach(navLink => {
		navLink.addEventListener('click', () => {
			navMenu.classList.remove('active')
		})
	})
})
