<?php get_header(); ?>

<main id="main">

  <?php
  // --- Data maps (safe refactor: same markup, less repetition) ---

    $spotlights = [
    [
        'folder' => '/images/doors_hardware/',
        'img'    => '/images/doors_hardware/doors_hardware (1).jpg',
        'alt'    => 'Construction & Contracting',
        'title'  => 'Construction & Contracting',
        'copy'   => 'Doors & hardware installs, hardware supply, and coordinated security scope for projects.',
        'link'   => home_url('/?page_id=824'),
    ],
    [
        'folder' => '/images/locksmith/',
        'img'    => '/images/locksmith/locksmith (1).jpg',
        'alt'    => 'Service & Facilities',
        'title'  => 'Service & Facilities',
        'copy'   => 'Commercial locksmithing and door/hardware service built for lasting solutions and multi-site support.',
        'link'   => home_url('/?page_id=823'),
    ],
    // [
    //     'folder' => '/images/access_control/',
    //     'img'    => '/images/access_control/access_control (1).jpg',
    //     'alt'    => 'Access Control & CCTV',
    //     'title'  => 'Access Control & CCTV',
    //     'copy'   => 'Credentialed access and camera systems for commercial sites.',
    // ],
    ];

    $services = [
    [
        'icon'   => 'fa-building',
        'title'  => 'Doors &amp; Hardware<br>Supply &amp; Installation',
        'lead'   => 'Commercial openings, frames, and hardware—installed to spec, with the option to supply doors and hardware packages.',
        'moreId' => 'more-doors',
        'more'   => 'We support new construction and remodels with coordinated installs, replacements, and closeout support—wood, hollow metal, storefront, and associated hardware.',
    ],
    [
        'icon'   => 'fa-lock',
        'title'  => 'Commercial Locksmith Service',
        'lead'   => 'Rekeys, lock repair/replacement, master key support, and secure access solutions for commercial buildings.',
        'moreId' => 'more-locksmith',
        'more'   => 'Built for facilities partners: consistent documentation, repeatable solutions, and support for multi-site operations. (Commercial service only.)',
    ],
    [
        'icon'   => 'fa-id-card',
        'title'  => 'Access Control & CCTV',
        'lead'   => 'Electronic security support for commercial environments—from controlled entry to camera coverage.',
        'moreId' => 'more-access',
        'more'   => 'We handle access control and CCTV as part of project scope and service work when applicable, and coordinate when scope expands beyond a quick fix.',
    ],
    ];

  $brand_logos = [
    'logo_medeco.png',
    'logo_x-09.png',
    'logo_kaba_mas.png',
    'alarm_lock.png',
    'allegion.png',
    'assa_abloy.png',
    'pdk.png',
  ];
  ?>

  <!-- Banner -->
  <section id="banner">
    <div class="inner">
      <div class="image">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . '/images/alk_logo_2016.png'); ?>"
          height="60%"
          width="60%"
          alt=""
        >
      </div>
      <br>
      <h2>Alert Lock & Key</h2><br>
      <p class="heading" data-target-resolver></p>
    </div>

    <!-- <ul class="actions special">
      <li><a href="#contact" class="more scrolly">Contact Us</a></li>
    </ul> -->

    <a href="#services" class="more scrolly"></a>
  </section>

  <!-- Spotlights -->
  <section id="services" class="wrapper alt style2">
    <?php foreach ($spotlights as $s) : ?>
      <section class="spotlight">
        <div
          class="image"
          data-folder="<?php echo esc_attr(get_template_directory_uri() . $s['folder']); ?>"
        >
          <img
            src="<?php echo esc_url(alk_theme_image($s['img'])); ?>"
            alt="<?php echo esc_attr($s['alt']); ?>"
          >
        </div>
        <div class="content">
          <h2><?php echo esc_html($s['title']); ?></h2>
          <p><?php echo esc_html($s['copy']); ?></p>
            <br><a href=<?php echo esc_url($s['link']); ?> class="button">More Info</a>
        </div>
      </section>
    <?php endforeach; ?>
  </section>

  <!-- About -->
  <section id="about" class="wrapper style1 special">
    <div class="inner">
      <header class="major">
        <h2>About Us</h2>
            <p>
                Alert Lock & Key is a commercial contractor specializing in doors, hardware, and electronic security.
                We support construction teams with installs and hardware supply, and we support facilities partners with ongoing service and repair.
                Our crews are experienced, safety-minded, and built for repeat work across multiple sites.
            </p>
            <p class="subtle">
                Commercial services only — we do not provide automotive or individual residential locksmith services.
            </p>
      </header>

      <ul class="icons major">
        <li><i class="fa fa-lock major style1"><i class="label"></i></i></li>
      </ul>
    </div>
  </section>

  <!-- Services -->

    <!-- <section class="wrapper style3 special" id="work-types">
    <div class="inner">
        <header class="major">
        <h2>Services</h2>
        <p>Built for Construction and Facilities</p>
        </header>

        <ul class="features">
        <li class="icon solid fa-hard-hat">
            <h3>Construction & Contracting</h3>
            <p>Doors & hardware installs, hardware supply, and coordinated security scope for projects.</p>
            <a href="/construction-contracting/" class="button">Request a Bid</a>
        </li>
        <li class="icon solid fa-toolbox">
            <h3>Service & Facilities</h3>
            <p>Commercial locksmithing and door/hardware service built for repeat work and multi-site support.</p>
            <a href="/service-facilities/" class="button">Request Service</a>
        </li>
        </ul><br>

        <p class="subtle">
        Commercial services only — no automotive or individual residential calls.
        </p>
    </div>
    </section> -->

  <!-- <section id="services" class="wrapper style3 special">
    <div class="inner">
      <header class="major">
        <h2>Services</h2>
        <p>In addition to general maintenance work across Central and South Texas,<br>
        we specialize in the following services.</p>
      </header>

      <ul class="features">
        <?php foreach ($services as $svc) : ?>
          <li class="icon solid <?php echo esc_attr($svc['icon']); ?>">
            <h3><?php echo wp_kses_post($svc['title']); ?></h3>
            <p><?php echo esc_html($svc['lead']); ?></p>

            <div class="more-content" id="<?php echo esc_attr($svc['moreId']); ?>">
              <p><?php echo esc_html($svc['more']); ?></p>
            </div>

            <a class="toggle-btn" href="#" data-target="<?php echo esc_attr($svc['moreId']); ?>" aria-expanded="false">
              Show More
            </a><br><br>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section> -->

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      // FIX: your section id is "about" now, not "one"
      const section = document.getElementById("about");

      document.addEventListener("click", (e) => {
        const link = e.target.closest(".toggle-btn");
        if (!link) return;

        e.preventDefault();

        const targetId = link.dataset.target;
        const content = document.getElementById(targetId);
        if (!content) return;

        const isExpanded = content.classList.toggle("show");
        link.textContent = isExpanded ? "Show Less" : "Show More";
        link.setAttribute("aria-expanded", String(isExpanded));

        link.classList.add("reset-color");
        requestAnimationFrame(() => link.classList.remove("reset-color"));
        link.blur();

        if (!isExpanded && section) {
          section.scrollIntoView({ behavior: "smooth", block: "start" });
        }
      });
    });
  </script>





  <!-- Contact -->
  <!-- <article id="contact">
    <section class="wrapper style5">
      <div class="inner">

        <section>
          <?php echo do_shortcode('[contact-form-7 id="7a11450" title="Contact Form"]'); ?>
        </section>

        <a href="mailto:workorders@alertlock.net" class="icon solid fa-envelope"> workorders@alertlock.net</a>
        <p class="icon solid fa-phone">210-342-6678</p>
        <p class="icon solid fa-building">84 NE Interstate 410 Loop<br>San Antonio, TX 78216</p><br>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.9177879829176!2d-98.48827322379279!3d29.518755443285087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c60006672fe5b%3A0x804803b1b91be9cf!2s84%20NE%20Interstate%20410%20Loop%2C%20San%20Antonio%2C%20TX%2078216!5e0!3m2!1sen!2sus!4v1724881543732!5m2!1sen!2sus"
          style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </section>
  </article> -->

  <!-- CTA / Brand logos slider -->
  <section id="cta" class="wrapper style4">
    <div class="inner">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach ($brand_logos as $logo) : ?>
            <div class="swiper-slide">
              <div class="brands">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/' . $logo); ?>" alt="">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      new Swiper(".swiper", {
        slidesPerView: 3,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          0:   { slidesPerView: 1 },
          768: { slidesPerView: 3 }
        }
      });
    })
  </script>

</main>

<?php get_footer(); ?>
