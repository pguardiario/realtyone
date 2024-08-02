<?php
global $pgthemes;
?>
<div class="h-[480px] overflow-hidden relative">
    <!-- <video class="absolute z-10 brightness-75" width="100%" playsinline autoplay muted loop>
      <source src="<?php echo get_template_directory_uri() ?>/top.webm" type="video/webm">
      Your browser does not support the video tag.
    </video> -->
    <div class="absolute text-white p-24 font-ssemibold text-center z-20 w-full text-lg space-y-3">
    <p>Trusted Real Estate Advisors</p>
    <p class="text-6xl my-2 font-serif"><?php echo $pgthemes["teamname"] ?></p>
    <p>Serving <?php echo $pgthemes["state"] ?></p>
    <div class="flex justify-center pt-8">
      <button class="p-2 border-2 border-white uppercase text-sm">Book a Consultation</button>
    </div>
  </div>
  </div>


  <div class="bg-white text-slate-700 p-12">
    <div class="grid lg:grid-cols-2 gap-8 max-w-6xl m-auto">
      <div class="overflow-hidden">
        <img class="transition delay-150 duration-300 ease-in-out hover:scale-125"
          src="<?php echo get_template_directory_uri() . "/img/people.jpg" ?>">
      </div>
      <div class="p-2 space-y-3">
        <p class="font-semibold font-serif text-3xl">Meet <?php echo $pgthemes["teamname"] ?></p>
        <p class="text-lg">As the top real estate team in <?php echo $pgthemes["state"] ?> and among the top 1% of real estate
          agents in the state, we've earned a reputation as a tenacious team driven by client success. Our unique
          professional backgrounds in construction, project management and marketing, along with our deep community
          connections, have proven to be invaluable benefits to sellers and buyers alike. From skillfully advocating and
          negotiating for clients to guiding buyers and strategically prepping homes for market, we simply love what we
          do.</p>
        <button class="bg-orange-600 text-white p-2 px-4 uppercase">Learn More</button>
      </div>
    </div>
  </div>

  <div class="bg-white text-slate-700 p-8 text-center">
    <p class="p-6 text-6xl font-serif">Driven by Client Success</p>
    <div class="grid lg:grid-cols-3 gap-8 max-w-6xl m-auto">
      <div>
        <p class="text-2xl">$<span class="counter" data-target="275">0</span>+ Million</p>
        <p>2019-2023 Sales</p>
      </div>
      <div>
        <p class="text-2xl">Top <span class="counter" data-target="1">0</span>%</p>
        <p>Real Estate Agents in <?php echo $pgthemes["state"] ?></p>
      </div>
      <div>
        <p class="text-2xl"><span class="counter" data-target="35">0</span>+ Years</p>
        <p>Combined Experience</p>
      </div>

    </div>
  </div>









  <div class="bg-white text-slate-700 p-12">
    <div class="grid lg:grid-cols-3 gap-3 max-w-4xl m-auto">

      <div class="box">
        <img class="" src="<?php echo get_template_directory_uri() . "/img/portfolio.jpg" ?>">
        <div class=""></div>
        <p class="">Portfolio</p>
      </div>

      <div class="box">
        <img class="" src="<?php echo get_template_directory_uri() . "/img/valuation.jpg" ?>">
        <div class=""></div>
        <p class="">Valuation</p>
      </div>

      <div class="box">
        <img class="" src="<?php echo get_template_directory_uri() . "/img/homesearch.jpg" ?>">
        <div class=""></div>
        <p class="">Home Search</p>
      </div>

    </div>
  </div>


