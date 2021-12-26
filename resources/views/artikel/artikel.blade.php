@extends('layouts.app')

@section('content')

<!-- ======= Artikel Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-in">Artikel</h2>
        <p data-aos="fade-in">Temukan informasi dan cerita Temu Keluarga disini.</p>
      </div>

      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
          <div class="card">
            <div class="card-img">
              <img src="img/services-1.jpg" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">Maya akhirnya pulang</a></h5>
              <p class="card-text">3 tahun semenjak ditemukan dijalanan dekat kebun raya bogor, akhirnya Maya bertemu kembali dengan keluarganya.</p>
              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
          <div class="card">
            <div class="card-img">
              <img src="img/services-2.jpg" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">Akhirnya Adi bertemu Adiknya</a></h5>
              <p class="card-text">5 tahun sudah Adi mencari adiknya, mencoba keberuntungan, Adi mencari adiknya lewat bantuan temukeluarga.id</p>
              <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
            </div>
          </div>

        </div>


    </div>
  </section><!-- End Services Section -->
    @endsection
