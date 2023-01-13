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
        @dd($comics)
    </section>
@endsection