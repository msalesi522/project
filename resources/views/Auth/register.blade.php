@extends('layout')
@section('title', 'register')
@section('content')
    <main class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">اطلاعات خود را وارد کنید</h2>
        <form class="bg-white p-6 shadow rounded" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4 ">
                <label class="block text-gray-700">نام کاربری</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full p-2 border rounded mt-1" placeholder="نام کاربری خود را وارد کنید" >
                @error('name')
                <span class="text-red-600 font-bold">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 ">
                <label class="block text-gray-700"> ایمیل</label>
                <input type="email" name="email" class="w-full p-2 border rounded mt-1" value="{{ old('email') }}" placeholder="ایمیل خود را وارد کنید" >
                @error('email')
                <span class="text-red-600 font-bold">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 ">
                <label class="block text-gray-700"> پسورد</label>
                <input type="text" name="password" value="{{ old('password') }}" class="w-full p-2 border rounded mt-1" placeholder="پسورد خود را وارد کنید" >
                @error('password')
                <span class="text-red-600 font-bold">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4 ">
                <label class="block text-gray-700">پسورد مجدد</label>
                <input type="text" name="password_confirmation" class="w-full p-2 border rounded mt-1" placeholder="پسورد خود را دوباره وارد کنید" >
                @error('password_confirmation')
                <span class="text-red-600 font-bold">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">ثبت نام</button>

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
