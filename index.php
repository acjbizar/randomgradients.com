<?php

$dirs = array('top', 'right', 'top right', 'bottom right');

$r = '<!DOCTYPE html>';
$r .= '<html class=randomgradient dir=ltr itemscope itemtype=http://schema.org/VisualArtwork lang=en>';
$r .= '<meta charset=utf-8>';
$r .= '<meta itemprop=artform content=Website>';
$r .= '<meta itemprop=image content=http://randomgradients.com/apple-touch-icon-precomposed.png>';
$r .= '<meta name=apple-mobile-web-app-capable content=yes>';
$r .= '<meta name=apple-mobile-web-app-status-bar-style content=black-translucent>';
$r .= '<meta name=apple-mobile-web-app-title content="&#x1f500; Gradients">';
$r .= '<meta name=application-name content="&#x1f500; Gradients">';
$r .= '<meta name=description property=og:description content="Click or tap the shuffle icon to see another gradient. Gradients can be horizontal, vertical, or radial, but are always colorful.">';
$r .= '<meta name=viewport content="initial-scale=1,user-scalable=no">';
$r .= '<meta property=fb:admins content=509248955>';
$r .= '<meta property=og:image content=http://randomgradients.com/apple-touch-icon-precomposed.png>';
$r .= '<meta property=og:title content="Random Gradients">';
$r .= '<meta property=og:type content=website>';
$r .= '<meta property=og:url content=http://randomgradients.com/>';
$r .= '<title itemprop=name>Random Gradients</title>';
$r .= '<link rel=apple-touch-icon-precomposed href=http://randomgradients.com/apple-touch-icon-precomposed.png>';
$r .= '<link rel=author href=//alexanderchristiaanjacob.com/>';
$r .= '<link rel=canonical href=//randomgradients.com/>';
$r .= '<link rel=stylesheet href=//mimesia.net/style/foundation-icons.css>';
$r .= '<style>';
$r .= '*{border:0;margin:0;outline:0;overflow:hidden;padding:0;text-decoration:none}';
$r .= 'a{color:#fff;left:1.5em;line-height:1.5;position:absolute;text-shadow:0 1px 1px rgba(0,0,0,.75);top:1.5em}';
$r .= 'body,html{min-height:100%}';
$r .= '.randomgradient{';
$r .= random_gradient();
$r .= '}';
$r .= '</style>';
$r .= '<script>';
$r .= <<<JS
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-6227584-61', 'auto');
JS;
$r .= '</script>';
$r .= '<a class=fi-shuffle href=//randomgradients.com/ itemprop=url></a>';

header('Content-Type: text/html; charset=utf-8');

echo $r;

function build_gradients($colors)
{
    //
}

// ACJ 2014-11-04
function random_color()
{
    return sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
}

// ACJ 2014-11-04
function random_colors($n = 4)
{
    $r = array();
	
	for($i = 0; $i < $n; ++$i)
	{
	    $r[] = random_color();
	}
	
	return $r;
}

// ACJ 2014-11-22
function random_gradient()
{
    if(mt_rand(0, 1) > .5) return random_radial_gradient();
	
	return random_linear_gradient();
}

function random_linear_gradient()
{
    if(mt_rand(2, 3) === 2) return random_linear_gradient_2();
	
	return random_linear_gradient_3();
}

// ACJ 2014-11-22
function random_linear_gradient_2()
{
    $c1 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	$c2 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	
	$r = 'background:' . $c1 . ';';
	$r .= 'background:-moz-linear-gradient(top,' . $c1 . ' 0%,' . $c2 . ' 100%);';
	$r .= 'background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,' . $c1 . '),color-stop(100%,' . $c2 . '));';
	$r .= 'background:-webkit-linear-gradient(top,' . $c1 . ' 0%,' . $c2 . ' 100%);';
	$r .= 'background:-o-linear-gradient(top,' . $c1 . ' 0%,' . $c2 . ' 100%);';
	$r .= 'background:-ms-linear-gradient(top,' . $c1 . ' 0%,' . $c2 . ' 100%);';
	$r .= 'background:linear-gradient(to right,' . $c1 . ' 0%,' . $c2 . ' 100%);';
	$r .= 'filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $c1 . '\',endColorstr=\'' . $c2 . '\',GradientType=0);';
	
	return $r;
}

// ACJ 2014-11-22
function random_linear_gradient_3()
{
    $c1 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	$c2 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	$c3 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	
	$r = 'background:' . $c1 . ';';
	$r .= 'background:-moz-linear-gradient(top,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,' . $c1 . '),color-stop(50%,' . $c2 . '),color-stop(100%,' . $c3 . '));';
	$r .= 'background:-webkit-linear-gradient(top,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'background:-o-linear-gradient(top,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'background:-ms-linear-gradient(top,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'background:linear-gradient(to right,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $c1 . '\',endColorstr=\'' . $c2 . '\',GradientType=0);';
	
	return $r;
}

// ACJ 2015-03-02
function random_diagonal_gradient_3()
{
    $c1 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	$c2 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	$c3 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	
	$r = 'background:' . $c1 . ';';
	$r .= 'background:-moz-linear-gradient(-45deg,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'background:-webkit-gradient(linear,left top,right bottom,color-stop(0%,' . $c1 . '),color-stop(50%,' . $c2 . '),color-stop(100%,' . $c3 . '));';
	$r .= 'background:-webkit-linear-gradient(-45deg,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'background:-o-linear-gradient(-45deg,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'background:-ms-linear-gradient(-45deg,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'background:linear-gradient(135deg,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
	$r .= 'filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $c1 . '\',endColorstr=\'' . $c2 . '\',GradientType=1);';
	
	return $r;
}

function random_radial_gradient()
{
    if(mt_rand(2, 3) === 2) return random_radial_gradient_2();
	
	return random_radial_gradient_3();
}

// ACJ 2014-11-22
function random_radial_gradient_2()
{
    $c1 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	$c2 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));

	$r = 'background:' . $c1 . ';';
    $r .= 'background:-moz-radial-gradient(center,ellipse cover,' . $c1 . ' 0%,' . $c2 . ' 100%);';
    $r .= 'background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,' . $c1 . '),color-stop(100%,' . $c2 . '));';
    $r .= 'background:-webkit-radial-gradient(center,ellipse cover,' . $c1 . ' 0%,' . $c2 . ' 100%);';
    $r .= 'background:-o-radial-gradient(center,ellipse cover,' . $c1 . ' 0%,' . $c2 . ' 100%);';
    $r .= 'background:-ms-radial-gradient(center,ellipse cover,' . $c1 . ' 0%,' . $c2 . ' 100%);';
    $r .= 'background:radial-gradient(ellipse at center,' . $c1 . ' 0%,' . $c2 . ' 100%);';
    $r .= 'filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $c1 . '\',endColorstr=\'' . $c1 . '\',GradientType=1);';

    return $r;
}

// ACJ 2014-11-22
function random_radial_gradient_3()
{
    $c1 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	$c2 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));
	$c3 = sprintf( "#%06X", mt_rand( 0, 0xFFFFFF ));

	$r = 'background:' . $c1 . ';';
    $r .= 'background:-moz-radial-gradient(center,ellipse cover,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
    $r .= 'background:-webkit-gradient(radial,center center,0px,center center,100%,color-stop(0%,' . $c1 . '),color-stop(50%,' . $c2 . '),color-stop(100%,' . $c3 . '));';
    $r .= 'background:-webkit-radial-gradient(center,ellipse cover,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
    $r .= 'background:-o-radial-gradient(center,ellipse cover,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
    $r .= 'background:-ms-radial-gradient(center,ellipse cover,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
    $r .= 'background:radial-gradient(ellipse at center,' . $c1 . ' 0%,' . $c2 . ' 50%,' . $c3 . ' 100%);';
    $r .= 'filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'' . $c1 . '\',endColorstr=\'' . $c1 . '\',GradientType=1);';

    return $r;
}


?>