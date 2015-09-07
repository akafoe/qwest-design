<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<?php 
	// Get Weekday as a string ...
	$weekday = date("l");
	// And add it as a CSS-Class
	$classes .= ' '.strtolower($weekday);
?>


<!DOCTYPE html>
<html lang="de" class="no-js ">
  <head>
    <?php print $head; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    
    <title><?php print $head_title; ?></title>
    
    <?php print $styles; ?>
    <?php print $scripts; ?>

    <?php 
        /** 
         * Make Website useable as a standalone Webapp
         * 1. Android: https://developer.chrome.com/multidevice/android/installtohomescreen
         * 2. iOS: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html
         **/ 
    ?>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="icon" sizes="196x196" href="sites/all/themes/qwest/img/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="sites/all/themes/qwest/img/apple-touch-icon-precomposed.png"/>

    <link href="http://fonts.googleapis.com/css?family=Spinnaker" rel='stylesheet' type='text/css'>
    <!--
      /**
       * @license
       * MyFonts Webfont Build ID 2934291, 2014-12-05T07:11:17-0500
       * 
       * The fonts listed in this notice are subject to the End User License
       * Agreement(s) entered into by the website owner. All other parties are 
       * explicitly restricted from using the Licensed Webfonts(s).
       * 
       * You may obtain a valid license at the URLs below.
       * 
       * Webfont: BookeyedSuzanne by Tart Workshop
       * URL: http://www.myfonts.com/fonts/tart-workshop/bookeyed-suzanne/bookeyed-suzanne/
       * Copyright: Copyright (c) 2011 by Font Diner - Designed by Crystal Kluge/Tart
       * Workshop. All rights reserved.
       * Licensed pageviews: 10,000
       * 
       * 
       * License: http://www.myfonts.com/viewlicense?type=web&buildid=2934291
       * 
       * © 2014 MyFonts Inc
      */ -->
  </head>

  <body class="<?php print $classes; ?>" <?php print $attributes;?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>

  <script type="text/javascript" src="sites/all/themes/qwest/js/plugins.js"></script>

  </body>

</html>
