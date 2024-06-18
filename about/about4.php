<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Infinite Card Slider JavaScript | CodingNepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
      /* Import Google font - Poppins */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
      .slider-component * {
        margin-top: 10px;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      .slider-component body {
        display: flex;
        padding: 0 35px;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: linear-gradient(to left top, #031A9A, #8B53FF);
      }
      .slider-component .wrapper {
  max-width: 1100px;
  width: 100%;
  position: relative;
  margin: 0 auto; /* Center horizontally */
}

      .slider-component .wrapper i {
        top: 50%;
        height: 50px;
        width: 50px;
        cursor: pointer;
        font-size: 1.25rem;
        position: absolute;
        text-align: center;
        line-height: 50px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 3px 6px rgba(0,0,0,0.23);
        transform: translateY(-50%);
        transition: transform 0.1s linear;
        color:#226DB4;
      }
      .slider-component .wrapper i:active{
        transform: translateY(-50%) scale(0.85);
      }
      .slider-component .wrapper i:first-child{
        left: 10px;
      }
      .slider-component .wrapper i:last-child{
        right: 10px;
      }
      .slider-component .wrapper .carousel{
        display: grid;
        grid-auto-flow: column;
        grid-auto-columns: calc((100% / 3) - 12px);
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 16px;
        border-radius: 8px;
        scroll-behavior: smooth;
        scrollbar-width: none;
      }
      .slider-component .carousel::-webkit-scrollbar {
        display: none;
      }
      .slider-component .carousel.no-transition {
        scroll-behavior: auto;
      }
      .slider-component .carousel.dragging {
        scroll-snap-type: none;
        scroll-behavior: auto;
      }
      .slider-component .carousel.dragging .card {
        cursor: grab;
        user-select: none;
        
      }
      .slider-component .carousel.dragging .card:hover {
  border: 2px solid #226DB4; /* Change border to 4px solid blue on hover */
}

      .slider-component .carousel :where(.card, .img) {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .slider-component .carousel .card {
        scroll-snap-align: start;
        height: 342px;
        list-style: none;
        background: #fff;
        cursor: pointer;
        padding-bottom: 15px;
        flex-direction: column;
        border-radius: 8px;
      }
      .slider-component .carousel .card .img {
        border: 2px solid orange; 
        height: 148px;
        width: 148px;
        border-radius: 50%;
      }
      .slider-component .card .img img {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
      }
      .slider-component .carousel .card h2 {
        font-weight: 500;
        font-size: 1.56rem;
        margin: 30px 0 5px;
      }
      .slider-component .carousel .card span {
        color: #6A6D78;
        font-size: 1rem;
        margin:20px;
      }

      @media screen and (max-width: 900px) {
        .slider-component .wrapper .carousel {
          grid-auto-columns: calc((100% / 2) - 9px);
        }
      }

      @media screen and (max-width: 600px) {
        .slider-component .wrapper .carousel {
          grid-auto-columns: 100%;
        }
      }
    </style>
  </head>
  <body>
    <div class="slider-component">

            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Our Services</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div><!--end grid-->

                
            </div><!--end container-->
            

      <div class="wrapper">
        <!-- <i id="left" class="fa-solid fa-angle-left"></i> -->
        <i class="bi bi-arrow-left"></i>

        <ul class="carousel">
          <li class="card">
            <div class="img"><img src="assets/images/service/crm.png" alt="img" draggable="false"></div>
            <h2>CRM</h2>
            <span>Comprehensive CRM platform for customer-facing teams.</span>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/service/people.png" alt="img" draggable="false"></div>
            <h2>People</h2>
            <span>Organize, automate, and simplify your HR processes</span>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/service/books.png" alt="img" draggable="false"></div>
            <h2>Books</h2>
            <span>Powerful accounting platform for growing businesses.</span>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/service/creator.png" alt="img" draggable="false"></div>
            <h2>Creator</h2>
            <span>Build powerful custom applications faster.</span>
          </li>
          <li class="card">
            <div class="img"><img src="assets/images/service/backstage.png" alt="img" draggable="false"></div>
            <h2>Backstage</h2>
            <span>End-to-End event management software</span>
          </li>
          
          
          <li class="card">
            <div class="img"><img src="assets/images/service/mail.png" alt="img" draggable="false"></div>
            <h2>Mail</h2>
            <span>Secure email service for your business.</span>
          </li>
        </ul>
        <!-- <i id="right" class="fa-solid fa-angle-right"></i> -->
        <i class="bi bi-arrow-right"></i>
         
      </div>
    </div>
    <script>
      const wrapper = document.querySelector(".slider-component .wrapper");
      const carousel = document.querySelector(".slider-component .carousel");
      const firstCardWidth = carousel.querySelector(".card").offsetWidth;
      const arrowBtns = document.querySelectorAll(".slider-component .wrapper i");
      const carouselChildrens = [...carousel.children];

      let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;
      // Get the number of cards that can fit in the carousel at once
// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
</script>
</body>
</html>
