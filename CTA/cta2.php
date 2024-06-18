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
        background-color: #f4f4f4;
    }

    .cta-div-2 {
        background-color: #2A2D34; /* Assuming --gunmetal is a dark color */
        color: #fff;
        border-radius: 0.5rem;
        padding: 1rem 2rem;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px; /* Increased width */
        margin: 2rem auto;
        border-left: 5px solid #4CAF50; /* Green border to make it look like a ribbon */
        background-image: url('https://cdn.prod.website-files.com/65d59e20bca51a2ea9324a02/65db7a32123a8a171a10fdbc_Frame%20627723.png');
        background-size: cover;
        background-position: center;
    }

    .cta-div-2::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Optional: To add a dark overlay for better text visibility */
        z-index: 0;
    }

    .div-block-2 {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        position: relative;
        z-index: 1;
    }

    .cta-div-2 .heading {
        font-size: 1.5rem;
        margin: 0 0 0.5rem;
        color: rgb(182,237,62);
    }

    .paragraph {
        margin: 0 0 1rem;
        font-size: 1rem;
    }

    .button {
        background-color: #4CAF50;
        color: #fff;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="cta-div-2" style="opacity: 1;">
    <div class="div-block-2">
        <div class="text-wrapper _75 cta">
            <div class="heading h2 pear s" style="opacity: 1;">Achieve more with automation</div>
            <div class="paragraph white cta" style="opacity: 1;">Speak to our expert team about RPA consulting services and attain operational efficiency.</div>
        </div>
        <a href="/contact" class="button minimal w-button" style="opacity: 1;">Talk to us</a>
    </div>
</div>

</body>
</html>
