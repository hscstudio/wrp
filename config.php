<?php
# http://www.hafidmukhlasin.com #

$app = " WRP ";
$title_app = "Web Responsive Preview";

# start edit here #
$link_preview = "http://localhost/";
$download_preview = "https://github.com/hscstudio/wrp";
# end edit here #

$devices = [];
$devices['large-device'] 		= [
	'size'=>'1200',
	'icon'=>'fa fa-desktop fa-lg',
	'show'=>'hidden-xs hidden-sm hidden-md',
	'title'=>'desktop large 1200',
]; 
$devices['medium-device'] 		= [
	'size'=>'992',
	'icon'=>'fa fa-desktop fa-md',
	'show'=>'hidden-xs hidden-sm',
	'title'=>'desktop medium 992',
]; 
$devices['small-device'] 		= [
	'size'=>'768',
	'icon'=>'fa fa-tablet fa-lg',
	'show'=>'hidden-xs',
	'title'=>'tablet 768',
];
$devices['extra-small-device'] 	= [
	'size'=>'480',
	'icon'=>'fa fa-mobile fa-lg',
	'show'=>'',
	'title'=>'phone 480',
];
$devices['mini-device'] 	= [
	'size'=>'320',
	'icon'=>'fa fa-mobile',
	'show'=>'',
	'title'=>'phone 320',
];

$links = [];
$links[] 	= [
	'id' => '',
	'link'=> $download_preview,
	'icon'=>'fa fa-download fa-lg',
	'title'=>'Download now',
];
$links[] 	= [
	'id' => 'remove-frame',
	'link'=> $link_preview,
	'icon'=>'fa fa-times',
	'title'=>'Remove frame',
];