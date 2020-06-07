<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inspirational_By_Marie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action('load_fb_sdk'); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'inspirational-by-marie' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="logo-area">
			<svg version="1.1" id="inspirational" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
				y="0px" viewBox="0 0 1198.8 83.4" style="enable-background:new 0 0 1198.8 83.4;" xml:space="preserve">
				<path id="XMLID_113_" d="M0,4.5c2.3-0.3,4.5-0.8,6.7-0.7c2.9,0.1,3.1,2.4,3.1,4.7c0,12,0,24,0,36c0,10.5,0.1,21-0.1,31.5
					c0,1.8-0.7,5.1-1.6,5.3C5.5,81.8,2.3,82.9,0,80C0,54.8,0,29.6,0,4.5z"/>
				<path id="XMLID_110_" d="M882.2,42.1c0.1,19.6-13,35.3-28.1,39.7c-14,4-25.9,0.3-36.3-10.3c-7.9-8.1-10.8-17.9-12.2-28.6
					c-2.3-16.9,15.5-39.8,32.1-41.8c23.5-2.8,39.1,13,43.3,31.7C881.7,35.9,881.8,39,882.2,42.1z M870.5,42.4c0.5-12-2.3-19.6-7.5-26.7
					c-10-13.5-27-13.9-37.3,0c-7.2,9.8-8.8,20.9-7.6,32.3c1,9.5,4.1,18.4,12.1,25.1c8.9,7.4,24.7,6.1,32.1-3.9
					C868.3,61.3,870.9,52.4,870.5,42.4z"/>
				<path id="XMLID_109_" d="M439.4,4.5c12.2,0,24.1-1.3,35.5,0.4c11.5,1.6,17.5,8.9,17.8,19.4c0.3,9.9-7.9,18.4-16.9,20.4
					c-2.4,0.5-4.8,0.8-7.7,1.2c2.4,3.6,4.6,7,7,10.4c5,7,10.1,14,15.1,21c1.7,2.4,0.9,4.3-2,4.3c-4.1,0.1-7.6,0.4-10.6-4.4
					c-7.2-11.4-15.5-22-23.3-32.9c-0.7-1-1-2.2-1.7-3.7c1.9-0.3,3.6-0.6,5.2-0.7c4.4-0.2,8.9,0.6,13.1-0.4c11.8-2.9,13.9-16.8,7.4-25
					c-3.5-4.4-8.4-5.8-13.8-5.9c-4.9-0.1-9.8,0-15.4,0c0,2.1,0,3.9,0,5.8c0,21.1-0.1,42.1,0.1,63.2c0,3.5-1.6,4.1-4.5,4.1
					c-2.6,0-5.4,0.4-5.4-3.6C439.4,53.5,439.4,28.8,439.4,4.5z"/>
				<path id="iNs" d="M120.8,82.9c-16.1-21.1-32.3-42.2-49.1-64.3c-0.1,2.6-0.2,4-0.2,5.4c0,17.5,0,35-0.1,52.5c0,1.6-0.6,3.7-1.7,4.6
					c-2.3,1.9-5.3,0.3-5.5-2.8c-0.2-3.3-0.1-6.6-0.1-9.8c0-19.8,0-39.7,0.1-59.5c0-1.7,0.8-5,1.3-5c2.9,0,7-0.4,8.6,1.4
					c4.8,5,8.7,10.9,13,16.4c9.2,12,18.5,24,28.8,35.8c0-1.4,0-2.8,0-4.2c0-15.1,0-30.1,0-45.2c0-2.2-0.7-4.7,3.2-4.8
					c3.7-0.1,3.4,2.1,3.4,4.6c0,23.1,0,46.3,0,69.4c0,1.5,0,3,0,4.5C121.9,82.3,121.3,82.6,120.8,82.9z"/>
				<path id="Nal" d="M985.2,58.8c0.1-2.5,0.2-3.8,0.2-5.1c0-15.3,0-30.6,0-46c0-2.5,0.1-4.2,3.4-4.2c3.1,0,3.2,1.7,3.2,4
					c0,19,0.2,38-0.1,56.9c-0.1,5.1-1.8,10.2-3,16.6c-16.4-21.4-32-41.6-48.4-63c-0.1,2.5-0.2,3.9-0.2,5.3c0,18.1,0,36.1,0,54.2
					c0,2.5-0.1,4.3-3.4,4.2c-2.2-0.1-3.2-0.8-3.2-3.1c0.1-23.9,0-47.9,0.1-71.8c0-1,1-2.9,1.5-2.9c2.5,0,6-0.4,7.5,1.1
					c4.5,4.5,8.3,9.8,12.3,14.9c6.8,8.8,13.6,17.6,20.4,26.5c2.2,2.8,4.2,5.8,6.4,8.6C982.5,56,983.5,57,985.2,58.8z"/>
				<path id="rAt" d="M576.3,1.2c10.6,26.6,21.1,53.2,32,80.4c-2.8,0-5,0.5-6.8-0.1c-1.9-0.6-4.3-1.9-5.1-3.6
					c-2.4-5.1-4.1-10.5-6.1-15.7c-1.1-2.8-2.9-4.4-6.3-4.3c-6.8,0.2-13.6,0-20.5-0.2c-3.4-0.1-5.5,1.2-6.8,4.5c-2,5.3-4.2,10.4-6.5,15.6
					c-0.5,1.1-1.2,2.6-2.2,3c-1.3,0.5-3,0.1-4.5,0.2c0-1.3-0.3-2.7,0.1-3.8c4.2-10.9,8.5-21.7,12.8-32.5c5.3-13.2,10.6-26.3,16-39.4
					c0.6-1.4,1.6-2.7,2.4-4C575.3,1.2,575.8,1.2,576.3,1.2z M585.7,50.9c-4-10.1-7.8-19.7-12.1-30.3c-4.3,10.7-8.2,20.4-12.1,30.3
					C569.7,50.9,577.5,50.9,585.7,50.9z"/>
				<path id="nAl" d="M1041.3,80c7.1-17.9,14.2-35.8,21.4-53.7c2.9-7.3,5.9-14.6,9-21.9c0.6-1.4,1.8-2.5,3.2-4.5
					c11,27.8,21.5,54.3,32.1,81c-8.8,1.7-10.3,0.9-13.1-6.4c-1.7-4.5-3.5-9-5.3-13.5c-1-2.5-2.7-3.4-5.4-3.4c-7,0.2-14,0.3-20.9,0
					c-3.7-0.1-5.6,1.7-6.8,4.6c-2.2,5.2-4.1,10.5-6.2,15.7C1047.6,82.1,1045.5,82.6,1041.3,80z M1084.5,51.2c-4-10.1-7.8-19.9-12.1-30.6
					c-2.3,6.1-4.1,10.9-6.1,15.7c-2,4.9-4.1,9.7-6.3,14.9C1068.4,51.2,1076.1,51.2,1084.5,51.2z"/>
				<path id="P" d="M271,42.2c0-11.2,0.1-22.4-0.1-33.6c0-3.8,1.4-5.1,5.1-5c7.5,0.2,15-0.1,22.6,0.1c9.2,0.3,16.7,3.9,21.7,11.9
					c3.9,6.3,1.1,19.6-4.6,24.1c-5.5,4.2-11.6,5.9-18.4,5.8c-4.1-0.1-8.2,0.2-12.3-0.1c-3.4-0.2-4.2,1.2-4.1,4.3
					c0.2,9.3-0.1,18.6,0.1,27.9c0.1,3.5-1.3,4.1-4.3,4.1c-3-0.1-5.7,0.2-5.6-4.2C271.1,65.7,271,54,271,42.2z M291.5,39.8
					c1.6,0,3.3,0,4.9,0c7.7,0,14.1-5.2,14.8-11.7c1-9.7-3.3-17.1-11.4-18.6c-4.9-0.9-10-0.6-15-1c-3-0.2-4.2,0.8-4.1,3.9
					c0.2,5.6,0.1,11.2,0.1,16.8C280.8,39.8,280.8,39.8,291.5,39.8z"/>
				<path id="S" d="M211.7,16c-3.6-5.3-7.4-9.3-14.1-9.2c-7.2,0-12,5.6-12.9,12.4c-1,7.6,2.2,12.6,9.2,15.8c6,2.8,11.8,6.1,17.5,9.6
					c7.3,4.5,8.1,12,6.7,19.2c-3,16.4-21.9,25-36.3,16.2c-2.4-1.5-4.3-4-6.2-6.2c-1.6-1.8-1.5-3.7,0.6-5.1c2.1-1.4,3.2,0.1,4.3,1.8
					c4.9,7.1,12.6,9,20,5.6c6.2-2.9,8.1-11.9,7-17.1c-1.1-4.9-3.9-8.3-8.6-10.5c-5.1-2.4-10-5.3-15-7.8c-13.6-6.9-13-26.3-0.6-34.4
					c10.3-6.7,22-6.7,30.7,3.1C218,13.8,214,14.2,211.7,16z"/>
				<path id="T" d="M670.9,9.2c-6.3,0-12,0-17.6,0c-0.8-5.5-0.7-5.6,4.2-5.6c12.5,0,24.9,0,37.4,0c1.9,0,3.9-0.3,4,2.7
					c0.1,3.2-1.9,3.1-4.1,3c-3.3,0-6.6,0.2-9.8-0.1c-3.3-0.2-4.2,1-4.2,4.2c0.1,20.8,0.1,41.6,0.1,62.4c0,5.4-2.7,7.5-7.7,5.4
					c-1.2-0.5-2-3-2.1-4.6c-0.1-19.3-0.1-38.6-0.1-57.9C670.9,15.9,670.9,12.9,670.9,9.2z"/>
				<path id="L" d="M1169.3,75.1c8.7,0,16.7,0,24.8,0c2.4,0,4.6,0.3,4.7,3.1c0.1,3.2-2.3,3.4-4.8,3.4c-9.8,0-19.7-0.1-29.5,0
					c-3.8,0.1-5-1.5-5-5.1c0.1-22.7,0.1-45.4,0-68.1c0-3.5,1-5.2,5-5.2c3.7,0,5,1.1,4.9,4.9c-0.2,20.6-0.1,41.3-0.1,61.9
					C1169.3,71.6,1169.3,73.1,1169.3,75.1z"/>
				<path id="pIr" d="M375.3,42.2c0-11.5,0.1-23-0.1-34.4c0-3.3,1-4.4,4.2-4.2c3.1,0.2,5.7,0.1,5.7,4.4c-0.1,23.1-0.1,46.2,0,69.3
					c0,4.2-2.3,4.3-5.5,4.4c-3.6,0.1-4.4-1.5-4.4-4.6C375.3,65.5,375.3,53.9,375.3,42.2z"/>
				<path id="Ion" d="M748.9,41.8c0-11.2,0.1-22.4-0.1-33.6c0-3.2,0.6-4.8,4.3-4.6c3.2,0.2,5.6,0.3,5.6,4.5c-0.1,23-0.1,45.9,0,68.9
					c0,4.1-1.9,4.8-5.5,4.8c-4,0-4.3-2.1-4.3-5.1C749,65,748.9,53.4,748.9,41.8z"/>
			</svg>
			<svg version="1.1" id="byMarie" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 1205.1 376.3" style="enable-background:new 0 0 1205.1 376.3;" xml:space="preserve">
				<path id="marie" d="M730.4,143.9c-4.7,7.5-10.2,14.6-14,22.5c-11.5,23.8-22.2,48.1-33.6,72c-3.8,8-8.8,15.6-13.6,23.1
					c-0.9,1.5-3.6,1.9-5.4,2.8c-0.7-1.7-2-3.5-2-5.2c0.1-7.9,1-15.9,1-23.8c-0.2-36.2-10.4-69.5-31.8-98.5c-10-13.5-23.7-24.3-35.7-36.4
					c-0.3-0.3-0.9-0.4-1.8-0.7c3.4,14,7.3,27.4,10,41.1c3.2,16.3,5.9,32.7,7.9,49.2c1.8,15,3.1,30.1,3.3,45.2c0.2,21-1.6,42.1-9.1,61.7
					c-9.3,24.3-24.6,43.8-51.4,50.8c-24.5,6.4-47.7-9.8-52.7-33.8c-1.9-9.3-0.5-19.4-0.1-29.1c0.1-1.6,3-4.6,4.2-4.4
					c2.6,0.4,3.4,2.4,2.6,5.8c-3.3,15.2-2.3,29.7,7.3,42.9c6.3,8.7,22.9,15.1,33.3,13.1c13-2.5,24.2-8.2,33.1-17.7
					c8.9-9.4,14.5-21.2,17.2-33.7c4-18.4,4.9-37.2,2.5-56c-2-16-3.4-32.1-5.8-48.1c-2.7-18.4-6.2-36.7-9.4-55.1c-1.7-9.5-3.5-19-5.4-29
					c-5.6,2.5-10.9,4.9-16.4,7.2c-16.1,6.9-32.9,10.5-50.4,11.9c-25.1,2-49.1-3.2-72.8-10c-22-6.3-43.9-13.5-66.1-19.3
					c-10-2.6-20.6-3.2-30.9-4.3c-17.2-1.9-33.8,1-49.8,7.7c-9.4,3.9-15.5,11.4-22.1,18.5c-1.6,1.7-3,3.7-4.6,5.4
					c-2.1,2.3-4.1,4.3-7.5,1.6c-3.5-2.9-3.6-6.4-1.1-9.2c5.9-6.8,11.9-13.7,18.8-19.5c15.3-12.9,34.1-15.9,53.4-16.9
					c24.8-1.2,48.3,4.5,71.8,11.8c21.9,6.8,43.8,13.9,66.2,18.9c36.7,8.3,72.1,3.2,105.5-14.6c2.8-1.5,3.5-3,2.7-6.1
					c-3.9-14.9-6.2-30.1-5.5-45.4c0.5-9.9,5.7-18.4,14-24.5c1.4-1,2.8-2.1,4.4-3.4c10.3,2.1,15,14.6,15.3,23.8
					c0.6,17.2-4.4,33.3-11,48.8c-1.8,4.3-0.7,6.3,2.6,8.3c14.6,8.6,27.4,19.5,39.3,31.5c16.4,16.6,27.5,36.2,31.4,59.1
					c2.4,14.5,2.7,29.3,3.5,44c0.3,5.3-0.9,10.6-0.3,16.5c0.9-1.1,2-2.2,2.6-3.4c7.5-16.2,14.8-32.5,22.4-48.7
					c9.5-20.4,19.1-40.8,34.4-57.7c5.8-6.4,7-14.3,8.9-22c6.4-25.7,17.9-48.9,33.3-70.3c3.4-4.7,8.2-8.5,12.8-12.4
					c2.9-2.4,6.2-5.2,10.4-2.3c3.9,2.7,3.4,6.8,3,10.7c-1.5,19-11.2,34.6-21.3,49.7c-8,12-18,22.6-26.8,34.1c-1.8,2.3-3,5.5-3.3,8.4
					c-1.7,16.6-3.4,33.3-4.5,50c-0.9,13.1-1.8,26.3-1,39.4c1.5,25.8,3.2,51.7,11.1,76.5c2.9,9.1,6.1,18.3,13.9,24.9
					c6.5,5.5,17.1,5.8,23.7,0.7c11.8-9.2,20.2-21.1,26.8-34.2c8.6-17.1,16.4-34.6,23.7-52.3c3.2-7.6,4-16.2,6.7-24.1
					c2.9-8.4,9.1-14.7,16.4-19.5c8.4-5.5,19.4-2.4,24.7,6.4c0.8,1.4,1.6,2.8,2.4,4.3c5.7-4.3,11.1-2.6,13.2,4.1c0.8,2.6,1.1,5.4,1.1,8.2
					c0.5,13.9,0.7,27.7,1.2,41.6c0.1,2.5,0.7,5.1,1.5,7.5c3.5,9.8,13.9,11.5,21.9,2.7c6.2-6.8,11.9-14.4,16.5-22.4
					c6.4-11.2,11.6-23.1,17.3-34.6c-19.4-14.8-18-40.9-7.9-55.1c5-7.1,11.8-10.9,20.9-9.7c8.9,1.1,16.2,12.9,13,23.1
					c-4.1,12.8-9.2,25.2-13.8,37.5c3.3,2.7,7.8,5.5,11.1,9.4c2.3,2.8,4.2,7,4.1,10.5c-0.2,12.7-1.7,25.4-1.8,38.1
					c0,6.1,1.6,12.3,3.1,18.2c2.8,10.8,10.4,11.8,19.7,6.9c7.8-4.1,13.6-11,17-18.8c8.4-19.4,15.8-39.2,23.4-58.9
					c1.2-3.1,0.1-7.3,1.6-10.1c1.5-2.8,5.1-6.4,7.6-6.3c3.2,0.2,6.1,3.7,5.6,8.2c-0.9,9.2-2.1,18.3-2.1,27.5c0,4.9,1.4,10.1,3.5,14.6
					c2.8,6,7.7,7.9,13.8,5.7c14.6-5.5,25.6-15.2,31.5-29.8c3.6-9,8.5-16.9,17.1-21.9c5.9-3.4,11.9-3.9,16.8,1.6
					c2.8,3.2,3.1,8.2-0.4,10.6c-4.5,3.1-9.7,5.6-14.9,7.2c-3.2,1-5.4,1.8-5.4,5.4c-0.3,9.3-1.4,18.6-0.5,27.8c0.7,6.8,7,11.9,16.2,9.8
					c18.3-4.3,30.5-16.4,41.4-30.3c5.4-6.8,9.6-14.6,14.5-21.8c0.9-1.3,3.1-1.7,4.7-2.5c0.3,1.9,1.6,4.4,0.9,5.7
					c-11.2,20.1-24.8,38.2-45.3,49.8c-9,5.1-18.6,8.3-29.4,5.6c-11.3-2.9-17.9-12-19.2-26.5c-6.9,4.6-13.9,10-21.5,14.1
					c-9.4,5-21.8,3.4-26.1-3.1c-4.1-6.2-7.2-12.9-10.6-19c-2.9,7-6.3,15.1-9.7,23.3c-5.6,13.4-12.3,26.2-23.9,35.3
					c-13.2,10.3-25.2,9.4-34.7-3.5c-7.9-10.8-11-23.1-8.5-36.7c1.7-9.3,2.8-18.9,3.3-28.4c0.3-5.4-3.2-9.1-9.3-10.5
					c-3.2,6.9-6.1,13.9-9.7,20.7c-7.3,13.8-13.9,28-25.9,38.7c-9.6,8.6-20.4,10.3-28.8,3.5c-8.2-6.6-11.8-15.8-13-25.9
					c-1-8.1-1.1-16.2-1.6-24.4c-5.1,7.1-9.8,14.6-15.5,21.2c-5.1,5.9-10.7,12.7-20,9.7c-4.1-1.3-7.4-4.8-11.4-7.6
					c-2.2,5-4.7,10.9-7.5,16.8c-7.4,15.8-15.1,31.6-26.1,45.3c-4.9,6.1-10.7,11.8-16.7,16.8c-11.6,9.7-26.6,6.4-36.8-2.9
					c-14.2-13-21-29.9-25-48c-3-13.3-4.7-27.1-5.6-40.7c-0.9-14.7-0.9-29.5,0-44.2c0.9-14.2,3.5-28.3,5.2-42.5c0.2-1.6,0-3.2,0-4.8
					C731.4,144.4,730.9,144.2,730.4,143.9z M891.1,207.6c-5.5,1.4-5.7-2.5-6.7-4.6c-3.8-7.6-12.1-10.9-17.3-1c-2.8,5.3-5.4,10.8-7,16.5
					c-2.4,8.9-4.9,18.1-1.9,27.4c0.5,1.5,2,3.4,3.3,3.8c1.2,0.3,3.5-0.8,4.4-2c6.8-9.4,13.5-18.8,19.8-28.4
					C888,215.7,889.3,211.5,891.1,207.6z M751.1,109.2c0.9,0.4,1.8,0.9,2.7,1.3c8.9-13.1,18.6-25.7,26.5-39.4
					c5.6-9.8,8.9-21.1,12.8-31.8c0.6-1.5-0.9-3.7-1.5-5.6c-1.5,0.7-3.3,1.1-4.6,2.2c-1.8,1.5-3.7,3.2-4.8,5.3
					c-6.5,11.3-13.6,22.5-19.1,34.3C758.2,86.3,755.1,97.9,751.1,109.2z M968.6,203c3-6.2,6.7-12,8.7-18.3c2.6-8.2,4.5-16.8,5.5-25.4
					c0.7-6-3.9-9.2-9-6.6c-4.1,2.1-8.6,5.3-10.6,9.2c-3,5.8-5.5,12.7-5.5,19.1C957.7,189.3,958.6,198.4,968.6,203z M589,81.2
					c0.4,0,0.7-0.1,1.1-0.1c1.2-5.6,1.6-11.5,3.8-16.6c4.1-9.5,6.2-19.3,5.2-29.5c-0.3-3.2-1.9-6.7-3.9-9.3c-3.6-4.6-9.1-3.7-10.6,1.9
					c-1.2,4.6-1.2,9.6-1,14.4c0.5,9.4,1.2,18.7,2.3,28C586.4,73.8,588,77.5,589,81.2z M1143.2,203.5c-6.1-0.3-8,1.3-10.3,8.9
					C1141.9,210.8,1143.8,209.1,1143.2,203.5z"/>
				<path id="by" d="M79.7,216.2c6.4-4.4,13.6-7.9,19-13.3c7.5-7.4,13.8-15.9,20.1-24.3c2.1-2.8,2.8-6.5,4.2-9.9
					c0.7-1.7,1.1-3.5,1.9-5.1c1.8-3.2,3.6-6.9,8.1-6.2c3.6,0.6,5.9,6.5,5.2,11c-1.2,8.9-2.2,17.8-3.1,26.8c-0.2,1.8,0.6,3.6,0.9,5.5
					c0.6,0.2,1.3,0.4,1.9,0.6c3.6-5.3,7.5-10.4,10.8-15.9c4.6-7.7,8.7-15.6,13.1-23.4c4.4-7.8,8.2-8,12.8-0.3
					c6.1,10.2,8.8,21.5,10.6,33.1c1.2,7.6,1.8,15.3,2.9,24.7c10.4-9.1,20.9-17,29.7-26.6c8.5-9.3,15-20.3,22.5-30.6
					c4.3,3.7,2.3,6.8,0.8,9.9c-9.1,19.8-24.8,33.8-42,46.2c-3.2,2.4-6.7,4.4-9.7,7.1c-1.2,1.1-1.9,3.4-1.9,5.2
					c0.1,30.7-5.3,60.4-15.6,89.3c-6.4,18-14.8,34.7-29.3,47.7c-11.8,10.7-29.5,13.1-40.8-3.7c-8-11.9-10.7-25-9.4-39.5
					c2.1-24.9,15.1-43.4,31.9-60.3c12.6-12.7,27-22.8,42.1-32.1c3.3-2,4.6-4.3,4.5-8.3c-0.4-17.7-1.4-35.2-5.8-52.6
					c-5.6,8.7-11,17.4-16.7,25.8c-2.2,3.2-4.9,6.3-7.9,8.8c-4.9,4.2-10.2,3.1-13.2-3c-2.4-4.9-3.9-10.3-5.6-15.2
					c-3.8,4.2-8.1,9.2-12.6,13.9c-9,9.6-19.1,17.6-32,21.6c-1,0.3-2,1.6-2.5,2.7c-3.5,8-8.2,15.3-15.6,20c-8,5.1-15.8,5.9-22-1.4
					c-6.5-7.7-3.5-20.4,6.2-23.4c6.4-2,13.2-2.4,19.8-3.6c0.5-0.1,1-0.4,1-0.4c3.3-12.5,2-24.4-1.6-36.2c-2.7-8.8-9.4-9.7-15.9-3
					c-11.3,11.5-15,26.3-18.6,41.2c-1.2,5-1.2,10.2-2.5,15.1c-0.5,2.1-3.5,5.5-4.5,5.2c-2.7-0.8-6.4-2.7-7.2-5c-3.6-9.9-7-19.9-9.1-30.2
					c-4.6-22.9-5.3-46.2-4.6-69.5c0.6-21,4-41.5,9.8-61.6c3-10.4,5.8-20.9,9.9-30.8c2.9-7,7.6-13.3,11.8-19.7c2.9-4.5,5.9-9.1,9.6-12.9
					c7.7-7.7,17.7-11,28.2-9.3c10.7,1.8,16.3,10.4,19.7,20.2c7.5,21.3,4,42.1-2.7,62.8c-7.8,24.3-21.9,44.5-41.2,61.1
					c-8,6.9-17.1,12.4-25.8,18.4c-2.7,1.9-4.2,3.2-3.3,7.4c1.5,6.6,0.9,13.6,1.6,20.4c0.8,8,1.9,15.9,2.9,24.6
					c4.5-11.2,8.1-21.6,13-31.3c2.7-5.2,7.6-9.4,11.8-13.6c8.6-8.5,24.9-3.1,30,10.3c3.5,9.2,5,18.7,2.6,28.6c-0.4,1.7-0.1,3.7-0.1,5.5
					C78.8,215.2,79.2,215.7,79.7,216.2z M14.7,156.6c0.9,0.5,1.8,1,2.6,1.6c8.2-6.2,17.2-11.7,24.5-18.8c15.3-14.8,28.5-31.4,35.7-51.9
					c7.1-20.1,11.6-40.4,6.4-61.8c-2-8.3-6-15.3-14.7-17.6c-8.9-2.4-15.3,3.5-20.6,9c-8.7,9-12.9,21.1-16.9,32.6
					c-6.3,18.1-11.1,36.7-12.6,55.9C17.7,122.5,16.1,139.5,14.7,156.6z M171.5,236.6c-17.6,11.1-33.1,21.6-45.9,35.6
					c-16.6,18.1-27.7,38.3-26.3,63.9c0.5,9,2.6,17.5,8.1,24.5c8.1,10.3,18.8,12.1,29.1,2.2c10.5-10,15.9-23.2,19.6-36.7
					c4.9-17.5,8.7-35.4,12-53.4C170.2,261.4,170.4,249.7,171.5,236.6z M63,224c-7,1.5-12.6,2.4-17.9,4.1c-3.6,1.1-5,6.9-3.3,10.4
					c1.8,3.8,6.4,5.5,10.2,3.8C59.1,239.1,60.3,232.2,63,224z"/>
				<path id="dot" d="M1072.2,177.2c0.1,3.7-3.9,7.9-7.6,7.9c-3.1,0-6.8-4.2-7-8c-0.2-5,2.1-7.4,7.1-7.6
					C1068.9,169.5,1072.1,172.8,1072.2,177.2z"/>
			</svg>
		</div>
		<div id="hamburger">
			<div class="bar"></div>
			<div class="bar"></div>
			<div class="bar"></div>
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">