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
      <div class="footer-pulau">
        <a class="about-us" href="{{ route('about_us') }}">About Us</a>
        <a class="about-us" href="{{ route('pengajuan') }}">Pengajuan</a> 
      </div>
      
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