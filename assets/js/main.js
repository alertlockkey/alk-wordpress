/*
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

// USER ADDED

// Spotlight image rotation
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
        "doors_hardware (10).jpg",
        "doors_hardware (11).jpg",
        "doors_hardware (12).jpg"
      ];
    } else if (alt === "Locksmith") {
      images = [
        "locksmith (1).jpg",
        "locksmith (2).jpg",
        "locksmith (3).jpg",
        "locksmith (4).jpg",
        "locksmith (5).jpg",
        "locksmith (6).jpg",
        "locksmith (7).jpg",
        "locksmith (8).jpg",
        "locksmith (9).jpg",
        "locksmith (10).jpg",
        "locksmith (11).jpg",
        "locksmith (12).jpg",
        "locksmith (13).jpg",
        "locksmith (14).jpg"
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
// End spotlight image rotation

// Typing text effect code from Futurisitic Resolving/Typing Text Effect on https://www.sliderrevolution.com/design/cool-javascript-animations/

const resolver = {
  resolve: function resolve(options, callback) {
    // The string to resolve
    const resolveString = options.resolveString || options.element.getAttribute('data-target-resolver');
    const combinedOptions = Object.assign({}, options, {resolveString: resolveString});
    
    function getRandomInteger(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    };
    
    function randomCharacter(characters) {
      return characters[getRandomInteger(0, characters.length - 1)];
    };
    
    function doRandomiserEffect(options, callback) {
      const characters = options.characters;
      const timeout = options.timeout;
      const element = options.element;
      const partialString = options.partialString;

      let iterations = options.iterations;

      setTimeout(() => {
        if (iterations >= 0) {
          const nextOptions = Object.assign({}, options, {iterations: iterations - 1});

          // Ensures partialString without the random character as the final state.
          if (iterations === 0) {
            element.textContent = partialString;
          } else {
            // Replaces the last character of partialString with a random character
            element.textContent = partialString.substring(0, partialString.length - 1) + randomCharacter(characters);
          }

          doRandomiserEffect(nextOptions, callback)
        } else if (typeof callback === "function") {
          callback(); 
        }
      }, options.timeout);
    };
    
    function doResolverEffect(options, callback) {
      const resolveString = options.resolveString;
      const characters = options.characters;
      const offset = options.offset;
      const partialString = resolveString.substring(0, offset);
      const combinedOptions = Object.assign({}, options, {partialString: partialString});

      doRandomiserEffect(combinedOptions, () => {
        const nextOptions = Object.assign({}, options, {offset: offset + 1});

        if (offset <= resolveString.length) {
          doResolverEffect(nextOptions, callback);
        } else if (typeof callback === "function") {
          callback();
        }
      });
    };

    doResolverEffect(combinedOptions, callback);
  } 
}

/* Some GLaDOS quotes from Portal 2 chapter 9: The Part Where He Kills You
 * Source: http://theportalwiki.com/wiki/GLaDOS_voice_lines#Chapter_9:_The_Part_Where_He_Kills_You
 */
const strings = [
  '#1 Door and hardware company in Central and South Texas',
  'Bonded and insured since 1976',  
  '(210)342-6678 - Available 24/7',
  'Locally family owned and operated'
];

let counter = 0;

const options = {
  // Initial position
  offset: 0,
  // Timeout between each random character
  timeout: 5,
  // Number of random characters to show
  iterations: 10,
  // Random characters to pick from
  characters: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'x', '#', '%', '&', '-', '+', '_', '?', '/', '\\', '='],
  // String to resolve
  resolveString: strings[counter],
  // The element
  element: document.querySelector('[data-target-resolver]')
}

// Callback function when resolve completes
function callback() {
  setTimeout(() => {
    counter ++;
    
    if (counter >= strings.length) {
      counter = 0;
    }
    
    let nextOptions = Object.assign({}, options, {resolveString: strings[counter]});
    resolver.resolve(nextOptions, callback);
  }, 4000);
}

resolver.resolve(options, callback);
// End of typing text effect code

// END USER ADDED

var	$window = $(window),
		$body = $('body'),
		$wrapper = $('#page-wrapper'),
		$banner = $('#banner'),
		$application = $('#application'),
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

		// logic for scrolly to work on both staging and local environments 
		// Staging menu links will need to include /staging/ (e.g. /staging/#about)
		// Local menu links need to be like this /#about

		let basePath = '/';
		const href = window.location.href;

		if (href.includes('/alertlockkey/')) {
			basePath = '/alertlockkey/';
		} else if (href.includes('/staging/')) {
			basePath = '/staging/';
		}

		console.log('Resolved basePath:', basePath);

		$('#menu a[href^="/#"]').each(function () {
			const hash = this.getAttribute('href').split('#')[1];
			this.setAttribute('href', basePath + '#' + hash);
		});

		$('a[href^="/#"], a[href^="/alertlockkey/#"], a[href^="/staging/#"]').on('click', function (e) {
			const href = $(this).attr('href');
			const hash = href.split('#')[1];
			const target = document.getElementById(hash);

			const path = window.location.pathname;
			const isLocal = href.includes('/alertlockkey/');
			const isStaging = href.includes('/staging/');
			const isProd = !isLocal && !isStaging;

			if (isLocal || isStaging || isProd) {
			e.preventDefault();
			if (target) {
				$('html, body').animate({
				scrollTop: $(target).offset().top - $('#header').outerHeight()
				}, 1500);
			}
			}
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
		if ($banner.length > 0 && $header.hasClass('alt') ||
		($application.length > 0 && $header.hasClass('alt'))) {

			$window.on('resize', function() { $window.trigger('scroll'); });

			const target = $banner.length > 0 ? $banner : $application;

			target.scrollex({
				bottom: $header.outerHeight() + 1,
				terminate: function () { $header.removeClass('alt'); },
				enter: function () { $header.addClass('alt'); },
				leave: function () { $header.removeClass('alt'); }
			});
		}

// Sub-Menu Toggle on Click

    const parents = document.querySelectorAll('#menu .menu-item-has-children');

    parents.forEach(li => {

      const link = li.querySelector(':scope > a');
      const submenu = li.querySelector(':scope > .sub-menu');

      if (!link || !submenu) return;

      // Create caret button
      const toggleBtn = document.createElement('button');
      toggleBtn.className = 'submenu-toggle';
      toggleBtn.setAttribute('aria-expanded', 'false');
      toggleBtn.innerHTML = '▾';

      // Insert after link
      link.after(toggleBtn);

      // Toggle behavior
      toggleBtn.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const isOpen = li.classList.toggle('is-open');
        toggleBtn.setAttribute('aria-expanded', isOpen);
      });

    });

// Reset submenus when Spectral menu closes
      const body = document.body;

      function resetSubmenus() {
        document.querySelectorAll('#menu .menu-item-has-children.is-open').forEach(li => {
          li.classList.remove('is-open');
          const btn = li.querySelector(':scope > .submenu-toggle');
          if (btn) btn.setAttribute('aria-expanded', 'false');
        });
      }

      // Watch body class changes (Spectral toggles body.is-menu-visible)
      const obs = new MutationObserver(() => {
        const menuOpen = body.classList.contains('is-menu-visible');
        if (!menuOpen) resetSubmenus();
      });

      obs.observe(body, { attributes: true, attributeFilter: ['class'] });

})(jQuery);


