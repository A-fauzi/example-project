<div class="container-fluid px-4 py-5 bg-light" id="custom-cards">
    <h2 class="pb-2 text-center text-black">Special Offer</h2>

    @php
        $image = ['https://i.pinimg.com/564x/a9/38/d1/a938d141053d1332529f0cd308978b99.jpg', 'https://i.pinimg.com/564x/45/0e/08/450e084ea4e1f20025a745fab37c0ed4.jpg', 'https://i.pinimg.com/564x/f9/cf/3a/f9cf3a375a50cdb9f46e83d7f975de70.jpg', 'https://i.pinimg.com/564x/43/45/04/4345047a334176fc672847a0be61939d.jpg'];

        $name = ['Pura Agung', 'Candi Borobudur', 'Raja Ampat', 'Mount Rinjani'];
        $location = ['Karangasem, Bali', 'Magelang, Jawa Tengah', 'Monere, Papua', 'Rinjani, Lombok'];
        $list_count = count($location);

    @endphp

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <div class="container-popular-list">
                    @for ($i = 0; $i < $list_count; $i++)
                        <div class="card text-black m-2 card-custom">
                            <img src="{{ $image[$i] }}" class="card-img-top img " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $name[$i] }}</h5>
                                @for ($j = 0; $j <= 5; $j++)
                                    <i class="fa-solid fa-star"></i>
                                @endfor
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the card's content.</p>
                                <p class="mt-4 ms-2">From $500</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="swiper-slide">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="swiper-pagination"></div>
    </div>


    <div class="container col-xxl-8 px-4 py-5 text-black mt-5">
        <h2 class="pb-2 text-center text-black">Book Your Next Trip <br> In 3 Easy Steps</h2>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://i.pinimg.com/564x/1c/a8/95/1ca89539cf1701ff69672b1f5144eea6.jpg"
                    class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500"
                    loading="lazy" style="border-radius: 2em">
            </div>
            <div class="col-lg-6">
                <div>
                    <p class="fs-4"><i class="fa-solid fa-map-location-dot"
                            style="padding: 0.5em; background-color: royalblue; border-radius: 0.5em; color: white"></i>
                        Choose Destination</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit eum architecto
                        voluptatum
                        dolorum beatae officiis commodi nemo.</p>
                </div>
                <div>
                    <p class="fs-4"><i class="fa-solid fa-credit-card"
                            style="padding: 0.5em; background-color: royalblue; border-radius: 0.5em; color: white"></i>
                        Make Payment</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit eum architecto
                        voluptatum
                        dolorum beatae officiis commodi nemo.</p>
                </div>
                <div>
                    <p class="fs-4"><i class="fa-solid fa-cart-flatbed-suitcase"
                            style="padding: 0.5em; background-color: royalblue; border-radius: 0.5em; color: white"></i>
                        Reach Airport on Selected Date</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit eum architecto
                        voluptatum
                        dolorum beatae officiis commodi nemo.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5 text-black text-center" id="featured-3">
        <div class="text-center">
            <h2 class="pb-2">Things you need to do</h2>
            <p>We ensure that you'll embark on perfectly planned, <br>safe vacation at a price you can afford</p>
        </div>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="feature col">
                <i class="fa-solid fa-window-maximize"
                    style="padding: 0.5em; background-color: royalblue; border-radius: 0.5em; color: white"></i>
                <h3 class="fs-2 mt-4">Sign Up</h3>
                <p>Completes all the work associated <br>with planning and processing.</p>
            </div>

            <div class="feature col">
                <i class="fa-solid fa-hand-holding-dollar"
                    style="padding: 0.5em; background-color: royalblue; border-radius: 0.5em; color: white"></i>
                <h3 class="fs-2 mt-4">Worth of Money</h3>
                <p>After successfull access then book <br>from exclusive deals & pricing.</p>
            </div>
            <div class="feature col">
                <i class="fa-solid fa-map-location-dot"
                    style="padding: 0.5em; background-color: royalblue; border-radius: 0.5em; color: white"></i>
                <h3 class="fs-2 mt-4">Exciting Travel</h3>
                <p>Start and explore a wide range of <br>exciting travel experience.
                </p>
            </div>
        </div>
    </div>

    {{-- Know About Us --}}
    <div class="container col-xxl-8 px-4 py-5 text-black mt-5">
        <h2 class="pb-2 text-center text-black">Know About Us</h2>
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Our short story</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque suscipit iure
                    inventore dolore error aliquam sequi quasi, molestias ullam fugiat esse ab magnam alias laboriosam,
                    numquam velit eum vel quod.</p>
                <a href="#" class="stretched-link text-danger" style="position: relative;">See more</a>

            </div>

            <div class="col-10 col-sm-8 col-lg-6">
                <img src="https://i.pinimg.com/564x/a9/46/a3/a946a31e90b2e8792e75bfa1d9a405d0.jpg"
                    class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500"
                    loading="lazy" style="border-radius: 2em">
            </div>

        </div>
    </div>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">

                <div class="container-popular-list">
                    @for ($i = 0; $i < $list_count; $i++)
                        <div class="card text-black m-2 card-custom">
                            <img src="{{ $image[$i] }}" class="card-img-top img " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $name[$i] }}</h5>
                                @for ($j = 0; $j <= 5; $j++)
                                    <i class="fa-solid fa-star"></i>
                                @endfor
                                <div class="container-recently mt-2">
                                    <p><i class="fa-solid fa-calendar-days"></i> 11 Days
                                    </p>
                                    <p><i class="fa-solid fa-location-dot ms-2"></i> 9 Places
                                    </p>
                                    <p><i class="fa-solid fa-globe ms-2"></i> 1 Country
                                    </p>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of
                                    the card's content.</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="swiper-slide">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="swiper-pagination"></div>
    </div>


</div>
