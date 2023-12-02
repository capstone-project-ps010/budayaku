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
          <h2>Pulau Jawa</h2>
          <div id="carouselImage" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="https://s3-alpha-sig.figma.com/img/c6b3/6d27/8bc5dbdf4af02f5a7d011bb8244ebc07?Expires=1701648000&Signature=oOgm2aftvV4ANVbUHYn~0kqLeDmDj2Pgv7kFWMERz6-sN4DrtIshDfjIuy~FKOa8zoGd1YLAcRiFi4RgVm-NSVHATnpF2HDu8XQvV2FySBltrxiAHxqLqAyYoNcfnOIDVJynJNimidEk5kSHQwh8rP4JQt~f7WEcGIEwaaqMhMaa0dSijLe4lO3c8cKBLoSBzH~XIOs7PPr-uXzGnDHfrlYdPkYIVru4tVuBW6wT~Bxuq5YdmJYmRC2~tT7WSEqEdR~i-emjG6YqJTZJeHj0lbtHL0EG9dY~5ZvQ35xsGv9fikBiN12KxNqWiHosU8VacAdIyMPbdtyy7f8DqQuG4A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
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
            pengaruh peradaban Hindu-Buddha dari India. Pada abad ke-4 SM hingga
            abad ke-1 atau ke-5 M Kebudayaan Buni yaitu kebudayaan tembikar
            tanah liat berkembang di pesisir utara Jawa Barat. Kebudayaan
            protosejarah ini merupakan pendahulu kerajaan Tarumanagara.
          </p>
          <p class="text-pulau">
            Mitos asal usul Pulau Jawa serta gunung-gunung berapinya diceritakan
            dalam sebuah kakawin, bernama Tangtu Panggelaran. Komposisi etnis di
            Pulau Jawa secara relatif dapat dianggap homogen, meskipun memiliki
            populasi yang besar dibandingkan dengan pulau-pulau besar lainnya di
            Indonesia. Terdapat dua kelompok etnis besar pulau ini, yaitu etnis
            Jawa dan etnis Sunda. Etnis Madura dapat pula dianggap sebagai
            kelompok ketiga; mereka berasal dari Pulau Madura yang berada di
            utara pantai timur Jawa, dan telah bermigrasi secara besar-besaran
            ke Jawa Timur sejak abad ke-18. Jumlah orang Jawa adalah sekitar
            dua-pertiga penduduk pulau ini, sedangkan orang Sunda mencapai 25%
            dan orang Madura mencapai 4% lebih atau hampir 5%.
          </p>
        </article>
        <article>
          <h3>Suku di Pulau Jawa</h3>
          <section class="splide" aria-label="Placeholder Example">
            <ul class="splide__pagination"></ul>
            <div class="splide__track">
              <ul class="splide__list">
                @include('layouts.suku')
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
