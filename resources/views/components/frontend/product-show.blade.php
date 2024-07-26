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
                @foreach ( $products as $product )
                <div class="product-card">
                  <div class="badge">Hot</div>
                  <div class="product-tumb">
                    <img src="{{ asset('upload/productImages/' . $product->feature_image) }}" alt="">
                  </div>
                  <div class="product-details">
                    <span class="product-catagory">Women,bag</span>
                    <h4><a href="{{ route("product.details", ["id" => $product->id]) }}">{{ $product->title }}</a></h4>
                    <p>{{ $product->description }}</p>
                    <div class="product-bottom-details">
                      <div class="product-price"><small>₹{{ $product->price }}</small>₹{{ $product->compare_price }}</div>
                      <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                      </div>
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
