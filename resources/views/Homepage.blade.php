@extends('template.master')
@section('title','homepage')
@section('content')

    @foreach ($books as $book)
        @if ($book->highlight==TRUE)
            <a href="/Detail/{{$book->id}}" class="w-full background-red-500 flex">
                <img class="h-599 py-10 px-6" src="{{$book->imageurl}}" alt="">
                <div class="flex-col justify-center">
                    <h1 class="text-2xl">
                        Highlight Book
                    </h1>
                    <h1 class="text-7xl py-20">
                        {{$book->bookname}}
                    </h1>
                    <h1 class="text-3xl">
                        {{$book->bookdescription}}
                    </h1>
                </div>
            </a>
        @endif
    @endforeach

    <div class="py-400">
        <h1 class="text-2xl px-5 underline">Latest Book reviews</h1>
    </div>
    <div class="container mx-auto grid grid-cols-3">
        @foreach ($books as $book)
            @if ($book->highlight == FALSE)
                <a href="/Detail/{{$book->id}}" class="px-auto mx-10 my-10 py-auto flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{$book->imageurl}}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$book->bookname}}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$book->bookdescription}}</p>
                    </div>
                </a>
            @endif
        @endforeach
    </div>

    <div class="py-400">
        <h1 class="text-2xl px-5 underline">
            Book Series Review
        </h1>
    </div>
    <div class="container mx-auto grid grid-cols-4">
        @php
            $groups = App\Models\BookGroup::all();
        @endphp
        @foreach ($groups as $group)
            <div class="mx-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="/Group/{{$group->id}}">
                    <img class="rounded-t-lg" src="{{$group->imageurl}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="/Group/{{$group->id}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$group->groupname}}</h5>
                    </a>
                    <a href="/Group/{{$group->id}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
