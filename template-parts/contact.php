<?php
global $pgthemes;
?>
<div class="w-full m-auto grid gap-4 lg:grid-cols-2">
  <div class="space-y-2 bg-indigo-800 p-8 text-white">
    <p class="py-3 text-center font-serif text-xl font-semibold">Get in Touch</p>
    <div class="relative">
      <div class="absolute left-3 top-2 h-6 w-6 text-indigo-300">
        <svg viewBox="0 0 24 24"><path fill="currentColor" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z"></path></svg>
      </div>
      <input name="name" required type="text" class="w-full border border-indigo-300 bg-indigo-800 p-2 pl-12 placeholder-indigo-300" placeholder="Name" />
    </div>

    <div class="relative">
      <div class="absolute left-3 top-2 h-6 w-6 text-indigo-300">
        <svg viewBox="0 0 24 24"><path fill="currentColor" d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z"></path></svg>
      </div>
      <input name="email" required type="text" class="w-full border border-indigo-300 bg-indigo-800 p-2 pl-12 placeholder-indigo-300" placeholder="Email" />
    </div>

    <div class="relative">
      <div class="absolute left-3 top-2 h-6 w-6 text-indigo-300">
        <svg viewBox="0 0 24 24"><path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path></svg>
      </div>
      <input name="phone" type="text" class="w-full border border-indigo-300 bg-indigo-800 p-2 pl-12 placeholder-indigo-300" placeholder="Phone" />
    </div>

    <div class="relative">
      <div class="absolute left-3 top-2 h-6 w-6 text-indigo-300">
        <svg viewBox="0 0 24 24"><path fill="currentColor" d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2M20 16H5.2L4 17.2V4H20V16Z"></path></svg>
      </div>
      <textarea name="message" required class="w-full border border-indigo-300 bg-indigo-800 p-2 pl-12 placeholder-indigo-300" placeholder="Your Message" rows="5"></textarea>
    </div>

    <div class="flex items-start space-x-4 pb-4">
      <input class="mt-2" type="checkbox" />
      <p class="text-sm">By providing us your contact information, you acknowledge and agree to our Privacy Policy and consent to receiving marketing communications, including through automated calls, texts, and emails, some of which may use artificial or prerecorded voices. This consent isn’t necessary for purchasing any products or services and you may opt out at any time. To opt out from texts, you can reply, ‘stop’ at any time. To opt out from emails, you can click on the unsubscribe link in the emails. Message and data rates may apply.</p>
    </div>

    <button class="mt-4 w-full border border-white p-2 text-center hover:bg-indigo-600">SUBMIT</button>
  </div>
  <div class="space-y-3 bg-white p-8 text-slate-800">
    <p class="text-2xl">Contact Details</p>
    <hr />
    <div>
      <p class="font-bold"><?php echo $pgthemes['office']['name']?></p>
      <p><?php echo $pgthemes['office']['address1']?></p>
      <p><?php echo $pgthemes['office']['address2']?></p>
    </div>
    <?php foreach($pgthemes["agents"] as $agent) { ?>
<div>
<p class="font-bold"><?php echo $agent['firstname']?> <?php echo $agent['lastname']?></p>
<p><?php echo $agent['phone']?></p>
<p><?php echo $agent['email']?></p>
</div>

    <?php } ?>

  </div>
</div>
