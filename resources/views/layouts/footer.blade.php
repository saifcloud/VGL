  <!-- Footer Area Start -->
  <footer class="footer anim-object2">
    <div class="footer-main-area" data-background="{{ url('public/images/footer-bg.png')}}">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="widget footer-widget">
              <img src="images/footer-logo.png" alt="" class="mrb-20">
              <address class="mrb-25">
                <p class="text-light-gray">Verks Global Logistics (VGL) is a 3PL solution provider that caters to supply chain management solutions including international and domestic transportation, warehousing, customs brokerage, freight forwarding and trade consulting services.</p>
              </address>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="row">
              <div class="col-12">
                <div class="widget footer-widget">
                  <h5 class="widget-title text-white mrb-30">Quick Links</h5>
                  <div class="row">
                    <div class="col-6">
                      <ul class="footer-widget-list">
                        <li><a href="{{ url('about')}}">About</a></li>
                        <li><a href="{{ url('career')}}">Career</a></li>
                        <!-- <li><a href="service-road-freight.html">Contact Detail</a></li> -->
                        <li><a href="{{ url('gallery')}}">Project Gallery</a></li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <ul class="footer-widget-list">
                        <li><a href="{{ url('contact')}}">Contact</a></li>
                      <!--   <li><a href=#>Downloads</a></li>
                        <li><a href="#">Map Location</a></li> -->
                      </ul>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="widget footer-widget">
              <h5 class="widget-title text-white mrb-30">Newsletter</h5>
              <address class="mrb-25">
                <div class="mrb-10"><a href="javascript:void(0)" class="text-light-gray"><i class="fas fa-phone-alt mrr-10"></i>{{ isset($contact_1->field_value) ? $contact_1->field_value:'' }}</a></div>
                <div class="mrb-10"><a href="javascript:void(0)" class="text-light-gray"><i class="fas fa-fax mrr-10"></i>{{ isset($contact_2->field_value) ? $contact_2->field_value:'' }}</a></div>
                <div class="mrb-0"><a href="javascript:void(0)" class="text-light-gray"><i class="fas fa-envelope mrr-10"></i>{{ isset($website_email->field_value) ? $website_email->field_value:'' }}</a></div>
              </address>
              <ul class="social-list">
                <li><a href="{{ isset($facebook->field_value) ? $facebook->field_value:'' }}"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{ isset($twitter->field_value) ? $twitter->field_value:'' }}"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ isset($linkdin->field_value) ? $linkdin->field_value:'' }}"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="{{ isset($google->field_value) ? $google->field_value:'' }}"><i class="fab fa-google-plus-g"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom-area">
      <div class="container footer-border-top pdt-30 pdb-10">
        <div class="row">
          <div class="col-xl-12">
            <div class="text-center">
              <span class="text-light-gray">Copyright © 2021 by <a class="text-primary-color" target="_blank" href=""> Verks Global Logistics</a> | All rights reserved </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Area End -->
  <!-- BACK TO TOP SECTION -->
  <div class="back-to-top bg-primary-color">
    <i class="fab fa-angle-up"></i>
  </div>
  <!-- Integrated important scripts here -->
  <script src="{{ url('public/js/jquery.v1.12.4.min.js') }}"></script>
  <script src="{{ url('public/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('public/js/jquery-core-plugins.js') }}"></script>
  <script src="{{ url('public/js/main.js') }}"></script>
</body>
</html>