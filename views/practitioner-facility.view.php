<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Practitioner | Facility</title>
    <link rel="stylesheet" href="../public/tailwind/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-sky-900 overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-sky-900 dark:[&::-webkit-scrollbar-thumb]:bg-sky-950 font-sans">
    <div class="dark:bg-sky-950 border shadow">
        <header class="container relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm xl:px-5 py-3 px-2 dark:bg-sky-950">
            <nav class="max-w-screen-2xl w-full mx-auto 2xl:px-0 sm:flex sm:items-center sm:justify-between">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <img src="../public/img/ecares.png" alt="ecares" class="w-9">
                        <a class="flex-none md:text-xl text-lg dark:text-white font-semibold focus:outline-none focus:opacity-80" href="/practitioner" aria-label="Brand">
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
                        <a href="/practitioner" class="flex justify-center hover:bg-sky-100 px-3 py-3 rounded bg-sky-100">
                           Home                          
                        </a>
                        <a href="/practitioner/learning-materials" class="flex justify-center hover:bg-sky-100 px-3 py-3 rounded">
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
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-sky-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-gray-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="/practitioner-login">
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
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600" href="/practitioner">
                Home
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
                Facility
            </li>
        </ol>
        <div class="search w-full flex justify-center mb-5">
            <div class="sm:w-2/5 w-4/5">                      
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                        <svg class="shrink-0 size-4 text-gray-400 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <input class="py-3 ps-10 pe-4 block w-full border-gray-200 dark:bg-sky-950 dark:text-white dark:border-0 focus:outline-none rounded-full outline-none text-sm disabled:opacity-50 disabled:pointer-events-none focus:border-slate-100 focus:ring-slate-100" type="text" role="combobox" aria-expanded="false" placeholder="Search User" value="" data-hs-combo-box-input="">
                </div>
            </div>
        </div>
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-5 xl:pb-5 pt-2 pb-5">
            <div class="col-span-4 lg:col-span-1 mb-5"> 
                <div class="w-fit mx-auto mb-5 flex gap-1">
                    <h3 class="text-xl font-semibold text-center bg-sky-700 text-white p-2 px-5 rounded-full">Health Practitioners</h3> 
                    <p class="text-gray-500">5</p>  
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex shadow-lg p-1 items-center gap-2 bg-sky-100 rounded">
                        <a class="hover:opacity-80 cursor-pointer" aria-haspopup="dialog" aria-expanded="false" aria-controls="health-practitioners-modal" data-hs-overlay="#health-practitioners-modal">
                            <img src="../public/img/avatar.png" alt="avatar" class="w-10">
                        </a>
                        <p>Doc Z</p>
                    </div>

                </div>
            </div>
            <div class="col-span-4 lg:col-span-3">
                <div class="w-fit mx-auto mb-5 flex gap-1">
                    <h3 class="text-xl font-semibold text-center bg-rose-700 text-white p-2 px-5 rounded-full ">Postpartum Mothers</h3>  
                    <p class="text-gray-500">20</p> 
                </div>
                <div class="grid lg:grid-cols-3 gap-2">
                    <div class="flex shadow-lg p-1 items-center gap-2 bg-rose-100 rounded">
                        <a class="hover:opacity-80 cursor-pointer" aria-haspopup="dialog" aria-expanded="false" aria-controls="mothers-profile-modal" data-hs-overlay="#mothers-profile-modal">
                            <img src="../public/img/avatar.png" alt="avatar" class="w-10">
                        </a>
                        <p>Maria Clara</p>
                    </div>
                    
                </div>
            </div>

           
            <div class="fixed right-0 bottom-0 z-10 flex flex-col items-center mr-8 mb-8 p-1 gap-5 justify-center max-w-screen-2xl">
                <img src="../public/img/email.png" alt="create" class="w-10 cursor-pointer drop-shadow-2xl hover:opacity-80" aria-haspopup="dialog" aria-expanded="false" aria-controls="send-email-modal" data-hs-overlay="#send-email-modal">
                <img src="../public/img/create.png" alt="create" class="w-10 cursor-pointer drop-shadow-2xl hover:opacity-80" aria-haspopup="dialog" aria-expanded="false" aria-controls="send-sms-modal" data-hs-overlay="#send-sms-modal">
            </div>

            <!-- Health Practitioners Modal -->
            <div id="health-practitioners-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="health-practitioners-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
                    <div class="flex flex-col bg-gray-200 dark:bg-sky-900 border shadow-sm rounded-xl pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4">
                            <h3 id="health-practitioners-label" class="font-bold text-gray-800 dark:text-gray-300">
                                
                            </h3>
                            <button type="button" class="hs-dropup-toggle size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#health-practitioners-modal">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                            </button>
                        </div>

                        <div class="pb-10 flex flex-col items-center px-10">
                            <h3 class="font-semibold text-gray-700 text-center text-lg mb-2">PROFILE</h3>
                            <div class="flex w-full justify-center items-center gap-2 mb-2 text-nowrap">
                                <label for="date-of-consultation">Name:</label>
                                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" placeholder="" value="Juan Dela Cruz" disabled>
                            </div>
                            <div class="flex w-full justify-center items-center gap-2 mb-2 text-nowrap">
                                <label for="date-of-consultation">Address:</label>
                                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" placeholder="" value="Juan Dela Cruz" disabled>
                            </div>
                            <div class="flex w-full justify-center items-center gap-2 mb-2 text-nowrap">
                                <label for="date-of-consultation">Position:</label>
                                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" placeholder="" value="Juan Dela Cruz" disabled>
                            </div>
                            <div class="flex w-full justify-center items-center gap-2 mb-2 text-nowrap">
                                <label for="date-of-consultation">Sex:</label>
                                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" placeholder="" value="Juan Dela Cruz" disabled>
                            </div>
                            <div class="flex w-full justify-center items-center gap-2 mb-2 text-nowrap">
                                <label for="date-of-consultation">Age:</label>
                                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" placeholder="" value="Juan Dela Cruz" disabled>
                            </div>
                            <div class="flex w-full justify-center items-center gap-2 mb-2 text-nowrap">
                                <label for="date-of-consultation">Birthday:</label>
                                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" placeholder="" value="Juan Dela Cruz" disabled>
                            </div>
                            <div class="flex w-full justify-center items-center gap-2 mb-2 text-nowrap">
                                <label for="date-of-consultation">Phone Number:</label>
                                <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" placeholder="" value="Juan Dela Cruz" disabled>
                            </div>
                                                            
                            <div class="message-response">

                            </div>
                        </div>             
                        
                    </div>
                </div>
            </div>


            <!-- Postpartum Mother Modal -->
            <div id="mothers-profile-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="mothers-profile-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-10 opacity-0 transition-all max-w-full max-h-full h-full m-2 xl:m-5">
                    <div class="flex flex-col bg-gray-200 pointer-events-auto xl:max-w-screen-2xl 2xl:max-h-[90vh] h-full dark:bg-neutral-800 mx-auto rounded-xl">
                        <div class="flex justify-between items-center py-3 px-4 dark:border-neutral-700">
                            <h3 id="mothers-profile-label" class="font-bold text-gray-800 dark:text-white">
                            
                            </h3>
                            <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#mothers-profile-modal">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                            </button>
                        </div>
                        <div class="px-4 overflow-y-auto">
                            <h3 class="font-semibold text-gray-700 text-center text-lg mb-2">ELECTRONIC MEDICAL RECORD OF POSTPARTUM MOTHER</h3>
                            <div class="flex w-full justify-end items-center gap-2 mb-2">
                                <label for="date-of-consultation">1st Date of Consulatation:</label>
                                <input type="text" class="py-2 px-4 w-fit border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="August 20, 2024">
                            </div>
                            <div class="flex w-full justify-start items-center gap-2 mb-2">
                                <label for="date-of-consultation">Name:</label>
                                <input type="text" class="py-2 px-4 w-full border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="Maria Clara">
                            </div>
                            <div class="flex w-full justify-start items-center gap-2 mb-2">
                                <label for="date-of-consultation">Address:</label>
                                <input type="text" class="py-2 px-4 w-full border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="San Fermin, Cauayan City, Isabela">
                            </div>
                            <div class="flex w-full justify-stretch items-center gap-5 mb-2">
                                <div class="flex items-center gap-2 w-1/4">
                                    <label for="date-of-consultation">Birthday:</label>
                                    <input type="text" class="py-2 px-4 w-fit border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="May 2, 1995">
                                </div> 
                                <div class="flex items-center gap-2 w-1/4">
                                    <label for="date-of-consultation">Age:</label>
                                    <input type="text" class="py-2 px-4 w-fit border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="29">
                                </div> 
                                <div class="flex items-center gap-2 w-1/4">
                                    <label for="date-of-consultation">Gender:</label>
                                    <input type="radio" name="gender" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="marital-status-1" checked="">
                                    <label for="male" class="text-sm text-gray-500 dark:text-neutral-400">M</label>
                                    <input type="radio" name="gender" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-rose-600 focus:ring-rose-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-rose-500 dark:checked:border-rose-500 dark:focus:ring-offset-gray-800" id="marital-status-1" checked="">
                                    <label for="female" class="text-sm text-gray-500 dark:text-neutral-400">F</label>
                                </div>  
                                <div class="flex items-center gap-2 w-1/4">
                                    <label for="date-of-consultation">Marital Status:</label>
                                    <input type="radio" name="marital-status" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="marital-status-1" checked="">
                                    <label for="single" class="text-sm text-gray-500 dark:text-neutral-400">S</label>
                                    <input type="radio" name="marital-status" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-green-600 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-rose-500 dark:checked:border-rose-500 dark:focus:ring-offset-gray-800" id="marital-status-1" checked="">
                                    <label for="married" class="text-sm text-gray-500 dark:text-neutral-400">M</label>
                                    <input type="radio" name="marital-status" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-yellow-600 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-rose-500 dark:checked:border-rose-500 dark:focus:ring-offset-gray-800" id="marital-status-1" checked="">
                                    <label for="widowed" class="text-sm text-gray-500 dark:text-neutral-400">W</label>
                                </div>    
                            </div>
                            <div class="flex w-full justify-stretch items-center gap-5 mb-2">
                                <div class="flex items-center gap-2 w-1/2">
                                    <label for="date-of-consultation">Nationality:</label>
                                    <input type="text" class="py-2 px-4 w-fit border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="Philippines">
                                </div> 
                                <div class="flex items-center gap-2 w-1/2">
                                    <label for="date-of-consultation">Religion:</label>
                                    <input type="text" class="py-2 px-4 w-fit border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="Roman Catholic">
                                </div> 
                                
                            </div>
                            <div class="flex w-full justify-between items-center gap-5 mb-2">
                                <div class="flex items-center gap-2 w-1/2">
                                    <label for="date-of-consultation">Educational Attainment:</label>
                                    <input type="text" class="py-2 px-4 w-fit border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="College Graduate">
                                </div> 
                                <div class="flex items-center gap-2 w-1/2">
                                    <label for="date-of-consultation">Contact Number:</label>
                                    <input type="text" class="py-2 px-4 w-fit border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="09545454545">
                                </div> 
                                
                            </div>
                            <div class="flex w-full justify-start items-center gap-5 mb-2">
                                <div class="flex items-center gap-2 text-nowrap w-full">
                                    <label for="date-of-consultation">Occupation:</label>
                                    <input type="text" class="py-2 px-4 w-full border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="">
                                </div>                   
                            </div>
                            <div class="flex w-full justify-start items-center gap-5 mb-2">
                                <div class="flex items-center gap-2 text-nowrap w-full">
                                    <label for="date-of-consultation">Reffered By:</label>
                                    <input type="text" class="py-2 px-4 w-full border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="">
                                </div>                   
                            </div>
                            <div class="flex w-full justify-start items-center gap-5 mb-2">
                                <div class="flex items-center gap-2 text-nowrap w-full">
                                    <label for="date-of-consultation">Chief Complaint/s:</label>
                                    <input type="text" class="py-2 px-4 w-full border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="">
                                </div>                   
                            </div>
                            <div class="flex w-full justify-stretch items-center gap-5 mb-2">
                                <div class="flex items-start justify-start gap-2 flex-col w-1/2">
                                    <label for="date-of-consultation">History of present Illness:</label>
                                    <input type="text" class="py-2 px-4 w-full border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="">
                                </div>  
                                <div class="flex items-start justify-start gap-2 flex-col w-1/2">
                                    <label for="date-of-consultation">Present Medication/s:</label>
                                    <input type="text" class="py-2 px-4 w-full border-gray-200 rounded-md border outline-none text-gray-700 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base" disabled value="">
                                </div>                 
                            </div>
                            <button type="button" class="my-2 py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Save changes
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>

           
            <!-- Send Sms Modal -->
            <div id="send-sms-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="send-sms-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
                    <div class="flex flex-col bg-gray-200 dark:bg-sky-900 border shadow-sm rounded-xl pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4">
                            <h3 id="send-sms-label" class="font-bold text-gray-800 dark:text-gray-300">
                                
                            </h3>
                            <button type="button" class="hs-dropup-toggle size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#send-sms-modal">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                            </button>
                        </div>

                        <div class="py-3 flex flex-col items-start px-10">
                            <h3 class="mb-3 dark:text-white text-lg">Add Topic Details</h3>

                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Topic Title">
                            <input type="text" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Week Number">
                           
                            <div class="message-response">

                            </div>
                        </div>
                    
                        <div class="flex justify-center items-center gap-x-2 py-3 px-4 ">
                            <input type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none cursor-pointer" value="Submit">                           
                        </div>
                    </div>
                </div>
            </div>


             <!-- Send Email Modal -->
             <div id="send-email-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="send-email-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-14 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
                    <div class="flex flex-col bg-gray-200 dark:bg-sky-900 border shadow-sm rounded-xl pointer-events-auto">
                        <div class="flex justify-between items-center py-3 px-4">
                            <h3 id="send-email-label" class="font-bold text-gray-800 dark:text-gray-300">
                                
                            </h3>
                            <button type="button" class="hs-dropup-toggle size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#send-email-modal">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                            </button>
                        </div>
                        
                        <form method="post" id="emailForm">
                            <div class="py-3 flex flex-col items-start px-10">
                                <h3 class="mb-3 dark:text-white text-lg">Send Email</h3>

                                <input type="text" name="recipient" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="To/Recipient e.g. ecares@gmail.com" autocomplete="off" required>
                                <input type="text" name="recipient-name" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Recipient Name" autocomplete="off" required>
                                <input type="text" name="subject" class="py-2 px-4 block w-full border-gray-200 rounded-md border outline-none dark:bg-sky-950 dark:text-gray-300 dark:focus:border-0 dark:focus:ring-0 dark:border-0 2xl:text-lg text-base mb-5" placeholder="Subject" autocomplete="off" required>
                                <textarea name="message" id="message" class="py-2 px-4 block w-full border-gray-200 rounded-md" placeholder="Message" autocomplete="off" required></textarea>
                            </div>
                        
                            <div class="flex justify-center items-center gap-x-2 py-3 px-4 ">
                                <button type="submit" name="sendEmailButton" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none disabled:opacity-50 disabled:pointer-events-none cursor-pointer">Send Mail</button>                           
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
                                        Success.
                                        </h3>
                                    </div>
                                </div>
                            </div>

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
                        </form>
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
                            "url": "/upload",
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
    <script src="../public/javascript/sendEmail.js"></script>
    <script src="../public/javascript/darkmode.js"></script>
    <script src="../node_modules/preline/dist/preline.js"></script>
    <script src="../node_modules/lodash/lodash.min.js"></script>
    <script src="../node_modules/dropzone/dist/dropzone-min.js"></script>
</body>
</html>