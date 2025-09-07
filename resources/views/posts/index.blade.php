@extends('layout')

@section('content')
    <main class="container mx-auto p-4">
        @if(session()->has('status'))
            <h2 class="text-2xl font-semibold mb-4">{{ session('status') }}</h2>
        @endif
            <h2 class="text-2xl font-semibold mb-4">لیست پست‌ها</h2>
        @foreach($posts as $post)
            <div class="space-y-4">
                <div class="bg-white p-4 shadow rounded">
                    <h3 class="text-lg font-bold"><a href="{{ route('posts.single',$post->id) }}"> {{ $post->title }} </a></h3>
                    <p class="text-gray-700">{{ $post->body }}</p>
                  @auth
                    @if(Auth::id()=== $post->user_id)
                            <div class="flex gap-2 mt-2 text-sm">
                                <a href="{{ route('posts.update',$post->id) }}" class="bg-amber-700 text-white rounded-full px-2 py-1">آپدیت</a>
                                <form action="{{ route('posts.delete',$post->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-700 text-white rounded-full px-2 py-1">حذف</button>
                                </form>
                            </div>
                    @endif
                  @endauth
                </div>
            </div>
{{--            <ul class="space-y-4">--}}
{{--                <li class="bg-gray-100 p-4 rounded-lg shadow-sm">--}}
{{--                    <a href="{{ route('posts.single',$post->id) }}"><h2 class="text-xl font-semibold">{{ $post->title }}</h2></a>--}}
{{--                    <p class="mt-2 text-gray-700">{{ $post->description }}</p>--}}
{{--                    <a href="{{ route('posts.single',$post->id) }}" class="mt-2 inline-block text-indigo-600 hover:text-indigo-800">مشاهده بیشتر</a>--}}
{{--                    <div>--}}
{{--                        <a href="{{ route('posts.update',$post->id) }}" class="bg-amber-700 text-white rounded-full px-2 py-1">آپدیت</a>--}}
{{--                        <form action="{{ route('posts.delete',$post->id) }}" method="post">--}}
{{--                            @csrf--}}
{{--                            @method('delete')--}}
{{--                            <button type="submit" class="bg-red-700 text-white rounded-full px-2 py-1">delete</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
        @endforeach

    </main>
@endsection
