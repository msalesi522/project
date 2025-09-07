@extends('layout')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold mb-4">{{$post->title}}</h1>
        <p class="text-gray-700">{{ $post->description }}</p>
        <p class="text-gray-700">{{ $post->user->name }}</p>
        <div class="mt-4">
            <a href="{{ route('posts.index') }}" class="text-indigo-600 hover:text-indigo-800">بازگشت به لیست پست‌ها</a>
        </div>
    </div>
@endsection
