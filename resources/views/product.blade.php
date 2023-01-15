@extends("layouts.main")

@section('page-title')
    Product
@endsection

@section('page-content')
    <section id="hero">
        <div class="hero-bottom">
            <div class="container">
                <img src="{{$comics[0]["thumb"]}}" alt="{{$comics[0]["title"]}}">
            </div>
        </div>
    </section>
    <section id="description" class="container d-flex py-5">
        <div class="title-and-description">
            <h1 class="py-3 fw-bold fs-2">{{strtoupper($comics[0]["title"])}}</h1>
            <div class="price-available mb-3 d-flex justify-content-between align-items-center">
                <span class="fw-bold">U.S. Price: {{$comics[0]["price"]}}</span>
                <div class="d-flex align-items-center fw-bold">
                    <span class="text-end me-4 ">Availability</span>
                    <div class="dropdown ms-4">
                        <button class="btn dropdown-toggle fw-bold ms-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Check Availability
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <p>
                {{$comics[0]["description"]}}
            </p>
        </div>
        <div class="adv ms-5">
            <img src="{{Vite::asset("resources/img/adv.jpg")}}" alt="Adv">
        </div>
    </section>
    <section id="talent-and-specs" class="pt-4 ">
        <div class="container ">
            <div class="ms-p row justify-content-between">
                <div class="col-6 me-1">
                    <h3 class="fw-bold">Talents</h3>
                    <ul class="list-unstyled ms-list ">
                        <li class="py-2 row justify-content-between">
                            <span class="col-2">Art by:</span>  
                            <span class="authors-list col-8">
                                @foreach($comics[0]["artists"] as $artist)
                                    @if($loop->last)
                                        <a href="#">{{$artist}}</a>
                                    @else
                                        <a href="#">{{$artist}}</a>,
                                    @endif
                                @endforeach
                            </span>
                        </li>
                        <li class="py-2 row justify-content-between">
                            <span class="col-2">Written by:</span>  
                            <span class="authors-list col-8">
                                @foreach($comics[0]["writers"] as $writer)
                                    @if($loop->last)
                                        <a href="#">{{$writer}}</a>
                                    @else
                                        <a href="#">{{$writer}}</a>,
                                    @endif
                                @endforeach
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-5">
                    <h3 class="fw-bold">Specs</h3>
                    <ul class="list-unstyled ms-list ">
                        <li class="py-2 row justify-content-between">
                            <span class="col-3">Series:</span>  
                            <a href="#" class="col-7 fw-bold">{{strtoupper($comics[0]["series"])}}</a>
                        </li>
                        <li class="py-2 row justify-content-between">
                            <span class="col-3">U.S. Price:</span>  
                            <span class="col-7">{{$comics[0]["price"]}}</span>
                        </li>
                        <li class="py-2 row justify-content-between">
                            <span class="col-3">On Sale Date:</span>  
                            <span class="col-7">{{$comics[0]["sale_date"]}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="product-shops">
        <div class="container">
            <div class="ms-p d-flex justify-content-around">
                <div class="shop d-flex p-3 justify-content-between">
                    <div class="shop-title fw-bold">DIGITAL COMICS</div>
                    <div>
                        <img src="{{Vite::asset("resources/img/buy-comics-digital-comics.png")}}" alt="Logo Shop" />
                    </div>
                </div>
                <div class="shop d-flex p-3 justify-content-between">
                    <div class="shop-title fw-bold">DC MERCHANDISE</div>
                    <div>
                        <img src="{{Vite::asset("resources/img/buy-comics-merchandise.png")}}" alt="Logo Shop" />
                    </div>
                </div>
                <div class="shop d-flex p-3 justify-content-between">
                    <div class="shop-title fw-bold">SUBSCRIPTION</div>
                    <div>
                        <img src="{{Vite::asset("resources/img/buy-comics-subscriptions.png")}}" alt="Logo Shop" />
                    </div>
                </div>
                <div class="shop d-flex p-3 justify-content-between">
                    <div class="shop-title fw-bold">COMIC SHOP LOCATOR</div>
                    <div >
                        <img src="{{Vite::asset("resources/img/buy-comics-shop-locator.png")}}" alt="Logo Shop" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection