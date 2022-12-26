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
                                <h5 class="card-title">Card title</h5>
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

</div>
