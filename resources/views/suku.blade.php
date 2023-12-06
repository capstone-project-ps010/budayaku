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
            <picture>
              <source
                srcset="
                  https://s3-alpha-sig.figma.com/img/314f/1a8a/de4ba34825666539aa7e4a89da495198?Expires=1702252800&Signature=niqRB7KQsJ6V7bPSRnI40xOyGVfw7I2Qg1X7vI~G2QFD-dqixmsNbb35fHPgJ3CUN33SRWENpxkzC8SS~1IO0rnl4BZhrEzmPgjUowj-vQhVvQeZX-5amgGQdOQrDl43CvUZZ4lc0PXg0K1jjvE3w68mFaafYiU5v-HiSy1SrAHV4Vs1hQH1vUzSGNkgixB6yonOCq3j4W4bB0m0SYjMq1YBejoJtQf8BCbWnd7wBeNKfd2a3dLgSzYlzbx-hap3uAhLo97B7OyVzEEtn8I2ay70jVLvPwHRS8FtnkEcqlUHG1hoJ9viUDmqxUVyw99L3UJC2e-ALjH3Rd-ajEmxCw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4
                " />
              <img
                src="{{ asset('storage/gambar/suku' . $suku->gambar) }}"
                alt=""
                class="image-suku" />
            </picture>
            <p class="text-suku">
              {{ $suku->deskripsi }}
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
                      src="https://s3-alpha-sig.figma.com/img/d96b/40a9/eaa45238291e93486548889024fa6a99?Expires=1702252800&Signature=noMiUUAV1x91oo0qzhojJVZ4xPMbYuJcXrTP1gVWWl7-KxP35pqQsVvO6S9uH5cFLO0sf~aNfN~5JbDOaNpN3qKlHlK31Glu1Dlq8Ok5I2-dApTysuqvUkf548c6b9k-k2bPC~rlKLlWzyQYIg4nDfW6FGnMPmeJEI7xOY8ws0u4CSt2iz9Oo2SnKdJEHnzNQR8pRt9yFbqgBuTnDxteGiuVI8Hs4TAe~CC~gYokUA8u6Z7G1-M4o7RuNr6vcJn~P1Iii8BjALmN93M0tax5kIpML172LNG926tXLX~4lGA5lfcszJ~OaBiVh34~rw0~rElq4bo5mz30ZoSSA6dEng__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Pakaian Adat</p>
                  </li>
                  <li class="splide__slide">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/0129/aa99/ed3d8a0527c26bfd55fde29049fa72aa?Expires=1702252800&Signature=hPjkrNbCXWT4GZWc0ruOkKwjvi47BkpIEbh~U1SjFUn84LELZBs9lu14NPVN4FQ7UEBYUqmzinwSBrCPUbrcS7nmn4Zdj03W0KwkWwQfXW9O7YEMoVJCNNKIYEt8OaVjBKWQ3rEVYrfPAxtlXBC08WsGOVYWgn-h9rTu~5d8b6d-3~I9WwRrqJWH3S2sYNUInRlW~BzwrnD4GzeIK2eY6JTjVBccashjScIWmHyIkPX3rp7ozfCEwrtM~rndMM-LRORh9jEPcblcyiq26MVUj45CoMnZsRkGKchK9O5SHujQWWo25rCxUU1dYFF~NI4NR1hRDPI~acOCq4MvkY-nZA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Rumah Adat</p>
                  </li>
                  <li class="splide__slide">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/5778/69ad/1bdc651668d64fcbc026e5f9c48c247b?Expires=1702252800&Signature=jaz6iRJkxxT09goPX1~znNGhNz7RceKh~olM2kFP2whlI9Dz9~d-jb3ZtbBlwVV7zZepz12cA1RJJlc6tW~kb0Sfbg1lQ9Wx~7IT-MJXsRknHE3UT73vPWwggXs99CrQRWdm2dvi3-QpbiR1t2c0zBrl16RUzDsAIUKrf6t4GViLVYI2Bl6nTjCGNnLPo2UuoYFrLksKMNhrXQQcyMeramZn9TWmSkiILK4PZ3TPhkdi3cPhjaelwysymNmF2y2iTqf3~Wa5547UgXLA-cEAJVVxwWASIFdMpJdMhM3AD0LVyuLkHlHXAKWwayZrsRM1Im6bDVu3diloBYtpfXsZdw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Upacara Sekaten</p>
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
