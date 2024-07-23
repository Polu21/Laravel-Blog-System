<x-guest-layout>
   <main class="main-section">
    <section class="slider-wrap common-padd">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="banner-content">
              <h1>We’re evolving as quickly as technology itself.</h1>
              <p>Intel Inhouse marketing serves as a modern cornerstone for both the conservative and <br> forward
                thinking business.</p>
              <div class="banner-btn">
                <a href="" class="btn">Get Started</a>
                <a href="" class="btn solid-color">Stay Connected</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="banner-image">
              <img src="{{ asset('assets/frontend/images/home-banner.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="lead-generation common-padd-small">
      <div class="container">
        <div class="common-title text-center">
          <h2>The 3 Pillars Of Our Lead Generation</h2>
          <p>Having a technical foundation to build upon is critical for our partners success</p>
        </div>
        <div class="row">
            @foreach ( $blog as $blogs )
          <div class="col-lg-4 col-md-6">
            <div class="leader-generation-card-wrapper">
              <div class="lead-wrap">
                <div class="lead-icon">
                   @if ($blogs->feature_image)
                        <img src="{{ asset('upload/featureImages/' . $blogs->feature_image) }}"alt=""/>
                    @endif
                </div>
                <div class="lead-content">
                  <h3>{{ $blogs->title }}</h3>
                  <p>{{ $blogs->description }}</p>
                  {{-- <p>We work alongside existing sales & marketing teams to power growth and deliver measurable results.
                  </p> --}}
                  <div class="more-btn">
                    <a href="{{ route("blog.show", ["id" => $blogs->id]) }}" class="btn">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section class="services-section">
      <!-- <div class="bg-banner">
        <img src="images/generation-bg.svg" alt="">
      </div> -->
      {{-- <div class="container">
        <ul>
          <li>
            <div class="service-wrap text-center">
              <div class="service-icon">
                <img src="images/mailbox.svg" alt="">
              </div>
              <div class="service-content">
                <h3>Ping Post <br> & Direct Post</h3>
              </div>
            </div>
          </li>
          <li>
            <div class="service-wrap text-center">
              <div class="service-icon">
                <img src="images/report.svg" alt="">
              </div>
              <div class="service-content">
                <h3>Compliance <br> & TCPA</h3>
              </div>
            </div>
          </li>
          <li>
            <div class="service-wrap text-center">
              <div class="service-icon">
                <img src="images/filter.svg" alt="">
              </div>
              <div class="service-content">
                <h3>Smart Filtering <br> & Validation</h3>
              </div>
            </div>
          </li>
          <li>
            <div class="service-wrap text-center">
              <div class="service-icon">
                <img src="images/analytics.svg" alt="">
              </div>
              <div class="service-content">
                <h3>Analytics <br> & Reporting</h3>
              </div>
            </div>
          </li>
          <li>
            <div class="service-wrap text-center">
              <div class="service-icon">
                <img src="images/team-leader.svg" alt="">
              </div>
              <div class="service-content">
                <h3>Lead <br> Exclusivity</h3>
              </div>
            </div>
          </li>
          <li>
            <div class="service-wrap text-center">
              <div class="service-icon">
                <img src="images/clock.svg" alt="">
              </div>
              <div class="service-content">
                <h3>Real-Time <br> Generation</h3>
              </div>
            </div>
          </li>
          <li>
            <div class="service-wrap text-center">
              <div class="service-icon">
                <img src="images/fraud.svg" alt="">
              </div>
              <div class="service-content">
                <h3>Fraud <br> Prevention</h3>
              </div>
            </div>
          </li>
        </ul>
      </div> --}}
    </section>
  </main>
</x-guest-layout>
