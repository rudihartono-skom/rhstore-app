@extends('mainuser')
@section('title') Konsumen @endsection
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active d-md-block">
                <img src="{{ asset ('images/dfr.png') }}" class="h-12 w-100" alt="...">
            </div>
            <div class="carousel-item ">
                <img src="{{ asset ('images/download.jpg') }}" class="h-12 w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset ('images/er.jpg') }}" class="h-12 w-100" alt="...">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <figure class="figure">
            <h2 class="text-center">About Us</h2>
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset ('images/logorhscout.jpg') }}" class="figure-img img-fluid rounded" alt="...">
                </div>
                <div class="col-8">
                    <figcaption class="figure-caption text-end">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci enim error itaque neque maxime beatae deleniti architecto eius et facere odit possimus nihil quae harum assumenda autem, molestias veniam quasi ut pariatur! Delectus incidunt veritatis cumque voluptatibus ex voluptate, accusantium reprehenderit dignissimos nulla quos provident nam amet maiores placeat dolorum ipsam possimus voluptatem facere. Unde consequuntur, ducimus natus laudantium expedita at aut consequatur voluptas atque, saepe temporibus quas amet magni, libero minima illum ipsa assumenda nisi veritatis dicta modi provident voluptatum incidunt? Veritatis dolorem neque animi quas, hic tenetur possimus quod illo repellat mollitia assumenda iure similique omnis libero blanditiis eius voluptas iusto laboriosam. Alias, fugiat. Quasi, cumque? Sed eius omnis consequatur, mollitia veniam obcaecati, laborum laudantium inventore cupiditate et rerum. Sequi quibusdam qui voluptatibus numquam repellendus fugit consequuntur fuga commodi animi error. Totam, voluptates ad! Amet repudiandae voluptatem nisi. Consectetur nisi maiores pariatur aperiam laborum sed dignissimos, facere, quos cumque perferendis vitae reiciendis quisquam doloribus provident voluptatibus dicta ducimus odit, officia nam? Non odit totam explicabo hic. Distinctio, ex? Tempore pariatur sed quam doloribus harum, quisquam architecto aliquid delectus accusantium sit quis fugiat, voluptas molestias ratione at nisi ex impedit quaerat dolorem, officiis saepe libero nulla! Quis placeat delectus earum animi iste aliquam dignissimos in magni corrupti voluptatem ratione cum, obcaecati assumenda minima neque et fugit repellat, sunt eos quaerat facilis, veniam quia numquam similique. Voluptate magni totam voluptates possimus et. Consectetur sit voluptatum, suscipit tempore sint itaque nisi deserunt saepe facilis vel fugiat aliquam, ratione impedit numquam debitis.</figcaption>
                </div>
            </div>
        </figure>

        <div class="card-header mt-3">
            Quote
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>A well-known quote, contained in a blockquote element.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>

    </div>

    <div class="container text-center mt-5">
        <h1 class="text-bold">Produk RhScout Percetakan</h1>
        <div class="row align-items-start">
            @foreach ( $produk as $item)
                <div class="col mt-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('storage/'. $item->foto_produk) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_produk }}</h5>
                            <p class="card-text float-left">Harga : Rp. {{number_format(($item->harga), 0, ",", ".")}}</p>
                            <a href="/order/{{ $item->id }}" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ $item->stok_awal }}
                          </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="bg-secondary-subtle p-5 mt-5">
        <div class="container">
            <h1 class="text-center">Pesan Pembeli</h1>
            <div class="row text-center">
                <div class="col-2 mt-1">
                    <div class="card">
                        <img src="{{ asset ('images/usercowok.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rikky</h5>
                            <p class="card-text float-left fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id autem enim natus cupiditate maxime labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 mt-1">
                    <div class="card">
                        <img src="{{ asset ('images/usercewek.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Liza</h5>
                            <p class="card-text float-left fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id autem enim natus cupiditate maxime labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 mt-1">
                    <div class="card">
                        <img src="{{ asset ('images/usercowok.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rey</h5>
                            <p class="card-text float-left fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id autem enim natus cupiditate maxime labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 mt-1">
                    <div class="card">
                        <img src="{{ asset ('images/usercewek.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nadila</h5>
                            <p class="card-text float-left fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id autem enim natus cupiditate maxime labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 mt-1">
                    <div class="card">
                        <img src="{{ asset ('images/usercowok.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nouval</h5>
                            <p class="card-text float-left fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id autem enim natus cupiditate maxime labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 mt-1">
                    <div class="card">
                        <img src="{{ asset ('images/usercewek.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rahma</h5>
                            <p class="card-text float-left fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae id autem enim natus cupiditate maxime labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.5148338209615!2d104.74568677419582!3d-2.9545403397235965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7606b6ea9f07%3A0x83305e6d548171d!2sInstitut%20Teknologi%20dan%20Bisnis%20PalComTech!5e0!3m2!1sid!2sid!4v1686054143139!5m2!1sid!2sid" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
