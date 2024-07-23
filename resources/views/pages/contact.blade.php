<x-guest-layout>
<main class="main-section">
    <!-- banner section -->
    <section class="slider-wrap common-padd">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="banner-content">
              <h1>Contact Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br> ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="banner-image">
              <img src="{{ asset('assets/frontend/images/contact-us.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner section -->
    <section class="lead-generation common-padd-btm">
        <div class="container">
          <div class="common-title text-center">
            <h2>Contact Details</h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="leader-generation-card-wrapper">
                <div class="lead-wrap">
                  <div class="lead-icon">
                    <img src="{{ asset('assets/frontend/images/location.svg') }}" alt="">
                  </div>
                  <div class="lead-content">
                    <h2>Location</h2>
                    <h3>16192 Coastal Hwy Lewes, Delaware 19958, US</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="leader-generation-card-wrapper">
                <div class="lead-wrap">
                  <div class="lead-icon">
                    <img src="{{ asset('assets/frontend/images/email.svg') }}" alt="">
                  </div>
                  <div class="lead-content">
                    <h2>Email</h2>
                    <a href="mailto:info@intelhousemarketing.com">
                        <h3>info@intelhousemarketing.com</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="leader-generation-card-wrapper">
                <div class="lead-wrap">
                  <div class="lead-icon">
                    <img src="{{ asset('assets/frontend/images/office-building.svg') }}" alt="">
                  </div>
                  <div class="lead-content">
                    <h2>Office</h2>
                    <a href="tel:info@intelhousemarketing.com">
                        <h3>+1 213 438 9667</h3>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="work-with-us-section common-padd-small">
        <div class="container">
            <div class="common-title text-center">
                <h2>Work With Us</h2>
                <p>Ready to start working with us? We look forward to hearing from you. Whether you’re a local business <br> or a national giant, whatever your size and budget, we want to hear from you. Please fill out the short <br> form below.</p>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <form method="POST" action="/contact/post">
                    {{ csrf_field() }}
                        <div class="row">
                          <div class="col-lg-6 col-md-6 mb-4">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" name="name" value="" class="form-control" id="name" required>
                          </div>
                          <div class="col-lg-6 col-md-6 mb-4">
                            <label for="company" class="form-label">Company*</label>
                            <input type="text" name="company" class="form-control" id="company" required>
                          </div>
                          <div class="col-lg-6 col-md-6 mb-4">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                          </div>
                          <div class="col-lg-6 col-md-6 mb-4">
                            <label for="Phone" class="form-label">Phone*</label>
                            <input type="phone" name="phone_no" class="form-control" id="Phone" required>
                          </div>
                          <div class="col-lg-6 col-md-6 mb-4">
                            <label for="Website*" class="form-label">Website*</label>
                            <input type="text" name="website" class="form-control" id="Website" required>
                          </div>
                          <div class="col-lg-12 mb-5">
                            <label for="Message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="Message" rows="3" required></textarea>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-btn text-center">
                              <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </section>
    <section class="map-section common-padd-btm">
        <div class="container">
            <div class="row">
                <div class="map-wrapper">
                    <img src="{{ asset('assets/frontend/images/map.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
  </main>
</x-guest-layout>
