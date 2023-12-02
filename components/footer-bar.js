class FooterBar extends HTMLElement {
    connectedCallback() {
        this.render();
    }

    render() {
        this.innerHTML = `
        <footer>
        <div class="footer-title">
          <picture>
            <a href="../index.html"><img src="../img/logo12.png" alt="" /></a>
          </picture>
          <picture>
            <img class="text-logo" src="../img/logo.svg" alt="" />
          </picture>
        </div>
        <div class="footer-pulau">
          <h4>Pulau</h4>
          <a href="./pulau-jawa.html">Pulau Jawa</a>
          <a href="./pulau-kalimantan.html">Pulau Kalimantan</a>
          <a href="./pulau-sumatera.html">Pulau Sumatera</a>
          <a href="./pulau-sulawesi.html">Pulau Sulawesi</a>
          <a href="./pulau-papua.html">Pulau Papua</a>
        </div>
        <a class="about-us" href="./about-us.html">About Us</a>
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
        `
    }
}

customElements.define('footer-bar', FooterBar);