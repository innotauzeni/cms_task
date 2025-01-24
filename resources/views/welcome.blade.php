@extends('layouts.prop_headlayout')
@section('content')
    <style>
        .aboutus {
            padding: 50px 0;
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            border-radius: 10px;
        }

        .experience-badge {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 16px;
        }

        .testimonial-card {
            background: #fff;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }

        .testimonial-card .stars {
            color: #ffc107;
        }

        .stats {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .stats-label {
            font-size: 0.9rem;
            color: #777;
        }

        .section-title {
            margin-bottom: 40px;
        }

        .service-card {
            background: #fff;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .pricing-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .pricing-card:hover {
            transform: scale(1.05);
        }

        .pricing-card.popular {
            border-color: #0d6efd;
            background: #0d6efd;
            color: #fff;
        }

        .pricing-card.popular .btn {
            background: #fff;
            color: #0d6efd;
        }

        .btn-link {
            text-decoration: none;
        }
    </style>
    <main class="bg-light py-5">
        <div class="container d-md-flex justify-content-between align-items-center">
            <div>
                <p style="background-color: rgb(205, 233, 243);margin-right: 2px; width: 329px;border-radius: 21px;"
                    class="p-2 text-primary"><i class="bi bi-sliders"> </i>Working for your success</p>
                <h2>{{$postbanner->name}}</h2>
                <h2>Consectetur Led</h2>
                <h2 class="text-primary">Vestbulum Ante</h2>
                <p>{{ $postbanner->description }}</p>
                {{-- <p>We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.</p> --}}
                <div class="btn-container">
                    <a href="#" class="btn btn-primary btn-sm" style="border-radius: 15px!important;">GET STARTED</a>
                    <a href="#" class="btn btn-lg ml-3" style="border-style: none!important;">
                        <i class="fas fa-play-circle mr-3"></i> Play Video
                    </a>
                </div>
            </div>
            <img src="{{ $postbanner->image }}" alt="Website" class="img-fluid mt-4 mt-md-0" width="400" height="400">
        </div>
    </main>
    <section class="mb-4">
        <div class="container">
            <div class="card shadow p-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="content d-flex">
                                <div class="icon p-3 mt-lg-2"
                                    style="width:60px; background-color:aliceblue;border-radius:60%">
                                    <i class="bi bi-trophy text-primary mt-lg-4 ml-2"></i>
                                </div>
                                <div>
                                    <p class="mt-2 ml-3">3x Won Awards <br> <small class="text-muted">3x Won Awards</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="content d-flex">
                                <div class="icon p-3 mt-lg-2"
                                    style="width:60px; background-color:aliceblue;border-radius:60%">
                                    <i class="bi bi-briefcase text-primary mt-lg-4 ml-2"></i>
                                </div>
                                <div>
                                    <p class="mt-2 ml-3">6.5K Followers <br> <small class="text-muted">3x Won Awards</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="content d-flex">
                                <div class="icon p-3 mt-lg-2"
                                    style="width:60px; background-color:aliceblue;border-radius:60%">
                                    <i class="bi bi-graph-up text-primary mt-lg-4 ml-2"></i>
                                </div>
                                <div>
                                    <p class="mt-2 ml-3">80k Clients <br> <small class="text-muted">3x Won Awards</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="content d-flex">
                                <div class="icon p-3 mt-lg-2"
                                    style="width:60px; background-color:aliceblue;border-radius:60%">
                                    <i class="bi bi-award text-primary mt-lg-4 ml-2"></i>
                                </div>
                                <div>
                                    <p class="mt-2 ml-3">6x Awards <br> <small class="text-muted">3x Won Awards</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container aboutus" id="aboutus">
            <div class="row align-items-center">
                {{-- left colum --}}
                <div class="col-lg-6">
                    <b class="text-primary mb-3">MORE ABOUT US</b>
                    <h6 class="mb-2">{{$poststory->name}}</h6>
                    {!! $poststory->description !!}
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Lorem ipsum dolor sit amet
                        </li>
                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Consectetur adipiscing elit
                        </li>
                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Sed do eiusmod tempor</li>
                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Incididunt ut labore et</li>
                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Dolore magna aliqua</li>
                        <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>Ut enim ad minim veniam</li>
                    </ul>
                    <div class="d-flex align-items-center mt-4">
                        <img src="{{ asset('assets/img/placeholder.png') }}" style="width: 54px" alt="Profile"
                            class="rounded-circle me-3">
                        <div>
                            <h6 class="mb-0">Mario Smith</h6>
                            <small class="text-muted">CEO & Founder</small>
                        </div>
                        <div class=" ml-lg-5">
                            <button class="btn btn-outline-primary"><i class="bi bi-telephone-fill me-2"></i>+123
                                456-789</button>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{ $poststory->image }}" alt="About Us" class="img-fluid">
                        <div class="experience-badge">
                            <span>15+</span> <br> Years of experience in business service
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container text-center" id="feature">
            <!-- Section Title -->
            <h2 class="fw-bold">Features</h2>
            <p class="text-muted">
                Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                consectetur velit
            </p>
            <!-- Feature Buttons -->
            <div class="my-4">
                <button class="btn btn-primary me-2">Modi sit</button>
                <button class="btn btn-outline-secondary me-2">Praesent</button>
                <button class="btn btn-outline-secondary">Explica</button>
            </div>
            <!-- Main Feature Row -->
            <div class="row align-items-center mt-5">
                <div class="col-lg-6 text-start">
                    <h3 class="fw-bold mb-3">Voluptatem dignissimos provident</h3>
                    <p class="text-muted mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-check-circle text-primary"></i> Ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle text-primary"></i> Duis aute irure
                            dolor in reprehenderit in voluptate velit.
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-check-circle text-primary"></i> Ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="{{ $poststory->image }}" class="img-fluid" alt="Features illustration" />
                </div>
            </div>
            <!-- Sub Feature Cards -->
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card border-0 text-center shadow-sm p-3 alert-warning">
                        <div class="mb-3">
                            <i class="bi bi-briefcase-fill text-warning fs-2  float-left"></i>
                        </div>
                        <h5 class="fw-bold">Corporis voluptates</h5>
                        <p class="text-muted">
                            Consequuntur sunt aut quasi enim aliquam quae harum pariatur
                            laboris nisi ut aliquip
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 text-center shadow-sm p-3 alert-primary">
                        <div class="mb-3">
                            <i class="bi bi-lightbulb-fill text-info fs-2  float-left"></i>
                        </div>
                        <h5 class="fw-bold">Explicabo consectetur</h5>
                        <p class="text-muted">
                            Est autem dicta beatae suscipit. Sint veritatis et et quasi ab aut
                            inventore
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 text-center shadow-sm p-3 alert-success">
                        <div class="mb-3">
                            <i class="bi bi-sun-fill text-success fs-2  float-left"></i>
                        </div>
                        <h5 class="fw-bold">Ullamco laboris</h5>
                        <p class="text-muted">
                            Excepturi sint occaecati cupiditat non provident, sunt in culpa
                            qui officia deserunt
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 text-center shadow-sm p-3 alert-danger">
                        <div class="mb-3">
                            <i class="bi bi-shield-fill-check text-danger fs-2  float-left"></i>
                        </div>
                        <h5 class="fw-bold">Labore consequatur</h5>
                        <p class="text-muted">
                            Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores
                            omnis facere
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container text-center  bg-primary">

            <div class="row justify-content-center p-3">
                <div class="col-md-6">
                    <p class="text-white mb-4  p-3">Why i said old chap that is ,spiffing off his nut cor blimey guvnords
                        geeza
                        bloke knees up bobby, sloshed arse
                        Williams crack Richard. Bloke fanny </p>
                    <button class="w-80 btn btn-outline-light mb-3">GET STARTED</button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Testimonials</h2>
                <p class="text-muted">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-lg-6">
                    <div class="testimonial-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/img/placeholder.png') }}" style="width: 54px" alt="Profile"
                                class="rounded-circle me-3">
                            <div>
                                <h5 class="mb-0">Saul Goodman</h5>
                                <p class="text-muted small">CEO & Founder</p>
                            </div>
                        </div>
                        <div class="stars mb-2">
                            ★★★★★
                        </div>
                        <p>Proin iaculis purus consequat sem cure digni ssim donec porttitor entum suscipit rhoncus.</p>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="col-lg-6">
                    <div class="testimonial-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/img/placeholder.png') }}" style="width: 54px" alt="Profile"
                                class="rounded-circle me-3">
                            <div>
                                <h5 class="mb-0">Sara Wilsson</h5>
                                <p class="text-muted small">Designer</p>
                            </div>
                        </div>
                        <div class="stars mb-2">
                            ★★★★★
                        </div>
                        <p>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum.</p>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="col-lg-6">
                    <div class="testimonial-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/img/placeholder.png') }}" style="width: 54px" alt="Profile"
                                class="rounded-circle me-3">
                            <div>
                                <h5 class="mb-0">Jena Karlis</h5>
                                <p class="text-muted small">Store Owner</p>
                            </div>
                        </div>
                        <div class="stars mb-2">
                            ★★★★★
                        </div>
                        <p>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim.</p>
                    </div>
                </div>
                <!-- Testimonial 4 -->
                <div class="col-lg-6">
                    <div class="testimonial-card p-4">
                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ asset('assets/img/placeholder.png') }}" style="width: 54px" alt="Profile"
                                class="rounded-circle me-3">
                            <div>
                                <h5 class="mb-0">Matt Brandon</h5>
                                <p class="text-muted small">Freelancer</p>
                            </div>
                        </div>
                        <div class="stars mb-2">
                            ★★★★★
                        </div>
                        <p>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim.</p>
                    </div>
                </div>
            </div>
            <!-- Stats Section -->
            <div class="row text-center mt-5">
                <div class="col-md-3">
                    <p class="stats">232</p>
                    <p class="stats-label">Clients</p>
                </div>
                <div class="col-md-3">
                    <p class="stats">521</p>
                    <p class="stats-label">Projects</p>
                </div>
                <div class="col-md-3">
                    <p class="stats">1453</p>
                    <p class="stats-label">Hours of Support</p>
                </div>
                <div class="col-md-3">
                    <p class="stats">32</p>
                    <p class="stats-label">Workers</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container" id="Services">
            <div class="text-center section-title">
                <h2 class="fw-bold">Services</h2>
                <p class="text-muted">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <div class="row g-4">

                @foreach($products as $product)
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card h-100">
                    <div class="card-body">
                        <i class="{{$product->icon}} fa-3x mb-3 icon-border-red"></i>
                        <h5 class="card-title">{{$product->name}} </h5>
                        <p class="card-text">{{$product->description}} </p>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-5">
        <div class="container" id="Pricing">
            <div class="text-center section-title">
                <h2 class="fw-bold">Pricing</h2>
                <p class="text-muted">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <div class="row g-4">
                <!-- Basic Plan -->
                <div class="col-md-4">
                    <div class="pricing-card text-center p-4">
                        <h5>Basic Plan</h5>
                        <h2 class="fw-bold">$9.9<span class="fs-6">/month</span></h2>
                        <p class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                        <ul class="list-unstyled">
                            <li>✓ Duis aut iure dolor</li>
                            <li>✓ Excepturi sint occaecat</li>
                            <li>✓ Nemo enim ipsam voluptatem</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-3">Buy Now →</a>
                    </div>
                </div>
                <!-- Standard Plan -->
                <div class="col-md-4">
                    <div class="pricing-card popular text-center p-4">
                        <div class="badge bg-light text-primary mb-3">Most Popular</div>
                        <h5>Standard Plan</h5>
                        <h2 class="fw-bold">$19.9<span class="fs-6">/month</span></h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                        <ul class="list-unstyled">
                            <li>✓ Lorem ipsum dolor sit amet</li>
                            <li>✓ Consectetur adipisicing elit</li>
                            <li>✓ Sed do eiusmod tempor</li>
                            <li>✓ Ut labore et dolore magna</li>
                        </ul>
                        <a href="#" class="btn btn-light mt-3">Buy Now →</a>
                    </div>
                </div>
                <!-- Premium Plan -->
                <div class="col-md-4">
                    <div class="pricing-card text-center p-4">
                        <h5>Premium Plan</h5>
                        <h2 class="fw-bold">$39.9<span class="fs-6">/month</span></h2>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.</p>
                        <ul class="list-unstyled">
                            <li>✓ Temporibus autem quibusdam</li>
                            <li>✓ Saepe eveniet et voluptates</li>
                            <li>✓ Nam libero tempore soluta</li>
                            <li>✓ Maxime placeat facere possimus</li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-3">Buy Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-center mb-4">Have a question? Check out the FAQ</h2>
                    <p class="text-center mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Learn more about
                        our process with the FAQs below.</p>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    How can I create an account on this site?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula felis at lectus
                                    facilisis consequat.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                    aria-controls="faqCollapseTwo">
                                    What is the return policy?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseThree" aria-expanded="false"
                                    aria-controls="faqCollapseThree">
                                    How do I track my order?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                    laboriosam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container">
            <h2 class="mb-3">Call To Action</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Explore our services and learn more
                about what we can offer you.</p>
            <a href="#" class="btn btn-light">Get Started</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5" id="Contact">
        <div class="container">
            <h2 class="text-center mb-4">Contact</h2>
            <p class="text-center mb-5">Neccessitatibus vitae consequatur ut aliquid fuga cum cupiditate sint consectetur
                velit.</p>
            <div class="row g-4">
                <!-- Contact Info -->
                <div class="col-md-4">
                    <div class="p-4 bg-primary shadow rounded text-white">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled">
                            <li><strong>Our Location:</strong> 123 Main Street, City, Country</li>
                            <li><strong>Phone Number:</strong> +123 456 7890</li>
                            <li><strong>Email Address:</strong> info@example.com</li>
                        </ul>
                    </div>
                </div>
                <!-- Contact Form -->
                <div class="col-md-8">
                    <form class="p-4 bg-white shadow rounded">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
