@include('home.header')
@include('home.navbar2')

<!-- Main Section-->
  <section class="mt-5 ">
      <!-- Page Content Goes Here -->

      <!-- Product Top-->
      <section class="container">

          <!-- Breadcrumbs-->
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Activities</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clothing</li>
              </ol>
          </nav>            <!-- /Breadcrumbs-->

          <div class="row g-5">

              <!-- Images Section-->
              <div class="col-12 col-lg-7">
                  <div class="row g-1">
                      <div class="swiper-container gallery-thumbs-vertical col-2 pb-4">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide bg-light bg-light h-auto">
                                <picture>
                                  <img class="img-fluid mx-auto d-table" src="{{asset($product->image)}}" >
                              </picture>
                            </div>
                            @foreach ($image as $rs)
                            <div class="swiper-slide bg-light bg-light h-auto">
                                <picture>
                                  <img class="img-fluid mx-auto d-table" src="{{asset($rs->image)}}" >
                              </picture>
                            </div>
                          @endforeach

                          </div>
                        </div>
                        <div class="swiper-container gallery-top-vertical col-10">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide bg-white h-auto">
                                  <picture>
                                    <img class="img-fluid  d-table mx-auto" src="{{asset($product->image)}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                                </picture>
                              </div>
                              @foreach ($image as $rs)
                              <div class="swiper-slide bg-white h-auto">
                                  <picture>
                                    <img class="img-fluid d-table mx-auto" src="{{asset($rs->image)}}" alt="Bootstrap 5 Template by Pixel Rocket" data-zoomable>
                                </picture>
                              </div>
                            @endforeach

                          </div>
                        </div>
                  </div>
              </div>
              <!-- /Images Section-->

              <!-- Product Info Section-->
              <div class="col-12 col-lg-5">
                  <div class="pb-3">

                      <!-- Product Name, Review, Brand, Price-->
                      <div class="d-flex justify-content-between align-items-center mb-2">
                          <p class="small fw-bolder text-uppercase tracking-wider text-muted mb-0 lh-1">Billabong</p>
                          <div class="d-flex justify-content-start align-items-center">
                              <!-- Review Stars Small-->
                              <div class="rating position-relative d-table">
                                  <div class="position-absolute stars" style="width: 80%">
                                      <i class="ri-star-fill text-dark mr-1"></i>
                                      <i class="ri-star-fill text-dark mr-1"></i>
                                      <i class="ri-star-fill text-dark mr-1"></i>
                                      <i class="ri-star-fill text-dark mr-1"></i>
                                      <i class="ri-star-fill text-dark mr-1"></i>
                                  </div>
                                  <div class="stars">
                                      <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                      <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                      <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                      <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                      <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                  </div>
                              </div>            <small class="text-muted d-inline-block ms-2 fs-bolder">(1288)</small>
                          </div>
                      </div>
                      <h1 class="mb-2 fs-2 fw-bold">{{$product->title}}</h1>
                      @if($product->discount_price!=null)
                      <div class="d-flex justify-content-start align-items-center">
                          <p class="lead fw-bolder m-0 fs-3 lh-1 text-danger me-2">${{$product->discount_price}}</p>
                          <s class="lh-1 me-2"><span class="fw-bolder m-0">${{$product->price}}</span></s>
                          <p class="lead fw-bolder m-0 fs-6 lh-1 text-success">Save $10.00</p>
                      </div>
                    @else
                      <p class="lead fw-bolder m-0 fs-3 lh-1  me-2">${{$product->price}}</p>
                    @endif
                      <!-- /Product Name, Review, Brand, Price-->

                      <!-- Product Views-->
                      <div class="d-flex justify-content-start mt-3">
                          <div class="alert bg-light rounded py-1 px-2 d-table m-0">
                              <div class="d-flex justify-content-start align-items-center">
                                  <i class="ri-fire-fill lh-1 text-orange"></i>
                                  <div class="ms-2">
                                      <small class="opacity-75 fw-bolder lh-1">167 views today</small>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- /Product Views-->

                      <!-- Product Options-->
                      <div class="border-top mt-4 mb-3">
                          <div class="product-option mb-4 mt-4">
                              <small class="text-uppercase d-block fw-bolder mb-2">
                                  Colour : <span class="selected-option fw-bold">Crimson Blue</span>
                              </small>
                              <div class="d-flex justify-content-start">
                                  <div class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom">
                                      <input type="radio" class="form-check-color-input" id="option-colour-1" name="option-colour"
                                          value="Dark Black">
                                      <label class="form-check-label" for="option-colour-1"></label>
                                  </div>
                                  <div
                                      class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-warning">
                                      <input type="radio" class="form-check-color-input" id="option-colour-2" name="option-colour"
                                          value="Sun Yellow">
                                      <label class="form-check-label" for="option-colour-2"></label>
                                  </div>
                                  <div
                                      class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-info">
                                      <input type="radio" class="form-check-color-input" id="option-colour-3" name="option-colour"
                                          value="Crimson Blue" checked>
                                      <label class="form-check-label" for="option-colour-3"></label>
                                  </div>
                                  <div
                                      class="form-group d-inline-block mr-1 mb-1 form-check-solid-bg-checkmark form-check-custom form-check-danger">
                                      <input type="radio" class="form-check-color-input" id="option-colour-4" name="option-colour"
                                          value="Cherry Red">
                                      <label class="form-check-label" for="option-colour-4"></label>
                                  </div>
                              </div>
                          </div>
                          <div class="product-option">
                              <small class="text-uppercase d-block fw-bolder mb-2">
                                  Size (UK) : <span class="selected-option fw-bold"></span>
                              </small>
                              <div class="form-group">
                                  <select name="selectSize" class="form-control" data-choices>
                                      <option value="">Please Select Size</option>
                                      <option value="Extra Small">XS</option>
                                      <option value="Medium">M</option>
                                      <option value="Large">L</option>
                                      <option value="Extra Large">XL</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <!-- /Product Options-->

                      <!-- Add To Cart-->
                      <form action="{{route('shopcart.store',['id'=>$product->id])}}" method="post">
                          @csrf
                          <div class="qty-input">
                          <span class="text-uppercase">QTY: </span>
                          <input name="quantity" class="input" type="number" value="1" max="{{$product->quantity}}" min="1">
                      </div>
                      <div class="d-flex justify-content-between mt-3">
                          <button onclick="sendAjaxRequest()" id="save" type="submit" class="btn btn-dark btn-dark-chunky flex-grow-1 me-2 text-white">Add To Cart</button>
                          <button class="btn btn-orange btn-orange-chunky"><i class="ri-heart-line"></i></button>
                      </div>
                      <!-- /Add To Cart-->
                      </form>

                      <!-- Socials-->
                      <div class="my-4">
                          <div class="d-flex justify-content-start align-items-center">
                              <p class="fw-bolder lh-1 mb-0 me-3">Share</p>
                              <ul class="list-unstyled p-0 m-0 d-flex justify-content-start lh-1 align-items-center mt-1">
                                  <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i class="ri-facebook-box-fill"></i></a></li>
                                  <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i class="ri-instagram-fill"></i></a></li>
                                  <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i class="ri-pinterest-fill"></i></a></li>
                                  <li class="me-2"><a class="text-decoration-none" href="#" role="button"><i class="ri-twitter-fill"></i></a></li>
                              </ul>
                          </div>    </div>
                      <!-- Socials-->

                      <!-- Special Offers-->
                      <div class="bg-light rounded py-2 px-3">
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex border-0 px-0 bg-transparent">
                                  <i class="ri-truck-line"></i>
                                  <span class="fs-6 ms-3">Standard delivery free for orders over $99. Next day delivery $9.99</span>
                              </li>
                          </ul>
                      </div>
                      <!-- /Special Offers-->

                  </div>                </div>
              <!-- / Product Info Section-->
          </div>
      </section>
      <!-- / Product Top-->

      <section>

          <!-- Product Tabs-->
          <div class="mt-7 pt-5 border-top">
              <div class="container">
                  <!-- Tab Nav-->
                  <ul class="nav justify-content-center nav-tabs nav-tabs-border mb-4" id="myTab" role="tablist">
                    <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                      <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0 active" id="details-tab" data-bs-toggle="tab" href="#details"
                        role="tab" aria-controls="details" aria-selected="true">The Details</a>
                    </li>
                    <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                      <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="reviews-tab" data-bs-toggle="tab" href="#reviews"
                        role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
                    </li>
                    <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                      <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="delivery-tab" data-bs-toggle="tab" href="#delivery"
                        role="tab" aria-controls="delivery" aria-selected="false">Delivery</a>
                    </li>
                    <li class="nav-item w-100 mb-2 mb-sm-0 w-sm-auto mx-sm-3" role="presentation">
                      <a class="nav-link fs-5 fw-bolder nav-link-underline mx-sm-3 px-0" id="returns-tab" data-bs-toggle="tab" href="#returns"
                        role="tab" aria-controls="returns" aria-selected="false">Returns</a>
                    </li>
                  </ul>
                  <!-- / Tab Nav-->

                  <!-- Tab Content-->
                  <div class="tab-content" id="myTabContent">

                    <!-- Tab Details Content-->
                    <div class="tab-pane fade show active py-5" id="details" role="tabpanel" aria-labelledby="details-tab">
                      <div class="col-12 col-lg-10 mx-auto">
                        <div class="row g-5">
                          <div class="col-12 col-md-6">
                            <p>Soft, stretchy - the most flattering product of the season! What could be easier? Beautifully soft and
                              light cotton-modal jersey, with the extra advantage of stretch, cut in an A-line - the universally
                              flattering shape for every body. We promise you, once you've tried these lovely products - you'll be
                              hooked..</p>
                          </div>
                          <div class="col-12 col-md-6">
                            <ul>
                              <li>Stretchy cotton-modal jersey stripe</li>
                              <li>Garment washed</li>
                              <li>Flat, covered elastic waistband</li>
                              <li>58% pima cotton/38% viscose </li>
                              <li>Modal/4% Lycra® elastane</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Tab Details Content-->

                    <!-- Review Tab Content-->
                    <div class="tab-pane fade py-5" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                      <!-- Customer Reviews-->
                      <section class="reviews">
                          <div class="col-lg-12 text-center pb-5">

                              <h2 class="fs-1 fw-bold d-flex align-items-center justify-content-center">4.88 <small
                                      class="text-muted fw-bolder ms-3 fw-bolder fs-6">(1288 reviews)</small></h2>
                              <div class="d-flex justify-content-center">
                                  <!-- Review Stars Medium-->
                                  <div class="rating position-relative d-table">
                                      <div class="position-absolute stars" style="width: 80%">
                                          <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                          <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                          <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                          <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                          <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                      </div>
                                      <div class="stars">
                                          <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                          <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                          <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                          <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                          <i class="ri-star-fill ri-2x mr-1 text-muted"></i>
                                      </div>
                                  </div>        </div>


                              <div class="bg-light rounded py-3 px-4 mt-3 col-12 col-md-6 col-lg-5 mx-auto">
                                  <ul class="list-group list-group-flush">
                                      <li
                                          class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                                          <span class="fw-bolder">Fit</span>
                                          <!-- Review Stars Small-->
                                          <div class="rating position-relative d-table">
                                              <div class="position-absolute stars" style="width: 25%">
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                              </div>
                                              <div class="stars">
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              </div>
                                          </div>                </li>
                                      <li
                                          class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                                          <span class="fw-bolder">Value for money</span>
                                          <!-- Review Stars Small-->
                                          <div class="rating position-relative d-table">
                                              <div class="position-absolute stars" style="width: 75%">
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                              </div>
                                              <div class="stars">
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              </div>
                                          </div>                </li>
                                      <li
                                          class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                                          <span class="fw-bolder">Build quality</span>
                                          <!-- Review Stars Small-->
                                          <div class="rating position-relative d-table">
                                              <div class="position-absolute stars" style="width: 65%">
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                              </div>
                                              <div class="stars">
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              </div>
                                          </div>                </li>
                                      <li
                                          class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 bg-transparent">
                                          <span class="fw-bolder">Style</span>
                                          <!-- Review Stars Small-->
                                          <div class="rating position-relative d-table">
                                              <div class="position-absolute stars" style="width: 90%">
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                                  <i class="ri-star-fill text-dark mr-1"></i>
                                              </div>
                                              <div class="stars">
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                  <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              </div>
                                          </div>                </li>
                                  </ul>
                              </div>

                              <!-- Review Modal-->
                              <button type="button" class="btn btn-dark mt-4 hover-lift-sm hover-boxshadow disable-child-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasReview" aria-controls="offcanvasReview">
                                  Write A Review <i class="ri-discuss-line align-bottom ms-1"></i>
                              </button>
                              <!-- / Review Modal Button-->

                          </div>

                          <!-- Single Review-->
                          <article class="py-5 border-bottom border-top">
                              <div class="row">
                                  <div class="col-12 col-md-4">
                                      <small class="text-muted fw-bolder">08/12/2021</small>
                                      <p class="fw-bolder">Ben Sandhu, Ireland</p>
                                      <span class="bg-success-faded fs-xs fw-bolder text-uppercase p-2">Verified Customer</span>
                                  </div>
                                  <div class="col-12 col-md-8 mt-4 mt-md-0">
                                      <!-- Review Stars Small-->
                                      <div class="rating position-relative d-table">
                                          <div class="position-absolute stars" style="width: 80%">
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                          </div>
                                          <div class="stars">
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                          </div>
                                      </div>                <p class="fw-bolder mt-4">Happy with this considering the price</p>
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi, architecto placeat nam officia
                                          sapiente ipsam at dolorum quisquam, ipsa earum qui laboriosam. Pariatur recusandae nihil, architecto
                                          reprehenderit perferendis obcaecati. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                          Distinctio sint nesciunt velit quae, quisquam ullam veritatis itaque repudiandae. Inventore quae
                                          doloribus modi nihil illum accusamus voluptas suscipit neque perferendis totam!</p>

                                      <small class="fw-bolder bg-light d-table rounded py-1 px-2">Yes, I would recommend the product</small>
                                      <div class="d-block d-md-flex mt-3 justify-content-between align-items-center">
                                          <a href="#"
                                              class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start"
                                              title=""><small>Was this review helpful?
                                                  <i class="ri-thumb-up-line ms-4"></i> 112 <i class="ri-thumb-down-line ms-2"></i>
                                                  23</small></a>
                                          <a href="#"
                                              class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start mt-3 mt-md-0"
                                              title=""><small>Flag as
                                                  inappropriate <i class="ri-flag-2-line ms-2"></i></small></a>
                                      </div>
                                  </div>
                              </div>
                          </article>
                          <!-- /Single Review-->

                          <!-- Single Review-->
                          <article class="py-5 border-bottom ">
                              <div class="row">
                                  <div class="col-12 col-md-4">
                                      <small class="text-muted fw-bolder">08/12/2021</small>
                                      <p class="fw-bolder">Patricia Smith, London</p>
                                      <span class="bg-success-faded fs-xs fw-bolder text-uppercase p-2">Verified Customer</span>
                                  </div>
                                  <div class="col-12 col-md-8 mt-4 mt-md-0">
                                      <!-- Review Stars Small-->
                                      <div class="rating position-relative d-table">
                                          <div class="position-absolute stars" style="width: 80%">
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                          </div>
                                          <div class="stars">
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                          </div>
                                      </div>                <p class="fw-bolder mt-4">Very happy with my purchase so far...</p>
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi, architecto placeat nam officia
                                          sapiente ipsam at dolorum quisquam, ipsa earum qui laboriosam. Pariatur recusandae nihil, architecto
                                          reprehenderit perferendis obcaecati. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                          Distinctio sint nesciunt velit quae, quisquam ullam veritatis itaque repudiandae. Inventore quae
                                          doloribus modi nihil illum accusamus voluptas suscipit neque perferendis totam!</p>

                                      <small class="fw-bolder bg-light d-table rounded py-1 px-2">Yes, I would recommend the product</small>
                                      <div class="d-block d-md-flex mt-3 justify-content-between align-items-center">
                                          <a href="#"
                                              class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start"
                                              title=""><small>Was this review helpful?
                                                  <i class="ri-thumb-up-line ms-4"></i> 112 <i class="ri-thumb-down-line ms-2"></i>
                                                  23</small></a>
                                          <a href="#"
                                              class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start mt-3 mt-md-0"
                                              title=""><small>Flag as
                                                  inappropriate <i class="ri-flag-2-line ms-2"></i></small></a>
                                      </div>
                                  </div>
                              </div>
                          </article>
                          <!-- /Single Review-->

                          <!-- Single Review-->
                          <article class="py-5 border-bottom ">
                              <div class="row">
                                  <div class="col-12 col-md-4">
                                      <small class="text-muted fw-bolder">08/12/2021</small>
                                      <p class="fw-bolder">Jack Jones, Scotland</p>
                                      <span class="bg-success-faded fs-xs fw-bolder text-uppercase p-2">Verified Customer</span>
                                  </div>
                                  <div class="col-12 col-md-8 mt-4 mt-md-0">
                                      <!-- Review Stars Small-->
                                      <div class="rating position-relative d-table">
                                          <div class="position-absolute stars" style="width: 80%">
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                              <i class="ri-star-fill text-dark mr-1"></i>
                                          </div>
                                          <div class="stars">
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                              <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                          </div>
                                      </div>                <p class="fw-bolder mt-4">I wish it was a little cheaper - otherwise love this!</p>
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit sequi, architecto placeat nam officia
                                          sapiente ipsam at dolorum quisquam, ipsa earum qui laboriosam. Pariatur recusandae nihil, architecto
                                          reprehenderit perferendis obcaecati. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                          Distinctio sint nesciunt velit quae, quisquam ullam veritatis itaque repudiandae. Inventore quae
                                          doloribus modi nihil illum accusamus voluptas suscipit neque perferendis totam!</p>

                                      <small class="fw-bolder bg-light d-table rounded py-1 px-2">Yes, I would recommend the product</small>
                                      <div class="d-block d-md-flex mt-3 justify-content-between align-items-center">
                                          <a href="#"
                                              class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start"
                                              title=""><small>Was this review helpful?
                                                  <i class="ri-thumb-up-line ms-4"></i> 112 <i class="ri-thumb-down-line ms-2"></i>
                                                  23</small></a>
                                          <a href="#"
                                              class="btn btn-link text-muted p-0 text-decoration-none w-100 w-md-auto fw-bolder text-start mt-3 mt-md-0"
                                              title=""><small>Flag as
                                                  inappropriate <i class="ri-flag-2-line ms-2"></i></small></a>
                                      </div>
                                  </div>
                              </div>
                          </article>
                          <!-- /Single Review-->


                          <a href="#" class="btn btn-dark d-table mx-auto mt-6 mb-3 hover-lift-sm hover-boxshadow" title="">Load More
                              Reviews</a>
                          <p class="text-muted text-center fw-bolder">Showing 3 of 1234</p>

                      </section>  </div>
                    <!-- / Review Tab Content-->

                    <!-- Delivery Tab Content-->
                    <div class="tab-pane fade py-5" id="delivery" role="tabpanel" aria-labelledby="delivery-tab">
                      <div class="col-12 col-md-10 col-lg-8 mx-auto">
                        <p>We are now offering contact-free delivery so that you can still receive your parcels safely without requiring a
                          signature. Please see below for the available delivery methods, costs and timescales.</p>
                        <ul class="list-group list-group-flush mb-4">
                          <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-4 bg-transparent">
                            <div>
                              <span class="fw-bolder d-block">Standard Delivery</span>
                              <span class="text-muted">Delivery within 5 days of placing your order.</span>
                            </div>
                            <p class="m-0 lh-1 fw-bolder">$12.99</p>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-4 bg-transparent">
                            <div>
                              <span class="fw-bolder d-block">Priority Delivery</span>
                              <span class="text-muted">Delivery within 2 days of placing your order.</span>
                            </div>
                            <p class="m-0 lh-1 fw-bolder">$17.99</p>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center px-0 py-4 bg-transparent">
                            <div>
                              <span class="fw-bolder d-block">Next Day Delivery</span>
                              <span class="text-muted">Delivery within 24 hours of placing your order.</span>
                            </div>
                            <p class="m-0 lh-1 fw-bolder">$33.99</p>
                          </li>
                        </ul>
                        <div class="bg-light rounded p-3">
                          <p class="fs-6">Form more information, please see our delivery FAQs <a href="#">here</a></p>
                          <p class="m-0 fs-6">If you do not find the answer to your query, please contact our customer support team on
                            <b>0800 123 456</b> or email us at <b>support@domain.com</b>. We aim to respond within 48 hours to queries.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- / Delivery Tab Content-->

                    <!-- Returns Tab Content-->
                    <div class="tab-pane fade py-5" id="returns" role="tabpanel" aria-labelledby="returns-tab">
                      <div class="col-12 col-md-10 col-lg-8 mx-auto">
                        <p>We believe you will completely happy with your item, however if you aren't, there's no need to worry. We've
                          listed below the ways you can return your item to us.</p>
                        <ul class="list-group list-group-flush mb-4">
                          <li class="list-group-item px-0 py-4 bg-transparent">
                            <p class="fw-bolder">Return via post</p>
                            <p class="fs-6">To return your items for free through the postal system, please complete the returns form that
                              comes with your order. You'll find a label at the bottom of the form. Simply peel the label and head to your
                              nearest post office.</p>
                          </li>
                          <li class="list-group-item px-0 py-4 bg-transparent">
                            <p class="fw-bolder">Return in person</p>
                            <p class="fs-6">To return your items for free in person, simply stop into any one of our locations and speak
                              to a member of our in-store team.</p>
                          </li>
                        </ul>
                        <div class="bg-light rounded p-3">
                          <p class="fs-6">Form more information, please see our returns FAQs <a href="#">here</a></p>
                          <p class="m-0 fs-6">If you do not find the answer to your query, please contact our customer support team on
                            <b>0800 123 456</b> or email us at <b>support@domain.com</b>. We aim to respond within 48 hours to queries.
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- / Returns Tab Content-->

                  </div>
                  <!-- / Tab Content-->                </div>
          </div>
          <!-- / Product Tabs-->

      </section>

      <!-- Related Products
      <div class="container my-8">
          <h3 class="fs-4 fw-bold mb-5 text-center">You May Also Like</h3>
      </div>
      -->

      <!-- /Page Content -->
  </section>
  <!-- / Main Section-->

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendAjaxRequest() {
            $.ajax({
                type: "POST",
                url: "/shopcart/store/{id}",
                data: {
                    id: $("#save").val(),
                },

            });
        }
    </script>

    <!--<script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#save").click(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/shopcart/store/{id}",
                    data: {
                        id: $("#save").val(),
                    },

                });
            });
        });
    </script> -->

@endsection
@include('home.footer')
