<?php
/* Template Name: Careers */
get_header();
?>

<main id="main">

  <!-- Careers Article -->
  <article id="careers">
    <header>
      <p>Fill out the form below to apply today</p><br>
    </header>

    <section class="wrapper style5">
      <div class="inner">
        <section>
          <h4>Employment Application</h4>
          <p>Please enter your information. Fill in all boxes.</p>
          <br>

          <form method="post" action="<?php echo get_template_directory_uri(); ?>/assets/php/send_form.php">
            <div class="row gtr-uniform">

              <div class="col-6 col-12-xsmall">
                <input type="text" name="first-name" id="first-name" placeholder="First Name">
              </div>
              <div class="col-6 col-12-xsmall">
                <input type="email" name="applicant-email" id="applicant-email" placeholder="Email">
              </div>
              <div class="col-6 col-12-xsmall">
                <input type="text" name="middle-name" id="middle-name" placeholder="Middle Name">
              </div>
              <div class="col-6 col-12-xsmall">
                <input type="text" name="applicant-phone" id="applicant-phone" placeholder="Phone Number">
              </div>
              <div class="col-6 col-12-xsmall">
                <input type="text" name="last-name" id="last-name" placeholder="Last Name">
              </div>

              <ul class="questions">

                <!-- Example of one question block -->
                <div class="questions">
                  Are you comfortable with using portable devices (cell phones, tablets, apps, etc.)?
                  <br>
                  <span class="question-wrap">
                    <div class="question-checkbox" data-question="1">
                      <span class="q1">
                        <input type="checkbox" name="q1-yes" id="q1-yes">
                        <label for="q1-yes">Yes</label>
                      </span>
                      <span class="q1">
                        <input type="checkbox" name="q1-no" id="q1-no">
                        <label for="q1-no">No</label>
                      </span>
                    </div>
                  </span>
                </div>

                <!-- Repeat your other question blocks exactly as in HTML -->
                <!-- (You can keep all 12 of them as-is; WordPress doesn’t restrict raw HTML.) -->

                <p>Where are you located?</p>
                <div class="location-city">
                  <input type="text" name="city" id="city" placeholder="City">
                </div>
                <br>
                <div class="location-state">
                  <input type="text" name="state" id="state" placeholder="State">
                </div>

                <div class="experience">
                  Please check all the experience you have:
                  <br>
                  <select name="experience-selection[]" id="checkbox" class="experience-selection" multiple="multiple">
                    <option value="">---</option>
                    <option value="None">None</option>
                    <option value="Home Renovations/D.I.Y">Home Renovations/D.I.Y</option>
                    <option value="Locksmith">Locksmith</option>
                    <option value="Commercial Construction">Commercial Construction</option>
                    <option value="Residential Construction">Residential Construction</option>
                    <option value="Carpentry">Carpentry</option>
                    <option value="Finish Carpentry">Finish Carpentry</option>
                    <option value="Electrical">Electrical</option>
                    <option value="Access Control">Access Control</option>
                    <option value="Low Voltage">Low Voltage</option>
                    <option value="Door Hardware Installation">Door Hardware Installation</option>
                    <option value="Facilities Maintenance">Facilities Maintenance</option>
                  </select>
                </div>

                <div class="tools">
                  Which best describes the tools you own:
                  <br>
                  <select name="tool-category" id="checkbox" class="experience-selection" multiple="multiple">
                    <option value="">- Select One -</option>
                    <option value="None">None</option>
                    <option value="Basic Tools (Electric Drill, Pliers, Screw Driver, Measuring Tape, Hammer)">
                      Basic Tools (Electric Drill, Pliers, Screw Driver, Measuring Tape, Hammer)
                    </option>
                    <option value="Experienced Tools (Basic Tools+)">Experienced Tools (Basic Tools+)</option>
                  </select>
                </div>

                <br>
                <div class="col-12">
                  <ul class="actions">
                    <li><input type="submit" value="Submit"></li>
                    <li><input type="reset" value="Reset"></li>
                  </ul>
                </div>
              </ul>

            </div>
          </form>
        </section>
      </div>
    </section>
  </article>

</main>

<?php get_footer(); ?>
