<?php
global $pgthemes;
?>

<div class="text-white py-32 text-6xl font-serif text-center">
  Meet <?php echo $pgthemes['teamname']?>
</div>

<div class="bg-white text-slate-700 p-12">
  <div class="grid lg:grid-cols-2 gap-8 max-w-6xl m-auto">
    <?php
    $i = 1;
    foreach ($pgthemes["agents"] as $agent) { ?>
      <div>
        <div class="overflow-hidden h-96 w-96">
          <img class="transition delay-150 duration-300 ease-in-out h-96 w-96 object-cover hover:scale-125"
            src="<?php echo get_template_directory_uri() . "/img/person" . $i . ".jpg" ?>">
        </div>
        <div>
          <p><?php echo $agent['firstname'] ?>   <?php echo $agent['lastname'] ?></p>
          <p>License #<?php echo $agent['licenseNumber'] ?></p>
          <p><?php echo $agent['title'] ?></p>
          <p><?php echo $agent['phone'] ?></p>
          <p><?php echo $agent['email'] ?></p>
        </div>
      </div>


      <?php
      $i += 1;
    } ?>




  </div>
</div>