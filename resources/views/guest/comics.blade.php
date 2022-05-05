@extends('layouts.base')

@section('jumbotron')
    @include('partials.jumbotron')
@endsection

@section('main-content')
    <div class="w-80 card-wrapper">
        @foreach ($comics as $index => $comic)
            <div class="card">
                <a href="#">
                    <div class="img-wrapper">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['type']}}" />
                    </div>
                    <h3 class="text-uppercase">{{ $comic['series'] }}</h3>
                </a>
            </div>
        @endforeach
        
        <div class="btn-wrapper">
            <button class="text-uppercase">load more</button>
        </div>
    </div>
    <nav class="merchNav">
        @foreach ($merchNav as $index => $item)
            <div>
                <img src="{{asset('images/'.$item['imgSrc'])}}" alt="{{$item['title']}}"/>
                <h5 class="text-uppercase">{{ $item['title'] }}</h5>
            </div>
        @endforeach
        
    </nav>
    
@endsection