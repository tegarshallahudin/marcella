@extends('partials.template')
@section('content-hero')
    <div class="container-fluid bg-primary hero-header">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-blue mb-4 animated zoomIn">Marcella Monitoring</h1>
                    <p class="text-blue pb-3 animated zoomIn">Cyber Patrol & Product Intelligence</p>
                    <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Mulai Sekarang</a>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- About Start -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="img/about.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Tentang</div>
                    <h2 class="mb-4">MARCELLA - eCommerce Intelligence</h2>
                    <p class="mb-4">Marcella Monitoring melakukan analisis dan pemantauan data produk yang dijual secara daring sehingga mampu menampilkan berbagai insight, seperti produk yang mengandung bahan berbahaya, profil penjual produk, dan jumlah transaksi produk.
                        Insight tersebut dapat mendukung pengambilan keputusan pemerintah sehingga didapatkan strategi terbaik berdasarkan data.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-user-tie text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Business Planning</h6>
                                <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                <i class="fa fa-chart-line text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>Financial Analaysis</h6>
                                <span>Tempor erat elitr rebum at clita. Diam dolor ipsum amet eos erat ipsum lorem et sit sed stet lorem sit clita duo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 450px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Apakah anda ingin mendapat manfaatnya?</h3>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Nama Depan" style="height: 48px;">
                    </div>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Nama Belakang" style="height: 48px;">
                    </div>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Alamat E-mail" style="height: 48px;">
                    </div>
                    <div class="position-relative w-100 mt-3"> 
                        <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Mulai Sekarang</a>
                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="max-height: 250px;" src="img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Service Start -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3"> USE CASE</div>
                <p class="mb-4">Berbagai bidang aspek profesi di masyarakat akan dimudahkan dengan adanya MARCELLA yang dikembangkan dengan dilengkapi fitur-fitur unggulan.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-user-tie fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Patroli Siber</h5>
                            <span>Melakukan patroli yang meliputi mencari, memantau, dan membuat daftar produk obat dan makanan berbahaya untuk di take down atau ditindaklanjut dan pembinaan di marketplace dan e-commerce.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-pie fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Seller Monitoring</h5>
                            <span>Memantau penjualan produk Industri Kecil dan Menengah (IKM) yang meliputi, pemantauan perkembangan produk, rating penjualan, penjualan produk berdasarkan lokasi IKM, dan persebaran IKM.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-line fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Seller Trend Analysis</h5>
                            <span>MARCELLA menghadirkan dashboard data penjualan yang memberikan informasi tentang penjualan produk tertinggi dalam kurun waktu, produk paling laris dalam kurun waktu, dan komoditas paling banyak dijual di marketplace.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-balance-scale fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Market Analysis</h5>
                            <span>Analisa pasar untuk mendapatkan insight tentang penjualan online, seperti perbandingan jumlah barang dengan penjual, marketplace paling banyak permintaannya, brand paling laku, dan penjual yang paling laris.</span>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Features Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">KEUNGGULAN MARCELLA MONITORING</div>
                    <p>Ledakan penjualan produk yang susah dipantau menjadi masalah dalam pengawasannya, terutama produk ilegal yang mengandung bahan berbahaya dan terlarang. SMART dihadirkan sebagai solusi permasalahan dengan berbagai keunggulan.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-cubes text-white"></i>
                                </div>
                                <h6 class="mb-0">Pengawasan Produk Ilegal</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-percent text-white"></i>
                                </div>
                                <h6 class="mb-0">Pelacakan Produk Ilegal</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-award text-white"></i>
                                </div>
                                <h6 class="mb-0">Pelacakan Identitas Penjual Produk Ilegal</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-smile-beam text-white"></i>
                                </div>
                                <h6 class="mb-0">Pelacakan Peredaran Produk Ilegal</h6>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Team</div>
                <h2 class="mb-5">Meet Our Team Members</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-1.jpg" alt="">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-2.jpg" alt="">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-3.jpg" alt="">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <h5>Full Name</h5>
                        <p class="mb-4">Designation</p>
                        <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-4.jpg" alt="">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
