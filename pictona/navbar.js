jQuery.noConflict();
(function($) {
	// Navbar and dropdowns
	var toggle = document.getElementsByClassName('mtn-navbar__toggle')[0];
	var collapse = document.getElementsByClassName('mtn-navbar__collapse')[0];
	var dropdowns = document.getElementsByClassName('dropdown');
	if (!!toggle && !!collapse) {
		// Add event listeners if elements of navbar exist
		window.addEventListener('resize', closeMenusOnResize, false);
		toggle.addEventListener('click', toggleMenu, false);
		// Add click handling to dropdowns (if an empty list, then dropdowns.length = 0)
		for (var i = 0; i < dropdowns.length; i++) {
			dropdowns[i].addEventListener('click', function() {
				if (window.innerWidth < 768) {
					var open = this.classList.contains('open');
					closeMenus();
					if (!open) {
						this.getElementsByClassName('dropdown-toggle')[0].classList.toggle(
							'dropdown-open'
						);
						this.classList.toggle('open');
					}
				}
			});
		}
	}

	// Toggle if navbar menu is open or closed
	function toggleMenu() {
		toggle.classList.toggle('navbar-collapsed');
		// collapse.classList.toggle('mtn-navbar__collapse');
		collapse.classList.toggle('in');
	}

	// Close all dropdown menus
	function closeMenus() {
		for (var j = 0; j < dropdowns.length; j++) {
			dropdowns[j]
				.getElementsByClassName('dropdown-toggle')[0]
				.classList.remove('dropdown-open');
			dropdowns[j].classList.remove('open');
		}
	}

	// Close dropdowns when screen becomes big enough to switch to open by hover
	function closeMenusOnResize() {
		if (window.innerWidth >= 768) {
			closeMenus();
			// collapse.classList.add('mtn-navbar__collapse');
			collapse.classList.remove('in');
			toggle.classList.add('navbar-collapsed');
		}
	}

	$('#inpt_search').on('focus', function () {
		$(this).addClass('active');
		$('.mtn-icon-search').css('display', 'none');
	});

	$('#inpt_search').on('blur', function () {
		if ($(this).val().length === 0) {
			$(this).removeClass('active');
		}
		$('.mtn-icon-search').css('display', 'inline');
	});
	
	//navbar js
	new AccordionJS('mtn-navbar__accordion');
	

	//footer js
	new AccordionJS('mtn-footer__accordion');
})(jQuery);
