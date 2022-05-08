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
        <div class="comic-bottom-details">
            <div class="comic-bottom-inner w-60">
                <div class="talent">
                    <h2 class="comic-subtitle">Talent</h2>
                    <div>
                        <p class="comic-subtitle">Art by:</p>
                        <p class="comic-blue">
                            @foreach ($comic['artists'] as $artist)
                                {{$artist}}
                            @endforeach
                        </p>
                    </div>
                    <div>
                        <p class="comic-subtitle">Written by:</p>
                        <p class="comic-blue">
                            @foreach ($comic['writers'] as $writer)
                                {{$writer}}
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="specs">
                    <h2 class="comic-subtitle">Specs</h2>
                    <div>
                        <p class="comic-subtitle">Series:</p>
                        <p class="comic-blue text-uppercase">{{$comic['series']}}</p>
                    </div>
                    <div>
                        <p class="comic-subtitle">U.S Price:</p>
                        <p>{{$comic['price']}}</p>
                    </div>
                    <div>
                        <p class="comic-subtitle">On Sale Date:</p>
                        <p>{{$comic['sale_date']}}</p>
                    </div>
                </div>
            </div>
            <div class="comic-merch">
                <div class="comic-merch-inner w-60">
                    <div class="single-comic-merch">
                        <p class="text-uppercase">digital comics</p>
                        <div class="comic-icon"></div>
                    </div>
                    <div class="single-comic-merch">
                        <p class="text-uppercase">shop dc</p>
                        <div class="comic-icon"></div>
                    </div>
                    <div class="single-comic-merch">
                        <p class="text-uppercase">comic shop locator</p>
                        <div class="comic-icon"></div>
                    </div>
                    <div class="single-comic-merch">
                        <p class="text-uppercase">subscriptions</p>
                        <div class="comic-icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection