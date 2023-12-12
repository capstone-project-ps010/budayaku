<div class="container-fluid">
    <header>
      <div class="logo">
        <picture>
          <a href="{{ route('dashboard') }}"
            ><img src="{{ asset('build/assets/logo/logo12.png') }}" alt="BudayaKu"
          /></a>
        </picture>
        <picture style="padding-right: 1rem">
          <img class="text-logo" src="{{ asset('build/assets/logo/logo.svg') }}" alt="" />
        </picture>
      </div>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @guest
      <div class="collapse header navbar-collapse" id="navbarText">
        <form
        
        action="{{ route('search') }}"
          class="d-flex"
          role="search"
          id="search-form"
          onsubmit="search(); return false;">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="25"
            height="25"
            viewBox="0 0 25 25"
            fill="none">
            <g clip-path="url(#clip0_118_20)">
              <path
                d="M24.6582 21.6162L19.79 16.748C19.5703 16.5283 19.2725 16.4062 18.96 16.4062H18.1641C19.5117 14.6826 20.3125 12.5146 20.3125 10.1562C20.3125 4.5459 15.7666 0 10.1562 0C4.5459 0 0 4.5459 0 10.1562C0 15.7666 4.5459 20.3125 10.1562 20.3125C12.5146 20.3125 14.6826 19.5117 16.4062 18.1641V18.96C16.4062 19.2725 16.5283 19.5703 16.748 19.79L21.6162 24.6582C22.0752 25.1172 22.8174 25.1172 23.2715 24.6582L24.6533 23.2764C25.1123 22.8174 25.1123 22.0752 24.6582 21.6162ZM10.1562 16.4062C6.7041 16.4062 3.90625 13.6133 3.90625 10.1562C3.90625 6.7041 6.69922 3.90625 10.1562 3.90625C13.6084 3.90625 16.4062 6.69922 16.4062 10.1562C16.4062 13.6084 13.6133 16.4062 10.1562 16.4062Z"
                fill="#C5C5C5" />
            </g>
            <defs>
              <clipPath id="clip0_118_20">
                <rect width="25" height="25" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <input
            class="form-control me-2"
            type="search"
            name="search"
            id="search-input"
            placeholder="Cari Berdasarkan Suku"
            aria-label="Search" />
            
        </form>
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
                <li>
                  <a class="dropdown-item" href="{{ route('jawa') }}"
                    >Jawa</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="{{ route('kalimantan') }}"
                    >Kalimantan</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="{{ route('sumatra') }}"
                    >Sumatera</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="{{ route('sulawesi') }}"
                    >Sulawesi</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('papua') }}"
                    >Papua</a
                  >
                </li>
              </ul>
            </div>
            <li><a href="{{ route('about_us') }}">About Us</a></li>
            <div class="user">
              <li><a href="{{ route('login') }}">Log In</a></li>
            </div>
          </ul>
        </div>
      </div>
      @else
        @can('isAdmin')
        <div class="collapse header navbar-collapse" id="navbarText">
            <form
            action="{{ route('search') }}"
              class="d-flex"
              role="search"
              id="search-form"
              onsubmit="search(); return false;">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                viewBox="0 0 25 25"
                fill="none">
                <g clip-path="url(#clip0_118_20)">
                  <path
                    d="M24.6582 21.6162L19.79 16.748C19.5703 16.5283 19.2725 16.4062 18.96 16.4062H18.1641C19.5117 14.6826 20.3125 12.5146 20.3125 10.1562C20.3125 4.5459 15.7666 0 10.1562 0C4.5459 0 0 4.5459 0 10.1562C0 15.7666 4.5459 20.3125 10.1562 20.3125C12.5146 20.3125 14.6826 19.5117 16.4062 18.1641V18.96C16.4062 19.2725 16.5283 19.5703 16.748 19.79L21.6162 24.6582C22.0752 25.1172 22.8174 25.1172 23.2715 24.6582L24.6533 23.2764C25.1123 22.8174 25.1123 22.0752 24.6582 21.6162ZM10.1562 16.4062C6.7041 16.4062 3.90625 13.6133 3.90625 10.1562C3.90625 6.7041 6.69922 3.90625 10.1562 3.90625C13.6084 3.90625 16.4062 6.69922 16.4062 10.1562C16.4062 13.6084 13.6133 16.4062 10.1562 16.4062Z"
                    fill="#C5C5C5" />
                </g>
                <defs>
                  <clipPath id="clip0_118_20">
                    <rect width="25" height="25" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <input
              name="search"
                class="form-control me-2"
                type="search"
                id="search-input"
                placeholder="Cari Berdasarkan Suku"
                aria-label="Search" />
            </form>
            <div class="list">
               
              <ul>
                <a href="">Dashboard Admin</a>
                <div class="dropdown">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Pulau
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="{{ route('jawa') }}"
                        >Jawa</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="{{ route('kalimantan') }}"
                        >Kalimantan</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="{{ route('sumatra') }}"
                        >Sumatera</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="{{ route('sulawesi') }}"
                        >Sulawesi</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('papua') }}"
                        >Papua</a
                      >
                    </li>
                  </ul>
                </div>
                <li><a href="{{ route('about_us') }}">About Us</a></li>
                <div class="user2">
                  @include('layouts.navbar2')
                </div>
              </ul>
            </div>
          </div>
        @elsecan('isUser')
        <div class="collapse header navbar-collapse" id="navbarText">
            <form
              action="{{ route('search') }}"
              class="d-flex"
              role="search"
              id="search-form"
              onsubmit="search(); return false;">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                viewBox="0 0 25 25"
                fill="none">
                <g clip-path="url(#clip0_118_20)">
                  <path
                    d="M24.6582 21.6162L19.79 16.748C19.5703 16.5283 19.2725 16.4062 18.96 16.4062H18.1641C19.5117 14.6826 20.3125 12.5146 20.3125 10.1562C20.3125 4.5459 15.7666 0 10.1562 0C4.5459 0 0 4.5459 0 10.1562C0 15.7666 4.5459 20.3125 10.1562 20.3125C12.5146 20.3125 14.6826 19.5117 16.4062 18.1641V18.96C16.4062 19.2725 16.5283 19.5703 16.748 19.79L21.6162 24.6582C22.0752 25.1172 22.8174 25.1172 23.2715 24.6582L24.6533 23.2764C25.1123 22.8174 25.1123 22.0752 24.6582 21.6162ZM10.1562 16.4062C6.7041 16.4062 3.90625 13.6133 3.90625 10.1562C3.90625 6.7041 6.69922 3.90625 10.1562 3.90625C13.6084 3.90625 16.4062 6.69922 16.4062 10.1562C16.4062 13.6084 13.6133 16.4062 10.1562 16.4062Z"
                    fill="#C5C5C5" />
                </g>
                <defs>
                  <clipPath id="clip0_118_20">
                    <rect width="25" height="25" fill="white" />
                  </clipPath>
                </defs>
              </svg>
              <input
                name="search"
                class="form-control me-2"
                type="search"
                id="search-input"
                placeholder="Cari Berdasarkan Suku"
                aria-label="Search" />
            </form>
            <div class="list">
              <ul>
                <a href="{{ route('pengajuan') }}">Pengajuan</a>
                <div class="dropdown">
                  <button
                    class="dropdown-toggle"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Pulau
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="{{ route('jawa') }}"
                        >Jawa</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="{{ route('kalimantan') }}"
                        >Kalimantan</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="{{ route('sumatra') }}"
                        >Sumatera</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="{{ route('sulawesi') }}"
                        >Sulawesi</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('papua') }}"
                        >Papua</a
                      >
                    </li>
                  </ul>
                </div>
                <li><a href="{{ route('about_us') }}">About Us</a></li>
                <div class="user2">
                  @include('layouts.navbar2')
                </div>
              </ul>
            </div>
          </div>
          @endcan
      @endguest
    </header>
  </div>