<html>
<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/cars.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 19:37:54 GMT -->

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <!-- <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css"> --> -->
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/cars',
                method: 'GET',
                success: function(response) {
                    displayCars(response.data);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });

            function displayCars(cars) {
                var carListContainer = $('#carList');

                carListContainer.empty();

                cars.forEach(function(car) {
                    var carHtml = '<div class="col-xl-4 col-lg-6">' +
                        '<div class="de-item mb30">' +
                        '<div class="d-img">' +
                        '<img src="' + car.image + '" class="img-fluid" alt="' + car.make + '">' +
                        '</div>' +
                        '<div class="d-info">' +
                        '<div class="d-text">' +
                        '<h4>' + car.model + '</h4>' +
                        '<div class="d-atr-group">';

                    carHtml += '</div>' +
                        '<div class="d-price">' +
                        '<span>Daily rate from $' + car.daily_rate + '</span>' +
                        '<a class="btn-main" href="car-single.html">Rent Now</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';

                    // Append the generated HTML for the car to the container
                    carListContainer.append(carHtml);
                });
            }
        });
    </script>
    });
    </script>

    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->





        <!-- header begin -->
        <header class="transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index-2.html">
                                            <img class="logo-1" src="images/logo-light.png" alt="">
                                            <img class="logo-2" src="images/logo-light.png" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="index.html">Home</a>
                                    </li>
                                    <li><a class="menu-item" href="cars.html">Cars</a></li>
                                    <li><a class="menu-item" href="about.html">About Us</a></li>
                                    <li><a class="menu-item" href="contact.html">Contact</a></li>
                                    <li><a class="menu-item" href="map.html">map</a></li>
                                    <!--     <li><a class="menu-item" href="register.html">Register</a></li>
                                            <li><a class="menu-item" href="404.html">Page 404</a></li>                                     </li> -->


                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    <a href="login.html" class="btn-main">Sign In</a>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="jarallax text-light">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1>Cars</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-cars">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="item_filter_group">
                                <h4>Vehicle Type</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="vehicle_type_1" name="vehicle_type_1" type="checkbox"
                                            value="vehicle_type_1">
                                        <label for="vehicle_type_1">Car</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="vehicle_type_2" name="vehicle_type_2" type="checkbox"
                                            value="vehicle_type_2">
                                        <label for="vehicle_type_2">Van</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="vehicle_type_3" name="vehicle_type_3" type="checkbox"
                                            value="vehicle_type_3">
                                        <label for="vehicle_type_3">Minibus</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="vehicle_type_4" name="vehicle_type_4" type="checkbox"
                                            value="vehicle_type_4">
                                        <label for="vehicle_type_4">Prestige</label>
                                    </div>

                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Car Body Type</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="car_body_type_1" name="car_body_type_1" type="checkbox"
                                            value="car_body_type_1">
                                        <label for="car_body_type_1">Convertible</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_2" name="car_body_type_2" type="checkbox"
                                            value="car_body_type_2">
                                        <label for="car_body_type_2">Coupe</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_3" name="car_body_type_3" type="checkbox"
                                            value="car_body_type_3">
                                        <label for="car_body_type_3">Exotic Cars</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_4" name="car_body_type_4" type="checkbox"
                                            value="car_body_type_4">
                                        <label for="car_body_type_4">Hatchback</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_5" name="car_body_type_5" type="checkbox"
                                            value="car_body_type_5">
                                        <label for="car_body_type_5">Minivan</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_6" name="car_body_type_6" type="checkbox"
                                            value="car_body_type_6">
                                        <label for="car_body_type_6">Pickup Truck</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_7" name="car_body_type_7" type="checkbox"
                                            value="car_body_type_7">
                                        <label for="car_body_type_7">Sedan</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_8" name="car_body_type_8" type="checkbox"
                                            value="car_body_type_8">
                                        <label for="car_body_type_8">Sports Car</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_9" name="car_body_type_9" type="checkbox"
                                            value="car_body_type_9">
                                        <label for="car_body_type_9">Station Wagon</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_body_type_10" name="car_body_type_10" type="checkbox"
                                            value="car_body_type_10">
                                        <label for="car_body_type_10">SUV</label>
                                    </div>

                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Car Seats</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="car_seat_1" name="car_seat_1" type="checkbox" value="car_seat_1">
                                        <label for="car_seat_1">2 seats</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_seat_2" name="car_seat_2" type="checkbox" value="car_seat_2">
                                        <label for="car_seat_2">4 seats</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_seat_3" name="car_seat_3" type="checkbox" value="car_seat_3">
                                        <label for="car_seat_3">6 seats</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_seat_4" name="car_seat_4" type="checkbox" value="car_seat_4">
                                        <label for="car_seat_4">6+ seats</label>
                                    </div>

                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Car Engine Capacity (cc)</h4>
                                <div class="de_form">
                                    <div class="de_checkbox">
                                        <input id="car_engine_1" name="car_engine_1" type="checkbox"
                                            value="car_engine_1">
                                        <label for="car_engine_1">1000 - 2000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_2" name="car_engine_2" type="checkbox"
                                            value="car_engine_2">
                                        <label for="car_engine_2">2000 - 4000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_3" name="car_engine_3" type="checkbox"
                                            value="car_engine_3">
                                        <label for="car_engine_3">4000 - 6000</label>
                                    </div>

                                    <div class="de_checkbox">
                                        <input id="car_engine_4" name="car_engine_4" type="checkbox"
                                            value="car_engine_4">
                                        <label for="car_engine_4">6000+</label>
                                    </div>

                                </div>
                            </div>

                            <div class="item_filter_group">
                                <h4>Price ($)</h4>
                                <div class="price-input">
                                    <div class="field">
                                        <span>Min</span>
                                        <input type="number" class="input-min" value="0">
                                    </div>
                                    <div class="field">
                                        <span>Max</span>
                                        <input type="number" class="input-max" value="2000">
                                    </div>
                                </div>
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="2000"
                                        value="0" step="1">
                                    <input type="range" class="range-max" min="0" max="2000"
                                        value="2000" step="1">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="de-item mb30">
                                        <div class="d-img">
                                            <img src="images/cars/jeep-renegade.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>Jeep Renegade</h4>
                                                <div class="d-item_like">
                                                    <i class="fa fa-heart"></i><span>25</span>
                                                </div>
                                                <div class="d-atr-group">
                                                    <span class="d-atr"><img src="images/icons/1.svg"
                                                            alt="">5</span>
                                                    <span class="d-atr"><img src="images/icons/2.svg"
                                                            alt="">2</span>
                                                    <span class="d-atr"><img src="images/icons/3.svg"
                                                            alt="">4</span>
                                                    <span class="d-atr"><img src="images/icons/4.svg"
                                                            alt="">SUV</span>
                                                </div>
                                                <div class="d-price">
                                                    Daily rate from <span>$265</span>
                                                    <a class="btn-main" href="car-single.html">Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer class="text-light">
            <div class="container">
                <div class="row g-custom-x">
                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>About Rentaly</h5>
                            <p>Where quality meets affordability. We understand the importance of a smooth and enjoyable
                                journey without the burden of excessive costs. That's why we have meticulously crafted
                                our offerings to provide you with top-notch vehicles at minimum expense.</p>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Contact Info</h5>
                            <address class="s1">
                                <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY
                                    10001</span>
                                <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                                <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                        href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download
                                        Brochure</a></span>
                            </address>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="widget">
                                    <ul>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Partners</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget">
                            <h5>Social Network</h5>
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index-2.html">
                                        Copyright 2023 - Rentaly by Designesia
                                    </a>
                                </div>
                                <ul class="menu-simple">
                                    <li><a href="#">Terms &amp; Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/cars.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 19:37:58 GMT -->

</html>
