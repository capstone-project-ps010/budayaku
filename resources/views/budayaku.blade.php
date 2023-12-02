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
        <article>
          <h1>Explore Island</h1>
          <div class="list-cards">
            <div class="item-card">
              <a
                data-bs-toggle="collapse"
                href="#jawa"
                role="button"
                aria-expanded="false"
                aria-controls="jawa">
                <div class="overlay"></div>
                <img
                  src="https://s3-alpha-sig.figma.com/img/5593/9408/667c7cf4df0439655013cd9acb297b42?Expires=1701648000&Signature=VnrQU6ATLJGe0M3BGk27riY99VvLHyjG7GyMn~FYhW53f9Xm1gOM4qeVTAeD1ny9jYKq5y32hwIAWk7lNpvktDbO3KUuuhZKCbxvJtdeuAV4w6mR2eyv1gMc7YrbRtUNASG~RDBsQIdCDSA2TyBzpmYFmGgWULV7A4RLQaKlFYYTjf3nUst3lJTFarDOJPdvZtYKScMT~LFkH2-iXcHRzakmsp4tMBZUZ2sJWcdq8G7rTDgTL-eyQtd~0p57YLB8bJwUzUhhPsaZQq~KX88MeeE~gJts4FF0ohM9z~8iaHzO1aiFY1toMKa1oSMoxfuZKLSMzymX0so67UAevgUc~w__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                  alt="" />
                <p class="item-text">Jawa</p>
              </a>
            </div>
            <div class="item-card">
              <a
                data-bs-toggle="collapse"
                href="#kalimantan"
                role="button"
                aria-expanded="false"
                aria-controls="kalimantan">
                <div class="overlay"></div>
                <img
                  src="https://s3-alpha-sig.figma.com/img/6e5d/e013/a8d1c465b17ef55a6ae0bfbdcde09cb9?Expires=1701648000&Signature=bcp0sN3-U-KWOp2WG4cCZhjFMpA1bRRkjsXPFFxkMAgYOy4FKKTLyZx-pLmDG1Cs2IG597GXhLOP2lTedy4m4G~Um3w-G2eCbf3V7Xi6GLI-bHPZb9FZw6fuFdQhNNSGAiiDK5njDyyK1t7Qe6ue9vqVJPl6DNNydCunOA0kHncquJltrWKq~ZIT6tScbFCPciNqehjHA3hYqdDj3h33fO4UDVmyXZPa-jewtomF61fAY4~LRz5P2TgfwVbxEadOjAkfre9VwvUaCkMuPRFG4QRnVY6PI4B41rFNSkYCpLDovzz-5BsnkjjSW9k88zt6tsd7h5PntfUxS8HnSehMAA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                  alt="" />
                <p class="item-text">Kalimantan</p>
              </a>
            </div>
            <div class="item-card">
              <a
                data-bs-toggle="collapse"
                href="#sumatera"
                role="button"
                aria-expanded="false"
                aria-controls="sumatera">
                <div class="overlay"></div>
                <img
                  src="https://s3-alpha-sig.figma.com/img/3395/2de1/f77a435b9659c8d9e2e1994e4cd6b3bd?Expires=1701648000&Signature=orPt22recgMfboLjtJh0XuCpyvW2RAOEbjCIcpm-3ATkgrwQfya2w3zD9wLiB1OohM1zSCokp-J5tlMpIQ-C6X8b7uCZJholWhidMU35PuBKpwfBorMaoCOTTSRZbJdhqcET-GAnDJmk3vUS5KYzs~HZ2K30Yfd9~wMdSHPAeFC473DZjlRWeURCIarjQz-JAvV2VTjRFmtONs-98FWXkwbERCuPnryThlwvueJzOPXUqESQqc5cYhR4x3WIcqDzeabA4UQVB0QLD6dE1zuNzGV7hJPBBFZ4TX0Dm1DjevBkF30hsKXqiKKdciaJ9TgAbkxLxBALG4vSsu8dsvCsjQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                  alt="" />
                <p class="item-text">Sumatera</p>
              </a>
            </div>
            <div class="item-card">
              <a
                data-bs-toggle="collapse"
                href="#sulawesi"
                role="button"
                aria-expanded="false"
                aria-controls="sulawesi">
                <div class="overlay"></div>
                <img
                  src="https://s3-alpha-sig.figma.com/img/bde7/719c/af62acd593af3fc21de9c3e53a457799?Expires=1701648000&Signature=MAI7kpBAHJiYJx40bX4LWGAqcV1bd0jN7--A8c3MhO3sVIzHQk5GE-0Jfym50OhACRIFSIf8v6rSSRUx81w6OqxmJC4-r6DmiRXnHfEsIY1W~PevYOH4dVOQN0hzDSCKbzvzfCqX~EaeNz51TlnaOg3ATFy3R1W0~HvHBWQ25tPkVVvenQoeTuc3ZelRjyJBA1vjmKqVRHN7KcxKo9HNulKqXYptOvai2qhWQUfnLs-syZw-zFDIP4CwwEDFaNpRZNxc0Ch3WCsbP3-L3LEzgrkMCM43qJKUswigA8vBkQGDyBLbLzYanaZQkMdpKV7xc6hH5KsOC9EkYlvg51UUcA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                  alt="" />
                <p class="item-text">Sulawesi</p>
              </a>
            </div>
            <div class="item-card">
              <a
                data-bs-toggle="collapse"
                href="#papua"
                role="button"
                aria-expanded="false"
                aria-controls="papua">
                <div class="overlay"></div>
                <img
                  src="https://s3-alpha-sig.figma.com/img/4f1c/40fd/dd39f503a2eeb1d98dcf0eb94ed5f7cd?Expires=1701648000&Signature=JkDaPyfi4W7UfjyFVE2evK~AO9D7kESBOptDMD-b9wyA2Y-kvLn4RFeQt6VJ7Zif0uuFKgoBGmERSHGSM4xwPmBRjU9rPQLakNo8EWm-CUAkt4crtKVI1DlVI~IF~Rz99qUbhc5FlRUm1oJ1M20FpZCLP3ijhlyhJ1Xq8~v0TwS57XqumHs-ev1lJ~Ygl9W1Yua6cPGAhs~yNNavNX2vV~WnYhlGKTkocmCja77OcivFHlwF7h6u0CsWWQP5xl1oQbmwChuddrQz9Gg0Ytz5tax2dtmkfMUiwz3Gf1weEHxRSZT7HNNpt-wUVBc9NpdpOrz5UBeukX2izEGAEmzJZQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                  alt="" />
                <p class="item-text">Papua</p>
              </a>
            </div>
          </div>
        </article>
        <article>
          <div class="collapse" id="jawa">
            <h1>Jawa</h1>
            <img
              src="https://s3-alpha-sig.figma.com/img/be7e/740d/f324e6ad06263ff81e19b0493531c436?Expires=1701648000&Signature=Dabyq5yZbPewwNtEaimkAhj-D6FIpUlx~6GnuTrEjz8Oc7dIsL2GdnVlpXbHTLHFOszcJU13pDw1gqREEZfAkTbSc5PMx2xINwk3HprUdMRvBbnvjfE-W9iv6fwR~XQoahummGWkwImHjLtRlKbmPXD28ASGsFLNi-aNtnAuDKUIae~sfixD13-URop6xE0NrTLwHLWcuIxspT7FuNmwdY0k2WbpsXbEhrqeDeKf8Cat-wGrSU6tjgG7BujU0tfmt2Oioty2ddPJLcTuRHpyS0n9ctuYAkoJCGz8cEVJZKjx3d2nbUok~zDYPgo~c0upKFr2N0Jdy-PH-pA5s7R-Bw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
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
                    fill="#0D3B66" /></svg>
                </a>
            </div>
          </div>
          <div class="collapse" id="kalimantan">
            <h1>Kalimantan</h1>
            <img
              src="https://s3-alpha-sig.figma.com/img/da48/f160/10a7997f5b02fc6decfbdf89414a8092?Expires=1701648000&Signature=VKg0Sr2ELBlY2FGBUwvjM6b26qj8qc2xK-oX4WtzM5a3EJW2EJyGr~UhNpydylrxJ2BOP8d4i7Hf9Dmjp3KD1EQ0~xWwN6PIl6oiUaNxGnbq-oTSNMg69ZnyECsaavwRW0TVJy57VkJKYUZTgk6QXaNZ4BFAixRWWGtCvlW6XDkV8bOKOCfpakWYSAzN-201PJ3XMx-gpje5TizoemK0jovsAx3ZAeSvAPwVYZPy0WLUtgHjVswA7w5-YILbQv-NEawvw5IdHoGP6n~6b7WJWJlkfFxCEMylyGiHi87vChpjt53RJ5b~8amrsrH9h7J233HnaA4yh5d9e7Njlyw2Gg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
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
                    fill="#0D3B66" /></svg>
                  </a>
            </div>
          </div>
          <div class="collapse" id="sumatera">
            <h1>Sumatera</h1>
            <img
              src="https://s3-alpha-sig.figma.com/img/a8e0/e949/080b81e2438282e2965d6c31876e425c?Expires=1701648000&Signature=SO4sBsszkiEJ9HUJzBKZYJhq3B1JOCXRBgtHHrrMbO4CqdDvg0O6VAELY~-KF0YPjYkqBX9nHIC-nJKJxlZEAt9qVQdKeFeUk3--yMn1~Bbe-bJnEaXqnHMCvYsQIsVUDNVM5s2Dg8peSxq01mwrHqx1~zby7bjhWVlqsWQUp8nAWQsRJhNnYlAvzxDvpI14HADCByqod~blK~SaVNwSrVexqePqQ06lSsURaodezslppnASDCjQ5RpHhoocofh4xEblGrIFSLgtrVXyn3mfg317II4ZnhQ4wCd4YuL9wHQOZwmWFNbNDbeScmO1~l9IOnrAp6mJGmH9a8~~65MQ5A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
              alt="" />
            <div class="detail-island">
              <a href="{{ route('sumatra') }}"
                >Lihat Selengkapnya
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="35"
                  height="35"
                  viewBox="0 0 35 35"
                  fill="none">
                  <path
                    d="M24.083 18.6621L14.7861 27.959C14.1436 28.6016 13.1045 28.6016 12.4688 27.959L10.9238 26.4141C10.2812 25.7715 10.2812 24.7324 10.9238 24.0967L17.5137 17.5068L10.9238 10.917C10.2812 10.2744 10.2812 9.23535 10.9238 8.59961L12.4619 7.04102C13.1045 6.39844 14.1436 6.39844 14.7793 7.04102L24.0762 16.3379C24.7256 16.9805 24.7256 18.0195 24.083 18.6621Z"
                    fill="#0D3B66" /></svg>
                  </a>
            </div>
          </div>
          <div class="collapse" id="sulawesi">
            <h1>Sulawesi</h1>
            <img
              src="https://s3-alpha-sig.figma.com/img/37bb/8e4a/838de3e5232392223335b6ffc2b4807d?Expires=1701648000&Signature=jq4VkSJYc~N2ezI0H4xCay47e5jU~Qocr98amsX~ASClbZRZBbNxlA4THi9MledvegiuvlfAHE758TJpyLvbJM2vYO593FmmPcwoRg8ForuQ8Sb4PNCiORkVhXHm6qy00b6CUXm-oGU19XNKXIa-MTgB03fNnmA6wlANGevqoAX3t1B~mfuIJNoGwSP62wuUA1BkBInTLkEgyDVkqIgqvAcsXno-bw3lLMzGVKS-gJyoBNvfyKvjQXf9FOHcPffMGgW7h891JRAaAJeNzf0YeVhNncT7IfnMzKRMAavWt4yZY03gb0XFLtkSZconP3ObQeGGXs3wnqphQEmhhUUcYw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
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
                    fill="#0D3B66" /></svg>
                  </a>
            </div>
          </div>
          <div class="collapse" id="papua">
            <h1>Papua</h1>
            <img
              src="https://s3-alpha-sig.figma.com/img/7524/365e/6f85fb84d099b63ce933b52ea315bf0b?Expires=1701648000&Signature=KIs30CoulbOdTy0qwAau6GWSf3ht4cDQz1GHxuzIMjVmmvx4qJFQA8R5wyhzGrLEq4X8s-jlMps46QqgsHY9K1cfDZt5oNOfe9HX2m9wiUx2Iofghz9snO-2mK4G6l7KdBKqAyR9hUolCUQYiY80OiaG6W0sULHmKxV9uTZg5fofDw1DUatMD0SqjEQJsJo~N7DW9vwIYVPAwq3hsH9XbodHS0yXLM1O4CYvphYzjzOhjEO42LEnvvmKptLRu43-DckTZZWWV95d9XhrUzSr~bgr2Lhegn7LcdVXRuBm7bHWe8iInKF7hJl9ENKU0Z8vgrPXRcCSpD2EC6Rgh1L0zQ__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
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
                    fill="#0D3B66" /></svg>
                  </a>
            </div>
          </div>
        </article>
      </main>
    </div>
    @include('layouts.footer')
  </body>
</html>
