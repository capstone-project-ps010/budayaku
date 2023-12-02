@foreach ( $jawa as $jawa )
        <li class="splide__slide">
            <a href="/suku/{{ $jawa->id_budaya }}">
             <div class="overlay-pulau"></div>
                <img
                    src="{{ asset('storage/gambar/suku/' . $jawa->gambar) }}"
                    alt="" />
                <p class="text-pulau__item">{{ $jawa->suku }}</p>
            </a>
        </li>
@endforeach