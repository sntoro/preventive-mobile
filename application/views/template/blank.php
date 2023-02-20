<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.') ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/bootstrap/css/bootstrap.min.css') ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/themify-icons/themify-icons.css') ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/icofont/css/icofont.css') ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
</head>

<body class="fix-menu">

    <section class="login-block">
        <?php $this->load->view($content); ?>
    </section>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery/js/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-ui/js/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/popper.js/js/popper.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') ?>"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/modernizr/js/modernizr.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/modernizr/js/css-scrollbars.js') ?>"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/i18next/js/i18next.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js') ?>"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>