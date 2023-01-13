@extends("layouts.main")

@section('page-title')
    Homepage
@endsection

@section('page-content')
    <section id="hero">
        <div class="container">
            <button class="ms-btn fw-bold">
                CURRENT SERIES
            </button>
        </div>
    </section>
    <section id="cards" >
        @foreach ($comics as $comic)
            <div class="comic">
                <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
                <h4>{{$comic["title"]}}</h4>
            </div>   
        @endforeach
        <button class="ms-btn fw-bold mx-auto">
            LOAD MORE
        </button>
    </section>
    <section id="shops">
        <div class="container d-flex justify-content-around">
            <div class="shop">
                <img src="{{Vite::asset("resources/img/buy-comics-digital-comics.png")}}" alt="Logo Shop" />
                <span>DIGITAL COMICS</span>
            </div>
            <div class="shop">
                <img src="{{Vite::asset("resources/img/buy-comics-merchandise.png")}}" alt="Logo Shop" />
                <span>DC MERCHANDISE</span>
            </div>
            <div class="shop">
                <img src="{{Vite::asset("resources/img/buy-comics-subscriptions.png")}}" alt="Logo Shop" />
                <span>SUBSCRIPTION</span>
            </div>
            <div class="shop">
                <img src="{{Vite::asset("resources/img/buy-comics-shop-locator.png")}}" alt="Logo Shop" />
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="shop">
                <img src="{{Vite::asset("resources/img/buy-dc-power-visa.svg")}}" alt="Logo Shop" />
                <span>DC POWER VISA</span>
            </div>
        </div>
    </section>
@endsection