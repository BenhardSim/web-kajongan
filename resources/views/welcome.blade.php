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
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#tentang">Tentang</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#fasilitas">Fasilitas</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="#struktur" tabindex="-1" aria-disabled="true">Struktur</a>
                            </b>
                        </li>
                        <li class="nav-item">
                            <b>
                                <a class="nav-link" href="/artikel" aria-current="page" aria-disabled="true">Artikel</a>
                            </b>
                        </li>
                    </ul>
                </div>
        </nav>

        <div class="home-section">
            <div class="title-home">
                <h1>Desa Kajongan</h1>
                <h3>Kajen, Pekalongan</h3>
                <p>Pesona Alam Tanpa Batas: Keberagaman Desa yang Mempesona</p>
            </div>
            <a href="/artikel"><button class="btn">Telusuri</button></a>
        </div>

    </section>

    <div class="" id="tentang">
        <div class="col-lg-12 about-1">
            <h1>- Tentang Kajongan -</h1>
        </div>
        <div class="container-content">
            <div class="row">
                <div class="col-lg-4 col-sm-5 card-container" data-bs-toggle="modal" data-bs-target="#profileModal">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/desa-top.png" class="card-img">
                        <div class="card-body">
                            <h2>Profile</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
 
                <!-- Modal -->
                <div class="modal fade bd-example-modal-xl" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Profile Desa Kajongan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="col-lg-5">
                                <img src="./assets/desa-top.png" class="card-img-top">
                            </div>
                            <div class="col-lg-7">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.
                                    Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 card-container col-sm-5" data-bs-toggle="modal" data-bs-target="#UMKMModal">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/koveksi.png" class="card-img">
                        <div class="card-body"> 
                            <h2>UMKM</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-xl" id="UMKMModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UMKM Desa Kajongan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="col-lg-5">
                                <img src="./assets/koveksi.png" class="card-img-top">
                            </div>
                            <div class="col-lg-7">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.
                                    Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>

                <div class="col-lg-4 card-container " data-bs-toggle="modal" data-bs-target="#LocationModal">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/peta-kajongan.png" class="card-img">
                        <div class="card-body">
                            <h2>Lokasi</h2>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade bd-example-modal-xl" id="LocationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lokasi Desa Kajongan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body row">
                            <div class="col-lg-5">
                                <img src="./assets/peta-kajongan.png" class="card-img-top">
                            </div>
                            <div class="col-lg-7">
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.
                                    Some quick example text to build on the card title and make up
                                    the
                                    bulk of the card's content.</p>
                            </div>
                        </div> 
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="carouselExampleIndicators-2" class="carousel slide perangkat-desa" data-bs-ride="carousel" >
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner" id="struktur">

            <div class="carousel-item active about-page-item">
                <div class="col-lg-12 about-1">
                    <h1>Perangkat Desa</h1>
                </div>
                <div class="container-content">
                    <div class="row">
                        <div class="col-lg-12 perangkat-content">
                            <img src="./assets/perangkat/perangkat-desa.png" alt="" width="750px" style="border-radius: 20px;">
                        </div>
                        <div class="col-lg-12 periode">
                            <p>Perangkat Desa Kajongan Periode 2019-2025</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item about-page-item-2">
                <div class="col-lg-12 about-2">
                    <h1>Detail Perangkat Desa</h1>
                </div>
                <div class="container-content-2">
                    <div class="row container">
                        <div class="col-lg-12 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kades }}" alt="" width="110px" height="110px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h4>{{ $kades_name }}</h4>
                                    <p>Kepala Desa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_sekre }}" alt="" width="100px" height="100px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $sekre_name }}
                                    </h6>
                                    <p>Sekretaris Desa</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kaurUang }}" alt="" width="100px" height="100px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kaurUang_name }}</h6>
                                    <p>Kaur Keuangan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kaurUmum }}" alt="" width="100px" height="100px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kaurUmum_name }}</h6>
                                    <p>Kaur Umum & Perencanaan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kasiPemerintah }}" alt="" width="100px" height="100px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kasiPemerintah_name }}</h6>
                                    <p>Kasi Pemerintahan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kasiSejahtera }}" alt="" width="100px" height="100px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kasiSejahtera_name }}</h6>
                                    <p>Kasi Kesejahteraan & Pelayanan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kadusKemloko }}" alt="" width="100px" height="100px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kadusKemloko_name }}
                                    </h6>
                                    <p>Kadus Kemloko</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kadusKrajen }}" alt="" width="100px" height="100px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kadusKrajen_name }}</h6>
                                    <p>Kadus Krajan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 perangkat-item">
                            <div class="subyek-container shadow">
                                <img src="./assets/perangkat/{{ $photo_kadusGembongan }}" alt="" width="100px" height="100px"
                                    style="border-radius: 200px;">
                                <div class="subyek-info">
                                    <h6>{{ $kadusGembongan_name }}</h6>
                                    <p>Kadus Gembongan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 periode">
                            <p>Detail Perangkat Desa Kajongan Periode 2019-2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-2"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-2"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="container-fasilitas" id="fasilitas">
        <div class="col-lg-12 about-1">
            <h1>- Fasilitas Desa -</h1>
        </div>
        <div class="container-content">
            <div class="row">
                <div class="col-lg-3 card-container">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/lap-bol.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Lapangan</h3>
                            <p class="card-text">Lapangan yang biasa digunakkan untuk pertandingan sepak bola</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 card-container">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/masjid.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Masjid</h3>
                            <p class="card-text">Masjid Jami Baitusalam, merupakan Masjid terbesar di desa kajongan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/sungai2.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Sungai</h3>
                            <p class="card-text">Sungai kajongan merupakan salah satu sumber mata air desa kajongan dan juga tempat bermain untuk anak-anak.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/SD-kajongan.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Sekolah Dasar</h3>
                            <p class="card-text">Sekolah Dasar Kajongan, merupakan satu-satunya SD di desa kajongan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/TPQ.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>TPQ</h3>
                            <p class="card-text">Tepeq desa kajongan merupakan tempat dilakukannya pengajian.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 card-container">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/petilasan.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Petilasan</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/balai-desa.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch"  style="height: 25ch">
                            <h3>Balai Desa</h3>
                            <p class="card-text">Merupakan Tempat Bekerjanya Perangkat Desa dan juga tempat diadakan nya
                                pertemuan besar di desa kajongan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 card-container">
                    <div class="card shadow bg-body rounded-8" style="width: 23rem;">
                        <img src="./assets/sungai2.png" class="card-img-top">
                        <div class="card-body" style="height: 23ch">
                            <h3>Pondok Pesantren</h3>
                            <p class="card-text">Some quick example text to build on the card title and make up
                                the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-cont">
            <div class="row" style="margin: 0%">
                <div class="col-lg-12" style="padding: 0%;display:flex;flex-direction:column;align-items:center">
                    <img src="./assets/pekalongan.png" style="width: 60px;margin-bottom:12px" />
                    Desa Kajongan ,Kajen Pekalongan
                </div>
                <div class="col-lg-12" style="padding: 0%;display:flex;flex-direction:column;align-items:center">
                    <h6>Ikuti Kegiatan selengkapnya di sosial media kami.</h6>
                    <div style="padding: 0%;display:flex;flex-direction:row;align-items:flex-end">
                        <a href="">
                            <img src="./assets/insta-2.png" style="width: 30px;margin-right:10px" />
                        </a>
                        <a href="">
                            <img src="./assets/facebook-2.png" style="width: 30px;" />
                        </a>
                    </div>
                </div>
                <br>
                <div class="col-lg-12" style="text-align: center; padding: 0%;">
                    <p style="margin: 0;margin-top:12px"><b>Pemdes Kajongan</b> © 2023-2024</p>
                    <p>Made with Love by KKN Undip TIM II 2023</p>
                </div>
            </div>
        </div>
        
    </section>


</body>

</html>