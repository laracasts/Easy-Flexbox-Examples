<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="container mx-auto">

        <div class="border-b py-8">
            <h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">Instant Navigation</h1>

            <nav class="bg-blue-lightest py-4 px-4">
            {{-- <nav class="flex justify-between bg-blue-lightest py-4 px-4"> --}}
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Our Mission</a>
                <a href="#">Contact</a>
            </nav>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">Split Nav</h1>

            <nav class="bg-blue-lightest py-4 px-4">
            {{-- <nav class="flex justify-between bg-blue-lightest py-4 px-4"> --}}
                {{-- <div> --}}
                    <a href="#" class="px-4">Home</a>
                    <a href="#" class="px-4">About</a>
                {{-- </div> --}}

                {{-- <div> --}}
                    <a href="#" class="px-4">Our Mission</a>
                    <a href="#" class="px-4">Contact</a>
                {{-- </div> --}}
            </nav>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">Align Image With Text</h1>

            <div>
            {{-- <div class="flex items-center"> --}}
                <img src="http://via.placeholder.com/350x150">
                {{-- <img src="http://via.placeholder.com/350x150" class="mr-4"> --}}

                <div>
                    <h3 class="mb-4">My Trip To...</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">Perfectly Centered Text</h1>

            <div class="w-64 h-64 bg-grey-light flex items-center p-6">
                <div>
                    <h3 class="mb-4">Flexbox is Amazing</h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>

        <div class="border-b py-8">
            <h1 class="mb-6 text-grey-dark text-sm font-bold tracking-wide uppercase">Sticky Footer</h1>

            <a href="/sticky">Click Me</a>
        </div>

    </body>
</html>
