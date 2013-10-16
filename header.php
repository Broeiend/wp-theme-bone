<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(); ?></title>

    <link rel="icon" type="image/png" href="'.get_bloginfo('template_url').'/images/favicon.png" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/ico/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Analytics code -->
    <script type="text/javascript">

        /*
        * TODO: set UA-accountnumber and domainname in admin tab

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-accountnumber']);
        _gaq.push(['_setDomainName', 'domainname']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        */

    </script>

    <?php wp_head(); ?>

</head>

<body>
