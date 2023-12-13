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
          </div>
          <div data-aos="fade-right">
            <p class="text-pulau">
              Sulawesi merupakan salah satu dari empat Kepulauan Sunda Besar dan
              merupakan pulau terbesar kesebelas di dunia. Pulau Sulawesi
              terletak di sebelah timur Pulau Kalimantan, sebelah barat
              Kepulauan Maluku, dan sebelah selatan Mindanao dan Kepulauan Sulu,
              Filipina.
            </p>
          </div>
          <div data-aos="fade-right">
            <p class="text-pulau">
              Nama Sulawesi diperkirakan berasal dari kata dalam bahasa-bahasa
              di Sulawesi Tengah yaitu kata sula yang berarti nusa (pulau) dan
              kata mesi yang berarti besi (logam), yang mungkin merujuk pada
              praktik perdagangan bijih besi hasil produksi tambang-tambang yang
              terdapat di sekitar Danau Matano, dekat Sorowako, Luwu Timur.
              Sedangkan bangsa/orang-orang Portugis yang datang sekitar abad 14
              - 15 masehi adalah bangsa asing pertama yang menggunakan nama
              Celebes untuk menyebut pulau Sulawesi secara keseluruhan.
            </p>
          </div>
          <div data-aos="fade-right">
            <p class="text-pulau">
              Salah satu Kerajaan pertama di Pulau Sulawesi yang tercatat dalam
              sejarah Nusantara adalah Kerajaan Suwawa (sekarang masuk wilayah
              Provinsi Gorontalo) yang terbentuk sejak tahun 500-an Masehi atau
              abad ke-6 dengan telur Burung Maleo sebagai alat transaksi jual
              beli.
            </p>
          </div>
        </article>
        <div data-aos="fade-up">
          <article>
            <h3>Suku di Pulau Sulawesi</h3>
            <section class="splide" aria-label="Placeholder Example">
              <ul class="splide__pagination"></ul>
              <div class="splide__track">
                <ul class="splide__list">
                  @foreach ($sulawesi as $index)
                    
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
