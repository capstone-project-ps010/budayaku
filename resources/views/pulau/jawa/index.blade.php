<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>BudayaKu</title>
  </head>
  <body>
    <div class="container-fluid">
      <header>
        <div class="logo">
          <picture>
            <a href="{{ route('dashboard') }}"
              ><img src="{{ asset('build/assets/logo/logo.svg') }}" alt="BudayaKu"
            /></a>
          </picture>
        </div>
        <div class="list">
          <ul>
            <div class="dropdown">
              <button
                class="dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Pulau
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('jawa') }}">Jawa</a></li>
                <li><a class="dropdown-item" href="#">Kalimantan</a></li>
                <li>
                  <a class="dropdown-item" href="#">Sumatera</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Sulawesi</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Papua</a>
                </li>
              </ul>
            </div>
            <li><a href="#">About Us</a></li>
            <div class="user">
              <li><a href="./login.html">Log In</a></li>
            </div>
          </ul>
        </div>
      </header>
    </div>
    <div class="container-xxl">
      <main>
        <article>
          <h2>Pulau Jawa</h2>
          <img
            src="https://s3-alpha-sig.figma.com/img/c6b3/6d27/8bc5dbdf4af02f5a7d011bb8244ebc07?Expires=1701648000&Signature=oOgm2aftvV4ANVbUHYn~0kqLeDmDj2Pgv7kFWMERz6-sN4DrtIshDfjIuy~FKOa8zoGd1YLAcRiFi4RgVm-NSVHATnpF2HDu8XQvV2FySBltrxiAHxqLqAyYoNcfnOIDVJynJNimidEk5kSHQwh8rP4JQt~f7WEcGIEwaaqMhMaa0dSijLe4lO3c8cKBLoSBzH~XIOs7PPr-uXzGnDHfrlYdPkYIVru4tVuBW6wT~Bxuq5YdmJYmRC2~tT7WSEqEdR~i-emjG6YqJTZJeHj0lbtHL0EG9dY~5ZvQ35xsGv9fikBiN12KxNqWiHosU8VacAdIyMPbdtyy7f8DqQuG4A__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
            alt=""
            class="image-pulau" />
          <p class="text-pulau">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non
            consequatur doloremque rerum mollitia ad aut! Vel, similique et
            accusamus ducimus amet excepturi eveniet ratione molestiae
            doloremque, voluptates iste quae maxime.
          </p>
        </article>
        <article>
          <h3>Suku di Pulau Jawa</h3>
          <section class="splide" aria-label="Placeholder Example">
            <ul class="splide__pagination"></ul>
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <div class="overlay-pulau"></div>
                  <img
                    src="https://s3-alpha-sig.figma.com/img/314f/1a8a/de4ba34825666539aa7e4a89da495198?Expires=1701648000&Signature=nGTUCpEhcO103fvH~u5DGleDg460tmSttuxvvBgulb4DNvksoL3HyPhqesEF9QefdmXjTAsTrpSiiTTEq6zpmixA1W3Y3qoTUjeM6cA8YIavitAd6ce8WPe2IWKB5UvNIgD1E4ab2BFKbkvZwBTzhvqS7dQCB4CzLh5jrbYfLOcg-PuCW3DNcAZcpWqUTcEsOj1fFw7IW1uxRpYjbDv3hfQTXGnp3y315GrlxYUwOvWbk1SqI1i5cq62nwQd15FXaQ14zWu32ek6tZnwGxxAcJb~pIRB5SEmue~1H-KeFFrYgJaldZWpcKL~Oqt78zJe0mUJGPzAEnBs-uxqZNGNVg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt="" />
                  <p class="text-pulau__item">Suku Jawa</p>
                </li>
                <li class="splide__slide">
                  <div class="overlay-pulau"></div>
                  <img
                    src="https://s3-alpha-sig.figma.com/img/314f/1a8a/de4ba34825666539aa7e4a89da495198?Expires=1701648000&Signature=nGTUCpEhcO103fvH~u5DGleDg460tmSttuxvvBgulb4DNvksoL3HyPhqesEF9QefdmXjTAsTrpSiiTTEq6zpmixA1W3Y3qoTUjeM6cA8YIavitAd6ce8WPe2IWKB5UvNIgD1E4ab2BFKbkvZwBTzhvqS7dQCB4CzLh5jrbYfLOcg-PuCW3DNcAZcpWqUTcEsOj1fFw7IW1uxRpYjbDv3hfQTXGnp3y315GrlxYUwOvWbk1SqI1i5cq62nwQd15FXaQ14zWu32ek6tZnwGxxAcJb~pIRB5SEmue~1H-KeFFrYgJaldZWpcKL~Oqt78zJe0mUJGPzAEnBs-uxqZNGNVg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt="" />
                  <p class="text-pulau__item">Suku Jawa</p>
                </li>
                <li class="splide__slide">
                  <div class="overlay-pulau"></div>
                  <img
                    src="https://s3-alpha-sig.figma.com/img/314f/1a8a/de4ba34825666539aa7e4a89da495198?Expires=1701648000&Signature=nGTUCpEhcO103fvH~u5DGleDg460tmSttuxvvBgulb4DNvksoL3HyPhqesEF9QefdmXjTAsTrpSiiTTEq6zpmixA1W3Y3qoTUjeM6cA8YIavitAd6ce8WPe2IWKB5UvNIgD1E4ab2BFKbkvZwBTzhvqS7dQCB4CzLh5jrbYfLOcg-PuCW3DNcAZcpWqUTcEsOj1fFw7IW1uxRpYjbDv3hfQTXGnp3y315GrlxYUwOvWbk1SqI1i5cq62nwQd15FXaQ14zWu32ek6tZnwGxxAcJb~pIRB5SEmue~1H-KeFFrYgJaldZWpcKL~Oqt78zJe0mUJGPzAEnBs-uxqZNGNVg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"
                    alt="" />
                  <p class="text-pulau__item">Suku Jawa</p>
                </li>
              </ul>
            </div>

            <!-- default location -->
          </section>
        </article>
      </main>
      <footer>
        <div class="footer-title">
          <p>© 2023 BudayaKu</p>
        </div>
        <div class="footer-item">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-instagram"></i>
        </div>
      </footer>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var splide = new Splide('.splide', {
          perPage: 3,
          focus: 0,
        });

        splide.mount();
      });
    </script>
  </body>
</html>
