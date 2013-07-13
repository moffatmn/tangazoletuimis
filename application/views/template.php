<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Tangazoletu-Information Management System
        </title>

        <meta name="description" content="">
        <meta name="author" content="">
        <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
        <!-- bootstrap css -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/js/html5.js">
        </script>
        <link href="<?php echo base_url(); ?>/icomoon/style.css" rel="stylesheet">
        <!--[if lte IE 7]>
        <script src="css/icomoon-font/lte-ie7.js">
        </script>
        <![endif]-->
        <link href="<?php echo base_url(); ?>/css/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/css/wysiwyg/wysiwyg-color.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/css/main.css" rel="stylesheet"> <!-- Important. For Theming change primary-color variable in main.css  -->
        <link href="<?php echo base_url(); ?>/css/charts-graphs.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/css/timepicker.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/icomoon/index.html" type="text/css"/>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-40304444-1', 'iamsrinu.com');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <!-- header starts here -->
                <?php echo $_header; ?>
                <!-- header ends -->

            </div>

        </div>

        <div id="nav">
            <!--Top menu starts here-->
            <?php echo $_top_menu; ?>
            <!--Top menu ends-->
        </div>
        <div id="nav_bar">
            <!--Top menu starts here-->
            <?php //echo $_navbar_index; ?>
            <!--Top menu ends-->
        </div>

        <div id="body">
            <!--<div id="content" -->
                 <!-- content starts here-->
                 <?php //echo $_content_index; ?>
                 <!-- content ends-->
        </div>

        <div id="sidebar">
            <!--side bar start here-->
            <?php //echo $_sidebar; ?>
            <!--side bar ends here-->
        </div>
    </div>

    <div id="footer">
        <div class="footer-bottom">
            <!--footer start-->
            <?php echo $_footer; ?>
            <!--footer end-->

        </div>

    </div>


</body>

</html>