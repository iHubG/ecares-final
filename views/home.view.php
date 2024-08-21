<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./public/tailwind/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="xxl:container flex justify-center items-center font-sans">
        <div class="border-t-2 flex flex-col sm:w-6/12 md:w-2/5 lg:w-2/6 xl:w-1/4 2xl:w-1/5 w-11/12 2xl:px-10 px-8 2xl:py-7 py-5 mt-10 2xl:mt-28 shadow-sm shadow-sky-950 rounded-md">
            <h1 class="text-center md:text-2xl text-3xl mb-6">eCARES</h1>
            <div class="flex justify-center mb-6">
                <img src="./public/img/ecares.png" alt="ecares" class="md:w-32 w-28 text-center"/>
            </div>
            <a href="/admin-login" class="bg-sky-500 hover:bg-sky-700 2xl:p-3 p-2 2xl:mb-6 mb-4 text-center 2xl:text-lg text-base rounded-xl text-white">Admin</a>
            <a href="/practitioner-login" class="bg-sky-500 hover:bg-sky-700 2xl:p-3 p-2 2xl:mb-6 mb-4 text-center 2xl:text-lg text-base rounded-xl text-white">Health Practitioner</a>
            <a href="/mother-login" class="bg-rose-500 hover:bg-rose-700 2xl:p-3 p-2 2xl:mb-6 mb-4 text-center 2xl:text-lg text-base rounded-xl text-white">Postpartum Mother</a>
        </div>
    </div>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>