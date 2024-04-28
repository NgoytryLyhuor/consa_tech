/* Description: Custom JS file */

var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
	loader.style.display = "none";
})

/* Navigation*/
// Collapse the navbar by adding the top-nav-collapse class
window.onscroll = function () {
	scrollFunction();
	scrollFunctionBTT(); // back to top button
};

window.onload = function () {
	scrollFunction();
};

function scrollFunction() {
	if (document.documentElement.scrollTop > 30) {
		document.getElementById("navbarExample").classList.add("top-nav-collapse");
	} else if ( document.documentElement.scrollTop < 30 ) {
		document.getElementById("navbarExample").classList.remove("top-nav-collapse");
	}
}

// Navbar on mobile
let elements = document.querySelectorAll(".nav-link:not(.dropdown-toggle)");

for (let i = 0; i < elements.length; i++) {
	elements[i].addEventListener("click", () => {
		document.querySelector(".offcanvas-collapse").classList.toggle("open");
	});
}

document.querySelector(".navbar-toggler").addEventListener("click", () => {
  	document.querySelector(".offcanvas-collapse").classList.toggle("open");
});

// Hover on desktop
function toggleDropdown(e) {
	const _d = e.target.closest(".dropdown");
	let _m = document.querySelector(".dropdown-menu", _d);

	setTimeout(
		function () {
		const shouldOpen = _d.matches(":hover");
		_m.classList.toggle("show", shouldOpen);
		_d.classList.toggle("show", shouldOpen);

		_d.setAttribute("aria-expanded", shouldOpen);
		},
		e.type === "mouseleave" ? 300 : 0
	);
}

// On hover
const dropdownCheck = document.querySelector('.dropdown');

if (dropdownCheck !== null) { 
	document.querySelector(".dropdown").addEventListener("mouseleave", toggleDropdown);
	document.querySelector(".dropdown").addEventListener("mouseover", toggleDropdown);

	// On click
	document.querySelector(".dropdown").addEventListener("click", (e) => {
		const _d = e.target.closest(".dropdown");
		let _m = document.querySelector(".dropdown-menu", _d);
		if (_d.classList.contains("show")) {
			_m.classList.remove("show");
			_d.classList.remove("show");
		} else {
			_m.classList.add("show");
			_d.classList.add("show");
		}
	});
}
  

/* Card Slider - Swiper */
var cardSlider = new Swiper('.card-slider', {
	autoplay: {
		delay: 5000,
		disableOnInteraction: false
	},
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},
	slidesPerView: 2,
	spaceBetween: 70,
	breakpoints: {
		// when window is <= 991px
		991: {
			slidesPerView: 1
		}
	}
});


/* Filter - Isotope */
const gridCheck = document.querySelector('.grid');

if (gridCheck !== null) { 
	// init Isotope
	var iso = new Isotope( '.grid', {
		itemSelector: '.element-item',
		layoutMode: 'fitRows'
	});
	
	// change is-checked class on buttons
	var buttonGroups = document.querySelectorAll('.button-group');
	for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
		var buttonGroup = buttonGroups[i];
		radioButtonGroup( buttonGroup );
	}
	
	function radioButtonGroup( buttonGroup ) {
		buttonGroup.addEventListener( 'click', function( event ) {
			// only work with buttons
			if ( !matchesSelector( event.target, 'button' ) )  {
				return;
			}
			buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
			event.target.classList.add('is-checked');
		});
	}
}


/* Back To Top Button */
// Get the button
myButton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
function scrollFunctionBTT() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		myButton.style.display = "block";
	} else {
		myButton.style.display = "none";
	}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scrollTop = 0; // for Safari
	document.documentElement.scrollTop = 0; // for Chrome, Firefox, IE and Opera
}

// Use for footer

function footer_dropdown() {
    var dropdownButton = document.getElementById("dropdown_button");
    var dropdownMenu = document.getElementById("dropdown_items");

    // Check if the window width is below a certain threshold (e.g., 768px for mobile devices)
    var isMobile = window.innerWidth < 768;

    // Toggle the visibility of the dropdown menu
    if (dropdownMenu.style.display === "block") {
        dropdownMenu.style.display = "none";
    } else {
        // Display the dropdown menu
        dropdownMenu.style.display = "block";

        if (isMobile) {
            // Mobile screen: Center the menu below the button
            dropdownMenu.style.top = (dropdownButton.offsetTop + dropdownButton.offsetHeight) + "px";
            dropdownMenu.style.left = "50%";
            dropdownMenu.style.transform = "translateX(-50%)"; // Center horizontally
        } else {
            // Desktop screen: Position the menu to the right of the button
            dropdownMenu.style.top = dropdownButton.offsetTop + "px";
            dropdownMenu.style.left = (dropdownButton.offsetLeft + dropdownButton.offsetWidth) + "px";
            dropdownMenu.style.transform = "translateY(0)"; // Reset transform
        }
    }
}

// Add an event listener to the document to hide the dropdown when clicking outside
document.addEventListener("click", function(event) {
    var dropdownButton = document.getElementById("dropdown_button");
    var dropdownMenu = document.getElementById("dropdown_items");

    // Check if the clicked element is not the dropdown button or the dropdown menu
    if (event.target !== dropdownButton && !dropdownButton.contains(event.target) &&
        event.target !== dropdownMenu && !dropdownMenu.contains(event.target)) {
        dropdownMenu.style.display = "none"; // Hide the dropdown menu
    }
});

// Update dropdown position when window is resized (e.g., orientation change on mobile)
window.addEventListener("resize", function() {
    // Call footer_dropdown() to adjust dropdown position based on new screen size
    footer_dropdown();
});