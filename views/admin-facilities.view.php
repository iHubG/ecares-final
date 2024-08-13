<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Healthcare Facilities</title>
    <link rel="stylesheet" href="./public/tailwind/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // It's used to prevent page load glitches.
        const html = document.querySelector('html');
        const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
        const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

        if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
        else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
        else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
        else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
    </script>
</head>
<body class="overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-sky-900 dark:[&::-webkit-scrollbar-thumb]:bg-sky-950 font-sans">
  
    <?php include "admin-navbar.view.php"; ?>
    <?php 
        date_default_timezone_set('Asia/Manila');

        $currentDate = date('F j, Y'); 
        $currentTime = date('h:i:s A');        
    ?>
    <div class="flex">
        <div class="w-auto"><?php include "admin-sidebar.view.php"; ?></div>
        <div id="main-content" class="bg-slate-100 dark:bg-sky-900 w-full">
            <div class="xxl:container py-3 w-full text-wrap h-screen scroll-smooth max-h-screen overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-sky-800 dark:[&::-webkit-scrollbar-thumb]:bg-sky-950">
                <div class="flex items-center justify-between px-4 pb-5 pt-1">
                    <h2 class="text-xl font-medium dark:text-gray-100">Healthcare Facilities</h2>
                    <div class="flex">
                        <p class="text-base dark:text-gray-100" id="date"><?php echo $currentDate;?></p>
                        <p class="text-base dark:text-gray-100" id="time">&nbsp;<?php echo $currentTime;?></p>
                    </div>           
                </div>  
                <hr class="border-gray-200 dark:border-gray-100">
                <div class="dashboard-content px-4 py-5">
                    <div class="search w-full mb-8 flex justify-center">
                        <div class="w-2/5">
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                    <svg class="shrink-0 size-4 text-gray-400 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                                <input class="py-3 ps-10 pe-4 block w-full border-gray-200 dark:bg-sky-950 dark:text-white dark:border-0 focus:outline-none rounded-full outline-none text-sm disabled:opacity-50 disabled:pointer-events-none focus:border-slate-100 focus:ring-slate-100" type="text" role="combobox" aria-expanded="false" placeholder="Search Facility" value="" data-hs-combo-box-input="">
                            </div>                 
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-5">
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
                                    <a href="#" aria-haspopup="dialog" aria-expanded="false" aria-controls="edit-facility-modal" data-hs-overlay="#edit-facility-modal">
                                        <img src="./public/img/edit.png"  alt="Edit" class="w-6">
                                    </a>
                                    <a href="#">
                                        <img src="./public/img/delete.png"  alt="Delete" class="w-6">
                                    </a>
                                </div>
                            </div>                       
                        </div>

                        <!-- Edit Facility Modal -->
                        <div id="edit-facility-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="edit-facility-label">
                            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
                                <div class="flex flex-col bg-gray-200 dark:bg-sky-900 border shadow-sm rounded-xl pointer-events-auto">
                                    <div class="flex justify-between items-center py-3 px-4">
                                        <h3 id="edit-facility-label" class="font-bold text-gray-800 dark:text-gray-300">
                                            
                                        </h3>
                                        <button type="button" class="hs-dropup-toggle size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#edit-facility-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                        </button>
                                    </div>

                                    <div class="py-3 flex flex-col items-start px-10">
                                        <h3 class="mb-2 dark:text-white text-lg">Edit Facility Details</h3>
                                        <div data-hs-file-upload='{
                                        "url": "/ecares-final/upload",
                                        "acceptedFiles": "image/*",
                                        "maxFiles": 1,
                                        "singleton": true
                                        }' class="mb-5">
                                            <template data-hs-file-upload-preview="">
                                                <div class="size-20">
                                                <img class="w-full object-contain rounded-full" data-dz-thumbnail="">
                                                </div>
                                            </template>

                                            <div class="flex flex-wrap items-center gap-3 sm:gap-5">
                                                <div class="group" data-hs-file-upload-previews="" data-hs-file-upload-pseudo-trigger="">
                                                <span class="group-has-[div]:hidden flex shrink-0 justify-center items-center size-20 border-2 border-dotted border-gray-300 text-gray-400 cursor-pointer rounded-full hover:bg-gray-50">
                                                    <svg class="shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                    <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                                                    </svg>
                                                </span>
                                                </div>

                                                <div class="grow">
                                                <div class="flex items-center gap-x-2">
                                                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-file-upload-trigger="">
                                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="17 8 12 3 7 8"></polyline>
                                                        <line x1="12" x2="12" y1="3" y2="15"></line>
                                                    </svg>
                                                    Upload photo
                                                    </button>
                                                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-file-upload-clear="">Delete</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Facility Name">
                                        <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Facility Address">
                                    
                                        <div class="message-response">

                                        </div>
                                    </div>
                                
                                    <div class="flex justify-center items-center gap-x-2 py-3 px-4 ">
                                        <input type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none cursor-pointer" value="Update">                           
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                  
                    <img src="./public/img/create.png" alt="create" class="w-10 fixed right-0 bottom-0 z-10 mr-8 mb-8 cursor-pointer drop-shadow-2xl" aria-haspopup="dialog" aria-expanded="false" aria-controls="add-facility-modal" data-hs-overlay="#add-facility-modal">

                    <!-- Add Facility Modal -->
                    <div id="add-facility-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="add-facility-label">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
                            <div class="flex flex-col bg-gray-200 dark:bg-sky-900 border shadow-sm rounded-xl pointer-events-auto">
                                <div class="flex justify-between items-center py-3 px-4">
                                    <h3 id="add-facility-label" class="font-bold text-gray-800 dark:text-gray-300">
                                        
                                    </h3>
                                    <button type="button" class="hs-dropup-toggle size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#add-facility-modal">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                    </button>
                                </div>

                                <div class="py-3 flex flex-col items-start px-10">
                                    <h3 class="mb-2 dark:text-white text-lg">Add Facility Details</h3>
                                    <div data-hs-file-upload='{
                                    "url": "/ecares-final/upload",
                                    "acceptedFiles": "image/*",
                                    "maxFiles": 1,
                                    "singleton": true
                                    }' class="mb-5">
                                        <template data-hs-file-upload-preview="">
                                            <div class="size-20">
                                            <img class="w-full object-contain rounded-full" data-dz-thumbnail="">
                                            </div>
                                        </template>

                                        <div class="flex flex-wrap items-center gap-3 sm:gap-5">
                                            <div class="group" data-hs-file-upload-previews="" data-hs-file-upload-pseudo-trigger="">
                                            <span class="group-has-[div]:hidden flex shrink-0 justify-center items-center size-20 border-2 border-dotted border-gray-300 text-gray-400 cursor-pointer rounded-full hover:bg-gray-50">
                                                <svg class="shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <circle cx="12" cy="10" r="3"></circle>
                                                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                                                </svg>
                                            </span>
                                            </div>

                                            <div class="grow">
                                            <div class="flex items-center gap-x-2">
                                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-file-upload-trigger="">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="17 8 12 3 7 8"></polyline>
                                                    <line x1="12" x2="12" y1="3" y2="15"></line>
                                                </svg>
                                                Upload photo
                                                </button>
                                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-file-upload-clear="">Delete</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Facility Name">
                                    <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Facility Address">
                                    <div class="relative mb-3 w-full">
                                        <input id="pin" type="password" class="py-2 px-4 pe-10 block border w-full border-gray-200 rounded-lg 2xl:text-lg text-base dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0" placeholder="Pin">
                                        <button type="button" data-hs-toggle-password='{
                                            "target": "#pin"
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
                                
                                    <div class="message-response">

                                    </div>
                                </div>
                            
                                <div class="flex justify-center items-center gap-x-2 py-3 px-4 ">
                                    <input type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none cursor-pointer" value="Submit">                           
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Admin Profile Modal -->
                    <div id="edit-admin-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="edit-admin-label">
                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
                            <div class="flex flex-col bg-gray-200 dark:bg-sky-900 border shadow-sm rounded-xl pointer-events-auto">
                                <div class="flex justify-between items-center py-3 px-4">
                                    <h3 id="edit-admin-label" class="font-bold text-gray-800 dark:text-gray-300">
                                        
                                    </h3>
                                    <button type="button" class="hs-dropup-toggle size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#edit-admin-modal">
                                    <span class="sr-only">Close</span>
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18"></path>
                                        <path d="m6 6 12 12"></path>
                                    </svg>
                                    </button>
                                </div>

                                <div class="py-3 flex flex-col items-start px-10">
                                    <h3 class="mb-2 dark:text-white text-lg">Profile</h3>
                                    <div data-hs-file-upload='{
                                    "url": "/ecares-final/upload",
                                    "acceptedFiles": "image/*",
                                    "maxFiles": 1,
                                    "singleton": true
                                    }' class="mb-5">
                                        <template data-hs-file-upload-preview="">
                                            <div class="size-20">
                                            <img class="w-full object-contain rounded-full" data-dz-thumbnail="">
                                            </div>
                                        </template>

                                        <div class="flex flex-wrap items-center gap-3 sm:gap-5">
                                            <div class="group" data-hs-file-upload-previews="" data-hs-file-upload-pseudo-trigger="">
                                            <span class="group-has-[div]:hidden flex shrink-0 justify-center items-center size-20 border-2 border-dotted border-gray-300 text-gray-400 cursor-pointer rounded-full hover:bg-gray-50">
                                                <svg class="shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <circle cx="12" cy="10" r="3"></circle>
                                                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                                                </svg>
                                            </span>
                                            </div>

                                            <div class="grow">
                                            <div class="flex items-center gap-x-2">
                                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-file-upload-trigger="">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="17 8 12 3 7 8"></polyline>
                                                    <line x1="12" x2="12" y1="3" y2="15"></line>
                                                </svg>
                                                Upload photo
                                                </button>
                                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-file-upload-clear="">Delete</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Name">
                                    <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Email">
                                
                                    <div class="message-response">

                                    </div>
                                </div>
                            
                                <div class="flex justify-center items-center gap-x-2 py-3 px-4 ">
                                    <input type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none cursor-pointer" value="Update">                           
                                </div>
                            </div>
                        </div>
                    </div>


                              
                </div> 
            </div>
        </div> 
    </div>

    <script src="./public/javascript/darkmode.js"></script>
    <script src="./node_modules/preline/dist/preline.js"></script>
    <script src="./node_modules/lodash/lodash.min.js"></script>
    <script src="./node_modules/dropzone/dist/dropzone-min.js"></script>
    <script>
        function updateTime() {
            fetch(window.location.href) // Fetch the current page
                .then(response => response.text())
                .then(html => {
                    // Create a new DOM parser
                    const parser = new DOMParser();
                    // Parse the HTML text to a document
                    const doc = parser.parseFromString(html, 'text/html');
                    // Extract the date and time from the parsed document
                    const date = doc.getElementById('date').innerText;
                    const time = doc.getElementById('time').innerText;
                    // Update the date and time on the current page
                    document.getElementById('date').innerText = date;
                    document.getElementById('time').innerText = time;
                })
                .catch(error => console.error('Error fetching time:', error));
        }

        // Update the time every second
        setInterval(updateTime, 1000);

        // Initial update
        window.onload = updateTime;
    </script>
</body>
</html>