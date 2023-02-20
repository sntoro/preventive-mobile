<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/bootstrap/css/bootstrap.min.css') ?>">
    <!-- font awesome Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
    <!-- jquery file upload Frame work -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/jquery.filer/css/jquery.filer.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') ?>">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/sweetalert/css/sweetalert.css') ?>">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/switchery/css/switchery.min.css') ?>">
    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/simple-line-icons/css/simple-line-icons.css') ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/themify-icons/themify-icons.css') ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/icofont/css/icofont.css') ?>">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/icon/feather/css/feather.css') ?>">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/component.css') ?>">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/data-table/css/buttons.dataTables.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>">
    <!-- Select 2 css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bower_components/select2/css/select2.min.css') ?>">
    <!-- toolbar css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/toolbar/jquery.toolbar.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/pages/toolbar/custom-toolbar.css') ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/js-audiorecorder-master/icons/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js-audiorecorder-master/css/demo.css') ?>">
    <script src="<?php echo base_url('assets/js/html5-qrcode.min.js') ?>"></script>

</head>

<body>

    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded iscollapsed" vertical-nav-type="offcanvas">

        <div class="pcoded-container navbar-wrapper">
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php $this->load->view($content); ?>
                </div>
            </div>
        </div>

        <!-- <nav id="bottom-navbar" class="navbar bg-primary navbar-expand d-md-none d-lg-none d-xl-none fixed-bottom">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a style="padding: 0rem;" href="<?php echo base_url('mob/home'); ?>" class="nav-link">
                        <images alt="result" src="<?php echo base_url('/assets/images/home.svg'); ?>" width="25">asdasd
                    </a>
                </li>
                <li class="nav-item">
                    <a style="padding: 0rem;" href="<?php echo base_url('venac/scan'); ?>" class="nav-link">
                        <images alt="scan" src="<?php echo base_url('/assets/images/scan.svg'); ?>" width="30">asd
                    </a>
                </li>
                <li class="nav-item">
                    <a style="padding: 0rem;" href="<?php echo base_url('Login/logoffVendor'); ?>" class="nav-link">
                        <images alt="logout" src="<?php echo base_url('/assets/images/logout.svg'); ?>" width="30">asd
                    </a>
                </li>
            </ul>
        </nav> -->

    </div>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script src="<?php echo base_url('assets/bower_components/jquery/js/jquery.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/bower_components/jquery-ui/js/jquery-ui.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/bower_components/popper/js/popper.min.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/bower_components/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- jquery slimscroll js -->
    <script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') ?>"></script>
    <!-- modernizr js -->
    <script src="<?php echo base_url('assets/bower_components/modernizr/js/modernizr.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/modernizr/js/css-scrollbars.js') ?>"></script>
    <!-- sweet alert js -->
    <script src="<?php echo base_url('assets/bower_components/sweetalert/js/sweetalert.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/js/modal.js') ?>"></script> -->
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script src="<?php echo base_url('assets/js/modalEffects.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/classie.js') ?>"></script>
    <!-- data-table js -->
    <script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/pages/data-table/js/jszip.min.js') ?>"></script> -->
    <!-- <script src="<?php echo base_url('assets/pages/data-table/js/pdfmake.min.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/pages/data-table/js/vfs_fonts.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/data-table/extensions/fixed-header/js/dataTables.fixedHeader.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/data-table/extensions/colreorder/js/dataTables.colReorder.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/sparkline/jquery.sparkline.js') ?>"></script>
    <!-- counter js -->
    <script src="<?php echo base_url('assets/bower_components/countdown/js/jquery.countdown.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/counter/task-detail.js') ?>"></script>
    <!-- Switch component js -->
    <script src="<?php echo base_url('assets/bower_components/switchery/js/switchery.min.js') ?>"></script>
    <!-- Select 2 js -->
    <script src="<?php echo base_url('assets/bower_components/select2/js/select2.full.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/js/jquery.quicksearch.js') ?>"></script> -->
    <!-- i18next.min.js -->
    <script src="<?php echo base_url('assets/bower_components/i18next/js/i18next.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js') ?>"></script>
    <!-- jquery file upload js -->
    <script src="<?php echo base_url('assets/pages/jquery.filer/js/jquery.filer.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/filer/custom-filer.js" type="text/javascript') ?>"></script>
    <script src="<?php echo base_url('assets/pages/filer/jquery.fileuploads.init.js" type="text/javascript') ?>"></script>

    <!-- Custom js -->
    <script src="<?php echo base_url('assets/pages/data-table/js/data-table-custom.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/toolbar/jquery.toolbar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/toolbar/custom-toolbar.js') ?>"></script>

    <script src="<?php echo base_url('assets/pages/issue-list/issue-list.js') ?>"></script>
    <script src="<?php echo base_url('assets/pages/data-table/extensions/fixed-header/js/fixed-header-custom.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/pcoded.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/vartical-layout.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js-audiorecorder-master/js/audiorecorder.js') ?>"></script>
    <script src="<?php echo base_url('assets/js-audiorecorder-master/js/timer.js') ?>"></script>
    <script src="<?php echo base_url('assets/js-audiorecorder-master/js/demo.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/upup/upup.min.js') ?>"></script>
    <script>
        // UpUp.debug();
        UpUp.start({
            'content-url': '<html><body>HALO</body></html>',
        });
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script>
        // Multiple swithces
        var elem = Array.prototype.slice.call(document.querySelectorAll('.js-small'));

        elem.forEach(function(html) {
            var switchery = new Switchery(html, {
                color: '#1abc9c',
                jackColor: '#fff',
                size: 'small'
            });
        });
    </script>
    <!-- Custom js -->
    <script src="<?php echo base_url('assets/js/script.js') ?>"></script>

</body>

</html>