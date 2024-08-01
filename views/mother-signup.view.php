<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postpartum Mother Sign Up</title>
    <link rel="stylesheet" href="./public/tailwind/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <a class="inline-flex items-center ms-5 mt-5 gap-x-1 text-sm text-gray-800 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-200 dark:hover:text-blue-500 dark:focus:text-blue-500" href="/ecares-final/">
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        Back to home
    </a>
    <div class="xxl:container flex justify-center items-center font-sans">
        <div class="border-t-2 flex flex-col sm:w-6/12 md:w-2/5 lg:w-2/6 xl:w-80 2xl:w-1/5 w-11/12 px-10 py-8 mt-10 2xl:mt-28 shadow-sm shadow-sky-950 rounded-md">
            <h2 class="text-center 2xl:text-2xl text-xl font-medium">Sign Up for eCARES</h2>
            <h2 class="text-center 2xl:text-2xl text-xl font-medium">as</h2>
            <h2 class="text-center 2xl:text-2xl text-xl font-medium mb-6">Postpartum Mother</h2>
            <form action="">
                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none 2xl:text-lg text-base mb-5" placeholder="Phone e.g. 09434343438">
                <div class="relative mb-3">
                    <input id="hs-toggle-password" type="password" class="py-2 px-4 pe-10 block border w-full border-gray-200 rounded-lg 2xl:text-lg text-base outline-none" placeholder="Password">
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
                <div class="relative mb-3">
                    <input id="confirm-toggle-password" type="password" class="py-2 px-4 pe-10 block border w-full border-gray-200 rounded-lg 2xl:text-lg text-base outline-none" placeholder="Confirm Password">
                    <button type="button" data-hs-toggle-password='{
                        "target": "#confirm-toggle-password"
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
           
                <p class="text-center 2xl:text-sm text-xs mb-3">By signing up, you agree to 
                    <a href="/ecares-final/terms" class="text-rose-500">eCARE's terms</a>
                    and have read our 
                    <a href="/ecares-final/privacy-policy" class="text-rose-500">privacy policy.</a>
                </p>    

                <input type="submit" class="bg-rose-500 hover:bg-rose-700 2xl:p-3 p-2 text-base mb-6 text-center rounded-xl text-white w-full cursor-pointer" value="Sign Up">

                <p class="text-center 2xl:text-sm text-xs">Have an account? <a href="/ecares-final/practitioner-login" class="text-rose-500">Sign in here</a></p>    
            </form>
        </div>
    </div>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>