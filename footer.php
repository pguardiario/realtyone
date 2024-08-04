<?php
global $pgthemes;
?>

</main>

<?php do_action('realtyone_content_end'); ?>

</div>

<?php do_action('realtyone_content_after'); ?>
</div>
</div>

<div class="">
	<div class="text-white text-center py-56 space-y-8 text-center">

		<p class="text-3xl my-2 font-serif">Work With Us</p>
		<div class="flex justify-center mt-4">
			<button onclick="connect_modal.showModal()" class="p-2 border-2 border-white uppercase text-sm">Let's
				Connect</button>
		</div>


	</div>


	<footer class="bg-white text-slate-800">
		<div class="grid p-8 md:grid-cols-2 lg:grid-cols-4">

		<?php foreach ($pgthemes["agents"] as $agent) { ?>
      <div>
				<p class="py-3 font-serif text-2xl"><?php echo $agent['firstname']?> <?php echo $agent['lastname']?></p>
				<p><?php echo $agent['phone']?></p>
				<p><?php echo $agent['email']?></p>
			</div>


      <?php } ?>


			<div>
				<p class="py-3 font-serif text-2xl"><?php echo $pgthemes['office']['name']?></p>
				<p><?php echo $pgthemes['office']['address1']?></p>
				<p><?php echo $pgthemes['office']['address2']?></p>
			</div>
		</div>

		<div class="w-full justify-around p-8 md:flex">
			<a href="/">Home</a>
			<a href="/bio">Bio</a>
			<a href="/listings">Listings</a>
			<a href="/buyers">Buyers</a>
			<a href="/sellers">Sellers</a>
			<a href="/testimonials">Testimonials</a>
			<div class="flex items-center space-x-3 text-white">
				<?php if($pgthemes['linkedin']) { ?>
					<a href="<?php echo $pgthemes['linkedin']?>" target="_blank"
					class="h-8 w-8 rounded-full bg-orange-600 p-2 hover:border hover:border-orange-600 hover:bg-white hover:text-orange-600">
					<svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em"
						width="1em" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z">
						</path>
					</svg>
				</a>
				<?php } ?>

				<?php if($pgthemes['yelp']) { ?>
					<a href="<?php echo $pgthemes['yelp']?>" target="_blank"
					class="h-8 w-8 rounded-full bg-orange-600 p-2 hover:border hover:border-orange-600 hover:bg-white hover:text-orange-600">
					<svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em"
						width="1em" xmlns="http://www.w3.org/2000/svg">
						<path
							d="m7.6885 15.1415-3.6715.8483c-.3769.0871-.755.183-1.1452.155-.2611-.0188-.5122-.0414-.7606-.213a1.179 1.179 0 0 1-.331-.3594c-.3486-.5519-.3656-1.3661-.3697-2.0004a6.2874 6.2874 0 0 1 .3314-2.0642 1.857 1.857 0 0 1 .1073-.2474 2.3426 2.3426 0 0 1 .1255-.2165 2.4572 2.4572 0 0 1 .1563-.1975 1.1736 1.1736 0 0 1 .399-.2831 1.082 1.082 0 0 1 .4592-.0837c.2355.0016.5139.052.91.1734.0555.0191.1237.0382.1856.0572.3277.1013.7048.2404 1.1499.3987.6863.2404 1.3663.487 2.0463.7397l1.2117.4423c.2217.0807.4363.18.6412.297.174.0984.3273.2298.4512.387a1.217 1.217 0 0 1 .192.4309 1.2205 1.2205 0 0 1-.872 1.4522c-.0468.0151-.0852.0239-.1085.0293l-1.105.2553-.0031-.001zM18.8208 7.565a1.8506 1.8506 0 0 0-.2042-.1754 2.4082 2.4082 0 0 0-.2077-.1394 2.3607 2.3607 0 0 0-.2269-.109 1.1705 1.1705 0 0 0-.482-.0796 1.0862 1.0862 0 0 0-.4498.1263c-.2107.1048-.4388.2732-.742.5551-.042.0417-.0947.0886-.142.133-.2502.2351-.5286.5252-.8599.863a114.6363 114.6363 0 0 0-1.5166 1.5629l-.8962.9293a4.1897 4.1897 0 0 0-.4466.5483 1.541 1.541 0 0 0-.2364.5459 1.2199 1.2199 0 0 0 .0107.4518l.0046.02a1.218 1.218 0 0 0 1.4184.923 1.162 1.162 0 0 0 .1105-.0213l4.7781-1.104c.3766-.087.7587-.1667 1.097-.3631.2269-.1316.4428-.262.5909-.5252a1.1793 1.1793 0 0 0 .1405-.4683c.0733-.6512-.2668-1.3908-.5403-1.963a6.2792 6.2792 0 0 0-1.2001-1.7103zM8.9703.0754a8.6724 8.6724 0 0 0-.83.1564c-.2754.066-.548.1383-.8146.2236-.868.2844-2.0884.8063-2.295 1.8065-.1165.5655.1595 1.1439.3737 1.66.2595.6254.614 1.1889.9373 1.7777.8543 1.5545 1.7245 3.0993 2.5922 4.6457.259.4617.5416 1.0464 1.043 1.2856a1.058 1.058 0 0 0 .1013.0383c.2248.0851.4699.1016.7041.0471a4.3015 4.3015 0 0 0 .0418-.0097 1.2136 1.2136 0 0 0 .5658-.3397 1.1033 1.1033 0 0 0 .079-.0822c.3463-.435.3454-1.0833.3764-1.6134.1042-1.771.2139-3.5423.3009-5.3142.0332-.6712.1055-1.3333.0655-2.0096-.0328-.5579-.0368-1.1984-.3891-1.6563-.6218-.8073-1.9476-.741-2.8523-.6158zm2.084 15.9505a1.1053 1.1053 0 0 0-1.2306-.4145 1.1398 1.1398 0 0 0-.1526.0633 1.4806 1.4806 0 0 0-.2171.1354c-.1992.1475-.3668.3392-.5196.5315-.0386.049-.074.1143-.12.1562l-.7686 1.0573a113.9168 113.9168 0 0 0-1.2913 1.789c-.278.3895-.5184.7184-.7083 1.0094-.036.0547-.0734.116-.1075.1647-.2277.3522-.3566.6092-.4228.8381a1.0945 1.0945 0 0 0-.046.4721c.0211.1655.0768.3246.1635.467.046.0715.0957.1406.1487.207a2.334 2.334 0 0 0 .1754.1825 1.843 1.843 0 0 0 .2108.1732c.5304.369 1.1112.6342 1.722.8391a6.0958 6.0958 0 0 0 1.5716.3004c.091.0046.1821.0025.2728-.006a2.3878 2.3878 0 0 0 .2506-.0351 2.3862 2.3862 0 0 0 .2447-.071 1.1927 1.1927 0 0 0 .4175-.2658c.1127-.113.1994-.249.2541-.3989.0889-.2214.1473-.5026.1857-.92.0034-.0593.0118-.1305.0177-.1958.0304-.3463.0443-.7531.0666-1.2315.0375-.7357.067-1.4681.0903-2.2026 0 0 .0495-1.3053.0494-1.306.0113-.3008.002-.6342-.0814-.9336a1.396 1.396 0 0 0-.1756-.4054zm8.6754 2.0439c-.1605-.176-.3878-.3514-.7462-.5682-.0518-.0288-.1124-.0674-.1684-.1009-.2985-.1795-.658-.3684-1.078-.5965a120.7615 120.7615 0 0 0-1.9427-1.042l-1.1515-.6107c-.0597-.0175-.1203-.0607-.1766-.0878-.2212-.1058-.4558-.2045-.6992-.2498a1.4915 1.4915 0 0 0-.2545-.0265 1.1527 1.1527 0 0 0-.1648.01 1.1077 1.1077 0 0 0-.9227.9133 1.4186 1.4186 0 0 0 .0159.439c.0563.3065.1932.6096.3346.875l.615 1.1526c.3422.65.6884 1.2963 1.0435 1.9406.229.4202.4196.7799.5982 1.078.0338.056.0721.1163.1011.1682.2173.3584.392.584.569.7458.1146.1107.252.195.4026.247.1583.0525.326.071.4919.0546a2.368 2.368 0 0 0 .251-.0435c.0817-.022.1622-.048.241-.0784a1.863 1.863 0 0 0 .2475-.1143 6.1018 6.1018 0 0 0 1.2818-.9597c.4596-.4522.8659-.9454 1.182-1.51.044-.08.0819-.163.1138-.2483a2.49 2.49 0 0 0 .0773-.2411c.0186-.083.033-.1669.0429-.2513a1.188 1.188 0 0 0-.0565-.491 1.0933 1.0933 0 0 0-.248-.4041zm2.86 3.742a.8523.8523 0 0 1-.111.4236c-.074.132-.178.2377-.3115.3172a.8428.8428 0 0 1-.4385.119.847.847 0 0 1-.4373-.1179.8526.8526 0 0 1-.3125-.3171.8548.8548 0 0 1-.111-.4248c0-.1526.038-.2958.1143-.4294a.8405.8405 0 0 1 .315-.3159.849.849 0 0 1 .4315-.1156.8514.8514 0 0 1 .4294.1144.84.84 0 0 1 .316.3148.8494.8494 0 0 1 .1156.4317zm-.1202 0c0-.1328-.0332-.256-.0996-.3698s-.1564-.2038-.2702-.2702a.7125.7125 0 0 0-.371-.1007.7204.7204 0 0 0-.3698.0996.7487.7487 0 0 0-.2713.2702.7181.7181 0 0 0-.0996.3709c0 .132.0332.2557.0996.371a.7355.7355 0 0 0 .2713.2713.7354.7354 0 0 0 .3698.0985.7205.7205 0 0 0 .3698-.0996.7423.7423 0 0 0 .2702-.2691.7186.7186 0 0 0 .1008-.3721zm-.577.0584.2724.4522h-.1922l-.237-.4052h-.1546v.4052h-.1695v-1.02h.2988c.1268 0 .2195.0247.2783.0744.0595.0496.0892.1252.0892.2267a.2785.2785 0 0 1-.0492.1625c-.032.0466-.0775.0813-.1362.1042zm-.0412-.1408a.1532.1532 0 0 0 .056-.1214c0-.0573-.0164-.0981-.0491-.1225-.0329-.0251-.0847-.0377-.1557-.0377h-.1214v.3285h.1237c.061 0 .1098-.0157.1465-.047z">
						</path>
					</svg>
				</a>
				<?php } ?>

				<?php if($pgthemes['zillow']) { ?>
					<a href="<?php echo $pgthemes['zillow']?>" target="_blank"
					class="h-8 w-8 rounded-full bg-orange-600 p-2 hover:border hover:border-orange-600 hover:bg-white hover:text-orange-600">
					<svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24" height="1em"
						width="1em" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M12.006 0L1.086 8.627v3.868c3.386-2.013 11.219-5.13 14.763-6.015.11-.024.16.005.227.078.372.427 1.586 1.899 1.916 2.301a.128.128 0 0 1-.03.195 43.607 43.607 0 0 0-6.67 6.527c-.03.037-.006.043.012.03 2.642-1.134 8.828-2.94 11.622-3.452V8.627zm-.48 11.177c-2.136.708-8.195 3.307-10.452 4.576V24h21.852v-7.936c-2.99.506-11.902 3.16-15.959 5.246a.183.183 0 0 1-.23-.036l-2.044-2.429c-.055-.061-.062-.098.011-.208 1.574-2.3 4.789-5.899 6.833-7.418.042-.03.031-.06-.012-.042Z">
						</path>
					</svg>
				</a>
				<?php } ?>

			</div>
			<a></a>
		</div>

		<div class="space-y-6 p-8">
			<div class="flex items-center">
				<p class="flex-1">Website designed and developed by <a href="mailto:pguardiario@gmail.com">PG Themes</a></p>
				<p>Copyright © 2024</p>
			</div>
		</div>

	</footer>
</div>





<dialog id="connect_modal" class="modal modal-middle">
	<div class="modal-box max-w-6xl w-full">
		<div class="modal-action relative">
			<form method="dialog">

				<!-- if there is a button in form, it will close the modal -->
				<button class="p-2 rounded-full border border-red-500 absolute w-12 right-3">❌</button>
			</form>
		</div>
		<?php get_template_part('template-parts/contact', get_post_format()); ?>
	</div>
</dialog>


<?php wp_footer(); ?>

</body>

</html>