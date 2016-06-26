<?php
defined('is_running') or die('Not an entry point...');
$fileVersion = '5.0.3';
$fileModTime = '1466944912';
$file_stats = array (
  'created' => 1466944912,
  'gpversion' => '5.0.3',
  'modified' => 1466944912,
  'username' => false,
);

$pages = array (
  'gp_index' => 
  array (
    'Home' => 'a',
    'Heading_Page' => 'b',
    'Child_Page' => 'd',
    'More' => 'e',
    'About' => 'f',
    'Contact' => 'special_contact',
    'Site_Map' => 'special_site_map',
    'Galleries' => 'special_galleries',
    'Missing' => 'special_missing',
    'Search' => 'special_gpsearch',
  ),
  'gp_menu' => 
  array (
    'a' => 
    array (
      'level' => 0,
    ),
    'b' => 
    array (
      'level' => 0,
    ),
    'c' => 
    array (
      'level' => 1,
    ),
    'd' => 
    array (
      'level' => 1,
    ),
    'e' => 
    array (
      'level' => 0,
    ),
    'f' => 
    array (
      'level' => 1,
    ),
    'special_contact' => 
    array (
      'level' => 1,
    ),
  ),
  'gp_titles' => 
  array (
    'a' => 
    array (
      'label' => 'Home',
      'type' => 'text',
    ),
    'b' => 
    array (
      'label' => 'Heading Page',
      'type' => 'text',
    ),
    'd' => 
    array (
      'label' => 'Child Page',
      'type' => 'text',
    ),
    'e' => 
    array (
      'label' => 'More',
      'type' => 'text',
    ),
    'f' => 
    array (
      'label' => 'About',
      'type' => 'text',
    ),
    'special_contact' => 
    array (
      'lang_index' => 'contact',
      'type' => 'special',
    ),
    'special_site_map' => 
    array (
      'lang_index' => 'site_map',
      'type' => 'special',
    ),
    'special_galleries' => 
    array (
      'lang_index' => 'galleries',
      'type' => 'special',
    ),
    'special_missing' => 
    array (
      'label' => 'Missing',
      'type' => 'special',
    ),
    'special_gpsearch' => 
    array (
      'label' => 'Search',
      'type' => 'special',
    ),
  ),
  'gpLayouts' => 
  array (
    'default' => 
    array (
      'theme' => 'Bootswatch_Scss/Flatly',
      'label' => 'Bootswatch_Scss/Flatly',
      'color' => '#93c47d',
    ),
  ),
);

$meta_data = array (
);