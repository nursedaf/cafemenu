<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cafe Denizlim</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--		 Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom.css">
    <script src="<?php echo base_url(); ?>js/jquery-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/modernizr-2.6.2.min.js"></script>
    <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=3.0'></script>

</head>

<body class="intro-fullscreen fixed-footer scroll-down yo-anim-enabled">
    <div class="content-wrapper">
        <!--content-->

        <div class="section-space"></div>
        <section id="menu" class="section-scroll main-section menu">
            <ul class="list-category">
                <li>
                    <span class="filter" data-filter="all">Hepsi</span>
                </li>
                <?php
                foreach ($kategoriler as $grup) {
                    echo '
            <li>
                <span class="filter" data-filter=".filter' . $grup->id . '">' . $grup->ad . '</span>
            </li>';
                }
                ?>
            </ul>

            <div class="container-fluid menu-content mixitup">


                <?php foreach ($gruplar as $grup) { ?>
                    <div class="mix filter<?php echo $grup->id; ?>" data-myorder="2">

                        <div class="row">
                            <div class="col-xs-12 menu-category sticky-header">
                                <h2><?php echo $grup->ad; ?></h2>
                            </div>
                        </div>
                        <div class="row">

                            <?php
                            foreach ($menu as $row) {
                                if ($grup->id == $row->grup_id) { ?>
                                    <div class="menu-item">
                                        <a>
                                            <figure>
                                                <img src="<?php echo base_url($row->foto); ?>" data-src="<?php echo base_url($row->foto); ?>" alt="Menu item" />
                                            </figure>
                                        </a>
                                        <div class="item-description">
                                            <div class="">
                                                <div class="">
                                                    <h6><?php echo $row->ad; ?></h6>
                                                    <p><?php echo $row->info; ?></p>
                                                    <span class="item-price">₺<?php echo $row->fiyat; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                <?php } ?>

            </div>

        </section>
        <section id="third-menu" class="section-scroll main-section menu">
            <div class="container-fluid menu-content mixitup">
                <?php foreach ($gruplar2 as $grup) { ?>

                    <div class="mix filter<?php echo $grup->id; ?>" data-myorder="1">
                        <div class="row">
                            <div class="col-xs-12 menu-category">
                                <h2><?php echo $grup->ad; ?></h2>
                            </div>
                        </div>

                        <div class="container">

                            <div class="row items-content">
                                <?php
                                foreach ($drinks as $row) {
                                    if ($grup->id == $row->grup_id) { ?>
                                        <div class="menu-item">
                                            <div class="item-description">
                                                <div class="menu-details">
                                                    <span class="new-price item-price">₺<?php echo $row->fiyat; ?></span>
                                                </div>
                                                <h5><?php echo $row->ad; ?></h5>
                                                <p><?php echo $row->info; ?></p>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>

                        </div>
                    </div>

                <?php } ?>

            </div>
        </section>

        <div id="footer-spacer"></div>
        <footer id="footer" class="text-center">

            <a href="#" class="to-the-top">
                <i class="fa fa-arrow-circle-o-up"></i>
            </a>

            <a href=<?php echo base_url("masano/masa/") . $this->session->userdata("masaid"); ?>>
                <h2>Cafe Denizlim</h2>
            </a>
            <div>
                <?php echo $this->session->userdata("masano"); ?>
            </div>


        </footer>
        <div class="gallery-wrapper"></div>



    </div>


    <script src="<?php echo base_url(); ?>js/browser.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.ba-throttle-debounce.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.smooth-scroll.js"></script>
    <script src="<?php echo base_url(); ?>js/matchmedia.js"></script>
    <script src="<?php echo base_url(); ?>js/enquire.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.velocity.min.js"></script>
    <script src="<?php echo base_url(); ?>js/waypoints.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.backstretch.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.parallaxify.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.imagesloaded.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.unveil.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.fullPage.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.mixitup.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>

    <?php

    $masaKontrol = $this->HomeModel->getGeneral("masa", array("id" => $this->session->userdata("masaid"), "durum" => 1));  //masa garson tarafından açıldı mı 
    if ($masaKontrol) { ?>
        <script>
            $(document).on('click', '[data-click="ekle"]', function() {

                var id = $(this).data('id');
                var no = $(this).data('no');
                $.ajax({
                    url: "<?php echo base_url('siparis'); ?>",
                    type: 'POST',
                    data: {
                        id: id,
                        no: no,

                    },
                    success: function(data) {
                        alert("success", "SEPETE EKLENDİ", "");
                    }
                });

            });

            function alert(type, title, text) {
                if ($(".toost-container").is("div") == false)
                    $('body').append('<div class="toost-container"></div>');
                $('.toost-container')
                    .prepend($('<div class="toost toost-' + type + '"><h4>' + title + '</h4><p>' + text + '</p></div>')
                        .hide()
                        .fadeIn()
                        .delay(2000)
                        .fadeOut()
                    );
            }
        </script>

    <?php  } ?>




</body>


</html>