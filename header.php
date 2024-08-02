<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('text-gray-900 antialiased'); ?>>
	<!-- <img class="w-full h-screen overflow-hidden brightness-50 sticky top-0 -z-10" src="<?php echo get_template_directory_uri() ?>/img/bg2.jpg"/> -->
	<!-- <img class="w-full overflow-hidden brightness-50 sticky top-0 -z-10" src="<?php echo get_template_directory_uri() ?>/img/bg1.jpg"/> -->

<?php
$bg1 = "bg-main";
$template="";
switch(get_the_title()) {
  case "bio": $bg1 = "bg-home"; $template="bio"; break;
	case "testimonials": $bg1 = "bg-three"; $template="testimonials"; break;
	case "sellers": $bg1 = "bg-four"; $template="sellers"; break;
	case "buyers": $bg1 = "bg-five"; $template="buyers"; break;
	// case "contact": $bg1 = "bg_home"; $template="contact"; break;
} ?>

<div id="bg" bg1="<?php echo $bg1?>" bg2="bg-main" class="brightness-50 <?php echo $bg1?> bg-cover h-screen sticky top-0 -z-10">

</div>


<div class="-mt-[calc(100vh)]">



	<?php do_action('realtyone_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('realtyone_header'); ?>

		<?php get_template_part( 'template-parts/nav', get_post_format() ); ?>


		<div id="content" class="site-content flex-grow">

			<?php if (is_front_page()) { ?>
				<?php get_template_part( 'template-parts/homepage', get_post_format() ); ?>
			<?php } ?>
			<?php if($template) {
				get_template_part( 'template-parts/' . $template, get_post_format() );
			} ?>

			<?php do_action('realtyone_content_start'); ?>

			<main class="bg-white text-slate-800">