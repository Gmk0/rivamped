<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FIND') }}</title>



    <link rel="stylesheet" href="/css/icons.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="/test/bootstraps.min.css">
    <link rel="stylesheet" href="/test/main.css">

<link rel="stylesheet" href="/test/style.css">

    <script src="/js/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/js/js/vendor/modernizr-3.6.0.min.js"></script>


    <!-- Including Javascript -->
    <script src="/js/js/bootstrap.min.js"></script>

    @livewireStyles
</head>

<body>

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div><!-- End Preload -->

    <div class="layer"></div><!-- Mobile menu overlay mask -->

    <!-- Header================================================== -->
    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 d-none d-md-block">
                        <span id="tag_line">"Experts since 1998"</span>
                    </div>
                    <div class="col-md-9">
                        <ul id="top_links">
                            <li><a href="tel://004542344599" id="phone_top">0045 043204434</a><span id="opening">Mon -
                                    Sat 8.00/18.00</span></li>
                            <li class="d-none d-md-inline"><a href="https://1.envato.market/PgrJz"
                                    target="_parent">Purchase this template</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->

        <div class="container">
            <div class="pt-3 pb-3 row d-flex align-items-center">
                <div class="col-lg-3 col-6">
                    <div id="logo">
                        <a href="index.html"><img src="img/logo.png" width="190" height="44" alt="Home Alarms"></a>
                    </div>
                </div>
                <nav class="col-lg-9 col-6 position-relative">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
                            mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo.png" width="190" height="44" alt="Home Alarms">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Home <i
                                        class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="index.html">Home Owl Slider</a></li>
                                    <li><a href="index_2.html">Home with Contact form</a></li>
                                    <li><a href="index_4.html">Home Layerslider</a></li>
                                    <li><a href="index_3.html">Home Video Background</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Services <i
                                        class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="service_layout_1.html">Service layout 1</a></li>
                                    <li><a href="services_layout_2.html">Service layout 2</a></li>
                                    <li><a href="services_layout_3.html">Service layout 3</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Quotation <i
                                        class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="quotation.html">Working quotation</a></li>
                                    <li><a href="quotation_wizard.html">Working quotation wizard</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About us</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Shop <i
                                        class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="shop.html">Shop list</a></li>
                                    <li><a href="shop-single.html">Shop product</a></li>
                                    <li><a href="cart.html">Shop cart</a></li>
                                    <li><a href="checkout.html">Shop checkout</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Pages <i
                                        class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="tips.html">Tips and Faq</a></li>
                                    <li><a href="accessories.html">Accessories</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog_post.html">Blog post</a></li>
                                    <li><a href="coming_soon/index.html">Coming soon</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="icon_pack_1.html">Icon Pack 1</a></li>
                                    <li><a href="icon_pack_2.html">Icon Pack 2</a></li>
                                </ul>
                            </li>
                            <li><a href="contacts.html">Contact us</a></li>
                        </ul>
                    </div><!-- End main-menu -->
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

    <section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/subheader_in_1.jpg"
        data-natural-width="1400" data-natural-height="350">
        <div id="sub_content_in">
            <div class="container">
                <h1>Our Blog</h1>
                <p>"Usu habeo equidem sanctus no ex melius"</p>
            </div>
        </div>
    </section><!-- End section -->

    <main class="max-w-6xl mx-auto mt-6">

            <div class="flex flex-col gap-6 lg:flex-row">
                <div class="px-6 lg:w-9/12">



                    <div class="post">
                        <figure class="mb-0 animated"><a href="blog_post.html" title="blog_post.html"><img
                                    src="https://actiondamienrdcongo.org/storage/news/1677594356.CEDA.jpeg" alt="" class="img-fluid"></a></figure>
                        <div class="clearfix post_info">
                            <div class="post-left">
                                <ul>
                                    <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span></li>
                                    <li><i class="icon-inbox-alt"></i> In <a href="#">Security</a></li>
                                    <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
                        </div>
                        <h2>Duis aute irure dolor in reprehenderit</h2>
                        <p>
                            Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce
                            suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi
                            nunc odio, gravida at, cursus nec, luctus a, lorem.....
                        </p>
                        <a href="blog_post.html" class=" btn_1">Read more</a>
                    </div><!-- end post -->

                    <hr>


                    <div class="text-center">
                        <nav aria-label="Pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#0" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#0">1</a></li>
                                <li class="page-item"><a class="page-link" href="#0">2</a></li>
                                <li class="page-item"><a class="page-link" href="#0">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#0" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End pagination-->
                </div><!-- End col-md-9 -->

                <div class="px-6 mx-4 lg:mx-0 lg:w-3/12">
                    <div class="box_style_1">
                        <div class="widget">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </div><!-- End Search -->

                        <hr>

                        <div class="widget">
                            <h5 class="mb-4">Categories</h5>
                            <ul id="cat_nav">
                                <li><a href="#">Security tips</a></li>
                                <li><a href="#">Office wiring</a></li>
                                <li><a href="#">Diagnosis</a></li>
                                <li><a href="#">Maintance</a></li>
                            </ul>
                        </div><!-- End widget -->

                    </div><!-- End box style 1 -->

                    <div class="widget">
                        <h4 class="mb-4" >Recent post</h4>
                        <ul class="recent_post">
                            <li class="flex">
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                    </svg>

                                </span>
                                <div class="flex flex-col">
                                    <span>16 July, 2020</span>
                                    <a href="#">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                            <li>
                                <i class="icon-calendar-empty"></i> 16th July, 2020
                                <div><a href="#">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                            <li>
                                <i class="icon-calendar-empty"></i> 16th July, 2020
                                <div><a href="#">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                        </ul>
                    </div><!-- End widget -->
                    <hr>
                    <div class="widget tags">
                        <h4>Tags</h4>
                        <div class="flex flex-wrap">
                            <a href="#">Lorem ipsum</a>
                            <a href="#">Dolor</a>
                            <a href="#">Long d</a>
                            <a href="#">Sit amet</a>
                            <a href="#">Latin words</a>
                            <a href="#">Excepteur sint</a>

                        </div>

                    </div><!-- End widget -->
                    <hr>
                    <div class="widget archives">
                        <h4 class="mb-4">Archives</h4>
                        <ul class="list_2">
                            <li><a href="#">May 2015</a></li>
                            <li><a href="#">April 2015</a></li>
                            <li><a href="#">March 2015</a></li>
                            <li><a href="#">February 2015</a></li>
                            <li><a href="#">January 2015</a></li>
                        </ul>
                    </div><!-- End widget -->

                </div><!-- End col-md-3 -->
            </div>

    </main>

    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-8">
                    <img src="img/logo-footer.png" width="190" height="44" alt="Home Alarms" id="logo_footer">
                    <p>Id pri consul aeterno petentium. Vivendo abhorreant et vim, et quot persecuti mel. Libris
                        hendrerit ex sea. Duo legere evertitur an, pri hinc doctus definitiones an, vix id dicam putent.
                        Ius ornatus instructior in.</p>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#0">About us</a></li>
                        <li><a href="#0">FAQ</a></li>
                        <li><a href="#0">Quotation</a></li>
                        <li><a href="#0">Contacts</a></li>
                        <li><a href="#0">Shop</a></li>
                        <li><a href="#0">Terms and condition</a></li>

             </ul>
                </div>
                <div class="col-lg-4 col-12" id="contact_bg">
                    <h3>Contacts</h3>
                    <ul id="contact_details_footer">
                        <li id="address_footer">4 West 31st Street New York, New York - 10001<br>United States</li>
                        <li id="phone_footer"><a href="tel://004542344599">+45 423 445 99</a> / <a
                                href="tel://004542344599">+45 423 445 99</a></li>
                        <li id="email_footer"><a href="#0">info@homealarms.com</a></li>
                    </ul>
                </div>
            </div><!-- End row -->
            <div id="social_footer">
                <ul>
                    <li><a href="#0"><i class="icon-facebook"></i></a></li>
                    <li><a href="#0"><i class="icon-twitter"></i></a></li>
                    <li><a href="#0"><i class="icon-google"></i></a></li>
                    <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                </ul>
            </div>
        </div><!-- End container -->
        <div id="copy">
            <div class="container">
                © Home Alarms 2023 - All rights reserved.
            </div>
        </div><!-- End copy -->
    </footer><!-- End footer -->

    <div id="toTop"></div><!-- Back to top button -->

    <!-- Common scripts -->

    <script src="/test/function.js"></script>

</body>

</html>


