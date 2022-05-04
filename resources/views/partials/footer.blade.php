<footer>
    <div class="w-80">
      <div class="footer-list">
        <div>
          <h3>Dc comics</h3>
          <ul>
            @foreach ($footerLinks['comics'] as $link)
              <li>
                {{ $link }}
              </li>
            @endforeach
          </ul>
          <h3>shop</h3>
          <ul>
            @foreach ($footerLinks['shop'] as $link)
              <li>{{ $link }}</li>
            @endforeach
          </ul>
        </div>
        <div>
          <h3>dc</h3>
          <ul>
            @foreach ($footerLinks['dc'] as $link)
              <li>{{ $link }}</li>
            @endforeach
          </ul>
        </div>
        <div>
          <h3>sites</h3>
          <ul>
            @foreach ($footerLinks['sites'] as $link)
              <li>{{ $link }}</li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="dc-logo"></div>
    </div>
    <div class="footer-bottom">
      <div class="w-80">
        <div class="footer-btn-wrapper">
          <button class="text-uppercase">sign-up now!</button>
        </div>
        <div class="footer-logos">
          <h2 class="text-uppercase">Follow us</h2>
          <ul>
            @foreach ($footerLogos as $logo)
              <li>
                <a href="{{$logo['url']}}">
                  <img
                    src="{{asset('images/'.$logo['imgSrc'])}}"
                    alt="{{$logo['title']}}"
                  />
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </footer>