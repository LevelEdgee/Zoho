<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CTA Section</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .cta-section {
        position: relative;
        padding-top: 10%;
        padding-bottom: 10%;
        color: black; /* Text color */
    }

    .cta-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('assets/images/cta frame.png');
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        filter: blur(1px); 
        z-index: -1; /* Place behind the text */
    }

    .section-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .cta-wrapper {
        text-align: center;
    }

    .cta-section .heading {
        font-size: 4rem;
        margin-bottom: 1rem;
        font-weight: 700; /* Make text bold */
    }

    .cta-section .button {
        background-color: black; /* Fill color */
        border: 2px solid black; /* Border color */
        color: white; /* Text color */
        padding: 0.75rem 1.5rem;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        display: inline-block;
        font-weight: bold; /* Make text bold */
    }

    .button:hover {
        background-color: rgba(0, 0, 0, 0.8); /* Darken background color on hover */
    }
</style>
</head>
<body>

<section class="cta-section">
    <div class="section-container">
        <div class="cta-wrapper">
            <div class="heading h1">Ready to transform your business?</div>
            <a href="/contact" class="button minimal w-button">Contact Us</a>
        </div>
    </div>
</section>

</body>
</html>
