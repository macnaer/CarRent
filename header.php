<!doctype html>
<html lang="en">

<head>
    <title>Car Rent &mdash; Free Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <!-- MAIN CSS -->
    <?php wp_head();  ?>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3 ">
                        <div class="site-logo">
                            <a href="index.html">CarRent</a>
                        </div>
                    </div>

                    <div class="col-9  text-right">


                        <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <?php 
                        if (has_nav_menu('primary')){
                            wp_nav_menu([
                                "theme_location" => "primary",
                                "container" => false,
                                "fallback_cb" => false,
                                "depth" => 1,
                                'menu_class' => "site-menu main-menu js-clone-nav ml-auto "
                            ]);
                        };?>
                        </nav>
                    </div>


                </div>
            </div>

        </header>

        <div class="ftco-blocks-cover-1">
            <div class="ftco-cover-1 overlay" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/assets/images/hero_1.jpg')">
                <div class="container">
                    <div class="row align-items-center">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section pt-0 pb-0 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <form class="trip-form">
                            <div class="row align-items-center mb-4">
                                <div class="col-md-6">
                                    <h3 class="m-0">Begin your trip here</h3>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <span class="text-primary">32</span> <span>cars available</span></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="cf-1">Where you from</label>
                                    <input type="text" id="cf-1" placeholder="Your pickup address" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cf-2">Where you go</label>
                                    <input type="text" id="cf-2" placeholder="Your drop-off address" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cf-3">Journey date</label>
                                    <input type="text" id="cf-3" placeholder="Your pickup address" class="form-control datepicker px-3">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="cf-4">Return date</label>
                                    <input type="text" id="cf-4" placeholder="Your pickup address" class="form-control datepicker px-3">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>