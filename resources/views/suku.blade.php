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
          <h2>Suku {{ $suku->suku }}</h2>
          <img
            src="{{ asset('storage/gambar/suku/' . $suku->gambar) }}"
            alt=""
            class="image-suku" />
          <p class="text-suku">
            {{ $suku->deskripsi }},Dan Bahasa yang di gunakan oleh Suku {{ $suku->suku }} adalah Bahasa {{ $suku->bahasa }}
          </p>
        </article>
        <article>
          <h3>Adat Istiadat</h3>
          <section class="splide" aria-label="Placeholder Example" id="splide1">
            <ul class="splide__pagination"></ul>
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <a href="#">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/314f/1a8a/de4ba34825666539aa7e4a89da495198?Expires=1701648000&Signature=nGTUCpEhcO103fvH~u5DGleDg460tmSttuxvvBgulb4DNvksoL3HyPhqesEF9QefdmXjTAsTrpSiiTTEq6zpmixA1W3Y3qoTUjeM6cA8YIavitAd6ce8WPe2IWKB5UvNIgD1E4ab2BFKbkvZwBTzhvqS7dQCB4CzLh5jrbYfLOcg-PuCW3DNcAZcpWqUTcEsOj1fFw7IW1uxRpYjbDv3hfQTXGnp3y315GrlxYUwOvWbk1SqI1i5cq62nwQd15FXaQ14zWu32ek6tZnwGxxAcJb~pIRB5SEmue~1H-KeFFrYgJaldZWpcKL~Oqt78zJe0mUJGPzAEnBs-uxqZNGNVg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Kesenian {{ $suku->seni }}</p>
                  </a>
                </li>
                <li class="splide__slide">
                  <a href="#">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/ef96/7422/2c6fff7ed482493eb48542ebb4073897?Expires=1702252800&Signature=qGP6tkrZltOwwdBI0xxSLkqntmIfoWkYbp-1F-UHCrSUcCaArWUYci5vqM16y-LUVUkEeW8J~8B2FYAv~39nm-E7ZPZe1eIvzbVv7ctgFjaoigRy6OIewIVL8lUbJ0pHfPBqo4CK5x6~PSEUXlxEANuqFUFF-6S7Enw9rO5cM1GD5v~EUHNaj-0jirFsWxM376OZtFKjrlhCIfV4~x4bXncqz-CqZsuLQOzhWPUr6x7Eu2UM091OQykhibRQ~bKEaNH0QgHtSgoCWgQSKpEyinkEdl5f1xEI4z4bFRVv7iKDROWBWr7KgSeNywpkYWmHs5PEvvSt5NJ20Kc~uTjF-A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Rumah {{ $suku->rumah_adat }}</p>
                  </a>
                </li>
                <li class="splide__slide">
                  <a href="#">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/0ca7/6798/ba9586368d5e5fb551c854a00152eedb?Expires=1702252800&Signature=S0mY4mfkUZubkpvQClfUq2Cz~TUt0EyBauKgRkcSfjS6zdQX7IKqE7oZZQwVTS4Fsbl0jsjrxLcTIvhh-p4YLF3OhE7UomST1nIN1Q9kBM8EGDb0F0RN8bnXV-TlSnvVyOajflSj-QXV34pVB50pfMPLB1loArHaI~Tb~RetRcgWrR2XyFl~lYrFgDbATTEJp-DOReEtaRW41TIDB8RDx7bQtWunsXj0Vu7zWqTrqdPAzLht2oaOsf5nTB1qbRHM7EvTBDKaTijXbZKpW-EFSAnyvkbANHyJy2PAqXxv3zsdHQQqXRuLCuVz-Xi7C1wWjjAGrYugPs11HcoLO~V8nw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Pakaian {{ $suku->pakaian_adat }}</p>
                  </a>
                </li>
                <li class="splide__slide">
                  <a href="#">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://s3-alpha-sig.figma.com/img/0ca7/6798/ba9586368d5e5fb551c854a00152eedb?Expires=1702252800&Signature=S0mY4mfkUZubkpvQClfUq2Cz~TUt0EyBauKgRkcSfjS6zdQX7IKqE7oZZQwVTS4Fsbl0jsjrxLcTIvhh-p4YLF3OhE7UomST1nIN1Q9kBM8EGDb0F0RN8bnXV-TlSnvVyOajflSj-QXV34pVB50pfMPLB1loArHaI~Tb~RetRcgWrR2XyFl~lYrFgDbATTEJp-DOReEtaRW41TIDB8RDx7bQtWunsXj0Vu7zWqTrqdPAzLht2oaOsf5nTB1qbRHM7EvTBDKaTijXbZKpW-EFSAnyvkbANHyJy2PAqXxv3zsdHQQqXRuLCuVz-Xi7C1wWjjAGrYugPs11HcoLO~V8nw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                      alt="" />
                    <p class="text-pulau__item">Bahasa {{ $suku->bahasa }}</p>
                  </a>
                </li>
              </ul>
            </div>

            <!-- default location -->
          </section>
        </article>
        <article>
          <h3>Senjata</h3>
          <section class="splide" id="slider2" aria-label="Placeholder Example">
            <ul class="splide__pagination"></ul>
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <a href="#">
                    <div class="overlay-pulau"></div>
                    <img
                      src="https://tribratanews.polri.go.id/web/image/blog.post/53292/image"
                      alt="" />
                    <p class="text-pulau__item">{{ $suku->senjata }}</p>
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
