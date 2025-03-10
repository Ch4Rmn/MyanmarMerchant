<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyanmarMerchant</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{--  --}}
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="antialiased container">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">




        <div>
            <!-- Topbar Start -->
            <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
                <div class="row gx-0">
                    <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                        <div class="d-inline-flex align-items-center">
                            <a class="text-body py-2 pe-3 border-end" href="{{ url('/gis') }}"><small>FAQs</small></a>
                            <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                            <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                            <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                            <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-lg-end">
                        <div
                            class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                            <div class="me-3 pe-3 border-end py-2">
                                <p class="m-0"><i class="fa fa-envelope-open me-2"></i>dpsmap@gmail.com</p>
                            </div>

                            <div class="py-2">
                                <p class="m-0"><i class="fa fa-phone-alt me-2"></i>09 774 204020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->


            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="m-0 text-uppercase text-primary">
                        {{-- <i class="far fa-smile text-primary me-2"></i> --}}
                        MyanmarMerchant
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 me-n3">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="https://www.dpsmap.com" target="_blank" class="dropdown-item">DPSMAP</a>
                                <a href="detail.html" class="dropdown-item">Blog Detail</a>
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="quote.html" class="dropdown-item">Quote Form</a>
                                <a href="team.html" class="dropdown-item">The Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Carousel Start -->
            <div class="container-fluid p-0">
                <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="w-100 img-fluid" style="height: 800px !important;"
                                src="img/alejandro-rugama-3wJTqhFsKRY-unsplash.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h5 class="text-white text-uppercase">MyanmarMerchant
                                    </h5>
                                    <h1 class="display-1 text-white mb-md-4">Your Trusted Business Hub in Myanmar</h1>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get
                                        Quote</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 img-fluid" style="height: 800px !important;"
                                src="img/majkell-projku-a_-hYhh-R3Q-unsplash.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h5 class="text-white text-uppercase">MyanmarMerchant</h5>
                                    <h1 class="display-1 text-white mb-md-4">Connecting Buyers and
                                        Sellers Across Myanmar
                                    </h1>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get
                                        Quote</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 img-fluid" style="height: 800px !important;"
                                src="img/si-thu-aung-VfsYA3rYBlw-unsplash.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h5 class="text-white text-uppercase">MyanmarMerchant</h5>
                                    <h1 class="display-1 text-white mb-md-4">Empowering Entrepreneurs, Enriching
                                        Markets</h1>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get
                                        Quote</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 img-fluid" style="height: 800px !important;"
                                src="img/sippakorn-yamkasikorn-i8BJtUlTUrU-unsplash.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 900px;">
                                    <h5 class="text-white text-uppercase">Trusted Sellers & Service Providers </h5>
                                    <h1 class="display-1 text-white mb-md-4">Verified vendors ensure a secure and
                                        reliable marketplace</h1>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 rounded-pill">Get
                                        Quote</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 rounded-pill">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->

            <br>
            <h1>MyanmarMerchant: Your Trusted Business Hub in Myanmar</h1>
            <p>MyanmarMerchant is a leading online platform that connects businesses, entrepreneurs, and consumers
                across Myanmar. It provides a seamless marketplace where buyers and sellers can interact, trade, and
                grow together. Whether you're looking for high-quality products, professional services, or business
                networking opportunities, MyanmarMerchant has you covered.</p>

            <h2>Categories on MyanmarMerchant</h2>
            <ul>
                <li>E-Commerce & Retail</li>
                <li>Automobiles & Vehicles</li>
                <li>Real Estate & Property</li>
                <li>Electronics & Gadgets</li>
                <li>Fashion & Beauty</li>
                <li>Food & Beverages</li>
                <li>Health & Medical Services</li>
                <li>Industrial & Construction</li>
                <li>Education & Training</li>
                <li>Travel & Hospitality</li>
            </ul>

            <h2>Category Breakdown</h2>

            <h3>E-Commerce & Retail</h3>
            <p>MyanmarMerchant provides a vast selection of products, from clothing and accessories to home essentials
                and electronics. It helps retailers connect with customers through a smooth and secure shopping
                experience.</p>

            <h3>Automobiles & Vehicles</h3>
            <p>Whether you’re looking for cars, motorbikes, or spare parts, this category features trusted dealers and
                sellers offering both new and used vehicles.</p>

            <h3>Real Estate & Property</h3>
            <p>Find the perfect home, office space, or investment property with MyanmarMerchant’s extensive listings of
                houses, apartments, commercial spaces, and land.</p>

            <h3>Electronics & Gadgets</h3>
            <p>This category offers the latest smartphones, laptops, home appliances, and other tech gadgets from
                reputable brands and sellers.</p>

            <h3>Fashion & Beauty</h3>
            <p>Shop for stylish clothing, accessories, skincare, and beauty products from local and international
                brands.</p>

            <h3>Food & Beverages</h3>
            <p>From groceries and fresh produce to restaurants and catering services, this section connects food lovers
                with top-quality suppliers and vendors.</p>

            <h3>Health & Medical Services</h3>
            <p>MyanmarMerchant partners with hospitals, clinics, pharmacies, and medical professionals to provide access
                to healthcare services, medicines, and wellness products.</p>

            <h3>Industrial & Construction</h3>
            <p>This category includes construction materials, heavy machinery, tools, and industrial equipment for
                businesses and contractors.</p>

            <h3>Education & Training</h3>
            <p>Find schools, universities, online courses, tutoring services, and professional training programs to
                enhance your knowledge and skills.</p>

            <h3>Travel & Hospitality</h3>
            <p>Plan your next trip with travel agencies, hotels, tour operators, and transportation services available
                on MyanmarMerchant.</p>

            <h2>Why Choose MyanmarMerchant?</h2>
            <ul>
                <li><strong>Wide Variety of Products & Services</strong> – From daily essentials to specialized business
                    needs, MyanmarMerchant covers everything.</li>
                <li><strong>Trusted Sellers & Service Providers</strong> – Verified vendors ensure a secure and reliable
                    marketplace.</li>
                <li><strong>User-Friendly Interface</strong> – Easy navigation and seamless browsing for a better
                    shopping and business experience.</li>
                <li><strong>Secure Transactions</strong> – Safe payment methods to protect buyers and sellers.</li>
                <li><strong>Business Growth Opportunities</strong> – A platform that helps businesses expand their reach
                    and connect with new customers.</li>
            </ul>

            <p>Whether you are a buyer, seller, or service provider, MyanmarMerchant is your go-to platform for reliable
                and convenient trade in Myanmar. Start exploring today!</p>
            <hr>
            {{--  --}}
            <h1>Merchants: History, Types & Evolution</h1>

            <div class="image">
                {{-- <img src="merchant-trade.jpg" alt="Merchants and trade illustration"> --}}
                <p><em>A historical depiction of merchants engaging in trade.</em></p>
            </div>

            <div class="section">
                <h2>Introduction</h2>
                <p>A merchant is a person who trades in goods produced by others, often dealing with foreign markets.
                    Merchants have played a crucial role in commerce since the earliest civilizations. Merchant networks
                    operated in ancient Babylonia, Assyria, China, Egypt, Greece, India, Persia, Phoenicia, and Rome.
                </p>
                <p>The European Age of Discovery expanded trade routes, leading to the rise of wealthy merchant classes.
                    By the 18th century, the merchant profession evolved with the introduction of modern business
                    practices.</p>
            </div>

            <div class="section">
                <h2>Etymology</h2>
                <p>The word <strong>"merchant"</strong> comes from the Middle English <em>"marchant"</em>, derived from
                    Anglo-Norman <em>"marchaunt"</em>, which originates from Vulgar Latin <em>"mercatant"</em> (to trade
                    or deal in goods).</p>
                <p>In modern usage, "merchant" can also refer to a specific type of trader, such as a "speed merchant"
                    (fast driver) or "dream merchant" (someone who sells visionary ideas).</p>
            </div>

            <div class="section">
                <h2>Types of Merchants</h2>
                <ul>
                    <li><strong>Wholesale Merchant:</strong> Deals in large quantities, selling to retailers rather than
                        consumers.</li>
                    <li><strong>Retail Merchant:</strong> Sells directly to consumers, often in small quantities (e.g.,
                        shopkeepers).</li>
                </ul>
                <p>Merchants also exist in specialized fields like <em>merchant banking</em> or <em>merchant
                        shipping</em>.</p>
            </div>

            <div class="section">
                <h2>Merchants in Antiquity</h2>
                <p>Merchants existed in open-air markets in ancient civilizations like Greece, Rome, and Phoenicia.
                    Phoenicians, known as "traders in purple," controlled Mediterranean trade routes, exporting wood,
                    textiles, and wine.</p>
                <p>They also spread the **Phoenician alphabet**, a precursor to many modern scripts.</p>
            </div>

            <div class="section">
                <h2>Merchants in the Medieval Period</h2>
                <p>During medieval times, merchant guilds formed to regulate trade. The Hanseatic League controlled
                    commerce in Northern Europe, while Marco Polo's travels helped open Asian trade routes.</p>
                <p>By the 13th century, luxury goods like silk, spices, and jewelry became highly sought after in
                    Europe.</p>
            </div>

            <div class="section">
                <h2>Merchants in the Modern Era</h2>
                <p>With the rise of consumer culture in the 17th and 18th centuries, merchants began specializing in
                    **international trade**. Colonization and new trade policies encouraged merchants to explore global
                    markets.</p>
                <ul>
                    <li><strong>Daniel Defoe</strong> wrote guides on international trade.</li>
                    <li>**Armenian traders** dominated Eurasian trade routes.</li>
                    <li>The **East India Company** expanded British trade across Asia.</li>
                </ul>
            </div>

            <div class="section">
                <h2>The Evolution of Merchants</h2>
                <p>By the 18th century, the rise of industrial capitalism saw merchants evolve into **business
                    tycoons**. Modern merchant practices included:</p>
                <ul>
                    <li>Mass production and **product differentiation**.</li>
                    <li>**Marketing and advertising techniques** (Josiah Wedgwood pioneered catalog selling).</li>
                    <li>The introduction of **banking, loans, and insurance**.</li>
                </ul>
                <p>Merchants also became key players in **colonial economies**, controlling major trade networks.</p>
            </div>

            <div class="section">
                <h2>Merchants in the 21st Century</h2>
                <p>Modern merchants include large e-commerce businesses like **Amazon, Alibaba, and Shopify**. The rise
                    of **digital trade, cryptocurrency, and globalized supply chains** continues to reshape the merchant
                    profession.</p>
                <ul>
                    <li>**Global online marketplaces** connect merchants and consumers worldwide.</li>
                    <li>**Digital payments and blockchain** are transforming transactions.</li>
                    <li>**Data-driven sales strategies** help merchants target specific audiences.</li>
                </ul>
            </div>
            {{--  --}}


            <!-- About Start -->
            {{-- <div class="container-fluid bg-secondary p-0">
                <div class="row g-0">
                    <div class="col-lg-6 py-6 px-5">
                        <h1 class="display-5 mb-4"><span class="text-primary">MyanmarMerchant</span>:Your Trusted
                            Business Hub in Myanmar</h1>
                        <h4 class="text-primary mb-4">MyanmarMerchant is a leading online platform dedicated to
                            connecting
                            businesses, entrepreneurs,</h4>
                        <p class="mb-4">
                            and consumers in Myanmar. It serves as a comprehensive marketplace, offering a wide range of
                            products and services across various industries. Whether you are a buyer looking for quality
                            goods or a seller aiming to expand your reach, MyanmarMerchant provides a seamless and
                            efficient
                            way to engage in trade. With a user-friendly interface, secure transactions, and a
                            commitment to
                            customer satisfaction, it is revolutionizing the way businesses operate in Myanmar’s growing
                            digital economy.</p>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 rounded-pill">Learn more</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="h-100 d-flex flex-column justify-content-center bg-primary p-5">
                            <div class="d-flex text-white mb-5">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-user-tie fs-4"></i>
                                </div>
                                <div class="ps-4">
                                    <h3>Business Planning</h3>
                                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat
                                        ipsum lorem et sit sed stet lorem sit clita duo</p>
                                </div>
                            </div>
                            <div class="d-flex text-white mb-5">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-chart-line fs-4"></i>
                                </div>
                                <div class="ps-4">
                                    <h3>Financial Analaysis</h3>
                                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat
                                        ipsum lorem et sit sed stet lorem sit clita duo</p>
                                </div>
                            </div>
                            <div class="d-flex text-white">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white text-primary rounded-circle mx-auto mb-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-balance-scale fs-4"></i>
                                </div>
                                <div class="ps-4">
                                    <h3>legal Advisory</h3>
                                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat
                                        ipsum lorem et sit sed stet lorem sit clita duo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- About End -->



            <!-- Services Start -->
            {{-- <div class="container-fluid pt-6 px-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <h1 class="display-5 mb-0">What We Offer</h1>
                    <hr class="w-25 mx-auto bg-primary">
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-secondary text-center px-5">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-user-tie fa-2x"></i>
                            </div>
                            <h3 class="mb-3">Business Research</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum
                                lorem et sit sed stet lorem</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-secondary text-center px-5">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-chart-pie fa-2x"></i>
                            </div>
                            <h3 class="mb-3">Stretagic Planning</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum
                                lorem et sit sed stet lorem</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-secondary text-center px-5">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-chart-line fa-2x"></i>
                            </div>
                            <h3 class="mb-3">Market Analysis</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum
                                lorem et sit sed stet lorem</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-secondary text-center px-5">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-chart-area fa-2x"></i>
                            </div>
                            <h3 class="mb-3">Financial Analaysis</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum
                                lorem et sit sed stet lorem</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-secondary text-center px-5">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-balance-scale fa-2x"></i>
                            </div>
                            <h3 class="mb-3">legal Advisory</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum
                                lorem et sit sed stet lorem</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-secondary text-center px-5">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                                style="width: 90px; height: 90px;">
                                <i class="fa fa-house-damage fa-2x"></i>
                            </div>
                            <h3 class="mb-3">Tax & Insurance</h3>
                            <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum
                                lorem et sit sed stet lorem</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Services End -->


            <!-- Features Start -->
            {{-- <div class="container-fluid py-6 px-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <h1 class="display-5 mb-0">Why Choose Us!!!</h1>
                    <hr class="w-25 mx-auto bg-primary">
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-cubes fs-4 text-white"></i>
                                </div>
                                <h3>Best In Industry</h3>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam
                                    et diam dolor ea</p>
                            </div>
                            <div class="col-12">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-percent fs-4 text-white"></i>
                                </div>
                                <h3>99% Success Rate</h3>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam
                                    et diam dolor ea</p>
                            </div>
                            <div class="col-12">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-award fs-4 text-white"></i>
                                </div>
                                <h3>Award Winning</h3>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam
                                    et diam dolor ea</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-block bg-primary h-100 text-center">
                            <img class="img-fluid" src="img/feature.jpg" alt="">
                            <div class="p-4">
                                <p class="text-white mb-4">Clita nonumy sanctus nonumy et clita tempor, et sea amet ut
                                    et sadipscing rebum amet takimata amet, sed accusam eos eos dolores dolore et. Et ea
                                    ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum
                                    kasd</p>
                                <a href="" class="btn btn-light py-md-3 px-md-5 rounded-pill mb-2">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="far fa-smile-beam fs-4 text-white"></i>
                                </div>
                                <h3>100% Happy Client</h3>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam
                                    et diam dolor ea</p>
                            </div>
                            <div class="col-12">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-user-tie fs-4 text-white"></i>
                                </div>
                                <h3>Professional Advisors</h3>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam
                                    et diam dolor ea</p>
                            </div>
                            <div class="col-12">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-headset fs-4 text-white"></i>
                                </div>
                                <h3>24/7 Customer Support</h3>
                                <p class="mb-0">Magna sea eos sit dolor, ipsum amet ipsum lorem diam dolor eos diam
                                    et diam dolor ea</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Features Start -->


            <!-- Quote Start -->
            {{-- <div class="container mt-5 bg-secondary px-0">
                <div class="row g-0">
                    <div class="col-lg-6 py-6 px-5">
                        <h1 class="display-5 mb-4">Request Team Members</h1>
                        <p class="mb-4">Kasd vero erat ea amet justo no stet, et elitr no dolore no elitr sea kasd et
                            dolor diam tempor. Nonumy sed dolore no eirmod sit nonumy vero lorem amet stet diam at. Ea
                            at lorem sed et, lorem et rebum ut eirmod gubergren, dolor ea duo diam justo dolor diam
                            ipsum dolore stet stet elitr ut. Ipsum amet labore lorem lorem diam magna sea, eos sed
                            dolore elitr.</p>
                        <form>
                            <div class="row gx-3">
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="form-floating-1"
                                            placeholder="John Doe">
                                        <label for="form-floating-1">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="form-floating-2"
                                            placeholder="name@example.com">
                                        <label for="form-floating-2">Email address</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Financial Consultancy">
                                            <option selected>Financial Consultancy</option>
                                            <option value="1">Strategy Consultancy</option>
                                            <option value="2">Tax Consultancy</option>
                                        </select>
                                        <label for="floatingSelect">Select A Service</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary w-100 h-100" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/quote.jpg"
                                style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Quote End -->


            <!-- Team Start -->
            {{-- <div class="container-fluid py-6 px-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <h1 class="display-5 mb-0">Our Team Members</h1>
                    <hr class="w-25 mx-auto bg-primary">
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="team-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                                <h3 class="text-white">Full Name</h3>
                                <p class="text-white text-uppercase mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                                <h3 class="text-white">Full Name</h3>
                                <p class="text-white text-uppercase mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-item position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-text w-100 position-absolute top-50 text-center bg-primary p-4">
                                <h3 class="text-white">Full Name</h3>
                                <p class="text-white text-uppercase mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Team End -->


            <!-- Testimonial Start -->
            {{-- <div class="container-fluid bg-secondary p-0">
                <div class="row g-0">
                    <div class="col-lg-6" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/testimonial.jpg"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 py-6 px-5">
                        <h1 class="display-5 mb-4">What Say Our Client!!!</h1>
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item">
                                <p class="fs-4 fw-normal mb-4"><i
                                        class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor
                                    justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut
                                    et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="">
                                    <div class="ps-4">
                                        <h3>Client Name</h3>
                                        <span class="text-uppercase">Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <p class="fs-4 fw-normal mb-4"><i
                                        class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor
                                    justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut
                                    et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="">
                                    <div class="ps-4">
                                        <h3>Client Name</h3>
                                        <span class="text-uppercase">Profession</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Testimonial End -->


            <!-- Blog Start -->
            {{-- <div class="container-fluid py-6 px-5">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <h1 class="display-5 mb-0">Latest Blog Post</h1>
                    <hr class="w-25 mx-auto bg-primary">
                </div>
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            </div>
                            <div class="bg-secondary d-flex">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                    <span>01</span>
                                    <h5 class="text-uppercase m-0">Jan</h5>
                                    <span>2045</span>
                                </div>
                                <div class="d-flex flex-column justify-content-center py-3 px-4">
                                    <div class="d-flex mb-2">
                                        <small class="text-uppercase me-3"><i
                                                class="bi bi-person me-2"></i>Admin</small>
                                        <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web
                                            Design</small>
                                    </div>
                                    <a class="h4" href="">Magna sea dolor ipsum amet lorem eos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            </div>
                            <div class="bg-secondary d-flex">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                    <span>01</span>
                                    <h5 class="text-uppercase m-0">Jan</h5>
                                    <span>2045</span>
                                </div>
                                <div class="d-flex flex-column justify-content-center py-3 px-4">
                                    <div class="d-flex mb-2">
                                        <small class="text-uppercase me-3"><i
                                                class="bi bi-person me-2"></i>Admin</small>
                                        <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web
                                            Design</small>
                                    </div>
                                    <a class="h4" href="">Magna sea dolor ipsum amet lorem eos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            </div>
                            <div class="bg-secondary d-flex">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                    <span>01</span>
                                    <h5 class="text-uppercase m-0">Jan</h5>
                                    <span>2045</span>
                                </div>
                                <div class="d-flex flex-column justify-content-center py-3 px-4">
                                    <div class="d-flex mb-2">
                                        <small class="text-uppercase me-3"><i
                                                class="bi bi-person me-2"></i>Admin</small>
                                        <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web
                                            Design</small>
                                    </div>
                                    <a class="h4" href="">Magna sea dolor ipsum amet lorem eos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Blog End -->


            <!-- Footer Start -->
            {{-- <div class="container-fluid bg-primary text-secondary p-5">
                <div class="row g-5">
                    <div class="col-12 text-center">
                        <h1 class="display-5 mb-4">Stay Update!!!</h1>
                        <form class="mx-auto" style="max-width: 800px;">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark px-4">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
            <div class="container-fluid bg-dark text-secondary p-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog Post</a>
                            <a class="text-secondary" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Popular Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog Post</a>
                            <a class="text-secondary" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Rm 307, Yae Kyaw Complex, Yae
                            Kyaw Rd, Yangon 11182</p>
                        <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>dpsmap@gmail.com</p>
                        <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>09 774 204020</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Follow Us</h3>
                        <div class="d-flex">
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                                    class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                                    class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                                    class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                                    class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-dark text-secondary text-center border-top py-4 px-5"
                style="border-color: rgba(256, 256, 256, .1) !important;">
                <p class="m-0">&copy; <a class="text-secondary border-bottom" href="#">MyanmarMerchant</a>.
                    All Rights Reserved. Designed by <a href="https://www.dpsmap.com">DPSMAP</a></p>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                    class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->



            {{-- <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div> --}}
        </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

</html>
