<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <style>
    .hero-section {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  text-align: center;
  position: relative;
  overflow: hidden;
  margin-bottom: -8%; /* Adjust this value as needed */
}


    .animated-gradient::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #E42527, #226DB4, #089949);
      background-size: 300% 300%;
      animation: gradientAnimation 15s ease infinite;
      z-index: -2;
    }

    .background-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.8;
  background: url('assets/images/banner-patten.png');
  background-repeat: repeat;
  z-index: -1;
}


    @keyframes gradientAnimation {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .hero-overlay {
      background: rgba(0, 0, 0, 0.5);
      color: #FFFFFF;
      padding: 20px;
      border-radius: 10px;
      position: relative;
      z-index: 1;
    }

    .cta-button {
      background: #F9B21D;
      color: #FFFFFF;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .cta-button:hover {
      background: #E42527;
    }
  </style>
</head>
<body>

<section class="relative table w-full py-36 pb-0 lg:py-44 lg:pb-0 hero-section animated-gradient">
  <div class="background-image"></div>
  <div class="container">
    <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
      <div class="lg:col-span-7">
      <div class="md:me-6 md:mb-20">
        <h5 class="text-lg text-white/60">We are creative</h5>
        <h4 class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-white">Best IT Solution <br> Company</h4>
            <p class="text-white/60 text-lg max-w-xl">Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind CSS v3.x html page.</p>                
                            <div class="mt-6">
                                <a href="contact-one.html" class="btn bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700 rounded-md me-2 mt-2"><i class="uil uil-envelope"></i> Get Started</a>
                            </div>
                        </div>
      </div><!--end col-->
      <div class="lg:col-span-5 mt-8 md:mt-0">
        <img src="assets/images/hero1.png" alt="">
      </div><!--end col-->
    </div><!--end grid-->
  </div><!--end container-->
</section>

</body>
</html>
