@extends('layouts.master')


@section('content')

@include('layouts._header', [
'title' => 'Home'
])

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->

        <ul>
            @foreach( $books as $book)

            <li class="px-5 py-3 bg-white mb-3">
                <a href="{{ route('book-show', $book->id) }}">
                    <p><strong>Title :</strong> {{$book->title}} </p>
                    <p><strong>Author : </strong> {{$book->author}}</p>
                    <p><strong>Price:</strong> {{$book->price}}</p>
                </a>
            </li>

            @endforeach
        </ul>

    </div>
</main>

@endsection