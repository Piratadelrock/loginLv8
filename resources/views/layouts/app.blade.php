<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}

</head>

<body>
    <nav class="flex sm:justify-end space-x-4 bg-gradient-to-r from-sky-900 to-black">
        @if (auth()->check())
            <p class="text-xl text-white">Welcome {{ auth()->user()->name }} </p>
            <a class="font-bold py-2 px-4 rounded-lg text-cyan-50 bg-violet-500 font-medium hover:bg-red-600 hover:text-withe-900"
              href="{{ route('login.destroy') }}">Log Out</a>
        @else
            <a class="rounded-lg px-3 py-2 text-cyan-300 font-medium hover:bg-slate-100 hover:text-slate-900"
                href="{{ route('login') }}">login</a>
            <a class="rounded-lg px-3 py-2 text-cyan-50 font-medium hover:bg-slate-100 hover:text-slate-900"
                href="{{ route('register.index') }}">Register</a>
        @endif
    </nav>

    @yield('content')

</body>

</html>
