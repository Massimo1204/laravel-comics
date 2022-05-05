@extends('layouts.base')

@section('jumbotron')
    @include('partials.jumbotron')
@endsection

@section('main-content')
    <div class="comic-wrapper">
        <div class="comic-img-wrapper">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
        <div class="comic-details-outer-wrapper">
            <div class="comic-details-inner-wrapper w-60">
                <div class="comic-details">
                    <h1 class="comic-title text-uppercase">{{$comic['title']}}</h1>
                    <div class="comic-price">
                        <div class="comic-price-inner wp-75">
                            <div>
                                <span class="text-green-faded">
                                    U.S Price:
                                </span>
                                <span>
                                    {{$comic['price']}}
                                </span>
                            </div>
                            <div>
                                <span class="text-green-faded text-uppercase">
                                    available
                                </span>
                            </div>
                        </div>
                        <div class="comic-price-inner">
                            <span>
                                Check Availability <span class="tiny-triangle">&#11206;</span>
                            </span>
                        </div>
                    </div>
                    <p class="comic-description">
                        {{ $comic['description'] }}
                    </p>
                </div>
                <div class="ad-wrapper">
                    <img src="{{asset("images/adv.jpg")}}" alt="">
                </div>
            </div>
        </div>
        <div class="comic-bottom-details w-60">
            <div class="talent">
                <h2 class="comic-subtitle">Talent</h2>
                <div>
                    <p class="detail-title">Art by:</p>
                    <p class="comic-blue">
                        @foreach ($comic['artists'] as $artist)
                            {{$artist}}
                        @endforeach
                    </p>
                </div>
                <div>
                    <p class="detail-title">Written by:</p>
                    <p class="comic-blue">
                        @foreach ($comic['writers'] as $writer)
                            {{$writer}}
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="specs">
                <div>
                    <p class="detail-title">Series:</p>
                    <p class="comic-blue">{{$comic['series']}}</p>
                </div>
                <div>
                    <p class="detail-title">U.S Price:</p>
                    <p>{{$comic['price']}}</p>
                </div>
                <div>
                    <p class="detail-title">On Sale Date:</p>
                    <p>{{$comic['sale_date']}}</p>
                </div>
            </div>
            <div class="comic-merch-nav">
                @foreach ($merchNav as $item)
                    <div>
                        <p>
                            {{$item['title']}}
                        </p>
                        <img src="{{asset('images/'.$item['imgSrc'])}}" alt="{{$item['title']}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection