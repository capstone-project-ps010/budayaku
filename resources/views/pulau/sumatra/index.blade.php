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
          <h2>Pulau Sumatera</h2>
          <div id="carouselImage" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="https://s3-alpha-sig.figma.com/img/f205/cb27/b3c3a0f28803f558c36328dd6d5a9cdc?Expires=1702252800&Signature=he0s73kUiWXAnw4nL5XQ~E9N6kAaX0mfay4oocPSiRYCC4I0-9HGwWFaU6hIMJ70SO5D4bSvNECjaU5TjghosloasCLJPw5I6xlbOVq2KcVN2K-SspG2zIdo6KGvzUpTG25dYNcgVa00qLnF8K4akQx6XPA4umVxOWyO2H2ay6OFPQdHf1xNGEQMltld-onq4vd8NMXv1Rrh6JwIgdcusMpoj~0iN5FjPquLYsI22ciBNDHc7Js8d0oK6jGW-X7vS0b1nY67jvv3E4Sjv0Mi72VrbStUFm78HK8e37q9CFaAx0JikrS7gua-LqbS8RnVHnj7rvn3fQ83~7ra1UKDyg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                  alt=""
                  class="image-pulau" />
              </div>
              <div class="carousel-item">
                <img
                  src="https://1.bp.blogspot.com/-K2MZiapDR3s/VgHztBFeNjI/AAAAAAAAF6E/cLXMgDLhOP0/s1600/tari%2Bsumsel.jpg"
                  alt=""
                  class="image-pulau" />
              </div>
              <div class="carousel-item">
                <img
                  src="https://imujio.com/wp-content/uploads/2019/12/Sumatera-Barat-suku-minagkabau.jpg"
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
            Sumatra (kata tidak baku: Sumatera) adalah pulau keenam terbesar di
            dunia yang terletak di Indonesia, dengan luas 473.481 km². Penduduk
            pulau ini sekitar 57.940.351 (sensus 2018). Pulau ini dikenal pula
            dengan nama lain yaitu Pulau Percha, Andalas, atau Suwarnadwipa
            (bahasa Sanskerta, berarti "pulau emas"). Kemudian pada Prasasti
            Padang Roco tahun 1286 dipahatkan swarnnabhūmi (bahasa Sanskerta,
            berarti "tanah emas") dan bhūmi mālayu ("Tanah Melayu") untuk
            menyebut pulau ini. Selanjutnya dalam naskah Negarakertagama dari
            abad ke-14 juga kembali menyebut "Bumi Malayu" (Melayu) untuk pulau
            ini.
          </p>
          <p class="text-pulau">
            Asal nama Sumatra berawal dari keberadaaan Kerajaan Samudra
            (terletak di pesisir timur Aceh). Diawali dengan kunjungan Ibnu
            Batutah, petualang asal Maroko ke negeri tersebut pada tahun 1345,
            dia melafalkan kata Samudra menjadi Shumathra, dan kemudian menjadi
            Sumatra, selanjutnya nama ini tercantum dalam peta-peta abad ke-16
            buatan Portugis, untuk dirujuk pada pulau ini, sehingga kemudian
            dikenal meluas sampai sekarang.
          </p>
          <p class="text-pulau">
            Secara umum, pesisir timur pulau Sumatra didiami oleh bangsa Melayu,
            yang terbagi ke dalam beberapa suku/subsuku. Suku-suku besar lainnya
            selain suku Melayu ialah Batak, Minangkabau, Aceh, Lampung, Karo,
            Nias, Rejang, Komering, Gayo, Enggano, Mentawai, Devayan dan
            suku-suku lainnya. Di wilayah pesisir Sumatra dan di beberapa
            kota-kota besar seperti Medan, Batam,Pekan Baru, Palembang dan
            Bandar Lampung, banyak bermukim etnis pendatang seperti Jawa,
            Banjar, Sunda, Tionghoa dan India. Mata pencaharian penduduk Sumatra
            sebagian besar sebagai petani, nelayan, dan pedagang.
          </p>
        </article>
        <article>
          <h3>Suku di Pulau Sumatera</h3>
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
   @include('layouts.footer')
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