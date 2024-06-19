<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
  <style>
    .mobile-footer {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #fff;
      padding: 10px;
      margin-bottom: 0px;
      box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.1);
      z-index: 9999; /* Set a high z-index value to keep it on top */
      display: flex;
      justify-content: space-around; /* Spread items evenly */
    }

    /* Hide mobile-footer on desktop devices */
    @media (min-width: 769px) {
      .mobile-footer {
        display: none;
      }
    }

    .btn-success {
      background-color: #28a745; /* Green color */
      color: #fff; /* White text color */
      padding: 8px 10px; /* Reduced padding */
      border: none;
      border-radius: 5px;
      text-decoration: none; /* Remove underline from anchor tag */
      display: flex;
      align-items: center; /* Center icon and text vertically */
    }

    .btn-success i {
      margin-right: 5px; /* Space between icon and text */
    }

    .mobile-footer a {
      margin: 0 5px; /* Add margin between buttons */
      flex: 1; /* Allow buttons to resize equally */
      text-align: center; /* Center align text */
    }
  </style>
</head>
<body>

<div class="mobile-footer">
  <a href="tel:+91 9594148898" class="btn btn-success"><i class="bi bi-telephone"></i> Call Now </a>
  <a href="https://wa.me/9594148898" class="btn btn-success"><i class="bi bi-whatsapp"></i> Whatsapp</a>
  <a href="mailto:teamleveledge@gmail.com" class="btn btn-success"><i class="bi bi-envelope"></i> E-Mail</a>
</div>

</body>
</html>
