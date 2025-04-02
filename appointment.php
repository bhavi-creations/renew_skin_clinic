<?php include 'header.php'; ?>
    <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper  w-auto ">
    <img class="mobileimg mobimg" src="./assets/img/Appointment.jpg" class="img-fluid"  width="6000px" />
</div>

    <!--==============================
    Appointment Form Area 
    ==============================-->
    <section class="appointment-wrapper mb-5">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xl-12 mb-40 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                    <form action="appointment.php" class="form-wrap1 shadow-none mb-0" data-bg-color="#f3f6f7" method="post">
                        <div class="form-title-box bg-title" data-bg-src="assets/img/bg/bg-shape-9.jpg">
                            <div class="row justify-content-between align-items-center">
                                <div class="col">
                                    <h2 class="h4 mb-2 text-white">Book An Appointment</h2>
                                    <p class="mb-0 text-white-light">Please Call Us To Ensure</p>
                                </div>
                                <div class="col-auto d-none d-sm-block">
                                    <a href="tel:0088123456789" class="ripple-icon style2"><i class="fas fa-phone"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-box">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <select name="service" class="form-select style3">
                                        <option hidden disabled selected>Select Services</option>
                                        <option>Skincare Services</option>
                                        <option>Kidneycare services</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <select name="dr_name" class="form-select style3">
                                        <option hidden disabled selected>Choose Doctor</option>
                                        <option>Dr. Rao Sowmya Manasa</option>
                                        <option>Dr. Chelikani Yaswanth</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input name="name" type="text" class="form-control  style3" placeholder="Your Name">
                                    <i class="fal small fa-user"></i>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input name="email" type="email" class="form-control  style3" placeholder="Email Address">
                                    <i class="fal small fa-envelope"></i>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input name="phone" type="number" class="form-control  style3" placeholder="Your Phone">
                                    <i class="fal small fa-phone"></i>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input name="date_time" type="text" class="dateTime-pick form-control  style3" placeholder="Select Date & Time">
                                    <i class="fal small fa-calendar-alt"></i>
                                </div>
                                <div class="col-xl-12 text-center">
                                    <button type="submit" class="vs-btn style2">Make Appointment<i class="far fa-calendar-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

                <!-- <div class="col-xl-6">
                    <div class="vs-accordion accordion" id="vsaccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Uniquely optimize reliable models before wireless results ofessionally impact progressive core.
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p>Professionally impact distributed data via value-added experiences. Proacti incentivize 24/365 applications whereas turnkey total linkage. whiteboard multifunctional channels with interoperable value.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p>Professionally impact distributed data via value-added experiences. Proacti incentivize 24/365 applications whereas turnkey total linkage. whiteboard multifunctional channels with interoperable value.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    From its medieval origins to the digital era, learn everything there is to know about the ubiquitous
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p>Professionally impact distributed data via value-added experiences. Proacti incentivize 24/365 applications whereas turnkey total linkage. whiteboard multifunctional channels with interoperable value.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Lorem ipsum began as scrambled, nonsensical Latin derived from Cicero's 1st-century BC text De Finibus
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p>Professionally impact distributed data via value-added experiences. Proacti incentivize 24/365 applications whereas turnkey total linkage. whiteboard multifunctional channels with interoperable value.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Some claim lorem ipsum threatens to promote design over content, while others defend its value process
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#vsaccordion">
                                <div class="accordion-body">
                                    <p>Professionally impact distributed data via value-added experiences. Proacti incentivize 24/365 applications whereas turnkey total linkage. whiteboard multifunctional channels with interoperable value.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="col-lg-6">
            <div class="contact-information mb-30">
                <h2 class="mt-n2">We are here for help you! Arrange a meeting.</h2>
                <div class="row">
                    <div class="col-xxl-10">
                        <p>We're here to assist you on your journey to optimal health. Feel free to get in touch with us using the contact information below:
                        </p>
                    </div>
                </div>
                <h3 class="h4 pt-2 mb-10">Opening Hours</h3>
                <table class="contact-info-table">
                    <tr>
                        <td>Mon - Fri:</td>
                        <td>8.00 am - 8.00 pm</td>
                    </tr>
                    <tr>
                        <td>Saturday:</td>
                        <td>9.00 am - 6.00 pm</td>
                    </tr>
                    <tr>
                        <td>Sunday:</td>
                        <td>9.00 am - 6.00 pm</td>
                    </tr>
                </table>
                <h4 class="pt-2 mb-10">Address</h4>
                <p class="fs-md"><i class="far fa-map-marker-alt me-2"></i>22-2-7 Mathrusri complex, Raja Rammohan Roy street, Kakinada, 533001(Beside MRO office)</p>
                <h4 class="pt-2 mb-2">Phone</h4>
                <h4 class="h3 font-theme2 mb-0"><a href="tel:880369525423"><i class="far fa-phone-alt me-2"></i>6301931396</a></h4>
            </div>
        </div>
    </div>

    </section> -->
    <!--==============================
			Footer Area
	==============================-->
    <!-- <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/bg-shape-4.png">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-4 col-md-auto text-center text-sm-start">
                        <div class="footer1-logo bg-white">
                            <a href="index.php"><img src="assets/img/SRI HARI LOGO.jpg" alt="Logo" style="border-radius:50%" height="120"  width="200"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="address-line">
                            <i class="far fa-map-marker-alt text-theme fs-md"></i>
                            <a href="#" class="text-reset text-decoration-none fs-md">22-2-7 Matrusri complex, Raja Rammohan Roy street, Kakinada, 533001(Beside MRO office)</a>
                        </div>
                        <div class="address-line">
                            <i class="far fa-envelope text-theme fs-md"></i>
                            <a href="#" class="text-reset text-decoration-none fs-md">srihariskinclinic@gmail.com</a>
                        </div>
                        <div class="address-line">
                            <i class="far fa-phone text-theme fs-md"></i>
                            <a href="#" class="text-reset text-decoration-none fs-md">90123456789</a>
                        </div>
                    </div>
                    <div class=" col-sm-4 col-md-auto pt-20 pt-sm-0 pb-20 pb-sm-0 text-center text-sm-end">
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright bg-theme">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto text-center text-md-end">
                        <p class="mb-0 text-white">Copyright <i class="fal fa-copyright"></i> 2023 <a class="text-white" href="index.php">Sri Hari Skin Clinic</a>. Designed by <a class="text-white" target="_blank" href="https://bhavicreations.com">Bhavi Creations</a>.</p>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <ul class="footer-bottom-menu">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> -->
    <!-- <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/bg-shape-4.png">
        <div class="container-fluid" style="background-color:rgb(11, 53, 87)">
            <div class="footer-top" style="background-color:rgb(197, 201, 204)">
                <div class="row align-items-center justify-content-between p-2" style="background-color:rgb(26, 143, 172)">
                    <div class="col-sm-4 col-xl-3 col-md-auto text-center text-sm-start">
                        <div class="footer1-logo">
                            <a href="index.php"><img src="assets/img/SRI HARI LOGO.jpg" alt="Logo" style="border-radius:50%" height="120"  width="200"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xl-6">
                        <div class="address-line" >
                            <i class="far fa-map-marker-alt text-theme fs-md"></i>
                            <a href="#" class="text-reset text-decoration-none fs-md">22-2-7 Matrusri complex, Raja Rammohan Roy street, Kakinada, 533001(Beside MRO office)</a>
                        </div>
                        <div class="address-line">
                            <i class="far fa-envelope text-theme fs-md"></i>
                            <a href="#" class="text-reset text-decoration-none fs-md">srihariskinclinic@gmail.com</a>
                        </div>
                        <div class="address-line">
                            <i class="far fa-phone text-theme fs-md"></i>
                            <a href="#" class="text-reset text-decoration-none fs-md">90123456789</a>
                        </div>
                    </div>
                    <div class=" col-sm-4 col-xl-3 col-md-auto pt-20 pt-sm-0 pb-20 pb-sm-0 text-center text-sm-end">
                        <div class="footer-social">
                            <a href="#" style="color:white"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" style="color:white"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" style="color:white"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright bg-theme">
            <div class="container">
                <div class="row align-items-center justify-content-between" >
                    <div class="col-8 text-center text-md-end">
                        <p class="mb-0 text-white ">Copyright <i class="fal fa-copyright"></i> 2023 <a class="text-white" href="index.php">Sri Hari Skin Clinic</a>. Designed by <a class="text-white" target="_blank" href="https://bhavicreations.com">Bhavi Creations</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 -->
<?php include 'footer.php'; ?>