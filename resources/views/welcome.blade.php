{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}




<x-home-master>

    @section('content')
  
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="activity"></i></div>
                                    Dashboard
                                </h1>
                                <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container mt-n10">
                <div class="row">
                    <div class="col-xxl-4 col-xl-6 mb-4">
                        <!-- Dashboard example card 1-->
                        <a class="card lift h-100" href="#!">
                            <div class="card-body d-flex justify-content-center flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <i class="feather-xl text-primary mb-3" data-feather="package"></i>
                                        <h5>Powerful Components</h5>
                                        <div class="text-muted">To create informative visual elements on your pages</div>
                                    </div>
                                    <img class="card-img-top" src="assets/img/freepik/browser-stats-pana.svg" alt="..." style="width: 10rem;" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-4 col-xl-6 mb-4">
                        <!-- Dashboard example card 2-->
                        <a class="card lift h-100" href="#!">
                            <div class="card-body d-flex justify-content-center flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <i class="feather-xl text-secondary mb-3" data-feather="book"></i>
                                        <h5>Documentation</h5>
                                        <div class="text-muted">To keep you on track when working with our toolkit</div>
                                    </div>
                                    <img class="card-img-top" src="assets/img/freepik/processing-pana.svg" alt="..." style="width: 10rem;" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-4 col-xl-6 mb-4">
                        <!-- Dashboard example card 3-->
                        <a class="card lift h-100" href="#!">
                            <div class="card-body d-flex justify-content-center flex-column">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mr-3">
                                        <i class="feather-xl text-green mb-3" data-feather="layout"></i>
                                        <h5>Pages &amp; Layouts</h5>
                                        <div class="text-muted">To help get you started when building your new UI</div>
                                    </div>
                                    <img class="card-img-top" src="assets/img/freepik/windows-pana.svg" alt="..." style="width: 10rem;" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-8">
                        <!-- Tabbed dashboard card example-->
                        <div class="card mb-4">
                            <div class="card-header border-bottom">
                                <!-- Dashboard card navigation-->
                                <ul class="nav nav-tabs card-header-tabs" id="dashboardNav" role="tablist">
                                    <li class="nav-item mr-1"><a class="nav-link active" id="overview-pill" href="#overview" data-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">Overview</a></li>
                                    <li class="nav-item"><a class="nav-link" id="activities-pill" href="#activities" data-toggle="tab" role="tab" aria-controls="activities" aria-selected="false">Activities</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="dashboardNavContent">
                                    <!-- Dashboard Tab Pane 1-->
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-pill">
                                        <div class="chart-area mb-4 mb-lg-0" style="height: 20rem;"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                    </div>
                                    <!-- Dashboard Tab Pane 2-->
                                    <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-pill">
                                        <div class="datatable table-responsive">
                                            <table class="table table-bordered table-hover" id="dataTableActivity" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Event</th>
                                                        <th>Time</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Event</th>
                                                        <th>Time</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td>01/13/20</td>
                                                        <td>
                                                            <i class="mr-2 text-green" data-feather="zap"></i>
                                                            Server online
                                                        </td>
                                                        <td>1:21 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/13/20</td>
                                                        <td>
                                                            <i class="mr-2 text-red" data-feather="zap-off"></i>
                                                            Server restarted
                                                        </td>
                                                        <td>1:00 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/12/20</td>
                                                        <td>
                                                            <i class="mr-2 text-purple" data-feather="shopping-cart"></i>
                                                            New order placed! Order #
                                                            <a href="javascript:void(0);">1126550</a>
                                                        </td>
                                                        <td>5:45 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/12/20</td>
                                                        <td>
                                                            <i class="mr-2 text-blue" data-feather="user"></i>
                                                            Valerie Luna submitted
                                                            <a href="javascript:void(0);">quarter four report</a>
                                                        </td>
                                                        <td>4:23 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/12/20</td>
                                                        <td>
                                                            <i class="mr-2 text-yellow" data-feather="database"></i>
                                                            Database backup created
                                                        </td>
                                                        <td>3:51 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/12/20</td>
                                                        <td>
                                                            <i class="mr-2 text-purple" data-feather="shopping-cart"></i>
                                                            New order placed! Order #
                                                            <a href="javascript:void(0);">1126549</a>
                                                        </td>
                                                        <td>1:22 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/11/20</td>
                                                        <td>
                                                            <i class="mr-2 text-blue" data-feather="user-plus"></i>
                                                            New user created:
                                                            <a href="javascript:void(0);">Sam Malone</a>
                                                        </td>
                                                        <td>4:18 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/11/20</td>
                                                        <td>
                                                            <i class="mr-2 text-purple" data-feather="shopping-cart"></i>
                                                            New order placed! Order #
                                                            <a href="javascript:void(0);">1126548</a>
                                                        </td>
                                                        <td>4:02 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/11/20</td>
                                                        <td>
                                                            <i class="mr-2 text-purple" data-feather="shopping-cart"></i>
                                                            New order placed! Order #
                                                            <a href="javascript:void(0);">1126547</a>
                                                        </td>
                                                        <td>3:47 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/11/20</td>
                                                        <td>
                                                            <i class="mr-2 text-green" data-feather="zap"></i>
                                                            Server online
                                                        </td>
                                                        <td>1:19 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/11/20</td>
                                                        <td>
                                                            <i class="mr-2 text-red" data-feather="zap-off"></i>
                                                            Server restarted
                                                        </td>
                                                        <td>1:00 AM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/10/20</td>
                                                        <td>
                                                            <i class="mr-2 text-purple" data-feather="shopping-cart"></i>
                                                            New order placed! Order #
                                                            <a href="javascript:void(0);">1126547</a>
                                                        </td>
                                                        <td>5:31 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/10/20</td>
                                                        <td>
                                                            <i class="mr-2 text-purple" data-feather="shopping-cart"></i>
                                                            New order placed! Order #
                                                            <a href="javascript:void(0);">1126546</a>
                                                        </td>
                                                        <td>12:13 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>01/10/20</td>
                                                        <td>
                                                            <i class="mr-2 text-blue" data-feather="user"></i>
                                                            Diane Chambers submitted
                                                            <a href="javascript:void(0);">quarter four report</a>
                                                        </td>
                                                        <td>10:56 AM</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Illustration dashboard card example-->
                        <div class="card mb-4">
                            <div class="card-body py-5">
                                <div class="d-flex flex-column justify-content-center">
                                    <img class="img-fluid mb-4" src="assets/img/freepik/data-report-pana.svg" alt="" style="height: 10rem;" />
                                    <div class="text-center px-0 px-lg-5">
                                        <h5>New reports are here! Generate custom reports now!</h5>
                                        <p class="mb-4">Our new report generation system is now online. You can start creating custom reporting for any documents available on your account.</p>
                                        <a class="btn btn-sm btn-primary p-3 line-height-normal" href="#!">Get Started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <!-- Dashboard activity timeline example-->
                                <div class="card card-header-actions h-100">
                                    <div class="card-header">
                                        Recent Activity
                                        <div class="dropdown no-caret">
                                            <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownMenuButton">
                                                <h6 class="dropdown-header">Filter Activity:</h6>
                                                <a class="dropdown-item" href="#!"><span class="badge badge-green-soft text-green my-1">Commerce</span></a>
                                                <a class="dropdown-item" href="#!"><span class="badge badge-blue-soft text-blue my-1">Reporting</span></a>
                                                <a class="dropdown-item" href="#!"><span class="badge badge-yellow-soft text-yellow my-1">Server</span></a>
                                                <a class="dropdown-item" href="#!"><span class="badge badge-purple-soft text-purple my-1">Users</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="timeline timeline-xs">
                                            <!-- Timeline Item 1-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                                    <div class="timeline-item-marker-text">27 min</div>
                                                    <div class="timeline-item-marker-indicator bg-green"></div>
                                                </div>
                                                <div class="timeline-item-content">
                                                    New order placed!
                                                    <a class="font-weight-bold text-dark" href="#!">Order #2912</a>
                                                    has been successfully placed.
                                                </div>
                                            </div>
                                            <!-- Timeline Item 2-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                                    <div class="timeline-item-marker-text">58 min</div>
                                                    <div class="timeline-item-marker-indicator bg-blue"></div>
                                                </div>
                                                <div class="timeline-item-content">
                                                    Your
                                                    <a class="font-weight-bold text-dark" href="#!">weekly report</a>
                                                    has been generated and is ready to view.
                                                </div>
                                            </div>
                                            <!-- Timeline Item 3-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                                    <div class="timeline-item-marker-text">2 hrs</div>
                                                    <div class="timeline-item-marker-indicator bg-purple"></div>
                                                </div>
                                                <div class="timeline-item-content">
                                                    New user
                                                    <a class="font-weight-bold text-dark" href="#!">Valerie Luna</a>
                                                    has registered
                                                </div>
                                            </div>
                                            <!-- Timeline Item 4-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                                    <div class="timeline-item-marker-text">1 day</div>
                                                    <div class="timeline-item-marker-indicator bg-yellow"></div>
                                                </div>
                                                <div class="timeline-item-content">Server activity monitor alert</div>
                                            </div>
                                            <!-- Timeline Item 5-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                                    <div class="timeline-item-marker-text">1 day</div>
                                                    <div class="timeline-item-marker-indicator bg-green"></div>
                                                </div>
                                                <div class="timeline-item-content">
                                                    New order placed!
                                                    <a class="font-weight-bold text-dark" href="#!">Order #2911</a>
                                                    has been successfully placed.
                                                </div>
                                            </div>
                                            <!-- Timeline Item 6-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                                    <div class="timeline-item-marker-text">1 day</div>
                                                    <div class="timeline-item-marker-indicator bg-purple"></div>
                                                </div>
                                                <div class="timeline-item-content">
                                                    Details for
                                                    <a class="font-weight-bold text-dark" href="#!">Marketing and Planning Meeting</a>
                                                    have been updated.
                                                </div>
                                            </div>
                                            <!-- Timeline Item 7-->
                                            <div class="timeline-item">
                                                <div class="timeline-item-marker">
                                                    <div class="timeline-item-marker-text">2 days</div>
                                                    <div class="timeline-item-marker-indicator bg-green"></div>
                                                </div>
                                                <div class="timeline-item-content">
                                                    New order placed!
                                                    <a class="font-weight-bold text-dark" href="#!">Order #2910</a>
                                                    has been successfully placed.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 mb-4">
                                <!-- Pie chart with legend example-->
                                <div class="card h-100">
                                    <div class="card-header">Traffic Sources</div>
                                    <div class="card-body">
                                        <div class="chart-pie mb-4"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                <div class="mr-3">
                                                    <i class="fas fa-circle fa-sm mr-1 text-blue"></i>
                                                    Direct
                                                </div>
                                                <div class="font-weight-500 text-dark">55%</div>
                                            </div>
                                            <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                <div class="mr-3">
                                                    <i class="fas fa-circle fa-sm mr-1 text-purple"></i>
                                                    Social
                                                </div>
                                                <div class="font-weight-500 text-dark">15%</div>
                                            </div>
                                            <div class="list-group-item d-flex align-items-center justify-content-between small px-0 py-2">
                                                <div class="mr-3">
                                                    <i class="fas fa-circle fa-sm mr-1 text-green"></i>
                                                    Referral
                                                </div>
                                                <div class="font-weight-500 text-dark">30%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4">
                        <!-- Team members / people dashboard card example-->
                        <div class="card mb-4">
                            <div class="card-header">People</div>
                            <div class="card-body">
                                <!-- Item 1-->
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center flex-shrink-0 mr-3">
                                        <div class="avatar avatar-xl mr-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/freepik/profiles/profile-1.png" alt="" /></div>
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a class="text-dark line-height-normal mb-1" href="#!">Sid Rooney</a>
                                            <div class="small text-muted line-height-normal">Position</div>
                                        </div>
                                    </div>
                                    <div class="dropdown no-caret">
                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownPeople1">
                                            <a class="dropdown-item" href="#!">Action</a>
                                            <a class="dropdown-item" href="#!">Another action</a>
                                            <a class="dropdown-item" href="#!">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 2-->
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center flex-shrink-0 mr-3">
                                        <div class="avatar avatar-xl mr-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/freepik/profiles/profile-2.png" alt="" /></div>
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a class="text-dark line-height-normal mb-1" href="#!">Keelan Garza</a>
                                            <div class="small text-muted line-height-normal">Position</div>
                                        </div>
                                    </div>
                                    <div class="dropdown no-caret">
                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownPeople2">
                                            <a class="dropdown-item" href="#!">Action</a>
                                            <a class="dropdown-item" href="#!">Another action</a>
                                            <a class="dropdown-item" href="#!">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 3-->
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center flex-shrink-0 mr-3">
                                        <div class="avatar avatar-xl mr-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/freepik/profiles/profile-3.png" alt="" /></div>
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a class="text-dark line-height-normal mb-1" href="#!">Kaia Smyth</a>
                                            <div class="small text-muted line-height-normal">Position</div>
                                        </div>
                                    </div>
                                    <div class="dropdown no-caret">
                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople3" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownPeople3">
                                            <a class="dropdown-item" href="#!">Action</a>
                                            <a class="dropdown-item" href="#!">Another action</a>
                                            <a class="dropdown-item" href="#!">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 4-->
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center flex-shrink-0 mr-3">
                                        <div class="avatar avatar-xl mr-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/freepik/profiles/profile-4.png" alt="" /></div>
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a class="text-dark line-height-normal mb-1" href="#!">Kerri Kearney</a>
                                            <div class="small text-muted line-height-normal">Position</div>
                                        </div>
                                    </div>
                                    <div class="dropdown no-caret">
                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownPeople4">
                                            <a class="dropdown-item" href="#!">Action</a>
                                            <a class="dropdown-item" href="#!">Another action</a>
                                            <a class="dropdown-item" href="#!">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 5-->
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center flex-shrink-0 mr-3">
                                        <div class="avatar avatar-xl mr-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/freepik/profiles/profile-5.png" alt="" /></div>
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a class="text-dark line-height-normal mb-1" href="#!">Georgina Findlay</a>
                                            <div class="small text-muted line-height-normal">Position</div>
                                        </div>
                                    </div>
                                    <div class="dropdown no-caret">
                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople5" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownPeople5">
                                            <a class="dropdown-item" href="#!">Action</a>
                                            <a class="dropdown-item" href="#!">Another action</a>
                                            <a class="dropdown-item" href="#!">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Item 6-->
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center flex-shrink-0 mr-3">
                                        <div class="avatar avatar-xl mr-3 bg-gray-200"><img class="avatar-img img-fluid" src="assets/img/freepik/profiles/profile-6.png" alt="" /></div>
                                        <div class="d-flex flex-column font-weight-bold">
                                            <a class="text-dark line-height-normal mb-1" href="#!">Wilf Ingram</a>
                                            <div class="small text-muted line-height-normal">Position</div>
                                        </div>
                                    </div>
                                    <div class="dropdown no-caret">
                                        <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="dropdownPeople6" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-vertical"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="dropdownPeople6">
                                            <a class="dropdown-item" href="#!">Action</a>
                                            <a class="dropdown-item" href="#!">Another action</a>
                                            <a class="dropdown-item" href="#!">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project tracker card example-->
                        <div class="card card-header-actions mb-4">
                            <div class="card-header">
                                Projects
                                <a class="small text-arrow-icon" href="#!">
                                    Create New
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <!-- Progress item 1-->
                                <div class="d-flex align-items-center justify-content-between small mb-1">
                                    <div class="font-weight-bold">Server Setup</div>
                                    <div class="small">25%</div>
                                </div>
                                <div class="progress mb-3"><div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div></div>
                                <!-- Progress item 2-->
                                <div class="d-flex align-items-center justify-content-between small mb-1">
                                    <div class="font-weight-bold">Database Migration</div>
                                    <div class="small">50%</div>
                                </div>
                                <div class="progress mb-3"><div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div></div>
                                <!-- Progress item 3-->
                                <div class="d-flex align-items-center justify-content-between small mb-1">
                                    <div class="font-weight-bold">Version Release</div>
                                    <div class="small">75%</div>
                                </div>
                                <div class="progress mb-3"><div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div>
                                <!-- Progress item 4-->
                                <div class="d-flex align-items-center justify-content-between small mb-1">
                                    <div class="font-weight-bold">Product Listings</div>
                                    <div class="small">100%</div>
                                </div>
                                <div class="progress"><div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>
                            </div>
                        </div>
                        <!-- Illustration dashboard card example-->
                        <div class="card">
                            <div class="card-body text-center p-5">
                                <img class="img-fluid mb-4" src="assets/img/freepik/team-spirit-pana.svg" alt="" style="max-width: 16.25rem;" />
                                <h5>Team Access</h5>
                                <p class="mb-4">Upgrade your plan to get access to team collaboration tools.</p>
                                <a class="btn btn-sm btn-primary p-3 line-height-normal" href="#!">Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection

</x-home-master>
