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
                <div>
                    <h1>
                        <a href="/" class="text-tedzy">LOGO HERE</a>
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

        <main class="p-16">
            <div class="border flex justify-end items-center">
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
                    <div><!-- cards go here -->
                        <img src="{{ asset('/img/building-my-new-site-with-tailwind.jpg') }}" alt="Tailwind CSS" />
                        <div>
                            <span>Preparation for using Tailwind</span>
                            <span>by Theo</span>
                        </div>
                    </div><!-- end of card -->
                </div>

                <h4 class="text-2xl font-semibold mt-10 pb-2 border-b border-gray-200">Popular News</h4>

                <div>
                    <div><!-- cards go here -->
                        <img src="{{ asset('/img/Tailwind-logo1.jpg') }}" alt="Tailwind Tutorial" />
                        <div>
                            <span>Tailwind is the best</span>
                            <span>by Theo</span>
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
