@extends('template.master')
@section('title','Detail')
@section('content')
<div class="py-4">
    <h1 class="text-left mt-30 text-7xl">
        {{$category->Book->bookname}}
    </h1>
</div>
<div class="flex py-3">
    <h1 class="text-left mt-30 text-2xl">
        {{$category->Book->bookdescription}}
    </h1>
</div>
<div class="flex py-2">
    <H1>
        By {{$category->author}}
    </H1>
    <h1>
        | {{$category->postdate}}
    </h1>
</div>

<div class="w-full">
    <img src="{{$category->Book->imageurl}}" alt="" srcset="">
</div>
<a class="py-2" href="{{$category->sosmedurl}}">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Facebook
    </button>
</a>
<div>
    <h1 class="text-3xl text-justify w-50">
        {{$category->body}}
    </h1>
</div>
<div>
    <video width="360" height="240" src="{{$category->videourl}}" controls preload="none">
        Video cannot be displayed
    </video>
</div>
<a class="py-2" href="{{$category->sosmedurl}}">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Click this link if video doesn't work
    </button>
</a>

<a class="py-4" href="/">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Home
    </button>
</a>

@endsection
