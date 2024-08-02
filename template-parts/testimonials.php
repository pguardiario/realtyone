<?php
global $pgthemes;
?>
<div class="text-white py-32 text-6xl font-serif text-center">
  Testimonials
</div>

<div class="bg-white text-slate-700">
  <div class="grid lg:grid-cols-2 w-full">
    <?php
    $i = 0;
    foreach($pgthemes['testimonials'] as $testimonial) {
    ?>
    <div class="<?php echo $i % 4 == 1 || $i % 4 == 2 ? "" : "bg-slate-200" ?>">
      <div class="flex justify-center p-8">
        <div
          class="w-24 h-24 p-4 rounded-full bg-orange-600 transition delay-150 duration-300 ease-in-out object-cover hover:scale-125">
          <svg version="1.1" id="Capa_1" viewBox="0 0 57 57">
            <g>
              <circle style="fill:white;" cx="18.5" cy="31.5" r="5.5" />
              <path style="fill:white;"
                d="M18.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S22.084,38,18.5,38z    M18.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S20.981,27,18.5,27z" />
            </g>
            <g>
              <circle style="fill:white;" cx="35.5" cy="31.5" r="5.5" />
              <path style="fill:white;"
                d="M35.5,38c-3.584,0-6.5-2.916-6.5-6.5s2.916-6.5,6.5-6.5s6.5,2.916,6.5,6.5S39.084,38,35.5,38z    M35.5,27c-2.481,0-4.5,2.019-4.5,4.5s2.019,4.5,4.5,4.5s4.5-2.019,4.5-4.5S37.981,27,35.5,27z" />
            </g>
            <path style="fill:white;"
              d="M13,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1  c-6.617,0-12,5.383-12,12C14,31.553,13.553,32,13,32z" />
            <path style="fill:white;"
              d="M30,32c-0.553,0-1-0.447-1-1c0-7.72,6.28-14,14-14c0.553,0,1,0.447,1,1s-0.447,1-1,1  c-6.617,0-12,5.383-12,12C31,31.553,30.553,32,30,32z" />
          </svg>
        </div>
      </div>
      <p class="text-center font-serif"><?php echo $testimonial['user'] ?></p>
      <p class="text-center p-4 mb-8 px-24 line-clamp-4 text-ellipsis">"<?php echo $testimonial['text'] ?>"</p>

    </div>
      <?php
      $i += 1;
    } ?>


  </div>
</div>