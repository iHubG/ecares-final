<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Practitioner | Learning Content</title>
    <link rel="stylesheet" href="../public/tailwind/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-sky-900 overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-sky-900 dark:[&::-webkit-scrollbar-thumb]:bg-sky-950 font-sans">
    <div class="dark:bg-sky-950 border shadow">
        <header class="sticky top-0 container flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm xl:px-5 py-3 px-2 dark:bg-sky-950">
            <nav class="max-w-screen-2xl w-full mx-auto 2xl:px-0 sm:flex sm:items-center sm:justify-between">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <img src="../public/img/ecares.png" alt="ecares" class="w-9">
                        <a class="flex-none md:text-xl text-lg dark:text-white font-semibold focus:outline-none focus:opacity-80" href="/ecares-final/practitioner" aria-label="Brand">
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
                    <div class="flex flex-col gap-2 mt-5 justify-start sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                        <a href="/ecares-final/practitioner" class="flex justify-center hover:bg-sky-100 px-3 py-3 rounded">
                            Home                         
                        </a>
                        <a href="/ecares-final/practitioner/learning-materials" class="flex justify-center hover:bg-sky-100 px-3 py-3 rounded bg-sky-100">
                            Learning Materials                          
                        </a>
                        <a href="mailto:ecares@gmail.com" class="flex justify-center hover:bg-sky-100 px-3 py-3 rounded">
                            Contact Administrator                         
                        </a>
                        <div class="hs-dropdown relative inline-flex justify-center items-center gap-2 ml-5">
                            <button id="hs-dropdown-custom-icon-trigger" type="button" class="hs-dropdown-toggle flex justify-center items-center size-9 border-none text-sm font-semibold rounded-full border-0 border-gray-200  text-gray-800 shadow-sm focus:outline-none  disabled:opacity-50 disabled:pointer-events-none dark:bg-sky-950 dark:border-sky-950 dark:text-white dark:hover:bg-sky-950 dark:focus:bg-sky-950 hover:bg-gray-200" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <img src="../public/img/avatar.png" alt="avatar" class="w-8">  
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 dark:bg-sky-950 dark:border-0 dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-icon-trigger">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-sky-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-gray-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 cursor-pointer" aria-haspopup="dialog" aria-expanded="false" aria-controls="edit-profile-modal" data-hs-overlay="#edit-profile-modal">
                                Profile
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-sky-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-gray-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="/ecares-final/practitioner-login">
                                Sign out
                                </a>
                            </div>
                            <h3 class="text-sm dark:text-white">User</h3>

                        </div>
                        <!--
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
                        -->
                    </div>
                </div>
            </nav>
        </header>
    </div>
    
    <div class="container max-w-screen-2xl xl:px-5 px-2 py-3 font-sans">
        <ol class="flex items-center whitespace-nowrap my-3">
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600" href="/ecares-final/practitioner">
                Home
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600" href="/ecares-final/practitioner/learning-materials">
                Learning Materials
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
                Learning Content
            </li>
        </ol>
        <div class="flex w-full justify-center items-center flex-col mt-10">
            <div class="flex items-start w-full max-w-3xl mb-3">
            <h2 class="text-2xl">Topic - Week 1</h2>
            </div>
            <!-- Post Form -->
            <div class="relative w-full max-w-3xl drop-shadow-lg rounded-lg bg-white p-6">
                <textarea id="post-textarea" class="p-4 block w-full bg-gray-100 border border-gray-300 rounded-lg text-sm focus:border-sky-500 focus:ring-1 focus:ring-sky-500 placeholder-gray-500" placeholder="Post something..."></textarea>
                
                <div class="mt-4">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                        <div class="flex flex-col md:flex-row md:items-center space-y-2 md:space-y-0 md:space-x-4">
                            <!-- Link Input -->
                            <div class="flex flex-col">
                                <input type="text" id="link-input" class="p-2 border border-gray-300 rounded-lg text-sm focus:border-sky-500 focus:ring-1 focus:ring-sky-500 w-full md:w-60" placeholder="Add YouTube or other links">
                                <button type="button" id="add-link-button" class="mt-2 px-3 py-1 bg-sky-500 text-white rounded-lg hover:bg-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-500">Add Link</button>
                            </div>
                            <!-- File Upload -->
                            <form id="upload-form" enctype="multipart/form-data" class="flex-shrink-0">
                                <label for="file-input" class="sr-only">Choose file</label>
                                <input type="file" name="files[]" id="file-input" class="block w-full border border-gray-300 rounded-lg text-sm file:bg-gray-50 file:border-0 file:py-1 file:px-3 file:text-gray-700 hover:file:bg-gray-100 focus:border-sky-500 focus:ring-1 focus:ring-sky-500" multiple>
                            </form>
                        
                        
                        </div>
                        
                        <!-- Post Button -->
                        <button type="button" id="post-button" class="mt-4 md:mt-0 inline-flex items-center px-4 py-2 bg-sky-500 text-white rounded-lg hover:bg-sky-400 focus:outline-none focus:ring-2 focus:ring-sky-500">
                        Post
                        </button>
                    </div>

                    <!-- Links List (initially empty) -->
                    <ul id="links-list" class="mt-4 space-y-2">
                        <!-- Links will be dynamically added here -->
                    </ul>

                    <!-- Error Message (hidden initially) -->
                    <div id="error-message" class="bg-red-50 border border-red-500 p-2 dark:bg-red-800/30 rounded-lg hidden" role="alert" tabindex="-1" aria-labelledby="hs-bordered-red-style-label">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <!-- Icon -->
                                <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-red-100 bg-red-200 text-red-800 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                                </span>
                                <!-- End Icon -->
                            </div>
                            <div class="ms-3">
                                <h3 id="error-text" class="font-semibold text-red-800">
                                Please fill out the required fields.
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!-- Success Message (hidden initially) -->
                    <div id="success-message" class="bg-teal-50 border border-teal-500 rounded-lg p-2 dark:bg-teal-800/30 hidden" role="alert" tabindex="-1" aria-labelledby="hs-bordered-success-style-label">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <!-- Icon -->
                                <span class="inline-flex justify-center items-center size-8 rounded-full border-4 border-teal-100 bg-teal-200 text-teal-800 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                </span>
                                <!-- End Icon -->
                            </div>
                            <div class="ms-3">
                                <h3 id="hs-bordered-success-style-label" class="text-teal-800 font-semibold dark:text-white">
                                Posted Successfully.
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Edit Health Practitioner Profile Modal -->
            <div id="edit-profile-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="edit-profile-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
                    <div class="flex flex-col bg-gray-200 dark:bg-sky-900 border shadow-sm rounded-xl pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4">
                            <h3 id="edit-profile-label" class="font-bold text-gray-800 dark:text-gray-300">
                                
                            </h3>
                            <button type="button" class="hs-dropup-toggle size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#edit-profile-modal">
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
                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Address">
                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Position">
                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Sex">
                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Age">
                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Birthdate">
                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Email">
                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Phone Number">

                           
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="../public/javascript/darkmode.js"></script>
    <script src="../node_modules/preline/dist/preline.js"></script>
    <script src="../node_modules/lodash/lodash.min.js"></script>
    <script src="../node_modules/dropzone/dist/dropzone-min.js"></script>
    <script src="../public/javascript/post.js"></script>
</body>
</html>