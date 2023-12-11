
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../components/header-bar.js"></script>
    <script src="../components/footer-bar.js"></script>
    <script src="../utils/views-search.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>BudayaKu</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      @include('layouts.navigasifull')
    </nav>
    <div class="container-xxl">
      <main>
        <div data-aos="fade-down">
          <article>
            <h2>Suku {{ $suku->suku }}</h2>
              
              <img
                src="{{ asset('storage/gambar/suku/' . $suku->gambar) }}"
                alt=""
                class="image-suku" />
            <p class="text-suku">
              {{ $suku->deskripsi }} Dan Bahasa yang di gunakan oleh Suku {{ $suku->suku }} adalah Bahasa {{ $suku->bahasa }}
            </p>
          </article>
        </div>
        <div data-aos="fade-right">
          <article>
            <h3>Adat Istiadat</h3>
            <section
              class="splide"
              aria-label="Placeholder Example"
              id="splide1">
              <ul class="splide__pagination"></ul>
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <div class="overlay-pulau"></div>
                    <img
                      src="{{ asset('storage/gambar/pakaian/' . $suku->gambar_pakaian_adat) }}"
                      alt="" />
                    <p class="text-pulau__item">Pakaian {{ $suku->pakaian_adat }}</p>
                  </li>
                  <li class="splide__slide">
                    <div class="overlay-pulau"></div>
                    <img
                      src="{{ asset('storage/gambar/rumah/' . $suku->gambar_rumah_adat) }}"
                      alt="" />
                    <p class="text-pulau__item">Rumah {{ $suku->rumah_adat }}</p>
                  </li>
                  <li class="splide__slide">
                    <div class="overlay-pulau"></div>
                    <img
                      src="{{ asset('storage/gambar/seni/' . $suku->gambar_seni) }}"
                      alt="" />
                    <p class="text-pulau__item">Kesenian {{ $suku->seni }}</p>
                  </li>
                  <li class="splide__slide">
                    <div class="overlay-pulau"></div>
                    <img
                      src="{{ asset('storage/gambar/senjata/' . $suku->gambar_senjata) }}"
                      alt="" />
                    <p class="text-pulau__item">Senjata  {{ $suku->senjata }}</p>
                  </li>
                </ul>
              </div>

              <!-- default location -->
            </section>
          </article>
        </div>
        <hr>
        <div data-aos="fade-up">
          <article>
            <div class="feedback mt-5">
              <div class="feedback-description">
                <h2>Feedback</h2>
                <p class="mb-3">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nobis, maxime sequi similique a, expedita enim doloribus,
                  eveniet pariatur dignissimos deserunt incidunt officia
                  quisquam? Culpa nam similique praesentium cumque temporibus.
                  Rem?
                </p>
              </div>
              <div class="feedback-form">
                <form method="POST">
                  <div class="mb-3">
                    <label for="nameFeedback" class="form-label">Nama</label>
                    <input
                      type="name"
                      name="name"
                      class="form-control"
                      id="nameFeedback"
                      required />
                  </div>
                  <div class="mb-3">
                    <label for="feedbackComment" class="form-label"
                      >Feedback</label
                    >
                    <textarea name="feedback" class="form-control"></textarea>
                  </div>
                  <div class="feedback-verified">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckDefault" />
                      <label class="form-check-label" for="flexCheckDefault">
                        Jadikan sebagai anonim
                      </label>
                    </div>
                    <div class="mt-5">
                      <button type="submit" class="feedback-submit">
                        Kirim
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="feedback-item mt-5">
              <div class="feedback-card">
                <p>Nama : Raden</p>
                <p>Feedback : untuk informasinya cukup jelas</p>
              </div>
              <div class="feedback-card">
                <p>Nama : Anonim</p>
                <p>
                  Feedback : Informasi masih ada yang kurang dibagian adat
                  istiadat
                </p>
              </div>
              <div class="feedback-card">
                <p>Nama : Raden</p>
                <p>Feedback : untuk informasinya cukup jelas</p>
              </div>
              <div class="feedback-card">
                <p>Nama : Raden</p>
                <p>Feedback : untuk informasinya cukup jelas</p>
              </div>
            </div>
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
    <script>
      AOS.init();
    </script>
  </body>
</html>
