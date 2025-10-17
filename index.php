<?php get_header(); ?>

<main id="main">

  <!-- Banner -->
  <section id="banner">
    <div class="inner">
      <br>
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alk_logo_2016.png" height="66%" width="66%" alt="">
      </div>
      <br>
      <h2>Alert Lock & Key</h2>
      <p>
        <span>#1 DOOR & HARDWARE COMPANY IN SAN ANTONIO, TX</span>
        <span>LOCALLY FAMILY OWNED AND OPERATED</span>
        <span>BONDED AND INSURED SINCE 1976</span>
        <span>AVAILABLE 24/7!</span>
        <span>(210) 342-6678</span>
      </p>
    </div>

    <br>
    <ul class="actions special">
      <li><a href="#contact" class="button primary">Contact Us</a></li>
    </ul>
    <br><br><br>
    <a href="#one" class="more scrolly">Learn More</a>
  </section>

  <!-- One -->
  <section id="one" class="wrapper style1 special">
    <div class="inner">
      <header class="major">
        <h2>About Us</h2>
        <p>
          Alert Lock & Key offers a full range of San Antonio locksmith services, from lockouts to rekeying doors.
          We work with families and businesses to ensure that your home or office is completely secure.
          Our professionals can help you protect your home or get back in quickly if you’re locked out.
        </p><br>

        <!-- Collapsible content -->
        <div class="more-content" id="more-content">
          <p>
            Family owned and operated for more than 40 years, Alert Lock and Key has been committed to providing prompt and quality service.
            We offer 24-hour full locksmith services, residential and commercial locksmith services, access control, CCTV, construction,
            installation of doors and hardware, storefront glass installation, along with safe openings, moved, serviced and sold.
          </p><br>

          <p>
            Alert Lock & Key is happy to be up-to-date on the latest technology so that we can assist you to select smart locks and alarm systems
            that are right for your lifestyle. We’ll help you select your best option, followed by a complete installation done quickly and correctly.
          </p><br>

          <p>
            Alert Lock & Key has been a reliable San Antonio company since 1976. For more than forty years, we’ve taken pride in providing
            excellent high-quality locksmith services to the people and businesses of San Antonio.
          </p><br>
        </div>

        <!-- Toggle button -->
        <a class="toggle-btn" id="toggle-btn">Show More</a>
        <script>
          document.addEventListener("DOMContentLoaded", function () {
            const link = document.getElementById("toggle-btn");
            const content = document.getElementById("more-content");
            const section = document.getElementById("one");
            link.addEventListener("click", () => {
              const isExpanded = content.classList.toggle("show");
              link.textContent = isExpanded ? "Show Less" : "Show More";
              link.classList.add("reset-color");
              requestAnimationFrame(() => link.classList.remove("reset-color"));
              link.blur();
              if (!isExpanded) {
                section.scrollIntoView({ behavior: "smooth", block: "start" });
              }
            });
          });
        </script>
      </header>

      <ul class="icons major">
        <li><i class="fa fa-lock major style1"><i class="label"></i></i></li>
      </ul>
    </div>
  </section>

  <!-- Two -->
  <section id="two" class="wrapper alt style2">
    <section class="spotlight">
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/locksmith.png" alt="">
      </div>
      <div class="content">
        <h2>Locksmith Services</h2>
        <p>Alert Lock & Key offers fast, reliable key replacement and key making services for homes and businesses, ensuring secure access and swift resolution for lost keys.</p>
      </div>
    </section>
    <section class="spotlight">
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alk_alarms.jpg" alt="">
      </div>
      <div class="content">
        <h2>Security</h2>
        <p>Alert Lock & Key provides advanced smart lock and alarm systems in San Antonio, offering remote access control and enhanced security features to protect your home or business.</p>
      </div>
    </section>
    <section class="spotlight">
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/secured_panic.png" alt="">
      </div>
      <div class="content">
        <h2>Doors & Hardware</h2>
        <p>Alert Lock & Key offers expert door installation and hardware services, enhancing security, energy efficiency, and curb appeal for homes and businesses.</p>
      </div>
    </section>
  </section>

  <!-- Three -->
  <section id="three" class="wrapper style3 special">
    <div class="inner">
      <header class="major">
        <h2>Services</h2>
        <p>In addition to general maintenance work, we specialize in the following services.</p>
      </header>
      <ul class="features">
        <li class="icon solid fa-home">
          <h3>Residential</h3>
          <p>Comprehensive residential locksmith services — lockouts, rekeying, replacements, and key extraction.</p>
        </li>
        <li class="icon solid fa-building">
          <h3>Commercial</h3>
          <p>Durable commercial storefront glass solutions that ensure both aesthetics and security for businesses.</p>
        </li>
        <li class="icon solid fa-car">
          <h3>Automobile</h3>
          <p>Fast, professional 24/7 auto locksmith services that ensure no damage to your vehicle.</p>
        </li>
        <li class="icon solid fa-lock">
          <h3>Locksmith</h3>
          <p>Professional rekeying and high-security restricted key systems for homes and businesses.</p>
        </li>
        <li class="icon solid fa-unlock">
          <h3>Access Control</h3>
          <p>Advanced access control systems with digital key management and enhanced break-in protection.</p>
        </li>
        <li class="icon solid fa-bell">
          <h3>Alarm Systems</h3>
          <p>Comprehensive alarm systems with remote monitoring and smartphone integration.</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- Contact -->
  <article id="contact">
    <section class="wrapper style5">
      <div class="inner">
        <section>
          <h4>Use the form below to send us a message</h4><br>
          <form method="post" action="<?php echo get_template_directory_uri(); ?>/assets/php/send_form.php">
            <!-- form fields unchanged -->
            <div class="row gtr-uniform">
              <!-- Your form fields remain as they are -->
            </div>
          </form>
        </section>

        <a href="mailto:workorders@alertlock.net" class="icon solid fa-envelope"> workorders@alertlock.net</a>
        <p class="icon solid fa-phone">210-342-6678</p>
        <p class="icon solid fa-building">84 NE Interstate 410 Loop<br>San Antonio, TX 78216</p>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3471.9177879829176!2d-98.48827322379279!3d29.518755443285087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c60006672fe5b%3A0x804803b1b91be9cf!2s84%20NE%20Interstate%20410%20Loop%2C%20San%20Antonio%2C%20TX%2078216!5e0!3m2!1sen!2sus!4v1724881543732!5m2!1sen!2sus" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </article>

  <!-- CTA -->
  <section id="cta" class="wrapper style4">
    <div class="inner">
      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- repeat swiper slides -->
          <div class="swiper-slide"><div class="brands"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_medeco.png" class="logo1"></div></div>
          <div class="swiper-slide"><div class="brands"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_x-09.png" class="logo2"></div></div>
          <div class="swiper-slide"><div class="brands"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_kaba_mas.png" class="logo3"></div></div>
          <div class="swiper-slide"><div class="brands"><img src="<?php echo get_template_directory_uri(); ?>/images/alarm_lock.png" class="logo4"></div></div>
          <div class="swiper-slide"><div class="brands"><img src="<?php echo get_template_directory_uri(); ?>/images/allegion.png" class="logo5"></div></div>
          <div class="swiper-slide"><div class="brands"><img src="<?php echo get_template_directory_uri(); ?>/images/assa_abloy.png" class="logo6"></div></div>
          <div class="swiper-slide"><div class="brands"><img src="<?php echo get_template_directory_uri(); ?>/images/pdk.png" class="logo7"></div></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>

  <script>
    new Swiper(".swiper", {
      slidesPerView: 1,
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
    });
  </script>

</main>

<?php get_footer(); ?>
