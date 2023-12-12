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
        <article>
          <div data-aos="fade-down" class="title-pulau">
            <h2>Pulau Kalimantan</h2>
            <div id="carouselImage" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="https://s3-alpha-sig.figma.com/img/2a27/205c/d624559e1e58d67295c7b429bd2bf561?Expires=1702252800&Signature=noDPREd1H-JD9JfDrMn4gZz0F3b5X9d4CHU9Xhq3wqC549vOCQRSTEpvTdMCbytG7HEj9KVjDTskUKPLWRCM6ynboCNHERHrEAGvzbmkqxoXf0WSn0NzMkD~pfj4QIJchTh18AmGaH-jfCjum8D5WExg9tPbjz06EsQ0qPkacfGEcfYt1ndEB1NSQPnhPJ0K2iCr0vJMwGREiX9GFSUr3yK-wqxFh~2B~JNXRBNtZNFPD77g0kZNNuk-SNDEER2JQYu1RtlRPCyWmQwQqBE4EfXYfb6WHc2QcxjZvEi4OFW6cRGV94N40zXOR9oCxZZ3zW4wTzydATGhQPOBf6kgxA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt=""
                    class="image-pulau" />
                </div>
                <div class="carousel-item">
                  <img
                    src="https://3.bp.blogspot.com/-x4ngxq2tNzQ/WMooc332yGI/AAAAAAAABd8/nOO00uvc3zUKbbgWLtI3SJ1qOTo8orbHwCEw/s1600/tari-perang-1.jpg"
                    alt=""
                    class="image-pulau" />
                </div>
                <div class="carousel-item">
                  <img
                    src="https://c1.staticflickr.com/3/2857/11849148443_43a1103f72_b.jpg"
                    alt=""
                    class="image-pulau" />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselImage"
                data-bs-slide="prev">
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselImage"
                data-bs-slide="next">
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div data-aos="fade-right">
            <p class="text-pulau">
              Kalimantan, atau juga disebut Borneo oleh dunia internasional,
              adalah pulau terbesar ketiga di dunia yang terletak di sebelah
              utara Pulau Jawa dan di sebelah barat Pulau Sulawesi. Pulau
              Kalimantan dibagi menjadi wilayah Indonesia (73%), Malaysia (26%),
              dan Brunei (1%). Pulau Kalimantan terkenal dengan julukan "Pulau
              Seribu Sungai" karena banyaknya sungai yang mengalir di pulau ini.
            </p>
          </div>
          <div data-aos="fade-right">
            <p class="text-pulau">
              Asal usul nama Kalimantan tidak begitu jelas. Sebutan kelamantan
              digunakan di Sarawak untuk menyebut kelompok penduduk yang
              mengonsumsi sagu di wilayah utara pulau ini. Menurut Crowfurd,
              kata Kalimantan adalah nama sejenis mangga (Mangifera) sehingga
              pulau Kalimantan adalah pulau mangga. Namun dia menambahkan bahwa
              kata itu berbau dongeng dan tidak populer. Mangga lokal yang
              disebut klemantan ini sampai sekarang banyak terdapat di perdesaan
              di daerah Ketapang dan sekitarnya, Kalimantan Barat.
            </p>
          </div>
          <div data-aos="fade-right">
            <p class="text-pulau">
              Pulau Kalimantan berada di tengah-tengah Asia Tenggara karena itu
              pulau ini banyak mendapat pengaruh budaya dan politik dari
              pulau-pulau sekitarnya. Sekitar tahun 400 pulau Kalimantan telah
              memasuki zaman sejarah dengan ditemukan prasasti Yupa peninggalan
              Kerajaan Kutai tetapi perkembangan kemajuan peradaban relatif
              lebih lambat dibandingkan pulau lain karena kendala geografis dan
              penduduk yang sedikit.
            </p>
          </div>
        </article>
        <div data-aos="fade-up">
          <article>
            <h3>Suku di Pulau Kalimantan</h3>
            <section class="splide" aria-label="Placeholder Example">
              <ul class="splide__pagination"></ul>
              <div class="splide__track">
                <ul class="splide__list">
                  @foreach ($kalimantan as $index)
                    
                  <li class="splide__slide">
                    <a href="/suku/{{ $index->id_budaya }}">
                      <div class="overlay-pulau"></div>
                      <img
                        src="{{ asset('storage/gambar/suku/' . $index->gambar) }}"
                        alt="" />
                      <p class="text-pulau__item">{{ $index->suku }}</p>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>

              <!-- default location -->
            </section>
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
