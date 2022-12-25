<div class="container-fluid px-4 py-5 bg-light" id="custom-cards">
    <h2 class="pb-2 text-center text-black">Popular desinations</h2>

    <div class="row row-cols-md-5 justify-content-center">

        @php
            $image = ['https://i.pinimg.com/564x/a9/38/d1/a938d141053d1332529f0cd308978b99.jpg', 'https://i.pinimg.com/564x/45/0e/08/450e084ea4e1f20025a745fab37c0ed4.jpg', 'https://i.pinimg.com/564x/f9/cf/3a/f9cf3a375a50cdb9f46e83d7f975de70.jpg', 'https://i.pinimg.com/564x/43/45/04/4345047a334176fc672847a0be61939d.jpg'];

            $name = ['Pura Agung', 'Candi Borobudur', 'Raja Ampat', 'Mount Rinjani'];
            $location = ['Karangasem, Bali', 'Magelang, Jawa Tengah', 'Monere, Papua', 'Rinjani, Lombok'];
            $list_count = count($location);

        @endphp

        @for ($i = 0; $i < $list_count; $i++)
            <div class="col">
                <div class="card ">
                    <img src="{{ $image[$i] }}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title">{{ $name[$i] }}</h5>
                        <p class="text-black"><i class="fa-solid fa-location-dot"></i> {{ $location[$i] }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        @endfor
        <lottie-player src="https://assets1.lottiefiles.com/private_files/lf30_foTsmM.json" background="transparent"
            speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>




    </div>


</div>
