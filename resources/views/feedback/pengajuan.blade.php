<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('build/assets/logo/logo12.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://kit.fontawesome.com/f5ed80d948.js"
      crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>BudayaKu</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      @include('layouts.navigasifull')
    </nav>
    <div class="container-xxl">
      <main>
        <article>
          <div data-aos="fade-down" class="title-pulau">
            <h2>Pengajuan Budaya</h2>
          </div>
          <p>Pengajuan budaya merupakan bagian dari Budayaku yang bertujuan untuk memperluas jangkauan informasi kebudayaan yang belum ter expose oleh dunia luar</p>
            <p>Anda bisa melakukan pengajuan jika budaya yang anda temui masi belum ada di Website ini, silahkan periksa kembali informasi yang anda miliki sebelum melakukan pengajuan</p>
          
        </article>
        <div data-aos="fade-up" style="margin-top: 50px">
          <article>
            <form class="pengajuan" id="feedback-form">
              <div class="mb-3">
                <label for="namaSuku" class="form-label">Nama Suku</label>
                <input
                  type="text"
                  class="form-control"
                  id="nameFeedback"
                  name="suku"
                  required />
              </div>
              <div class="mb-3">
                <label for="namaPulau" class="form-label">di Pulau</label>
                <select
                  class="form-select"
                  aria-label="selectPulau"
                  name="pulau">
                  <option selected>Pilih Pulau</option>
                  <option value="1">Jawa</option>
                  <option value="2">Kalimantan</option>
                  <option value="3">Sumatera</option>
                  <option value="4">Sulawesi</option>
                  <option value="5">Papua</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="deskripsiSuku" class="form-label">Deskripsi</label>
                <textarea
                  class="form-control"
                  required
                  id="deskripsiSuku"
                  rows="3"
                  name="deskripsi"
                  placeholder="Contoh Deskripsi: Suku Jawa adalah suku bangsa Austronesia terbesar di Indonesia yang berasal dari Jawa Tengah, Jawa Timur, dan Daerah Istimewa Yogyakarta. "></textarea>
              </div>
              <div class="mb-5">
                <button type="submit" class="button-send"  id="submit-feedback">Kirim</button>
              </div>
            </form>
          </article>
        </div>
      </main>
    </div>
    <div class="container-fluid">
      @include('layouts.footer')
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var elms = document.getElementsByClassName('splide');

        for (var i = 0; i < elms.length; i++) {
          new Splide(elms[i], {
            autoWidth: true,
            perPage: 7,
            focus: 0,
          }).mount();
        }
      });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    <script>
      const submitFeedbackButton = document.getElementById('submit-feedback');

      submitFeedbackButton.addEventListener('click', (event) => {
        // Validasi formulir
        event.preventDefault();
        const form = document.getElementById('feedback-form');
        if (!form.checkValidity()) {
          event.stopPropagation();
          Swal.fire({
            title: 'Terjadi kesalahan!',
            text: 'Silakan periksa kembali formulir Anda.',
            icon: 'error',
            confirmButtonText: 'OK',
          });
          return;
        }

        // Kirim data formulir
        // ...

        // Tampilkan sweetalert2
        Swal.fire({
          title: 'Pengajuan Terkirim!',
          text: 'Terima kasih Data anda akan segera di proses :)',
          icon: 'success',
          confirmButtonText: 'OK',
        }).then(() => {
          // Reset form
          form.reset();
        });
      });
    </script>
    <script>
      AOS.init();
    </script>
  </body>
</html>


