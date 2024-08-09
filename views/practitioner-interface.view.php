<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Practitioner</title>
    <link rel="stylesheet" href="./public/tailwind/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-sky-900 overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-sky-900 dark:[&::-webkit-scrollbar-thumb]:bg-sky-950 font-sans">
    <div class="dark:bg-sky-950">
        <header class="container relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm xl:px-5 py-4 px-2 dark:bg-sky-950">
            <nav class="max-w-screen-2xl w-full mx-auto 2xl:px-0 sm:flex sm:items-center sm:justify-between">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <img src="./public/img/ecares.png" alt="ecares" class="w-9">
                        <a class="flex-none text-xl dark:text-white font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="Brand">
                        Health Practitioner
                        </a>
                    </div>              
                <div class="sm:hidden">
                    <button type="button" class="hs-collapse-toggle relative size-7 flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    <span class="sr-only">Toggle navigation</span>
                    </button>
                </div>
                </div>
                <div id="hs-navbar-example" class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block" aria-labelledby="hs-navbar-example-collapse">
                    <div class="flex flex-col gap-5 mt-5 justify-center sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                        <div class="hs-dropdown relative inline-flex justify-center items-center gap-2">
                            <button id="hs-dropdown-custom-icon-trigger" type="button" class="hs-dropdown-toggle flex justify-center items-center size-9 border-none text-sm font-semibold rounded-full border-0 border-gray-200  text-gray-800 shadow-sm focus:outline-none  disabled:opacity-50 disabled:pointer-events-none dark:bg-sky-950 dark:border-sky-950 dark:text-white dark:hover:bg-sky-950 dark:focus:bg-sky-950" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <img src="./public/img/avatar.png" alt="avatar" class="w-8">  
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 dark:bg-sky-950 dark:border-0 dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-icon-trigger">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-sky-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-gray-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                                Profile
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-sky-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-gray-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="/ecares-final/admin-login">
                                Sign out
                                </a>
                            </div>
                            <h3 class="text-sm dark:text-white">User</h3>

                        </div>
                        <button type="button" class="hs-dark-mode-active:hidden block hs-dark-mode font-medium text-gray-800 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-theme-click-value="dark">
                            <span class="group inline-flex shrink-0 justify-center items-center size-9">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                                </svg>
                            </span>
                            </button>
                            <button type="button" class="hs-dark-mode-active:block hidden hs-dark-mode font-medium text-gray-800 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-theme-click-value="light">
                            <span class="group inline-flex shrink-0 justify-center items-center size-9">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="4"></circle>
                                <path d="M12 2v2"></path>
                                <path d="M12 20v2"></path>
                                <path d="m4.93 4.93 1.41 1.41"></path>
                                <path d="m17.66 17.66 1.41 1.41"></path>
                                <path d="M2 12h2"></path>
                                <path d="M20 12h2"></path>
                                <path d="m6.34 17.66-1.41 1.41"></path>
                                <path d="m19.07 4.93-1.41 1.41"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    
    <div class="container max-w-screen-2xl xl:px-5 px-2 font-sans">
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 xl:py-8 py-5">
            <div class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-sky-950 dark:border-0 dark:shadow-neutral-700/70" href="#">
                <div class="rounded-t-md overflow-hidden border">
                    <a href="#">
                        <img class="size-contain object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-md" src="./public/img/smartphone.jpg" alt="Card Image">
                    </a>
                </div>
                <div class="py-3 px-3 flex justify-between w-full items-center">
                    <div class="flex flex-col items-center">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Facility Name 1</h2>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Cauayan City, Isabela</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <a href="#">
                            <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                        </a>
                        <a href="#">
                            <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                        </a>
                    </div>
                </div>                       
            </div>

            <div class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-sky-950 dark:border-0 dark:shadow-neutral-700/70" href="#">
                <div class="rounded-t-md overflow-hidden border">
                    <a href="#">
                        <img class="size-contain object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-md" src="./public/img/smartphone.jpg" alt="Card Image">
                    </a>
                </div>
                <div class="py-3 px-3 flex justify-between w-full items-center">
                    <div class="flex flex-col items-center">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Facility Name 1</h2>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Cauayan City, Isabela</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <a href="#">
                            <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                        </a>
                        <a href="#">
                            <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                        </a>
                    </div>
                </div>                       
            </div>

            <div class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-sky-950 dark:border-0 dark:shadow-neutral-700/70" href="#">
                <div class="rounded-t-md overflow-hidden border">
                    <a href="#">
                        <img class="size-contain object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-md" src="./public/img/smartphone.jpg" alt="Card Image">
                    </a>
                </div>
                <div class="py-3 px-3 flex justify-between w-full items-center">
                    <div class="flex flex-col items-center">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Facility Name 1</h2>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Cauayan City, Isabela</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <a href="#">
                            <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                        </a>
                        <a href="#">
                            <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                        </a>
                    </div>
                </div>                       
            </div>

            <div class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-sky-950 dark:border-0 dark:shadow-neutral-700/70" href="#">
                <div class="rounded-t-md overflow-hidden border">
                    <a href="#">
                        <img class="size-contain object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-md" src="./public/img/smartphone.jpg" alt="Card Image">
                    </a>
                </div>
                <div class="py-3 px-3 flex justify-between w-full items-center">
                    <div class="flex flex-col items-center">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Facility Name 1</h2>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Cauayan City, Isabela</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <a href="#">
                            <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                        </a>
                        <a href="#">
                            <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                        </a>
                    </div>
                </div>                       
            </div>

            <div class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-sky-950 dark:border-0 dark:shadow-neutral-700/70" href="#">
                <div class="rounded-t-md overflow-hidden border">
                    <a href="#">
                        <img class="size-contain object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-md" src="./public/img/smartphone.jpg" alt="Card Image">
                    </a>
                </div>
                <div class="py-3 px-3 flex justify-between w-full items-center">
                    <div class="flex flex-col items-center">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Facility Name 1</h2>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Cauayan City, Isabela</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <a href="#">
                            <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                        </a>
                        <a href="#">
                            <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                        </a>
                    </div>
                </div>                       
            </div>

            <div class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-sky-950 dark:border-0 dark:shadow-neutral-700/70" href="#">
                <div class="rounded-t-md overflow-hidden border">
                    <a href="#">
                        <img class="size-contain object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-md" src="./public/img/smartphone.jpg" alt="Card Image">
                    </a>
                </div>
                <div class="py-3 px-3 flex justify-between w-full items-center">
                    <div class="flex flex-col items-center">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Facility Name 1</h2>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Cauayan City, Isabela</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <a href="#">
                            <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                        </a>
                        <a href="#">
                            <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                        </a>
                    </div>
                </div>                       
            </div>

            <div class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-sky-950 dark:border-0 dark:shadow-neutral-700/70" href="#">
                <div class="rounded-t-md overflow-hidden border">
                    <a href="#">
                        <img class="size-contain object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-md" src="./public/img/smartphone.jpg" alt="Card Image">
                    </a>
                </div>
                <div class="py-3 px-3 flex justify-between w-full items-center">
                    <div class="flex flex-col items-center">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Facility Name 1</h2>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Cauayan City, Isabela</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <a href="#">
                            <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                        </a>
                        <a href="#">
                            <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                        </a>
                    </div>
                </div>                       
            </div>

            <div class="flex flex-col group bg-white border shadow-sm rounded-md overflow-hidden hover:shadow-lg focus:outline-none focus:shadow-lg transition dark:bg-sky-950 dark:border-0 dark:shadow-neutral-700/70" href="#">
                <div class="rounded-t-md overflow-hidden border">
                    <a href="#">
                        <img class="size-contain object-cover group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-t-md" src="./public/img/smartphone.jpg" alt="Card Image">
                    </a>
                </div>
                <div class="py-3 px-3 flex justify-between w-full items-center">
                    <div class="flex flex-col items-center">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Facility Name 1</h2>
                        <p class="text-sm text-gray-500 dark:text-neutral-400">Cauayan City, Isabela</p>
                    </div>
                    <div class="flex flex-col items-center gap-2">
                        <a href="#">
                            <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                        </a>
                        <a href="#">
                            <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                        </a>
                    </div>
                </div>                       
            </div>
        </div>
    </div>

    <script src="./public/javascript/darkmode.js"></script>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>