@extends('layout')
@section('title', 'create_post')
@section('content')
    <main class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">اطلاعات پست خود را وارد کنید</h2>
        <form class="bg-white p-6 shadow rounded" action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-4 ">
                <label class="block text-gray-700">عنوان پست</label>
                <input type="text" name="title" class="w-full p-2 border rounded mt-1" value="{{ old('title') }}" placeholder="عنوان پست خود را وارد کنید" >
                @error('title')
                <span class="text-red-600 font-bold">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 ">
                <label class="block text-gray-700">محتوای پست</label>
                <textarea type="text" name="body"  class="w-full p-2 border rounded mt-1" rows="4" placeholder="محتوای پست خود را وارد کنید">{{ old('body') }}</textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">ایجاد پست</button>

{{--                <input label="name:" name="name" layoutClass="m-b4" />--}}
{{--            <span  class="text-red-600 font-bold">fdgg</span>--}}
{{--            <div class="mb-4">--}}
{{--                <label for="content" class="block text-sm font-medium text-gray-700">محتوا</label>--}}
{{--                <textarea id="content" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>--}}
{{--            </div>--}}
{{--            <div class="flex justify-end">--}}
{{--                <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">--}}
{{--                    ارسال--}}
{{--                </button>--}}
{{--            </div>--}}
        </form>
    </main>
@endsection
