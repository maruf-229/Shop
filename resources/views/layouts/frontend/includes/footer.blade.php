<!-- Footer Start -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Get in Touch</h2>
                    <div class="contact-info">
                        @foreach($contact_infos as $contact_info)
                        <p><i class="fa fa-map-marker"></i>{{ $contact_info->address }}</p>
                        <p><i class="fa fa-envelope"></i>{{ $contact_info->email }}</p>
                        <p><i class="fa fa-phone"></i>{{ $contact_info->phone }}</p>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Follow Us</h2>
                    <div class="contact-info">
                        @foreach($social_links as $social_link)
                        <div class="social">
                            <a href="{{ $social_link->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $social_link->facebook }}"target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $social_link->linkedin }}"target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="{{ $social_link->instagram }}"target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $social_link->youtube }}"target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <li><a href="{{ route('frontend.privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('frontend.terms') }}">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Purchase Info</h2>
                    <ul>
                        <li><a href="#">Pyament Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row payment align-items-center">
            <div class="col-md-6">
                <div class="payment-method">
                    <h2>We Accept:</h2>
                    @foreach($payment_methods as $payment_method)
                    <img src="{{asset('img/'.$payment_method->image)}}" alt="Payment Method" />
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <h2>Secured By:</h2>
                    <img src="/img/godaddy.svg" alt="Payment Security" />
                    <img src="/img/norton.svg" alt="Payment Security" />
                    <img src="/img/ssl.svg" alt="Payment Security" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
            </div>

        </div>
    </div>
</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
