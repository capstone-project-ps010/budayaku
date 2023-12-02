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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>BudayaKu</title>
  </head>
  <body>
    @include('layouts.navigasifull')
    <div class="container-xxl">
      <main>
        <article>
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
          <p class="text-pulau">
            Kalimantan, atau juga disebut Borneo oleh dunia internasional,
            adalah pulau terbesar ketiga di dunia yang terletak di sebelah utara
            Pulau Jawa dan di sebelah barat Pulau Sulawesi. Pulau Kalimantan
            dibagi menjadi wilayah Indonesia (73%), Malaysia (26%), dan Brunei
            (1%). Pulau Kalimantan terkenal dengan julukan "Pulau Seribu Sungai"
            karena banyaknya sungai yang mengalir di pulau ini.
          </p>
          <p class="text-pulau">
            Asal usul nama Kalimantan tidak begitu jelas. Sebutan kelamantan
            digunakan di Sarawak untuk menyebut kelompok penduduk yang
            mengonsumsi sagu di wilayah utara pulau ini. Menurut Crowfurd, kata
            Kalimantan adalah nama sejenis mangga (Mangifera) sehingga pulau
            Kalimantan adalah pulau mangga. Namun dia menambahkan bahwa kata itu
            berbau dongeng dan tidak populer. Mangga lokal yang disebut
            klemantan ini sampai sekarang banyak terdapat di perdesaan di daerah
            Ketapang dan sekitarnya, Kalimantan Barat.
          </p>
          <p class="text-pulau">
            Pulau Kalimantan berada di tengah-tengah Asia Tenggara karena itu
            pulau ini banyak mendapat pengaruh budaya dan politik dari
            pulau-pulau sekitarnya. Sekitar tahun 400 pulau Kalimantan telah
            memasuki zaman sejarah dengan ditemukan prasasti Yupa peninggalan
            Kerajaan Kutai tetapi perkembangan kemajuan peradaban relatif lebih
            lambat dibandingkan pulau lain karena kendala geografis dan penduduk
            yang sedikit.
          </p>
        </article>
        <article>
          <h3>Suku di Pulau Kalimantan</h3>
          <section class="splide" aria-label="Placeholder Example">
            <ul class="splide__pagination"></ul>
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <a href="./suku-jawa.html">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/314f/1a8a/de4ba34825666539aa7e4a89da495198?Expires=1701648000&Signature=nGTUCpEhcO103fvH~u5DGleDg460tmSttuxvvBgulb4DNvksoL3HyPhqesEF9QefdmXjTAsTrpSiiTTEq6zpmixA1W3Y3qoTUjeM6cA8YIavitAd6ce8WPe2IWKB5UvNIgD1E4ab2BFKbkvZwBTzhvqS7dQCB4CzLh5jrbYfLOcg-PuCW3DNcAZcpWqUTcEsOj1fFw7IW1uxRpYjbDv3hfQTXGnp3y315GrlxYUwOvWbk1SqI1i5cq62nwQd15FXaQ14zWu32ek6tZnwGxxAcJb~pIRB5SEmue~1H-KeFFrYgJaldZWpcKL~Oqt78zJe0mUJGPzAEnBs-uxqZNGNVg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Suku Jawa</p>
                  </a>
                </li>
                <li class="splide__slide">
                  <a href="#">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/ef96/7422/2c6fff7ed482493eb48542ebb4073897?Expires=1702252800&Signature=qGP6tkrZltOwwdBI0xxSLkqntmIfoWkYbp-1F-UHCrSUcCaArWUYci5vqM16y-LUVUkEeW8J~8B2FYAv~39nm-E7ZPZe1eIvzbVv7ctgFjaoigRy6OIewIVL8lUbJ0pHfPBqo4CK5x6~PSEUXlxEANuqFUFF-6S7Enw9rO5cM1GD5v~EUHNaj-0jirFsWxM376OZtFKjrlhCIfV4~x4bXncqz-CqZsuLQOzhWPUr6x7Eu2UM091OQykhibRQ~bKEaNH0QgHtSgoCWgQSKpEyinkEdl5f1xEI4z4bFRVv7iKDROWBWr7KgSeNywpkYWmHs5PEvvSt5NJ20Kc~uTjF-A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Suku Sunda</p>
                  </a>
                </li>
                <li class="splide__slide">
                  <a href="#">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/0ca7/6798/ba9586368d5e5fb551c854a00152eedb?Expires=1702252800&Signature=S0mY4mfkUZubkpvQClfUq2Cz~TUt0EyBauKgRkcSfjS6zdQX7IKqE7oZZQwVTS4Fsbl0jsjrxLcTIvhh-p4YLF3OhE7UomST1nIN1Q9kBM8EGDb0F0RN8bnXV-TlSnvVyOajflSj-QXV34pVB50pfMPLB1loArHaI~Tb~RetRcgWrR2XyFl~lYrFgDbATTEJp-DOReEtaRW41TIDB8RDx7bQtWunsXj0Vu7zWqTrqdPAzLht2oaOsf5nTB1qbRHM7EvTBDKaTijXbZKpW-EFSAnyvkbANHyJy2PAqXxv3zsdHQQqXRuLCuVz-Xi7C1wWjjAGrYugPs11HcoLO~V8nw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Suku Betawi</p>
                  </a>
                </li>
              </ul>
            </div>

            <!-- default location -->
          </section>
        </article>
      </main>
    </div>
    <div class="container-fluid">
      <footer>
        <div class="footer-title">
          <picture>
            <a href="#"><img src="{{ asset('build/assets/logo/logo12.png') }}" alt="" /></a>
          </picture>
          <picture>
            <img class="text-logo" src="{{ asset('build/assets/logo/logo.svg') }}" alt="" />
          </picture>
        </div>
        <div class="footer-pulau">
          <h4>Pulau</h4>
          <a href="{{ route('jawa') }}">Pulau Jawa</a>
          <a href="{{ route('kalimantan') }}">Pulau Kalimantan</a>
          <a href="{{ route('sumatra') }}">Pulau Sumatera</a>
          <a href="{{ route('sulawesi') }}">Pulau Sulawesi</a>
          <a href="{{ route('papua') }}">Pulau Papua</a>
        </div>
        <a class="about-us" href="#">About Us</a>
        <div class="footer-item">
          <div class="footer-medsos">
            <i class="fa-brands fa-facebook-f"></i>
            <p>: Facebook</p>
          </div>
          <div class="footer-medsos">
            <i class="fa-brands fa-instagram"></i>
            <p>: Instagram</p>
          </div>
        </div>
      </footer>
      <div class="copyright">
        <p>© 2023 BudayaKu</p>
      </div>
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
  </body>
</html>
