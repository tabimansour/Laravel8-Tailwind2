<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Tailwind Laravel</title>
</head>
<body class="text-gray-400 text-md font-mono">
    <div><!-- content wrapper -->
        <div class="border-b border-gray-200 mx-0 my-5"><!-- start nav -->
            <nav class="m-5">
                <div class="justify-items-center">
                    <h1 class="">
                        <a href="/" class="text-5xl xl:text-tedzy m-4 2xl:text-yellow-500 xl:text-gray-700 md:text-red-900 lg:text-blue-900 text-red-800">LOGO HERE</a>
                    </h1>
                </div>
                <ul class="text-gray-700 text-lg uppercase mx-5">
                    <li>
                        <a href="">
                            <span class="font-bold">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <span>About</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <span>Services</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <span>Contact us</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!-- end nav -->

        <main class="p-16 bg-gray-100">
            <div class="flex justify-center md:justify-end items-center">
                <a href="" class="mx-5 text-red-600 hover:to-red-800">Login</a>
                <a href="" class="mx-5 text-red-600 hover:to-red-800">Sign-up</a>
            </div>

            <header class="text-left">
                <h2 class="text-5xl">Web News/Tutorials</h2>
                <h3 class="text-md font-semibold mt-2">for all IT lovers</h3>
            </header>

            <div>
                <h4 class="text-2xl font-semibold mt-10 pb-2 border-b border-gray-200">Latest Tutorials</h4>

                <div>
                    <div class="card"><!-- cards go here -->
                        <img src="{{ asset('/img/building-my-new-site-with-tailwind.jpg') }}" alt="Tailwind CSS" class="w-full h-64 object-cover" />
                        <div class="m-4">
                            <span class="font-bold">Preparation for using Tailwind</span>
                            <span class="block text-gray-500 text-sm">by Theo</span>
                        </div>
                        <div class="badge">
                            <span>{{Carbon\Carbon::parse('20201217')->diffForHumans()}}</span>
                        </div>
                    </div><!-- end of card -->

                    <div class="card"><!-- cards go here -->
                        <img src="{{ asset('/img/building-my-new-site-with-bootstrap.jpg') }}" alt="Bootstrap CSS" class="w-full h-64 object-cover" />
                        <div class="m-4">
                            <span class="font-bold">Preparation for using Bootstrap</span>
                            <span class="block text-gray-500 text-sm">by Theo</span>
                        </div>
                        <div class="badge">
                            <span>{{Carbon\Carbon::parse('20210122')->diffForHumans()}}</span>
                        </div>
                    </div><!-- end of card -->

                    <div class="card"><!-- cards go here -->
                        <img src="{{ asset('/img/bootstrap-vs-tailwind-css.jpg') }}" alt="Tailwind vs Bootstrap CSS" class="w-full h-64 object-cover" />
                        <div class="m-4">
                            <span class="font-bold">Tailwind 2 v/s Bootstrap 5</span>
                            <span class="block text-gray-500 text-sm">by Theo</span>
                        </div>
                        <div class="badge">
                            <span>{{Carbon\Carbon::parse('20210210')->diffForHumans()}}</span>
                        </div>
                    </div><!-- end of card -->
                </div>

                <h4 class="text-2xl font-semibold mt-10 pb-2 border-b border-gray-200">Popular News</h4>

                <div>
                    <div class="card"><!-- cards go here -->
                        <img src="{{ asset('/img/Tailwind-logo1.jpg') }}" alt="Tailwind Tutorial" class="w-full h-64 object-cover" />
                        <div class="m-4">
                            <span class="font-bold">Tailwind is the best</span>
                            <span class="block text-gray-500 text-sm">by Theo</span>
                        </div>
                        <div class="badge">
                            <span>{{Carbon\Carbon::parse('10-02-2021')->diffForHumans()}}</span>
                        </div>
                    </div><!-- end of card -->
                </div>

                <div class="flex justify-center">
                    <div>
                        <!-- loading -->Loading...
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
