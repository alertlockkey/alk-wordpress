<?php get_header(); ?>

<main id="main">

  <!-- Banner -->
  <section id="banner">
    <div class="inner">
      <br>
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/alk_logo_2016.png" height="60%" width="60%" alt="">
      </div>
      <br>
      <h2>Alert Lock & Key</h2><br>
      <p class="heading" data-target-resolver></p>
      <!-- <p>
        <span>#1 DOOR & HARDWARE COMPANY</span>
        <span>IN SOUTH AND CENTRAL TEXAS</span>
        <span>LOCALLY FAMILY OWNED AND OPERATED</span>
        <span>BONDED AND INSURED SINCE 1976</span>
        <span>AVAILABLE 24/7!</span>
        <span>(210) 342-6678</span>
      </p> -->
    </div>

    <ul class="actions special">
      <li><a href="#contact" class="button primary">Contact Us</a></li>
    </ul>
    
    <a href="#one" class="more scrolly"></a>
  </section>

  <!-- One -->
  <section id="about" class="wrapper style1 special">
    <div class="inner">
      <header class="major">
        <h2>About Us</h2>
        <p>
					Alert Lock & Key offers a full range door and hardware services, from new installs to remodels, service work, or door and hardware supply. We work with suppliers, general contractors, and businesses to ensure that your needs are met professionally and on time. The hardworking men and women of this company are our foundation, with decades of experience you can rest assured that AL&K is the right fit for your needs. We look forward to working with every single one of our customers. Give us a call today, so we can serve you in the best way possible.
				</p><br>
        <!-- <p>
          Alert Lock & Key offers a full range of San Antonio locksmith services, from lockouts to rekeying doors.
          We work with families and businesses to ensure that your home or office is completely secure.
          Our professionals can help you protect your home or get back in quickly if you’re locked out.
        </p><br> -->

        <!-- Collapsible content -->
        <!-- <div class="more-content" id="more-content">
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
        </div> -->

        <!-- Toggle button -->
        <!-- <a class="toggle-btn" id="toggle-btn">Show More</a> -->
        <!-- <script>
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
        </script> -->
      </header>

      <ul class="icons major">
        <li><i class="fa fa-lock major style1"><i class="label"></i></i></li>
      </ul>
    </div>
  </section>

  <!-- Two -->
  <section id="two" class="wrapper alt style2">
    <section class="spotlight">
      <div class="image" data-folder="<?php echo get_template_directory_uri(); ?>/images/doors_hardware/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/doors_hardware/doors_hardware (1).jpg" alt="Doors & Hardware">
      </div>
      <div class="content">
        <h2>Doors & Hardware</h2>
        <p>				Alert Lock & Key offers expert door and hardware installation in addition to supplying all your door and hardware needs. We provide durable door solutions and seamless installation to ensure optimal functionality and protection.</p>
      </div>
    </section>
    <section class="spotlight">
      <div class="image" data-folder="<?php echo get_template_directory_uri(); ?>/images/locksmith/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/locksmith/locksmith (1).jpg" alt="Locksmith">
      </div>
      <div class="content">
        <h2>Locksmith Services</h2>
        <p>Alert Lock & Key offers fast, reliable key replacement and key making services for homes and businesses, ensuring secure access and swift resolution for lost keys. We also provide advanced High Security Restricted Keys for enhanced protection against unauthorized duplication and entry.</p>
      </div>
    </section>
    <section class="spotlight">
      <div class="image" data-folder="<?php echo get_template_directory_uri(); ?>/images/access_control/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/access_control/access_control (1).jpg" alt="Access Control">
      </div>
      <div class="content">
        <h2>Access Control</h2>
        <p>Alert Lock & Key provides a full range of access control and enhanced security features to protect your business. Our solutions include remote monitoring and comprehensive safety measures to ensure peace of mind and efficient protection.</p>
      </div>
    </section>

  </section>

  <!-- Three -->
  <!-- <section id="three" class="wrapper style3 special"> -->
  <section id="services" class="wrapper style3 special">
    <div class="inner">
      <header class="major">
        <h2>Services</h2>
        <p>In addition to general maintenance work, we specialize in the following services.</p>
      </header>
      <ul class="features">
        <li class="icon solid fa-building">
          <h3>Doors & Hardware</h3>
          <p>Alert Lock & Key offers complete commercial wood, hollow metal and commercial storefront glass solutions in Central and South Texas as well frames and all associated harware, ensuring security and functionality. No distance is too far!</p>
        </li>
        <li class="icon solid fa-lock">
          <h3>Locksmith</h3>
          <p>Alert Lock & Key offers fast and professional key replacement and rekeying services for homes and businesses in Central and South Texas, providing customized key systems, high-security restricted keys, and secure access control for all levels of users.</p>
        </li>
        <li class="icon solid fa-unlock">
          <h3>Access Control</h3>
          <p>Alert Lock & Key offers advanced access control systems in Central and South Texas, providing convenient, secure, and customizable smart locks for businesses that allow remote control, digital key management, easy lock changes, and enhanced security.</p>
        </li>
        <!-- <li class="icon solid fa-home">
          <h3>Residential</h3>
          <p>Alert Lock & Key offers comprehensive residential locksmith services in San Antonio, including lockouts, rekeying, lock replacement, and key extraction, ensuring homeowners' security and peace of mind.</p>
        </li> -->
        <!-- <li class="icon solid fa-car">
          <h3>Automobile</h3>
          <p>If you're locked out of your car in San Antonio, Alert Lock & Key offers fast, professional 24/7 auto locksmith services that prioritize safety and ensure no damage to your vehicle, whether you have traditional locks or modern fob technology.</p>
        </li> -->
        <!-- <li class="icon solid fa-bell">
          <h3>Alarm Systems</h3> 
          <p>Alert Lock & Key offers comprehensive San Antonio alarm systems that protect homes from intruders, fires, carbon monoxide, and other dangers, while also providing remote monitoring, potential insurance savings, and peace of mind through central monitoring and smartphone integration.</p>
        </li> -->
      </ul>
    </div>
  </section>

  <!-- Contact -->
  <article id="contact">
    <section class="wrapper style5">
      <div class="inner">
        <!-- <section>
          <h4>Use the form below to send us a message</h4><br>
          <form method="post" action="<?php echo get_template_directory_uri(); ?>/assets/php/send_form.php">
            <div class="row gtr-uniform">
            </div>
          </form>
        </section> -->
        <section>
          <?php echo do_shortcode('[contact-form-7 id="7a11450" title="Contact Form"]'); ?>
        </section>

        <a href="mailto:workorders@alertlock.net" class="icon solid fa-envelope"> workorders@alertlock.net</a>
        <p class="icon solid fa-phone">210-342-6678</p>
        <p class="icon solid fa-building">84 NE Interstate 410 Loop<br>San Antonio, TX 78216</p><br>

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
    document.addEventListener("DOMContentLoaded", function() {
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
    })
  </script>

</main>

<?php get_footer(); ?>
