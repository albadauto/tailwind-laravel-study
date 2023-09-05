@extends('template')

@section('content')
<div class="h-screen w-screen flex items-center justify-center ">
    <div class="w-80">
        <h2 class="font-bold text-center text-lg mb-4">Login</h2>
        <div class="bg-white shadow-md rounded-md p-6 space-y-4">
            <div>
                <label for="email" class="text-sm text-gray-800 mb-1 font-bold">Email</label>
                <input type="email" name="email" id="" class="w-full bg-gray-50 border border-gray">
            </div>

            <div>
                <label for="email" class="text-sm text-gray-800 mb-1">Senha</label>
                <input type="password" name="" id="" class="w-full bg-gray-50 border border-gray">
            </div>
            <div class="text-center text-blue-500 hover:text-blue-600">
                <a href="#">Esqueci minha senha</a>
            </div>
            <div class="text-center mt-5">
                <button type="submit"
                    class="w-full bg-blue-500 px-sm text-sm text-white px-8 py-2 rounded-md hover:bg-blue-600">Login</button>
            </div>
        </div>
    </div>

</div>

    @endsection
