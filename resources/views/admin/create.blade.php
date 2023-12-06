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
    <div class="container-fluid">
      <aside>
        <div class="logo-container">
          <picture>
            <img class="logo" src="{{ asset('build/assets/logo/logo12.png') }}" alt="" />
          </picture>
          <picture>
            <img class="name-logo" src="{{ asset('build/assets/logo/logo.svg') }}" alt="" />
          </picture>
        </div>
        <ul>
          <li>
            <a href="{{ route('admin') }}"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="30"
                height="30"
                viewBox="0 0 30 30"
                fill="none">
                <g clip-path="url(#clip0_138_82)">
                  <path
                    d="M15 3.33325C6.71562 3.33325 0 10.0489 0 18.3333C0 21.0833 0.742188 23.6593 2.03437 25.8749C2.32656 26.376 2.88333 26.6666 3.46354 26.6666H26.5365C27.1167 26.6666 27.6734 26.376 27.9656 25.8749C29.2578 23.6593 30 21.0833 30 18.3333C30 10.0489 23.2844 3.33325 15 3.33325ZM15 6.66659C15.7661 6.66659 16.3844 7.19419 16.5792 7.89836C16.5214 8.01606 16.4417 8.11867 16.3995 8.24575L15.9193 9.6869C15.6521 9.86867 15.3479 9.99992 15.0005 9.99992C14.0802 9.99992 13.3339 9.25356 13.3339 8.33325C13.3339 7.41294 14.0797 6.66659 15 6.66659ZM5 21.6666C4.07969 21.6666 3.33333 20.9202 3.33333 19.9999C3.33333 19.0796 4.07969 18.3333 5 18.3333C5.92031 18.3333 6.66667 19.0796 6.66667 19.9999C6.66667 20.9202 5.92031 21.6666 5 21.6666ZM7.5 13.3333C6.57969 13.3333 5.83333 12.5869 5.83333 11.6666C5.83333 10.7463 6.57969 9.99992 7.5 9.99992C8.42031 9.99992 9.16667 10.7463 9.16667 11.6666C9.16667 12.5869 8.42031 13.3333 7.5 13.3333ZM20.3526 9.5619L17.1583 19.1452C17.8714 19.7567 18.3333 20.653 18.3333 21.6666C18.3333 22.277 18.1573 22.8411 17.8708 23.3333H12.1292C11.8427 22.8411 11.6667 22.277 11.6667 21.6666C11.6667 19.8989 13.0469 18.4671 14.7865 18.3546L17.9812 8.77075C18.1984 8.11658 18.9047 7.75773 19.5625 7.98065C20.2172 8.19888 20.5703 8.90721 20.3526 9.5619ZM21.1161 12.5411L21.9245 10.1166C22.1052 10.0494 22.2958 10.0004 22.5 10.0004C23.4203 10.0004 24.1667 10.7468 24.1667 11.6671C24.1667 12.5874 23.4203 13.3338 22.5 13.3338C21.9073 13.3333 21.412 13.0067 21.1161 12.5411ZM25 21.6666C24.0797 21.6666 23.3333 20.9202 23.3333 19.9999C23.3333 19.0796 24.0797 18.3333 25 18.3333C25.9203 18.3333 26.6667 19.0796 26.6667 19.9999C26.6667 20.9202 25.9203 21.6666 25 21.6666Z"
                    fill="black" />
                </g>
                <defs>
                  <clipPath id="clip0_138_82">
                    <rect width="30" height="30" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <h5>Dashboard</h5></a
            >
          </li>
        </ul>
      </aside>
      <main>
        <div class="admin-page">
          <div class="button-logout">
            <a href="#">Log Out</a>
          </div>
          <h1>Add Data Suku BudayaKu</h1>
          <form method="POST" action="{{ route('add_data') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="namaSuku" class="form-label">Nama Suku</label>
              <input
                type="text"
                class="form-control"
                id="namaSuku"
                name="suku" />
            </div>
            <div class="mb-3">
              <label for="namaPulau" class="form-label">di Pulau</label>
              <input
                type="text"
                class="form-control"
                id="namaPulau"
                name="pulau" />
            </div>
            <div class="mb-3">
              <label for="gambarSuku" class="form-label">Gambar Suku</label>
              <input
                type="file"
                class="form-control"
                id="gambarSuku"
                name="gambar" />
            </div>
            <div class="mb-3">
              <label for="deskripsiSuku" class="form-label">Deskripsi</label>
              <textarea
                class="form-control"
                id="deskripsiSuku"
                rows="3"
                name="deskripsi"></textarea>
            </div>
            <div class="mb-3">
              <label for="senjataSuku" class="form-label">Nama Senjata</label>
              <input
                type="text"
                class="form-control"
                id="senjataSuku"
                name="senjata" />
            </div>
            <div class="mb-3">
              <label for="gambarSenjata" class="form-label"
                >Gambar Senjata</label
              >
              <input
                type="file"
                class="form-control"
                id="gambarSenjata"
                name="gambar_senjata" />
            </div>
            <div class="mb-3">
              <label for="rumahAdatSuku" class="form-label"
                >Nama Rumah Adat</label
              >
              <input
                type="text"
                class="form-control"
                id="rumahAdatSuku"
                name="rumah_adat" />
            </div>
            <div class="mb-3">
              <label for="gambarRumahAdat" class="form-label"
                >Gambar Rumah Adat</label
              >
              <input
                type="file"
                class="form-control"
                id="gambarRumahAdat"
                name="gambar_rumah_adat" />
            </div>
            <div class="mb-3">
              <label for="pakaianAdatSuku" class="form-label"
                >Nama Pakaian Adat</label
              >
              <input
                type="text"
                class="form-control"
                id="pakaianAdatSuku"
                name="pakaian_adat" />
            </div>
            <div class="mb-3">
              <label for="gambarPakaianAdat" class="form-label"
                >Gambar Pakaian Adat</label
              >
              <input
                type="file"
                class="form-control"
                id="gambarPakaianAdat"
                name="gambar_pakaian_adat" />
            </div>
            <div class="mb-3">
              <label for="seniSuku" class="form-label">Nama Seni</label>
              <input
                type="text"
                class="form-control"
                id="seniSuku"
                name="seni" />
            </div>
            <div class="mb-3">
              <label for="gambarSeni" class="form-label">Gambar Seni</label>
              <input
                type="file"
                class="form-control"
                id="gambarSeni"
                name="gambar_seni" />
            </div>
            <div class="mb-3">
              <label for="bahasaSuku" class="form-label">Nama Bahasa</label>
              <input
                type="text"
                class="form-control"
                id="bahasaSuku"
                name="bahasa" />
            </div>
            <div class="mb-5">
              <button type="submit" class="button-send">Kirim</button>
            </div>
          </form>
        </div>
      </main>
    </div>
  </body>
</html>
