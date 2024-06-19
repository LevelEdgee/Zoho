
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services</title>
 <style>
 /* Reset default margin and padding for all elements */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Ensure the body doesn't overflow horizontally */
html, body {
  overflow-x: hidden;
  width: 100%;
}

.bg-200 {
  background-color: #f0f0f0; /* Light gray background */
  padding-top: 4rem; /* Adjust top padding */
  padding-bottom: 5rem; /* Adjust bottom padding */
  width: 100%; /* Ensure background fits within viewport */
  margin: 0; /* Remove default margins */
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
    margin-right: 0.5rem; /* Right margin between icons */
    margin-left: 0.5rem; /* Left margin between icons */
  }
}

@media (min-width: 992px) {
  .x_wd_app_entry {
    flex-basis: calc(20% - 1rem); /* Five icons per row with spacing */
    margin-right: 0.5rem; /* Right margin between icons */
    margin-left: 0.5rem; /* Left margin between icons */
  }
}

.arrow-container {
  display: flex;
  justify-content: flex-end;
  margin-top: 2rem;
  margin-right: 1rem; /* Add margin to the right */
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

/* Tab Navigation */
.nav-tabs { /* Bottom border color */
  border-radius: 10px;
  margin-bottom: 0; /* Remove margin that may affect the view */
  width: 100%; /* Ensure it fits within viewport */
}

.nav-tabs .nav-item {
  margin-bottom: 1px; /* Ensure no gap between items and border */
}

.nav-tabs .nav-link {
  border: none; /* Remove default borders */
  border-radius: 0; /* Remove default border-radius */
  padding: 0.5rem 1rem; /* Padding inside tabs */
  color: #007bff; /* Tab text color */
  font-weight: 600; /* Tab font weight */
  transition: all 0.3s ease; /* Smooth transition for hover */
  margin-bottom: 0; /* Remove bottom margin */
}

.nav-tabs .nav-link:hover {
  color: #0056b3; /* Tab text color on hover */
}

.nav-tabs .nav-link.active {
  background-color: white; /* Active tab background color */
  border: 0px solid black; /* Active tab bottom border color */
  border-radius: 15px; /* Increase upper left border radius */
   /* Increase upper right border radius */
  color: #000; /* Active tab text color */
  margin-bottom: 2px; /* Remove bottom margin */
}

/* Optional: Smooth transition for active tab */
.nav-tabs .nav-link.active,
.nav-tabs .nav-link.active:hover {
  transition: all 0.3s ease;
}

/* Responsive styles for small screens */
@media (max-width: 576px) {
  .nav-tabs .nav-link {
    font-size: 14px; /* Reduce font size for smaller screens */
  }
  .service {
    padding-left: 10px; /* Adjust padding */
    padding-right: 10px; /* Adjust padding */
  }
}

.flipped-horizontal {
  transform: scaleX(-1);
}

.services-title {
  font-family: sans-serif; /* Beautiful font style */
  font-weight: 600; /* Font weight of 600 */
  font-size: 2.2rem; /* Enlarge the text */
  color: #333; /* Color of the text */
  margin-bottom: 0.5rem; /* Adjust bottom margin */
}

</style>



  <!-- Bootstrap CSS link (assuming you're using Bootstrap) -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<section id="services" class="bg-200 o_colored_level pt-4 pt-md-6 pb-7" data-oe-shape-data="{'shape':'illustration/doodle/03'}">
  <div class="o_we_shape o_illustration_doodle_03"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-9 col-xxl-8 text-center">

        <div class="x_wd_notification_box position-relative rounded rounded-pill-md mb-4">
          <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
              <h3 class="services-title">Expertise in all 50+ ZOHO products</h3>

            </div><!--end grid-->
          </div><!--end container-->
        </div>

        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="true">Sales & Marketing</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="service-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">Finance</a>
          </li>
          
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="false">Service</a>
          </li>
          
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="service-tab" data-toggle="tab" href="#humanresource" role="tab" aria-controls="service" aria-selected="false">Human resources</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="service-tab" data-toggle="tab" href="#management" role="tab" aria-controls="service" aria-selected="false">Security & Management</a>
          </li>
          <!-- Add more tabs as needed -->
        </ul>
        <br>

        <!-- Tabs Content -->
        <div class="tab-content" id="myTabContent">
            <!-- sales tab -->
          <div class="tab-pane fade show active" id="sales" role="tabpanel" aria-labelledby="sales-tab">
            <div class="service row justify-content-center">
                <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/crm.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">CRM</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/bigin" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Bigin</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/forms.jpg" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Forms</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/booking.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Booking</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/sign.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Signs</figcaption>
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
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/route.png" alt="Route IQ" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Route IQ</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/thrive.png" alt="Route IQ" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Thrive</figcaption>
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
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/survey.png" alt="Lens" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Survey</figcaption>
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
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/campaigns.png" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Campaigns</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/sites.png" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Sites</figcaption>
                    </figure>
                  </a>

                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/pagesense.png" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Page sense</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/webinar.png" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">webinar</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/commerce.png" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Commerce</figcaption>
                    </figure>
                  </a>
                
        
              <!-- Add more sales services here -->
            </div>
          </div>

          <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
            <div class="service row justify-content-center">
                <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/sales.jpg" alt="Odoo Sales icon" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Sales IQ</figcaption>
                    </figure>
                  </a>

                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/desk.png" alt="Odoo Sales icon" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Desk</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/booking.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Booking</figcaption>
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
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/assist.png" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Assist</figcaption>
                    </figure>
                  </a>
                  <!-- <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/fsm.png" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">FSM</figcaption>
                    </figure>
                  </a> -->

               
              <!-- Add more service services here -->
            </div>
            
          </div>

          <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="service-tab">
            <div class="service row justify-content-center">
            <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/books.png" alt="BOOK" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Book</figcaption>
                    </figure>
                  </a>
                <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/inventory.png" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Inventory</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/sign.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Signs</figcaption>
                    </figure>
                  </a>
        
                  
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/expense.png" alt="Creator" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Expense</figcaption>
                    </figure>
                  </a>
      
        
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/invoice.png" alt="cliq" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Invoice</figcaption>
                    </figure>
                  </a>
        
        
                  
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/checkout.png" alt="Route IQ" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Checkout</figcaption>
                    </figure>
                  </a>
        
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/billing.png" alt="Odoo Sales icon" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Billing</figcaption>
                    </figure>
                  </a>
        
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/payroll.png" alt="social" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Payroll</figcaption>
                    </figure>
                  </a>
        
                
        
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/financeplus.png" alt="cliq" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Finance Plus</figcaption>
                    </figure>
                  </a>
               
              <!-- Add more service services here -->
            </div>

          <!-- Add more tab panes for each category -->
        </div>

        <div class="tab-pane fade" id="humanresource" role="tabpanel" aria-labelledby="sales-tab">
            <div class="service row justify-content-center">
                <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/people.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">People</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/recruit.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Recruit</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/sign.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Signs</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/expense.png" alt="Creator" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Expense</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/shift.png" alt="Odoo Sales icon" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Shift</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/worker.png" alt="Creator" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Worker</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/payroll.png" alt="social" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Payroll</figcaption>
                    </figure>
                  </a>
        
                
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/peoplePlus.png" alt="Route IQ" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">People Plus</figcaption>
                    </figure>
                  </a>
                  
                
        
              <!-- Add more sales services here -->
            </div>
          </div>

        <div class="tab-pane fade" id="management" role="tabpanel" aria-labelledby="sales-tab">
            <div class="service row justify-content-center">
            <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/creator.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Creator</figcaption>
                    </figure>
                  </a>
            <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/lens.png" alt="Creator" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Lense</figcaption>
                    </figure>
                  </a>    
            
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/catalyst.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Catalyst</figcaption>
                    </figure>
                  </a>
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/servicedesk.png" alt="CRM" loading="lazy">
                      <figcaption class="text-truncate text-o-color-5">Signs</figcaption>
                    </figure>
                  </a>
                  
                  <a class="x_wd_app_entry col-6 col-md-4 col-lg-2 text-center mb-3 p-0" href="">
                    <figure>
                      <img class="img-thumbnail rounded-1 mb-3" src="assets/images/service/vault.png" alt="Odoo Sales icon" loading="lazy">
                      <figcaption class="text-truncate  text-o-color-5">Vault</figcaption>
                    </figure>
                  </a>
                                 
        
              <!-- Add more sales services here -->
            </div>
          </div>

        <!-- <div class="arrow-container">
          <a href="/zoho">
            <img src="https://odoocdn.com/openerp_website/static/src/img/arrows/secondary_arrow_sm_03.svg" width="40px" class="align-top ms-2 me-3 flipped-horizontal" alt="More apps arrow" loading="lazy">
          </a>
        </div> -->
      </div>
    </div>
  </div>
</section>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>

