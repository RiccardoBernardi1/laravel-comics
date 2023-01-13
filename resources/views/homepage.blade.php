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
@endsection