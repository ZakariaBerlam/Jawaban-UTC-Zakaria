@extends('template.master')
@section('title','group')
@section('content')
<div class="py-400">
    <h1 class="text-2xl px-5 underline">Latest Book reviews</h1>
</div>
<div class="container mx-auto grid grid-cols-3">
    @foreach ($category as $book)
            <a href="/Detail/{{$book->id}}" class="px-auto mx-10 my-10 py-auto flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{$book->imageurl}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$book->bookname}}</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$book->bookdescription}}</p>
                </div>
            </a>
    @endforeach
</div>
<a href="/">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Back
    </button>
</a>
@endsection
