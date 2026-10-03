@extends('layouts.master')

@section('content')

@include('layouts._header', [
'title' => $book['title']
])

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-white py-2 px-5">

            @if($book['image'] ?? false)

            <div class="flex items-center justify-center">
                <img src="{{ $book['image'] }}" class="w-48" alt="">
            </div>

            @endif

            <p class="text-xl"><strong>Title :</strong> {{$book['title']}} </p>
            <p class="text-lg"><strong>Release Date :</strong> {{$book['date']}}</p>
            <p class="text-lg"><strong>Author : </strong> {{$book['author']}}</p>
        </div>
    </div>
</main>

@endsection