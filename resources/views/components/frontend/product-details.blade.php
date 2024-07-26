<x-guest-layout>
    <main class="main-section">
    <section class="main-blogs common-padd">
    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="{{ asset('upload/productImages/' . $product->feature_image) }}" alt="bag image">
                        {{-- <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt="shoe image">
                        <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt="shoe image">
                        <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt="shoe image"> --}}
                    </div>
                </div>
                {{-- <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_1.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_2.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg" alt="shoe image">
                        </a>
                    </div>
                </div> --}}
            </div>
            <!-- card right -->
            <div class="product-content">
                <h2 class="product-title">{{ $product->title }}</h2>
                {{-- <a href="#" class="product-link">visit nike store</a> --}}
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>4.7(21)</span>
                </div>

                <div class="product-price">
                    <p class="last-price">Old Price: <span>₹{{ $product->price }}</span></p>
                    <p class="new-price">New Price: <span>₹{{ $product->compare_price }} (30%)</span></p>
                </div>

                <div class="product-detail">
                    <h2>about this item: </h2>
                    <p>{{ $product->description }}</p>
                    <ul>
                    {{-- <li>Color: <span>Black</span></li> --}}
                    <li>Available: <span>{{ $product->stock }}</span></li>
                    <li>Category: <span>Bags</span></li>
                    <li>Shipping Area: <span>All over the world</span></li>
                    <li>Shipping Fee: <span>Free</span></li>
                    </ul>
                </div>

                <div class="purchase-info">
                    <input type="number" min="0" value="1">
                    <button type="button" class="btn">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                    <button type="button" class="btn">Buy Now</button>
                </div>

                <div class="social-links">
                    <p>Share At: </p>
                    <a href="#">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                    <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                    <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                    <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
</main>
</x-guest-layout>
