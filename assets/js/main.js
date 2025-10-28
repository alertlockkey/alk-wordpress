/*
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

// USER ADDED

document.addEventListener("DOMContentLoaded", () => {
  const spotlights = document.querySelectorAll(".spotlight");

  spotlights.forEach(spotlight => {
    const img = spotlight.querySelector(".image img");
    if (!img) return;

    let images = [];
    const alt = img.alt.trim();

    if (alt === "Doors & Hardware") {
      images = [
        "doors_hardware (1).jpg",
        "doors_hardware (2).jpg",
        "doors_hardware (3).jpg",
        "doors_hardware (4).jpg",
        "doors_hardware (5).jpg",
        "doors_hardware (6).jpg",
        "doors_hardware (7).jpg",
        "doors_hardware (8).jpg",
        "doors_hardware (9).jpg",
        "doors_hardware (10).jpg"
      ];
    } else if (alt === "Locksmith") {
      images = [
        "locksmith (1).jpg",
        "locksmith (2).jpg",
        "locksmith (3).jpg",
        "locksmith (4).jpg",
        "locksmith (5).jpg"
      ];
    } else if (alt === "Access Control") {
      images = [
        "access_control (1).jpg",
        "access_control (2).jpg",
        "access_control (3).jpg",
        "access_control (4).jpg",
        "access_control (5).jpg",
        "access_control (6).jpg",
        "access_control (7).jpg",
        "access_control (8).jpg",
        "access_control (9).jpg",
        "access_control (10).jpg"
      ];
    }

    if (!images.length) return;

    const folder = spotlight.querySelector(".image").dataset.folder;
    let current = 0;

    // 👇 function to handle fade and random interval
    const switchImage = () => {
      let next;
      do {
        next = Math.floor(Math.random() * images.length);
      } while (next === current);

      current = next;
      const newImage = folder + images[current];

      img.classList.add("fade-out");

      setTimeout(() => {
        img.src = newImage;
        img.classList.remove("fade-out");
        img.classList.add("fade-in");

        setTimeout(() => {
          img.classList.remove("fade-in");
        }, 1000);
      }, 1000);

      // 🔀 choose next delay between 4–7 seconds
      const nextDelay = Math.floor(Math.random() * 3000) + 4000;
      setTimeout(switchImage, nextDelay);
    };

    // 🕐 start with a short random initial delay too
    const initialDelay = Math.floor(Math.random() * 2000) + 1000;
    setTimeout(switchImage, initialDelay);
  });
});


// END USER ADDED

var	$window = $(window),
		$body = $('body'),
		$wrapper = $('#page-wrapper'),
		$banner = $('#banner'),
		$header = $('#header');

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ null,      '480px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Mobile?
		if (browser.mobile)
			$body.addClass('is-mobile');
		else {

			breakpoints.on('>medium', function() {
				$body.removeClass('is-mobile');
			});

			breakpoints.on('<=medium', function() {
				$body.addClass('is-mobile');
			});

		}

	// Scrolly.
		$('.scrolly')
			.scrolly({
				speed: 1500,
				offset: $header.outerHeight()
			});

	// Menu.
		$('#menu')
			.append('<a href="#menu" class="close"></a>')
			.appendTo($body)
			.panel({
				delay: 500,
				hideOnClick: true,
				hideOnSwipe: true,
				resetScroll: true,
				resetForms: true,
				side: 'right',
				target: $body,
				visibleClass: 'is-menu-visible'
			});

	// Header.
		if ($banner.length > 0
		&&	$header.hasClass('alt')) {

			$window.on('resize', function() { $window.trigger('scroll'); });

			$banner.scrollex({
				bottom:		$header.outerHeight() + 1,
				terminate:	function() { $header.removeClass('alt'); },
				enter:		function() { $header.addClass('alt'); },
				leave:		function() { $header.removeClass('alt'); }
			});

		}

})(jQuery);