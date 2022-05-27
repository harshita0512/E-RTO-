<?include('configuration.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=LPtXO7qI-CjdiM1izevIftS8T3xftJMw_b0wNpVAmjHRxbEfg5RD8IkVnnKKGhTpc6I-aZWuhz3Vr7710PMe1Ci2Rv6XxIpd4paiJIg4ONVNIaCDDHdcGAILTF4mGweN-CtGzzJ3Zo_jT9Rgy6XQfB-KLNBWrUxWaZR3dsCl1Tf56AFgL3ar_VTvN_WmMVoxl-vOhSj8LDYpVzCb3PPYvSazjfYvN38s07x7_-ARaXkVhXnuyaap0AjBHB_NAB218zLyuOw3M_t23G9ozYmpR2wjHEEZLTofRRg-xDn82iGcv9yrS7ClrLXPSgARJrNxx_ajFdk1f9CJzKBV1co4wXv0MJ46voerO02JPwHDhVoySXWhTMEu9h2DzRFyJanvYYNxVjY9UnlY1iuj74n_fJJmvr5aO9LlvHEwkReuLntjY6IO3DNUoWpQLarBlePVjJrlRrLbFVytWgqBR73mNgLnz6P89VtdmXOjbLyCQPe2G8rAnst_m3tw5xdYB33GOsqQHLGAy5SSFpZHFrLSILSl2iwqSpD-1x7mgP-pSTlOXXutW1noRIsPNLwEdT_v8gFHX7xGBoNS_hM49-CmMVX78iHZVPexw7Mi_2qf_4dDrNZexpx8aZ7KibfoZtF6dNo8EIlf2jVn4c0wUHtE4GuMGh2HKzytZ1PSPqiSHixw55mqq7KEMCHs-beE-8_IoYFV-Up1aKM9CqAVk-H4jDg7swbNLdYUiI5OWMbRa8GfbJl8dTkpWV6vctxQqfhC8OMi7bpL9RwS53Vyk9-j3Hkan2EF2yv2TnmSQb85kbvHJXiQ9rImgZE1VoqR2eudp0XozsPTVWFVJ-Ge4ZoDZaGT-3w2gBPFyruP_-yLj5r1yIxfDZktmVNZOhbq24o_zQ24e1ZudZgBkQsrPka0yGsmwY51pVfCKj17d8MiaJmkvRTzQBj_RDLSpfzfKoI65pwCLWonXfoaNMVu_dRKBRBz1QqqwZasSS_FiYDi-Lhzw7QFeaSww_PgwDquDUgoopDfRjn957rjvO2XjXr17VqSTSXayjt9D-ADKS0qygn2spW8xAk1_CCquEFdtfIt6dIZcYDpAW8dhPCSijQ1yboCvi3w8lQEBUqTLhrsyPMUxqJB-_jDp2xUIVcKOnfUHh_U2uIoIMQHpMvB8OXmroOUq-AWMsBjcmOiyn0eAyCd1hq2nrr389mCiAxWsRkZLzBxuUSSKwXxlXZPFNXjwFnjDB5v23o5J5WfZFiqUNiulFwFh6oU_e_SvsqO8ga9fTWBAfdNqE5kChWaaBrbuvnnWO13RJx8maeonUpuUqE" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9kb2MtMGctNmMtZG9jcy5nb29nbGV1c2VyY29udGVudC5jb20vZG9jcy9zZWN1cmVzYy9nbmJzNHAxb3RmdHE3Z3U4cGV2MWI2aWdscWVxamVsYy9iZDdlMG8yczZqMGdva3ZjdW9sZ3RjbzNxbnM2c2lkdC8xNjUwMDMyNzAwMDAwLzA0ODM2MTQwOTQ1MDIxMTA3MzUyLzA4NDE3MDI4OTczMzIzMzY5OTg2LzFPVlZjVEFiUlV6WXh5Q2pwTlZTUWlmV1VEWWlFS1hmYz9lPWRvd25sb2FkJmF4PUFDeEVBc2IxUlhCaXZ0Q1hDTThQNmVaY2JJeExOWE9ZZlU3NENKVno5OXViTHBNUGFPczBjOGRKVTVSdnlnWXBuZUZINVJvYXRfZnlfNlI5bDFqSExSeF81NTRWYmh4RVZiMW9GUXA4YnRDQlVSaVFSMklkMm5NTGxYTHM0UkJxcDRLcDhqa1hVR2xQMjRNWnpobkk3R3VBOGhOOUtkaFktcWlVSXhjZXliMUZMTkRhQ1FjZ08yVldCR1Q0M3FIWmtmbTg3eVZnNU5GR3VuWFhDQWs0Y2FXSnlqd1EyZGZRc0Y4U19JTjNkemRvcVFKNTRLanBMRzJtV2lUX1h1MkhoNm1iZHNTSU56MmNpUVJlakhBd1hVeFZGUXJTZF9WMzFGcDcyaHdaMlAyUDE3VHUweXZJZjBvM1NOMExFd014c043V3RpR1hFb3hSdTdHcmtrczBLN3NDZ1FfVkkwWm9VZVZxWmVkM2d5eXA2TmtPV3BmczVLNFVZUFBxNUVSODZjWGZtQkhNaVcyVGlCcEZXNmVlRVVZOUtOVi13QTc2eFBLMnJmZGxNbjIySkdvQ0wtYkRMN3llT2RLbHAxX29DanBRbDNMdl8wZ19lYW9lMmY1UG81ZHMwVXByVzY1d2RpMC0zaWtaTEo4ZVZsQWtLcDMzaUxQZ2dSZlJtNmJVVnZzeGI4eTZXeWl4MTJnTlB4ZV9CNHdicGdIanduZ1dLR09xWmVhdnBVQXBrajcweWVJeURTLWlsZzFnenVXNGlRYVN2N2V6LU1IT2pMMFk4NnJqVHRwZUs1eExPN2UzbnM3WC1veDBFMUZuSkxWS1ZYS3JZMTkzQVQyY1FIOFNPWm1aNjlONmxRcVkwZ0tNcEQwaWdnc25Na0xfYjJ5Tk5tM1V4Ym1FSWQzaDQtSHM3bzM0dXhaNTJhb2gydFFFY0JfamRqdUlPVHd2OXB3JmF1dGh1c2VyPTA"/></head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        
             <h1><a href="index.html">Welcome</a></h1>
      
        
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          
          <li class="dropdown"> <a  href="Information.html"><span> Information Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#">About Licensing<i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="LL.html">Learner's License</a></li>
                <li><a href="content.html">Premanent License</a></li>
                <li><a href="content.html">Duplicate License</a></li>
                <li><a href="tutorial.html">LL Question bank</a></li>
              </ul>
              </li>
              <li class="dropdown"><a href="#">About Registration<i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="Ulogin.php">Registration</a></li>
                  <li><a href="">admin Registration</a></li>
                  
                </ul>
              </li>
              <li><a href="#">Act,rules and polices</a></li>
              <li><a href="#">Other Services</a></li>
            </ul>
          </li>
         
          <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="Ulogin.php">Login/Register</a></li>

             
              <li><a href="Adminlogin.html">Admin Login</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End #header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">

    </div>
  </section>
  <!-- #hero -->

  <main id="main">

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/services/LL4.png"></i></div>
            <h4 class="title"><a href="Lregister.html">Learners License</a></h4>
            <p class="description">Get learners license within minutes by a quiz</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/services/DL.png"></div>
            <h4 class="title"><a href="license.html">Driving License</a></h4>
            <p class="description">Get Drivers License appointment now!</p>
          </div>
          
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/services/testingpass.png"></div>
            <h4 class="title"><a href="tutorial.html">Tutorial for LL Test</a></h4>
            <p class="description">Tutorial videos and pdfs for LL test</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/services/print.png"></div>
            <h4 class="title"><a href="">Print Application Forms</a></h4>
            <p class="description">Download all application forms</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/services/renewal.png"></div>
            <h4 class="title"><a href="dlicense.html">Apply for duplicate DL</a></h4>
            <p class="description">Apply for Duplicate driving licence </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><img src="assets/img/services/upload.png"></div>
            <h4 class="title"><a href="">Document Verification</a></h4>
            <p class="description">Verify your documnets!</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h3></h3>
            <p class="fst-italic">
              Our E-rto website developed for road transportation to facilitate the users to apply for various
                licenses and registrations. E-RTO provides the facility of applying license
                online,It ensures data integrity and security and requires less man
                power. It also has online Quiz test where user can practice for exams with rules,
                videos related to driving process.This system consists of two login
                one user and another admin. It can make the daily activities to run efficiently
                and provide fast response to retrieve and store the information.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> Our Vision</li>
             <p> To improve the quality of service delivery to the citizen and the quality of work environment of the RTOs.</p>
              <li><i class="bi bi-check2-circle"></i>Our Mission</li>
              <p>To automate all   Driving License related activities in transport authorities of country with 
                introduction of smart card technology to handle issues</p>
              
            </ul>
            <p>
              With steady steps in direction of achievement of its Vision, Mission and objectives , the ministry is progressing towards provision of improved service access to citizens with quality and efficiency in service delivery, transparency in the system and reduced workload for RTO staff.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->


    <!-- ======= Call To Action Section =======--> 
    <section class="call-to-action">
      <div class="container">

        <div class="text-center">
          <h3>We Know Your time is valuable</h3>
          <p> </p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section>
    <!--End Call To Action Section -->


   <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">I Am 16 Years Old, Which Class Of Vehicle I Can Apply <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                The age criteria are as follows:
                <ol>
                  1. 16 years of age for MCWOG vehicle class (Private Vehicle)
                  <br>
                  2. 18 years of age for LMV (Light Motor Vehicle) & MCWG vehicle class (Private Vehicle)
                  <br>
                  3. 20 years of age for Transport Vehicle
                  <br>
                  4. 18 years of age for Conductor License
                  </ol>
                </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">What Is The Meaning Of Online Test For Learner's License? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                The test which is taken up by the Transport Department to issue the learners license via online mode.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Can I Give Exam From Home Or I Will Have To Go To The Concerned RTO? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                You need to apply for learners licence online and pass the quiz the ll will be genrated directly.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can I Apply For Driving License After The Learner License Has Expired? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                No. Apply for Driving License before your Learner License expires and complete the driving test.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Can Color Blind Applicant Apply For The Driving/Learner's License?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Yes, you need to get the medical certificate from the hospital.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">I want to apply for a Learner's License test. Is there any test involved? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                I want to apply for a Learner's License test. Is there any test involved?
                Yes, you have to pass the online test (test) to get Learner's License. You can practice (sample set of questions) here:-
                <br>
                1. Visit Tutorials for LL Test
                <br>
                2. Select "Sample Question for Learners' License Test" from "Learner License" menu
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Feel free to contact us</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="contact-about">
              <h3>E-RTO</h3>
              <p>Feel free to conatct us,We welcome any feedback. With steady steps in direction of achievement of its Vision, Mission and objectives , the ministry is progressing towards provision of improved service access to citizens with quality and efficiency in service delivery, transparency in the system and reduced workload for RTO staff.
              </p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>National Hwy 8 Dumad Service Rd, near Golden Quartet, Darjeepura,<br>Vadodara, Gujarat 390006</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>ertovadodara.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>0265-888 8857</p>
              </div>
          </div>
          </div>

          <div class="col-lg-5 col-md-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

    <!-- ======= Map Section ======= -->
    <section class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d71144.0595972906!2d73.16873706467732!3d22.32460347503997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcfb2561c54c9%3A0x3133de2a76782ce5!2sRTO%20Vadodara!5e0!3m2!1sen!2sin!4v1649753984592!5m2!1sen!2sin" frameborder="0" style="border:0;" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <strong><span>Thank you for visiting us</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/ -->
        <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>