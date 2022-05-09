<header class="text-uppercase">
    <div class="w-80">
        <div>
          <img src="{{asset("images/dc-logo.png")}}" alt="dc logo" />
        </div>
        <div>
          <ul>
            @foreach ($headerNav as $item)
              <li>
                <a href="{{route('comics' , ['page' => $item['url']])}}" class="{{ Route::currentRouteName() == $item['url'] ? 'active' : ''}}">
                  {{ $item["text"] }}
                </a>
              </li>  
            @endforeach
          </ul>
        </div>
      </div>
</header>