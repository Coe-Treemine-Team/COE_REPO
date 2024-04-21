<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - COE TreeMine</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Existing styles from the homepage */
    </style>
</head>
<body>
@include('components.navbar')

<div class="flex md:flex-row flex-col-reverse md:items-stretch items-center justify-center">
    <div class="md:py-20 xl:w-1/2 sm:w-1/2 lg:mr-20 md:mr-6 flex flex-col md:items-end items-center justify-center xl:mr-28">
        <div class="flex flex-col items-center justify-center">
            <h1 class="md:text-5xl text-3xl font-bold text-center text-gray-800 dark:text-white">Wild Goose Chase</h1>
            <p class="sm:w-96 w-full mt-6 text-base leading-6 text-center text-gray-600 dark:text-gray-200">A phrase is a short selection of words which when put together create a concept.</p>
            <div class="md:mt-14 mt-12 flex flex-col items-center">
                <div class="w-20 h-20 bg-white shadow rounded-full flex items-center justify-center" role="img" aria-label="money">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-2-svg1.svg" alt="money" />
                </div>
                <p class="text-base leading-6 mt-6 text-center text-gray-600 dark:text-gray-200 sm:w-96 w-full">A phrase is a short selection of words which when put together create a concept. There are eight types of phrases.</p>
            </div>
            <div class="mt-7 flex flex-col items-center">
                <div class="w-20 h-20 bg-white shadow rounded-full flex items-center justify-center" role="img" aria-label="phone">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-2-svg2.svg" alt="phone" />
                </div>
            </div>
        </div>
    </div>
    <div class="py-12 xl:w-1/2 lg:w-1/3 sm:w-1/2">
        <img src="https://i.ibb.co/7SmJNvH/about-image.png" alt="image of a woman studying" class="h-full rounded-md object-cover object-center md:block hidden" style="width: 500px; height: 500px;" />
        <img src="https://i.ibb.co/NT0VJcd/pexels-la-miko-3681591-1.png" alt="image of a woman studying" class="h-auto w-auto md:hidden block" style="width: 500px; height: 500px;" />
    </div>
</div>

<div class="flex flex-col md:flex-row md:items-stretch items-center justify-center">
    <div class="py-12 xl:w-1/2 lg:w-1/3 sm:w-1/2 order-1 md:order-1" style="margin-left: 116px;">
        <img src="https://i.ibb.co/7SmJNvH/about-image.png" alt="image of a woman studying" class="rounded-md object-cover object-center block" style="width: 500px; height: 500px;" />
        <img src="https://i.ibb.co/NT0VJcd/pexels-la-miko-3681591-1.png" alt="image of a woman studying" class="w-auto md:hidden block" style="width: 500px; height: 500px;" />
    </div>
    <div class="md:py-20 xl:w-1/2 sm:w-1/2 lg:ml-20 md:ml-6 flex flex-col md:items-start items-center justify-center xl:ml-28 order-2 md:order-2">
        <div class="flex flex-col items-center justify-center">
            <h1 class="md:text-5xl text-3xl font-bold text-center text-gray-800 dark:text-white">Wild Goose Chase</h1>
            <p class="sm:w-96 w-full mt-6 text-base leading-6 text-center text-gray-600 dark:text-gray-200">A phrase is a short selection of words which when put together create a concept.</p>
            <div class="md:mt-14 mt-12 flex flex-col items-center">
                <div class="w-20 h-20 bg-white shadow rounded-full flex items-center justify-center" role="img" aria-label="money">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-2-svg1.svg" alt="money" />
                </div>
                <p class="text-base leading-6 mt-6 text-center text-gray-600 dark:text-gray-200 sm:w-96 w-full">A phrase is a short selection of words which when put together create a concept. There are eight types of phrases.</p>
            </div>
            <div class="mt-7 flex flex-col items-center">
                <div class="w-20 h-20 bg-white shadow rounded-full flex items-center justify-center" role="img" aria-label="phone">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-2-svg2.svg" alt="phone" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex md:flex-row flex-col-reverse md:items-stretch items-center justify-center">
    <div class="md:py-20 xl:w-1/2 sm:w-1/2 lg:mr-20 md:mr-6 flex flex-col md:items-end items-center justify-center xl:mr-28">
        <div class="flex flex-col items-center justify-center">
            <h1 class="md:text-5xl text-3xl font-bold text-center text-gray-800 dark:text-white">Wild Goose Chase</h1>
            <p class="sm:w-96 w-full mt-6 text-base leading-6 text-center text-gray-600 dark:text-gray-200">A phrase is a short selection of words which when put together create a concept.</p>
            <div class="md:mt-14 mt-12 flex flex-col items-center">
                <div class="w-20 h-20 bg-white shadow rounded-full flex items-center justify-center" role="img" aria-label="money">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-2-svg1.svg" alt="money" />
                </div>
                <p class="text-base leading-6 mt-6 text-center text-gray-600 dark:text-gray-200 sm:w-96 w-full">A phrase is a short selection of words which when put together create a concept. There are eight types of phrases.</p>
            </div>
            <div class="mt-7 flex flex-col items-center">
                <div class="w-20 h-20 bg-white shadow rounded-full flex items-center justify-center" role="img" aria-label="phone">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-2-svg2.svg" alt="phone" />
                </div>
            </div>
        </div>
    </div>
    <div class="py-12 xl:w-1/2 lg:w-1/3 sm:w-1/2">
        <img src="https://i.ibb.co/7SmJNvH/about-image.png" alt="image of a woman studying" class="h-full rounded-md object-cover object-center md:block hidden" style="width: 500px; height: 500px;" />
        <img src="https://i.ibb.co/NT0VJcd/pexels-la-miko-3681591-1.png" alt="image of a woman studying" class="h-auto w-auto md:hidden block" style="width: 500px; height: 500px;" />
    </div>
</div>


@include('components.footer')
</body>
</html>
