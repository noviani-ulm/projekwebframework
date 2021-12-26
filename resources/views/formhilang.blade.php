@extends('layouts.app')

@section('content')
<form>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Masukan Data Dia Yang Terpisah</h2>
          <p>Kami akan mencoba mencari tahu informasinya dan menghubungi Anda</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>Jl. Ganeca No.7, Bandung</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>project1inventra@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Instagram</h3>
                  <p>@temukeluarga</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="number" class="form-control" name="email" id="email" placeholder="Nomor kamu" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Nama Yang terpisah" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Rincian Lengkap mengenai dia yang terpisah" required></textarea>
              </div>
              <div class="form-group mt-3">
                <label for="exampleFormControlFile1">Upload foto dia yang terpisah</label><br>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesanmu sudah terkirim. Terima Kasih!</div>
              </div>-->
              <div class="text-center">
              <button type="submit" alert="Berhasil">Submit</button>
            </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection
