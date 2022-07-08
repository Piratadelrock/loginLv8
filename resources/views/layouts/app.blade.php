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
        <a class="rounded-lg px-3 py-2 text-cyan-300 font-medium hover:bg-slate-100 hover:text-slate-900" href="login">login</a>
        <a class="rounded-lg px-3 py-2 text-cyan-50 font-medium hover:bg-slate-100 hover:text-slate-900" href="register">Register</a>
      </nav>


    @yield('content')

</body>

</html>
