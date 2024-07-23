<x-guest-layout>
 <main class="main-section">
    <section class="main-blogs common-padd">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-content">
              {{-- <h2>Moving Ahead With Innovation in Anti-Money Compliance</h2>
              <p>Financial firms have without question faced more pressure lately – from every direction – to do better
                at anti-money laundering compliance.</p>
              <a href="">Read More >></a> --}}
              <div class="row">
                @foreach ( $blog as $blogs )
                <div class="col-md-4">
                  <div class="blogs">
                    <div class="blog-main-img">
                        @if ($blogs->feature_image)
                            <img src="{{ asset('upload/featureImages/' . $blogs->feature_image) }}"alt="" width="300" height="300" />
                        @endif
                    </div>
                    <div class="blog-inner-content">
                      <div class="blog-wrap">
                        <a href="{{ route("blog.show", ["id" => $blogs->id]) }}">{{ $blogs->title }}</a>
                      </div>
                      <h3>{{ $blogs->title }}</h3>
                      <p>{{ $blogs->description }}</p>
                      <p>{{ $blogs->created_at }}</p>
                      <a href="{{ route("blog.show", ["id" => $blogs->id]) }}">Read More >></a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          {{-- <div class="pagination-wrapper">
            <ul>
              <li><a href="" class="btn solid-color"> << Previous </a></li>
              <li><a href="" class="btn solid-color"> Next >> </a></li>
            </ul>
          </div> --}}
        </div>
      </div>
    </section>
  </main>
</x-guest-layout>
