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
        <div data-aos="fade-down">
          <div class="hero">
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <iframe
                    src="https://www.youtube.com/embed/4pU73psmtPQ?si=9HuvVAbuq5GARDda"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                  </iframe>
                </div>
                <div class="carousel-item">
                  <iframe
                    src="https://www.youtube.com/embed/cbD_yqfYx9g?si=ky-JcOsOklp_ese5"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                  </iframe>
                </div>
                <div class="carousel-item">
                  <iframe
                    src="https://www.youtube.com/embed/dUGBT2n0YLA?si=PKe8pTYNe-jhjVX8"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                  </iframe>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="prev">
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="next">
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div data-aos="fade-up">
          <article>
            <h1>Explore Island</h1>
            <section class="splide" aria-label="Placeholder Example">
              <ul class="splide__pagination"></ul>
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <a
                      data-bs-toggle="collapse"
                      href="#jawa"
                      role="button"
                      aria-expanded="false"
                      aria-controls="jawa">
                      <div class="overlay-pulau"></div>
                      <img
                        src="https://langgar.co/wp-content/uploads/2020/06/Reynan-tutup_lawang_sigotaka-palembang.jpg"
                        alt="" />
                      <p class="text-pulau__item">Jawa</p>
                    </a>
                  </li>
                  <li class="splide__slide">
                    <a
                      data-bs-toggle="collapse"
                      href="#kalimantan"
                      role="button"
                      aria-expanded="false"
                      aria-controls="kalimantan">
                      <div class="overlay-pulau"></div>
                      <img
                        src="https://www.garnesia.com/images/news/b287.jpg"
                        alt="" />
                      <p class="text-pulau__item">Kalimantan</p>
                    </a>
                  </li>
                  <li class="splide__slide">
                    <a
                      data-bs-toggle="collapse"
                      href="#sumatera"
                      role="button"
                      aria-expanded="false"
                      aria-controls="sumatera">
                      <div class="overlay-pulau"></div>
                      <img
                        src="https://thegorbalsla.com/wp-content/uploads/2019/08/Budaya-Pulau-Sumatera.jpg"
                        alt="" />
                      <p class="text-pulau__item">Sumatera</p>
                    </a>
                  </li>
                  <li class="splide__slide">
                    <a
                      data-bs-toggle="collapse"
                      href="#sulawesi"
                      role="button"
                      aria-expanded="false"
                      aria-controls="sulawesi">
                      <div class="overlay-pulau"></div>
                      <img
                        src="https://perpustakaan.id/wp-content/uploads/2018/05/Kebudayaan-Sulawesi-Selatan.jpg"
                        alt="" />
                      <p class="text-pulau__item">Sulawesi</p>
                    </a>
                  </li>
                  <li class="splide__slide">
                    <a
                      data-bs-toggle="collapse"
                      href="#papua"
                      role="button"
                      aria-expanded="false"
                      aria-controls="papua">
                      <div class="overlay-pulau"></div>
                      <img
                        src="https://th.bing.com/th/id/OIP.RxtvSKq8YB4I-8evX9JnygHaFN?rs=1&pid=ImgDetMain"
                        alt="" />
                      <p class="text-pulau__item">Papua</p>
                    </a>
                  </li>
                </ul>
              </div>

              <!-- default location -->
            </section>
          </article>
        </div>
        <article>
          <div class="collapse" id="jawa">
            <h1>Jawa</h1>
            <img
              src="https://th.bing.com/th/id/R.717365497a7afbb43d6fdc31cbc7b03a?rik=2K9948lJymsFQw&riu=http%3a%2f%2fdiscoveryourindonesia.com%2fwp-content%2fuploads%2f2016%2f08%2fJava-Island.png&ehk=HCk8%2bMqLEM3MYx905UhgwROpeNgQg8Pmdezwx89lPzM%3d&risl=&pid=ImgRaw&r=0"
              alt="" />
            <div class="detail-island">
              <a href="{{ route('jawa') }}"
                >Lihat Selengkapnya
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="35"
                  viewBox="0 0 35 35"
                  fill="none">
                  <path
                    d="M24.083 18.6621L14.7861 27.959C14.1436 28.6016 13.1045 28.6016 12.4688 27.959L10.9238 26.4141C10.2812 25.7715 10.2812 24.7324 10.9238 24.0967L17.5137 17.5068L10.9238 10.917C10.2812 10.2744 10.2812 9.23535 10.9238 8.59961L12.4619 7.04102C13.1045 6.39844 14.1436 6.39844 14.7793 7.04102L24.0762 16.3379C24.7256 16.9805 24.7256 18.0195 24.083 18.6621Z"
                    fill="#0D3B66" /></svg
              ></a>
            </div>
          </div>
          <div class="collapse" id="kalimantan">
            <h1>Kalimantan</h1>
            <img
              src="https://i1.wp.com/discoveryourindonesia.com/wp-content/uploads/2017/06/Kalimantan.png?resize=700%2C652"
              alt="" />
            <div class="detail-island">
              <a href="{{ route('kalimantan') }}"
                >Lihat Selengkapnya
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="35"
                  viewBox="0 0 35 35"
                  fill="none">
                  <path
                    d="M24.083 18.6621L14.7861 27.959C14.1436 28.6016 13.1045 28.6016 12.4688 27.959L10.9238 26.4141C10.2812 25.7715 10.2812 24.7324 10.9238 24.0967L17.5137 17.5068L10.9238 10.917C10.2812 10.2744 10.2812 9.23535 10.9238 8.59961L12.4619 7.04102C13.1045 6.39844 14.1436 6.39844 14.7793 7.04102L24.0762 16.3379C24.7256 16.9805 24.7256 18.0195 24.083 18.6621Z"
                    fill="#0D3B66" /></svg
              ></a>
            </div>
          </div>
          <div class="collapse" id="sumatera">
            <h1>Sumatera</h1>
            <img
              src="https://discoveryourindonesia.com/wp-content/uploads/2016/08/Sumatera.png"
              alt="" />
            <div class="detail-island">
              <a href="{{ route('kalimantan') }}"
                >Lihat Selengkapnya
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="35"
                  viewBox="0 0 35 35"
                  fill="none">
                  <path
                    d="M24.083 18.6621L14.7861 27.959C14.1436 28.6016 13.1045 28.6016 12.4688 27.959L10.9238 26.4141C10.2812 25.7715 10.2812 24.7324 10.9238 24.0967L17.5137 17.5068L10.9238 10.917C10.2812 10.2744 10.2812 9.23535 10.9238 8.59961L12.4619 7.04102C13.1045 6.39844 14.1436 6.39844 14.7793 7.04102L24.0762 16.3379C24.7256 16.9805 24.7256 18.0195 24.083 18.6621Z"
                    fill="#0D3B66" /></svg
              ></a>
            </div>
          </div>
          <div class="collapse" id="sulawesi">
            <h1>Sulawesi</h1>
            <img
              src="https://th.bing.com/th/id/R.e1df814f69e6c4e64125d364dd90ea44?rik=ZDwLlghNRcr1Vw&riu=http%3a%2f%2fdiscoveryourindonesia.com%2fwp-content%2fuploads%2f2016%2f08%2fSulawesi-Island.png&ehk=Dpoz9fFkxs5s6cZzvXZWaKZ7exTMdSpsd9kWtNC%2f5t8%3d&risl=&pid=ImgRaw&r=0"
              alt="" />
            <div class="detail-island">
              <a href="{{ route('sulawesi') }}"
                >Lihat Selengkapnya
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="35"
                  viewBox="0 0 35 35"
                  fill="none">
                  <path
                    d="M24.083 18.6621L14.7861 27.959C14.1436 28.6016 13.1045 28.6016 12.4688 27.959L10.9238 26.4141C10.2812 25.7715 10.2812 24.7324 10.9238 24.0967L17.5137 17.5068L10.9238 10.917C10.2812 10.2744 10.2812 9.23535 10.9238 8.59961L12.4619 7.04102C13.1045 6.39844 14.1436 6.39844 14.7793 7.04102L24.0762 16.3379C24.7256 16.9805 24.7256 18.0195 24.083 18.6621Z"
                    fill="#0D3B66" /></svg
              ></a>
            </div>
          </div>
          <div class="collapse" id="papua">
            <h1>Papua</h1>
            <img
              src="https://discoveryourindonesia.com/wp-content/uploads/2016/08/Papua.png"
              alt="" />
            <div class="detail-island">
              <a href="{{ route('papua') }}"
                >Lihat Selengkapnya
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="35"
                  viewBox="0 0 35 35"
                  fill="none">
                  <path
                    d="M24.083 18.6621L14.7861 27.959C14.1436 28.6016 13.1045 28.6016 12.4688 27.959L10.9238 26.4141C10.2812 25.7715 10.2812 24.7324 10.9238 24.0967L17.5137 17.5068L10.9238 10.917C10.2812 10.2744 10.2812 9.23535 10.9238 8.59961L12.4619 7.04102C13.1045 6.39844 14.1436 6.39844 14.7793 7.04102L24.0762 16.3379C24.7256 16.9805 24.7256 18.0195 24.083 18.6621Z"
                    fill="#0D3B66" /></svg
              ></a>
            </div>
          </div>
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
            drag: false,
            perPage: 5,
            focus: 0,
            autoplay: true,

            breakpoints: {
              768: {
                autoWidth: true,
                type: 'loop',
                perPage: 3,
              },
              425: {
                autoWidth: true,
                type: 'loop',
                perPage: 1,
              },
            },
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
