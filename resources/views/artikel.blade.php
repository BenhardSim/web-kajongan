<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <section class="landing-page">
        <nav class="navbar navbar-expand-lg navbar-dark me-auto nav-cont">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./assets/pekalongan.png" style="width: 40px;" />
                    <b>Kajongan</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <b>
                                <a class="nav-link"  href="/">Home</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#">Tentang</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#">Fasilitas</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#" aria-disabled="true">Struktur</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link active" href="#" aria-current="page" aria-disabled="true">Artikel</a>
                            </b>
                        </li>
                    </ul>
                </div>
        </nav>

        <div class="home-section">
            <div class="title-home">
                <h1>Kumpulan Artikel</h1>
                <h3>Desa Kajongan</h3>
            </div>
        </div>

    </section>
    <div class="artikel-cont">

        <div class="row justify-content-center">

            @if(count($all_article) > 0)
            @foreach($all_article as $article)

                <div class="col-lg-5 artikel-item" style="padding: 0%">
                    <div style="width: 40rem;height:240px">
                        <div style="display: flex;flex-direction:row" class="row">
                            <div class="col-lg-5">  
                                <img height="240px" width="110px" src="./assets/artikelImage/artikel-img-{{ $article['id'] }}.png" class="card-img-bottom" alt="/assets/konveksi.png" style="border-radius: 8px">
                            </div>
                            <div class="card-body col-lg-7">
                                <h4 class="card-title">{{ $article["title"] }}</h4>
                                <p>By : {{ $article["author"] }}</p>
                                <p id="content-prev" class="card-text">{{ 

                                substr(strip_tags(str_replace("\\","",str_ireplace("div","p",str_ireplace('"',' ', $article["article"])) )),0,80) 
                                
                                }}</p>
                                <a href="/artikel/{{ $article['id'] }}">Lanjut Baca..</a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            @else
                <p>Tidak Artikel</p>
            @endif

            {{-- <div class="col-lg-5 artikel-item" style="padding: 0%">
                <div style="width: 40rem;height:220px">
                    <div style="display: flex;flex-direction:row">
                        <img height="220px" src="./assets/koveksi.png" class="card-img-bottom" alt="/assets/konveksi.png" style="border-radius: 8px">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <h5>Sub Title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#">Lanjut Baca..</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 artikel-item" style="padding: 0%">
                <div style="width: 40rem;height:220px">
                    <div style="display: flex;flex-direction:row">
                        <img height="220px" src="./assets/koveksi.png" class="card-img-bottom" alt="/assets/konveksi.png" style="border-radius: 8px">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <h5>Sub Title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#">Lanjut Baca..</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 artikel-item" style="padding: 0%">
                <div style="width: 40rem;height:220px">
                    <div style="display: flex;flex-direction:row">
                        <img height="220px" src="./assets/koveksi.png" class="card-img-bottom" alt="/assets/konveksi.png" style="border-radius: 8px">
                        <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <h5>Sub Title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#">Lanjut Baca..</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>    
    
    

</body>