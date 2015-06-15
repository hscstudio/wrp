<?php
# http://www.hafidmukhlasin.com #

$app = " WRP ";
$title_app = "Web Responsive Preview";
$link_app = "http://localhost/previewer";

# start edit here #
$url = "http://localhost/";
$download = "https://github.com/hscstudio/wrp";
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

$links = [];
$links[] 	= [
	'id' => '',
	'url'=> $download,
	'icon'=>'fa fa-download fa-lg',
	'title'=>'Download now',
];
$links[] 	= [
	'id' => 'remove-frame',
	'url'=> $url,
	'icon'=>'fa fa-times',
	'title'=>'Remove frame',
];