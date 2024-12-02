<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="banner" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-light text-center text-lg-start">
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem in labore aspernatur eos
                        culpa officia molestiae nostrum natus, earum voluptas quis explicabo voluptatibus quaerat iure,
                        ut tenetur modi ea nemo.</p>
                    <a href="#about" class="btn btn-brand">shop here</a>
                </div>
            </div>
        </div>
    </div>
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center">
                    <img src="coffee.jpg" alt="" class="coffee">
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <h1>ABOUT COFFEE</h1>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil vitae quisquam, impedit molestiae
                        consequatur, reiciendis id doloremque atque voluptate modi, corrupti minima iste dolores unde
                        assumenda debitis magni amet voluptates odit sunt saepe quo? Deleniti sapiente iste nostrum est
                        aperiam.
                    </p>
                    <a href="#" class="btn btn-brand">LEARN ABOUT US</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->

    <section id="services">
        <div class="container">
            <div class="text-center">
                <h1>SERVICES</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="card p-3 text-center" style="width: 22rem;">
                        <img src="icon.png" class="card-img-top uwu mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-brand">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="card p-3 text-center" style="width: 22rem;">
                        <img src="icon.png" class="card-img-top uwu mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-brand">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <div class="card p-3 text-center" style="width: 22rem;">
                        <img src="icon.png" class="card-img-top uwu mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-brand">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action -->
    <div id="cta" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-light text-center">
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing.</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem in labore aspernatur eos
                        culpa officia molestiae nostrum natus, earum voluptas quis explicabo voluptatibus quaerat iure,
                        ut tenetur modi ea nemo.</p>
                    <a href="#about" class="btn btn-brand">shop here</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Review -->
    <section id="reviews">
        <div class="container">
            <div class="text-center">
                <h2>Reviews</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <!-- Review Items -->
            <div class="row">
                <div class="col">
                    <div class="testimonials">
                        <div class="d-flex">
                            <img src="user.png" alt="">
                            <div class="">
                                <h3>Clientname</h3>
                                <a href="">@client</a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonials">
                        <div class="d-flex">
                            <img src="user.png" alt="">
                            <div class="">
                                <h3>Clientname</h3>
                                <a href="">@client</a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonials">
                        <div class="d-flex">
                            <img src="user.png" alt="">
                            <div class="">
                                <h3>Clientname</h3>
                                <a href="">@client</a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonials">
                        <div class="d-flex">
                            <img src="user.png" alt="">
                            <div class="">
                                <h3>Clientname</h3>
                                <a href="">@client</a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonials">
                        <div class="d-flex">
                            <img src="user.png" alt="">
                            <div class="">
                                <h3>Clientname</h3>
                                <a href="">@client</a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="testimonials">
                        <div class="d-flex">
                            <img src="user.png" alt="">
                            <div class="">
                                <h3>Clientname</h3>
                                <a href="">@client</a>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section id="faq">
        <div class="container">
            <div class="faq-section">
                <h2>FREQUENTLY ASK QUESTION</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer text-white" id="footer">
        <div class="container">
            <div class="row al">
                <div class="col-md-3 col-sm-6 text-lg-start text-center">
                    <a href="" class="navbar-brand">
                        <!-- img -->
                    </a>
                    <h5 class="mt-4">ABOUT US</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, autem!</p>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start ps-lg-5 ps-0 text-center">
                    <h5>SERVICES</h5>
                    <ul class="list-unstyled">
                        <li><a href="">Services</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start text-center">
                    <h5>Contact Us</h5>
                    <p>123 Street Name,<br>City, Country</p>
                    <p>Email: example@example.com <br>Phone: 0123461717</p>
                </div>
                <div class="col-md-3 col-sm-6 text-lg-start text-center">
                    <h5>Newsletter</h5>
                    <form action="">
                        <div class="inpu-group mb-3">
                            <input type="text" class="form-control" style="border-radius: 1px;" placeholder="Email"
                                aria-label="Email" aria-describedby="button-addon2">
                            <button class="btn btn-outline-light" type="button" id="button-addon2"
                                style="margin-top: 5px;">Subscribe</button>
                        </div>
                    </form>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>