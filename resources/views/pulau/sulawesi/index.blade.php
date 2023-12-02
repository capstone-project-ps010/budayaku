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
          <h2>Pulau Sulawesi</h2>
          <div id="carouselImage" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="https://s3-alpha-sig.figma.com/img/4bcb/3352/639b27fe6d42b889da95a413a2d0eac8?Expires=1702252800&Signature=bnJtG-GRilYdWhUHtr88AC70WE56lY8bRv6jlOOcG72qQxov-WetKPZs3edpsOQaJ9LEnCaWa0LIxWMjhMpC~BiDQwI8qBmA0O7~ngxQ1B~jR0Z27vZ68FQWv5D3YiGEuH6~CU3bIGreK0kaBSml~LDdW3D6D9XS~VENavL8A-4oMVE4eLKfTQDKDcuKsddTZPGkW2jt1D8oPMiBTHFs3PqoVqlxPZ3wxi6M34fmxaavjeOfJxfzdIW~g2AtbFLofUdo0XG88gU4hfFJabb7H3xOqcUmm3elHta4MDSsg7l6u0Ar9ErW7ANJm61t1ZIXrImzdFLRmaKwwO9bpqDxOQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                  alt=""
                  class="image-pulau" />
              </div>
              <div class="carousel-item">
                <img
                  src="https://th.bing.com/th/id/R.bb1f4be2c53c3fcc07cebd50444a736b?rik=M9K%2fFUXyshr%2bvw&riu=http%3a%2f%2fparksandtourism.net%2fwp-content%2fuploads%2f2020%2f12%2fTari-Tradisional-Kipas-Pakarena2-768x512.jpg&ehk=tFakF18jwCKb4ceGde3%2baeBFz7CVgQwEPYczIbDLEtA%3d&risl=&pid=ImgRaw&r=0"
                  alt=""
                  class="image-pulau" />
              </div>
              <div class="carousel-item">
                <img
                  src="https://imujio.com/wp-content/uploads/2019/12/Tarian-Tradisional-Kebudayaan-Sulawesi-Tengah.jpg"
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
            Sulawesi merupakan salah satu dari empat Kepulauan Sunda Besar dan
            merupakan pulau terbesar kesebelas di dunia. Pulau Sulawesi terletak
            di sebelah timur Pulau Kalimantan, sebelah barat Kepulauan Maluku,
            dan sebelah selatan Mindanao dan Kepulauan Sulu, Filipina.
          </p>
          <p class="text-pulau">
            Nama Sulawesi diperkirakan berasal dari kata dalam bahasa-bahasa di
            Sulawesi Tengah yaitu kata sula yang berarti nusa (pulau) dan kata
            mesi yang berarti besi (logam), yang mungkin merujuk pada praktik
            perdagangan bijih besi hasil produksi tambang-tambang yang terdapat
            di sekitar Danau Matano, dekat Sorowako, Luwu Timur. Sedangkan
            bangsa/orang-orang Portugis yang datang sekitar abad 14 - 15 masehi
            adalah bangsa asing pertama yang menggunakan nama Celebes untuk
            menyebut pulau Sulawesi secara keseluruhan.
          </p>
          <p class="text-pulau">
            Salah satu Kerajaan pertama di Pulau Sulawesi yang tercatat dalam
            sejarah Nusantara adalah Kerajaan Suwawa (sekarang masuk wilayah
            Provinsi Gorontalo) yang terbentuk sejak tahun 500-an Masehi atau
            abad ke-6 dengan telur Burung Maleo sebagai alat transaksi jual
            beli.
          </p>
        </article>
        <article>
          <h3>Suku di Pulau Sulawesi</h3>
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
