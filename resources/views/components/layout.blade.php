<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="bg-black pb-20 font-sans text-white">

    <div class="px-10">
      <nav class="flex items-center justify-between border-b border-white/10 py-4">
        <div>
          <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions Logo" />
          </a>
        </div>

        <div class="space-x-6 font-bold">
          <a href="#">Jobs</a>
          <a href="#">Careers</a>
          <a href="#">Salary</a>
          <a href="#">Companies</a>
        </div>

        @auth
          <div class="flex font-bold">
            <a href="jobs/create">Post a Job</a>
          </div>

          <form method="POST" action="/logout">
            @csrf
            @method('delete')

            <button>Log Out</button>
          </form>
        @endauth

        @guest
          <div class="space-x-6 font-bold">
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
          </div>

        @endguest

      </nav>
    </div>

    <main class="mx-auto mt-10 max-w-[986px] px-10">
      {{ $slot }}
    </main>

  </body>

</html>
