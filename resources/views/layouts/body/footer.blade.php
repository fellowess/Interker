<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Interker-Wein Kft</h3>
                    <p>
                        <br>
                        {{$contact_us->address}}<br>
                        Hungary <br><br>
                        <strong>Phone:</strong> {{$contact_us->phone}} <br>
                        <strong>Email:</strong> {{$contact_us->email}} <br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Interker-Wein Kft</span></strong>. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://www.facebook.com/pages/category/Shopping---Retail/Interker-Wein-Kft-Eger-108768950769264/" title="Facebook" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://aranyoldalak.hu/interker-wein-kft13.htm" title="Aranyoldalak" target="_blank" class="arany_oldalak"><i class="icofont-address-book"></i></a>
            <a href="https://goo.gl/maps/JTWdQS4ADHrws9ji7" title="{{__('home.google_business')}}" target="_blank" class="google_map"><i class="icofont-ui-map"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->
