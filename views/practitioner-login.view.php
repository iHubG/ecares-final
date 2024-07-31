<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Practitioner Login</title>
    <link rel="stylesheet" href="./public/tailwind/style.css">
</head>
<body>
<div class="xxl:container flex justify-center items-center font-sans">
        <div class="border-t-2 flex flex-col sm:w-6/12 md:w-2/5 lg:w-2/6 xl:w-1/4 2xl:w-1/5 w-11/12 px-10 py-8 mt-28 shadow-sm shadow-sky-950 rounded-md">
            <h2 class="text-center text-2xl font-medium">Sign in for eCARES</h2>
            <h2 class="text-center text-2xl font-medium">as</h2>
            <h2 class="text-center text-2xl font-medium mb-6">Health Practitioner</h2>
            <form action="">
                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none text-lg mb-5" placeholder="Username">
                <div class="relative mb-3">
                    <input id="hs-toggle-password" type="password" class="py-2 px-4 pe-10 block border w-full border-gray-200 rounded-lg text-lg outline-none" placeholder="Password">
                    <button type="button" data-hs-toggle-password='{
                        "target": "#hs-toggle-password"
                    }' class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-none focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
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
                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-checked-checkbox" checked="">
                        <label for="hs-checked-checkbox" class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Remember Me</label>
                    </div>
                    <div class="div">
                        <a href="#" class="text-sm text-gray-500">Forgot Password?</a>
                    </div>
                </div>
            

                <input type="submit" class="bg-sky-500 hover:bg-sky-700 p-3 mb-6 text-center rounded-xl text-white w-full cursor-pointer" value="Sign In">

                <p class="text-center text-sm">Dont have an account? <a href="#" class="text-sky-500">Sign up here</a></p>    
            </form>
        </div>
    </div>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>