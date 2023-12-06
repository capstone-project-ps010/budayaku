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
    {{-- <script src="{{ asset('build/assets/header-bar.js') }}"></script>
    <script src="{{ asset('build/assets/footer-bar.js') }}"></script>
    <script src="{{ asset('build/assets/utils/search.js') }}"></script> --}}
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
            <h2>Pulau Jawa</h2>
            <div id="carouselImage" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="https://moondoggiesmusic.com/wp-content/uploads/2019/07/Suku-Sunda-dari-Jawa-Barat.jpg"
                    alt=""
                    class="image-pulau" />
                </div>
                <div class="carousel-item">
                  <img
                    src="https://s3-alpha-sig.figma.com/img/6e76/225e/0e73a8ed32226392de8730e1cc0a97e8?Expires=1702252800&Signature=Lardd9l1zwO0HSMfUZI-MAeNBmga-udTMYUvb1QdlCYckdTr8F0zfhRFtXAL7NN9myyMSbKHFeCZCSTmf7ObEyfU7KKQxuVYvyg-lJN-~18VasR5Ugo2mIcliiVhpllAWdLff3012cY4NoZ2Rm2F7ffMBiMc8QUa0hgLI43l6sX7V9i38Fw-GQSfB8DjvVqYNBB4MlaYAwqnl0lUsXfrTGO4LWQUaZwgNGQgqXLmRicVYZg4i~cxTgIvMZl39EW8i8J078kBWyrzWT3sVTD10iu~Sv5pFXCr2s0ecTTE6m0l3OPvHsfWv2AQjCiXZ8riWRhudaGCPdedPLmO1yk7LQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt=""
                    class="image-pulau" />
                </div>
                <div class="carousel-item">
                  <img
                    src="https://4.bp.blogspot.com/-pZd3iBqxD3U/UcGNHJ4S1uI/AAAAAAAAARY/42oXFiEC_N0/s1600/Wayang+Kulit+Indonesian+Culture.jpg"
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
              Pulau Jawa adalah sebuah pulau di Indonesia yang terletak di
              kepulauan Sunda Besar dan merupakan pulau terluas ke-13 di dunia.
              Jumlah penduduk di Pulau Jawa sekitar 150 juta. Pulau Jawa dihuni
              oleh 60% total populasi Indonesia. Angka ini menurun jika
              dibandingkan dengan sensus penduduk tahun 1905 yang mencapai 80,6%
              dari seluruh penduduk Indonesia. Penurunan penduduk di Pulau Jawa
              secara persentase diakibatkan perpindahan penduduk (transmigrasi)
              dari pulau Jawa ke daerah lain di Indonesia. Ibu kota Indonesia
              adalah Jakarta dan terletak di Jawa bagian barat laut (tepatnya di
              ujung paling barat Jalur Pantura).
            </p>
          </div>
          <div data-aos="fade-right">
            <p class="text-pulau">
              Pulau ini merupakan bagian dari gugusan kepulauan Sunda Besar dan
              paparan Sunda, yang pada masa sebelum es mencair merupakan ujung
              tenggara benua Asia. Sisa-sisa fosil Homo erectus, yang populer
              dijuluki Manusia Jawa, ditemukan di sepanjang daerah tepian Sungai
              Bengawan Solo, dan peninggalan tersebut berasal dari masa 1,7 juta
              tahun yang lampau. Situs Sangiran adalah situs prasejarah yang
              penting di Jawa. Beberapa struktur megalitik telah ditemukan di
              Pulau Jawa, misalnya menhir, dolmen, meja batu, dan piramida
              berundak yang lazim disebut Punden Berundak. Punden berundak dan
              menhir ditemukan di situs megalitik di Paguyangan, Cisolok, dan
              Gunung Padang, Jawa Barat. Situs megalitik Cipari yang juga
              ditemukan di Jawa Barat menunjukkan struktur monolit, teras batu,
              dan sarkofagus. Punden berundak ini dianggap sebagai struktur asli
              Nusantara dan merupakan rancangan dasar bangunan candi pada zaman
              kerajaan Hindu-Buddha Nusantara setelah penduduk lokal menerima
              pengaruh peradaban Hindu-Buddha dari India. Pada abad ke-4 SM
              hingga abad ke-1 atau ke-5 M Kebudayaan Buni yaitu kebudayaan
              tembikar tanah liat berkembang di pesisir utara Jawa Barat.
              Kebudayaan protosejarah ini merupakan pendahulu kerajaan
              Tarumanagara.
            </p>
          </div>
          <div data-aos="fade-right">
            <p class="text-pulau">
              Mitos asal usul Pulau Jawa serta gunung-gunung berapinya
              diceritakan dalam sebuah kakawin, bernama Tangtu Panggelaran.
              Komposisi etnis di Pulau Jawa secara relatif dapat dianggap
              homogen, meskipun memiliki populasi yang besar dibandingkan dengan
              pulau-pulau besar lainnya di Indonesia. Terdapat dua kelompok
              etnis besar pulau ini, yaitu etnis Jawa dan etnis Sunda. Etnis
              Madura dapat pula dianggap sebagai kelompok ketiga; mereka berasal
              dari Pulau Madura yang berada di utara pantai timur Jawa, dan
              telah bermigrasi secara besar-besaran ke Jawa Timur sejak abad
              ke-18. Jumlah orang Jawa adalah sekitar dua-pertiga penduduk pulau
              ini, sedangkan orang Sunda mencapai 25% dan orang Madura mencapai
              4% lebih atau hampir 5%.
            </p>
          </div>
        </article>
        <div data-aos="fade-up">
          <article>
            <h3>Suku di Pulau Jawa</h3>
            <section class="splide" aria-label="Placeholder Example">
              <ul class="splide__pagination"></ul>
              <div class="splide__track">
                <ul class="splide__list">
                  @foreach ($jawa as $index )
                    
                  <li class="splide__slide">
                    <a href="/suku/{{$index->id_budaya}}">
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
