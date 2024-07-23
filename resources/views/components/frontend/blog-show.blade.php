<x-guest-layout>
<section class="main-blogs common-padd">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-main-img">
              <img src="{{ asset('upload/featureImages/' . $blog->feature_image) }}" alt="" width="500" height="500" >
            </div>
            <div class="blog-tag-wrap">
              <div class="blog-wrap">
                <a href="#">COMPLIANCE</a>
              </div>
              <p>by Jenny Thai on {{ $blog->created_at }}</p>
            </div>
            <div class="blog-content">
              <h2>{{ $blog->title }}</h2>
              <p>{{ $blog->description }}</p>
              <ul class="copyrht-menu">
                <p>Share:</p>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-guest-layout>
