 <!-- FOOTER -->
<section class="pt-3 mt-auto text-center">
 <footer class="themcolor">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="mb-4">
                        <h1 class="text-white mb-0" style="font-weight: 900;">Probitmine</h1>
                    </div>
                    <span class="text-secondary fw-bold">Probitmine gives you latest news and information
                        about trending cryptocurrencies.</span>
                </div>
                <div class="col-lg-4 col-sm-12 mt-3">
                    <ul class="">
                        <h5 class="">SERVICES</h5>
                        <li class="text-center">
                            <a class="text-secondary text-center" href="about-us.php">About Us</a>
                        </li>

                        <!-- <li class="text-center" >
                            <a class="text-secondary" href="contactus.php">Contact Us</a>
                        </li> -->

                        <li class="text-center">
                            <a class="text-secondary" href="service.php">Services</a>
                        </li>
                  
                        <li class="text-center">
                            <a class="text-secondary" href="terms-condition.php">Terms &amp; Conditions</a>
                        </li>

                        <li class="text-center">
                            <a class="text-secondary" href="privacy-policy.php">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-lg-3 col-sm-12 mt-3">
                    <ul>
                        <h5 class="text-start">PAGE LINK</h5>
                        <li>
                            <a class="text-secondary" href="index.php">Home</a>
                        </li>

                      

                        <li>
                            <a class="text-secondary" href="news.php">News</a>
                        </li>

                        <li>
                            <a class="text-secondary" href="crypto_blogs.php">Crypto Blogs</a>
                        </li>
                    </ul>
                </div> -->

                <div class="col-lg-4 col-sm-12 mt-3">
                    <ul>
                        <h5 class="text-start">CONTACT & SUPPORT</h5>

                        <li>
                            <a class="text-secondary" href="index.php"><i
                                    class="fa-thin fa-location-dot me-2"></i>Lorem Ipsum 132 xyz Lorem Ipsum
                            </a>
                            <!-- <i class="fa-solid fa-location-dot"></i> -->
                            <!-- <i class="fa-thin fa-location-dot"></i> -->
                        </li>

                        <li>
                            <a class="text-secondary" href="index.php"><i
                                    class="fa-regular fa-envelope me-2"></i>jianl@gmail.com </a>
                        </li>

                        <li>
                            <a class="text-secondary" href="news.php"><i
                                    class="fa-solid fa-phone me-2"></i>+91-9879867656</a>
                        </li>

                    </ul>
                </div>


            </div>
        </div>

        <div class="container">
            <div class="container border-bottom border-secondary"></div>
            <div class="row py-3 align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <p class="text-secondary mb-0">Copyright &copy; 2022 Probitmine
                    </p>
                </div>
                <div class="col-lg-6 social-menu align-items-center">
                    <ul class="mb-0 float-end">
                        <li><a href="" target="_blank"><i class="fa-brands fa-facebook-f abc"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa-brands fa-twitter abc"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa-brands fa-linkedin-in abc"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa-brands fa-instagram abc"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa-brands fa-whatsapp abc"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</section>
    <!-- END FOOTER -->
    <script src="./assets/js/bootstrap.bundle.js"></script>
  <script src="./assets/js/fontawesomejs/all.js"></script>
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/owlcarouseljs/owl.carousel.js"></script>
  <script src="./assets/js/owlcarouseljs/owl.carousel.min.js"></script>

    <!-- INSTA SECTION -->
    <script>
        $('.index').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            navText: [""],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

<script>
    $('.resentblog').owlCarousel({
      loop: true,
      nav: true,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  </script>

<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
    .forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
        }

        form.classList.add('was-validated')
    }, false)
    })
})()

</script>

<script>
// $(document).ready(function() {

    // $( ".contactform" ).submit(function( event ) {
    //     alert( "Handler for .submit() called." );
    //     event.preventDefault();
    // });

    // $(document).on('#contact', 'submit', function( event ) {
    //     alert();
    //     event.preventDefault();
    //     $data = $("form").serialize();
    //     console.log($data);
    // });

    // $data = $("form").serialize();
    

    // $.ajax({
    //     url: '<?php echo BASE_URL; ?>/mail.php',
    //     method: "post",
    //     data: {
    //         name: ele.parents("tr").attr("data-id"),
    //         email: ele.parents("tr").find(".quantity").val()
    //         subject: ele.parents("tr").find(".quantity").val()
    //         message: ele.parents("tr").find(".quantity").val()
    //     },
    //     beforeSend: function() {
    //     },
    //     success: function(response) {
    //         window.location.reload();
    //     }
    // });

// });

</script>
</body>
    </html>