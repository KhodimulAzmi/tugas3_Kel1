<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <div class="container">
                <div class="row gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Welcome to Our<br>
                            <div style="color:red;">Events Management</div> System!!
                        </h1>
                        <p data-aos="fade-up" data-aos-delay="100">What miracle could be happened?</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/peserta/create" class="btn-get-started">Get Yourself a Ticket!!</a>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="assets/img/tiket.png" class="img-fluid animated" alt="tiket">
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section light-background">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            <h3>Event Management System</h3>
                            <p>
                                A platform that helps plan, organize, and manage events efficiently.
                                Includes features like attendee registration, ticket information, event organizers details, and event schedules.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn"><span>Back to Top</span> <i class="bi bi-chevron-top"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-xl-3">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                     <a href="/event/index"><i class="bi bi-calendar2-event"></i></a>
                                    <h4>Events</h4>
                                    <p>Know all of our events!!</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-3">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                     <a href="/organizers/index"><i class="bi bi-person-vcard-fill"></i></a>
                                    <h4>Organizers</h4>
                                    <p>Know all of our great organizers!!</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-3">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                     <a href="/peserta/index"><i class="bi bi-emoji-laughing"></i></a>
                                    <h4>Attendees</h4>
                                    <p>Wanna know other Attendees??</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-3">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                     <a href="/tiket/index"><i class="bi bi-ticket-perforated-fill"></i></a>
                                    <h4>Tickets</h4>
                                    <p>See our worthful Tickets!!</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Why Us Section -->

</body>

</html>