<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Postpartum Mothers</title>
    <link rel="stylesheet" href="./public/tailwind/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
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
                    <h2 class="text-xl font-medium dark:text-gray-100">Postpartum Mothers</h2>
                    <div class="flex">
                        <p class="text-base dark:text-gray-100" id="date"><?php echo $currentDate;?></p>
                        <p class="text-base dark:text-gray-100" id="time">&nbsp;<?php echo $currentTime;?></p>
                    </div>           
                </div>  
                <hr class="border-gray-200 dark:border-gray-100">
                <div class="dashboard-content px-4 py-5">
                    <div class="search w-full flex justify-center">
                        <div class="w-2/5">                      
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                    <svg class="shrink-0 size-4 text-gray-400 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                                <input class="py-3 ps-10 pe-4 block w-full border-gray-200 dark:bg-sky-950 dark:text-white dark:border-0 focus:outline-none rounded-full outline-none text-sm disabled:opacity-50 disabled:pointer-events-none" type="text" role="combobox" aria-expanded="false" placeholder="Search Postpartum Mother" value="" data-hs-combo-box-input="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-end py-3 px-1">
                        <button id="exportButton" class="flex text-sm text-end items-center gap-2 bg-green-200 dark:bg-green-700 text-gray-800 dark:text-gray-300 p-1 px-3 rounded-lg hover:opacity-80">
                        <p>Export as</p>
                            
                        <img src="./public/img/excel.png" alt="excel" class="w-6">
                        </button>
                    </div>

                    <div class="py-3 px-1">
                        <div class="flex flex-col dark:bg-sky-950">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200" id="data-table">
                                        <thead>
                                            <tr>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-300">#</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Name</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Birthdate</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Email</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Phone</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Status</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-300">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-300">1</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-300">Maria Clara</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-300">May 2, 1995</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-300">mariaclara@gmail.com</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-300">09234342455</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-300">
                                                <div class="bg-green-200 rounded-lg text-center p-1 dark:bg-green-700">Active</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex gap-2 items-center justify-center">
                                                <a href="#" class="hover:bg-gray-200 hover:rounded-full dark:hover:bg-gray-700 p-1">
                                                    <img src="./public/img/edit.png" alt="edit" class="w-6">
                                                </a>
                                                <a href="#" class="hover:bg-gray-200 hover:rounded-full dark:hover:bg-gray-700 p-1">
                                                    <img src="./public/img/delete.png" alt="edit" class="w-6">
                                                </a>
                                            </td>
                                            </tr>
                                           
                                        </tbody>
                                        </table>
                                    </div>
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

        document.getElementById('exportButton').addEventListener('click', function() {
        // Get table element
        const table = document.getElementById('data-table');
        
        // Create a workbook and add the table data
        const wb = XLSX.utils.table_to_book(table, { sheet: "Sheet1" });
        
        // Create an Excel file and trigger download
        XLSX.writeFile(wb, 'Postpartum_Mothers_Data.xlsx');
    });
    </script>
</body>
</html>