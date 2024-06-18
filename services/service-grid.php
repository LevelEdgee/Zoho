<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Odoo Apps Showcase</title>
  <style>
    .bg-200 {
      background-color: #f0f0f0; /* Light gray background */
      padding-top: 4rem; /* Adjust top padding */
      padding-bottom: 5rem; /* Adjust bottom padding */
    }
    @media (max-width: 576px) {
  
  .service{
      padding-left: 22px;
      padding-right: 22px;

    }
}

    .x_wd_apps_switched {
      max-width: 100%;
      height: auto;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    .x_wd_app_entry {
      text-decoration: none; /* Remove underline from links */
      color: inherit; /* Inherit text color */
      display: block;
      margin-bottom: 1.5rem; /* Adjust bottom margin */
      text-align: center;
    }
    .x_wd_app_entry img {
      width: 130px; /* Fixed width for app icons */
      height: auto; /* Maintain aspect ratio */
      display: block;
      margin: 0 auto 0.5rem; /* Center and add bottom margin */
      border-radius: 15px; /* Rounded corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
    }

    /* Optional: Adjust the hover effect size if needed */
    .x_wd_app_entry:hover img {
      transform: scale(1.1); /* Increase icon size on hover */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Larger shadow on hover */
    }

    .x_wd_app_entry figcaption {
      color: black;
      font-weight: 600; /* Light gray text color */
    }
    @media (min-width: 576px) {
      .x_wd_app_entry {
        flex-basis: calc(33.3333% - 1rem); /* Three icons per row with spacing */
        margin-right: 1rem; /* Right margin between icons */
      }
    }
    @media (min-width: 992px) {
      .x_wd_app_entry {
        flex-basis: calc(20% - 1rem); /* Five icons per row with spacing */
      }
    }
    .arrow-container {
      display: flex;
      justify-content: flex-end;
      margin-top: 2rem;
    }

    /* Remove hover effects */
    a:hover,
    .x_wd_app_entry:hover,
    .x_wd_app_entry img:hover,
    .x_wd_app_entry figcaption:hover {
      text-decoration: none; /* No underline on hover */
      color: inherit; /* Inherit text color on hover */
    }
    .x_wd_app_entry:hover img {
      transform: scale(1.1); /* Increase icon size on hover */
    }

    .x_wd_app_entry:hover figcaption {
      font-size: 14px; /* Increase font size on hover */
    }

    /* Optional: Smooth transition */
    .x_wd_app_entry img,
    .x_wd_app_entry figcaption {
      transition: all 0.3s ease; /* Smooth transition over 0.3 seconds */
    }

    /* Style for "Our Services" */
    .services-title {
      font-family: "Jost", sans-serif; /* Beautiful font style */
      font-weight: 600; /* Font weight of 600 */
      font-size: 2.2rem; /* Enlarge the text */
      color: #333; /* Color of the text */
      margin-bottom: 0.5rem; /* Adjust bottom margin */
    }

    .services-description {
      font-family: 'Arial', sans-serif; /* Beautiful font style */
      font-size: 1.25rem; /* Adjust the size as needed */
      color: #666; /* Color of the text */
    }

    
  </style>
  <!-- Bootstrap CSS link (assuming you're using Bootstrap) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="bg-200 o_colored_level pt-4 pt-md-6 pb-7" data-oe-shape-data="{'shape':'illustration/doodle/03'}">
  <div class="o_we_shape o_illustration_doodle_03"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-9 col-xxl-8 text-center">

        <div class="x_wd_notification_box position-relative rounded rounded-pill-md mb-4">
          <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
              <h3 class="services-title">Expertise in all 50+ ZOHO products</h3>
              <!-- <p class="services-description"></p> -->
            </div><!--end grid-->
          </div><!--end container-->
        </div>

        <div class="service row justify-content-center">
        <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/crm.png" alt="CRM" loading="lazy">
              <figcaption class="text-truncate text-o-color-5">CRM</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/people.png" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">People</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/books.png" alt="BOOK" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Book</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/creator.png" alt="Creator" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Creator</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/backstage.png" alt="Backstage" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Backstage</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/route.png" alt="Route IQ" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Route IQ</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/sales.jpg" alt="Odoo Sales icon" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Sales IQ</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/social.png" alt="social" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Social</figcaption>
            </figure>
          </a>

        

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/cliq.png" alt="cliq" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Cliq</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/lens.png" alt="Lens" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Lens</figcaption>
            </figure>
          </a>

          
          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/mail.png" alt="Route IQ" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Mail</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/meeting.png" alt="Odoo Sales icon" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Meeting</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/contracts.jpg" alt="social" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Contracts</figcaption>
            </figure>
          </a>

        

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/recruit.png" alt="cliq" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Recruit</figcaption>
            </figure>
          </a>

          <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
            <figure>
              <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/survey.png" alt="Lens" loading="lazy">
              <figcaption class="text-truncate  text-o-color-5">Survey</figcaption>
            </figure>
          </a>


          <!-- Add other app entries here -->

        </div>

        <div class="arrow-container">
          <a href="service.php">
            <img src="https://odoocdn.com/openerp_website/static/src/img/arrows/secondary_arrow_sm_03.svg" width="40px" class="align-top ms-2 me-3" alt="More apps arrow" loading="lazy">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS (assuming you need it for some functionality) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
