<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flickity Carousel Integration</title>
<style>
    /* Flickity CSS */
    .gallery {
        background: #EEE;
        overflow: hidden;
    }

    .gallery-cell {
        width: 66%;
        height: 200px;
        margin-right: 10px;
        background: #8C8;
        counter-increment: gallery-cell;
    }

    /* Cell number */
    .gallery-cell:before {
        display: block;
        text-align: center;
        content: counter(gallery-cell);
        line-height: 200px;
        font-size: 80px;
        color: white;
    }

    /* Additional CSS */
    * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body { 
        font-family: sans-serif;
        margin: 0;
        padding: 20px;
    }
</style>
</head>
<body>

<p><code>wrapAround: true</code></p>

<!-- Flickity HTML init -->
<div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
  <div class="gallery-cell"></div>
</div>

<!-- Flickity JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.3/flickity.pkgd.min.js"></script>
<script>
    // Initialize Flickity
    var flkty = new Flickity('.js-flickity', {
        wrapAround: true
    });
</script>

</body>
</html>
