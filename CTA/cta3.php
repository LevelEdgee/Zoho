<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CTA Section with Badges</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .cta-section3 {
        position: relative;
        padding: 5% 0;
        color: black; /* Text color */
        background-color: #f9f9f9; /* Background color for contrast */
        text-align: center;
    }

    .section-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    .badge-column {
        flex: 1 1 30%;
        max-width: 30%;
        padding: 1rem;
        box-sizing: border-box;
    }

    .badge-column img {
        width: auto;
        height: 150px; /* Set a uniform height */
        object-fit: contain; /* Maintain aspect ratio */
        margin: 0 auto;
        display: block; /* Center the images */
    }

    .cta-button {
        display: inline-block;
        background-color: black; /* Background color */
        color: white; /* Text color */
        border: 2px solid black; /* Border color */
        padding: 0.75rem 1.5rem;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        font-weight: bold; /* Make text bold */
        margin-top: 2rem;
    }

    .cta-button:hover {
        background-color: rgba(0, 0, 0, 0.8); /* Darken background color on hover */
    }
</style>
</head>
<body>

<section class="cta-section3">
    <div class="section-container">
        <div class="badge-column">
            <img src="https://boostedcrm.com/wp-content/uploads/2023/08/Advanced-solution-provider.png" alt="Advanced Solution Provider">
        </div>
        <div class="badge-column">
            <img src="assets/images/authorized_partner.png" class="l-dark" alt="Authorized Partner">
        </div>
        <div class="badge-column">
            <img src="https://boostedcrm.com/wp-content/uploads/2023/08/CRM-certified-consultant.png" alt="CRM Certified Consultant">
        </div>
        <!-- Add more badge columns as needed -->
    </div>
</section>

</body>
</html>
