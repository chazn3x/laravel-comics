@extends('layouts.base')

@section('pageTitle')
    Home Page
@endsection

@section('pageContent')
    <main>
        <div class="hero">
            <div class="text">
                <h2>Teen Titans Go!: Titans Together</h2>
                <p>A new full-size collection featuring TEEN TITANS GO #27-32!</p>
            </div>
        </div>
        <div class="container">
            <section>
                <h2>Current series</h2>
                <div class="comics-list">
                    @foreach ($comics as $comic)
                    <div class="card">
                        <div class="img">
                            <img src="{{$comic["thumb"]}}" alt="{{$comic["series"]}}">
                            <div class="info">
                                <p>Price: {{$comic["price"]}}</p>
                                <p>Type: {{$comic["type"]}}</p>
                            </div>
                        </div>
                        <h4>{{$comic["series"]}}</h4>
                    </div>
                    @endforeach
                </div>
                <div class="load-more">
                    <a href="#">Load more</a>
                </div>
            </section>
        </div>

    </main> 
@endsection