<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postpartum Mother Login</title>
    <link rel="stylesheet" href="./public/tailwind/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <a class="inline-flex items-center ms-5 mt-5 gap-x-1 text-sm text-gray-800 hover:text-rose-600 focus:outline-none focus:text-rose-600 dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500" href="/ecares-final/">
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        Back to home
    </a>
    <div class="xxl:container flex justify-center items-center font-sans">
        <div class="border-t-2 flex flex-col sm:w-6/12 md:w-2/5 lg:w-2/6 xl:w-80 2xl:w-1/5 w-11/12 px-10 py-8 mt-10 2xl:mt-28 shadow-sm shadow-sky-950 rounded-md">
            <h2 class="text-center 2xl:text-2xl text-xl font-medium">Sign in for eCARES</h2>
            <h2 class="text-center 2xl:text-2xl text-xl font-medium">as</h2>
            <h2 class="text-center 2xl:text-2xl text-xl font-medium mb-6">Postpartum Mother</h2>
            <form action="">
                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border focus:border-rose-500 focus:ring-rose-500 2xl:text-lg text-base mb-5" placeholder="Phone">
                <div class="relative mb-3">
                    <input id="hs-toggle-password" type="password" class="py-2 px-4 pe-10 block border w-full border-gray-200 rounded-lg 2xl:text-lg text-base focus:border-rose-500 focus:ring-rose-500" placeholder="Password">
                    <button type="button" data-hs-toggle-password='{
                        "target": "#hs-toggle-password"
                    }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-rose-600 dark:text-neutral-600 dark:focus:text-blue-500">
                    <svg class="shrink-0 size-3.5" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                        <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                        <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                        <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                        <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
                    </svg>
                    </button>
                </div>
                <div class="flex mb-3 justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-rose-600 focus:ring-rose-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 checked:bg-rose-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-checked-checkbox" checked="">
                        <label for="hs-checked-checkbox" class="2xl:text-sm text-xs text-gray-500 ms-3 dark:text-neutral-400">Remember Me</label>
                    </div>
                    <div class="div">
                        <a href="#" class="2xl:text-sm text-xs text-gray-500">Forgot Password?</a>
                    </div>
                </div>
            

                <input type="submit" class="bg-rose-500 hover:bg-rose-700 2xl:p-3 p-2 mb-6 text-center text-base rounded-xl text-white w-full cursor-pointer" value="Sign In">

                <p class="text-center 2xl:text-sm text-xs">Dont have an account? <a href="/ecares-final/mother-signup" class="text-rose-500">Sign up here</a></p>    
            </form>
        </div>
    </div>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>