<?php get_header(); ?>

<main id="contract">

  <?php
  // --- Data maps (safe refactor: same markup, less repetition) ---

    $spotlights = [
    [
        'folder' => '/images/doors_hardware/',
        'img'    => '/images/doors_hardware/doors_hardware (1).jpg',
        'alt'    => 'Doors & Hardware',
        'title'  => 'Doors & Hardware',
        'copy'   => 'Installation and supply for commercial openings.',
    ],
    [
        'folder' => '/images/locksmith/',
        'img'    => '/images/locksmith/locksmith (1).jpg',
        'alt'    => 'Commercial Locksmith & Facility Service',
        'title'  => 'Commercial Locksmith & Facility Service',
        'copy'   => 'Repairs, rekeys, and on-site support for active facilities.',
    ],
    [
        'folder' => '/images/access_control/',
        'img'    => '/images/access_control/access_control (1).jpg',
        'alt'    => 'Access Control & CCTV',
        'title'  => 'Access Control & CCTV',
        'copy'   => 'Credentialed access and camera systems for commercial sites.',
    ],
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

      </div>
      <br>
      <h2>Construction & Contracting</h2><br>
      <p class="heading">Commercial door, hardware, and security scope for new builds and renovations.</p>
    </div>

    <ul class="actions special">
      <li><a href="#request-bid" class="more scrolly">Request a Bid</a></li>
    </ul>

    <!-- <a href="#about" class="more scrolly"></a> -->
  </section>


  <!-- Services -->

    <section class="wrapper style3 special" id="work-types">
    <div class="inner">
        <header class="major">
        <h2>What we do</h2>
        <p>We support general contractors and project teams with Division 8 execution, coordination,<br>and reliable installs — with the option to supply doors and hardware.</p>
        </header>

        <ul class="features">
        <li class="icon solid fa-hard-hat">
            <h3>Doors &amp; Hardware Installation</h3>
            <p>Commercial wood and hollow metal openings, frames, and associated hardware installed to spec.</p>
            <!-- <a href="/construction-contracting/" class="button">Request a Bid</a> -->
        </li>
        <li class="icon solid fa-toolbox">
            <h3>Door &amp; Hardware Supply</h3>
            <p>We can source and provide doors, frames, and hardware packages to support schedule and scope.</p>
            <!-- <a href="/service-facilities/" class="button">Request Service</a> -->
        </li>
        <li class="icon solid fa-toolbox">
            <h3>Access Control (Contract Scope)</h3>
            <p>Credentialed access solutions for commercial environments as part of project delivery.</p>
            <!-- <a href="/service-facilities/" class="button">Request Service</a> -->
        </li>
        <li class="icon solid fa-toolbox">
            <h3>CCTV (Contract Scope)</h3>
            <p>Camera systems installed as part of coordinated security scope.</p>
            <!-- <a href="/service-facilities/" class="button">Request Service</a> -->
        </li>
        </ul><br>

    </div>
    </section>

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
  <article id="request-bid">
    <section class="wrapper style5">
      <div class="inner">

        <section>
          <?php echo do_shortcode('[contact-form-7 id="f83eeb4" title="request-bid"]'); ?>
        </section>

        <p class="icon solid fa-phone">210-342-6678</p>
        <p class="icon solid fa-building">84 NE Interstate 410 Loop<br>San Antonio, TX 78216</p><br>

      </div>
    </section>
  </article>

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

