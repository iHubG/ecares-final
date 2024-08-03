<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
<body class="overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-sky-800 dark:[&::-webkit-scrollbar-thumb]:bg-sky-950">
  
    <?php include "admin-navbar.view.php"; ?>
    <?php 
        date_default_timezone_set('Asia/Manila');

        $currentDate = date('F j, Y'); 
        $currentTime = date('h:i:s A');        
    ?>
    <div class="flex">
        <div class="w-auto"><?php include "admin-sidebar.view.php"; ?></div>
        <div id="main-content" class="bg-slate-100 dark:bg-slate-500 w-full">
            <div class="xxl:container py-3 w-full text-wrap h-screen scroll-smooth max-h-screen overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-sky-800 dark:[&::-webkit-scrollbar-thumb]:bg-sky-950">
                <div class="flex items-center justify-between px-4 pb-4">
                    <h2 class="text-xl font-medium dark:text-gray-100">Dashboard</h2>
                    <div class="flex">
                        <p class="text-base dark:text-gray-100" id="date"><?php echo $currentDate;?></p>
                        <p class="text-base dark:text-gray-100" id="time">&nbsp;<?php echo $currentTime;?></p>
                    </div>           
                </div>  
                <hr class="border-gray-200 dark:border-gray-100">
                <div class="dashboard-content px-4 py-5">
                    <div class="grid grid-cols-3 gap-5">
                        <div class="shadow rounded border-t border-gray-200 px-5 py-5 bg-white flex items-center justify-between">
                            <div class="flex flex-col">
                                <h2 class="text-base font-medium">TOTAL USERS</h2>
                                <p class="text-lg font-medium text-gray-700">20</p>
                            </div>
                            <img src="./public/img/users.png" alt="users" class="w-10">
                        </div>
                        <div class="shadow rounded border-t border-gray-200 px-5 py-5 bg-white flex items-center justify-between">
                            <div class="flex flex-col">
                                <h2 class="text-base font-medium">HEALTHCARE FACILITIES</h2>
                                <p class="text-lg font-medium text-gray-700">10</p>
                            </div>
                            <img src="./public/img/facility.png" alt="users" class="w-10">
                        </div>
                        <div class="shadow rounded border-t border-gray-200 px-5 py-5 bg-white flex items-center justify-between">
                            <div class="flex flex-col">
                                <h2 class="text-base font-medium">HEALTH PRACTITIONERS</h2>
                                <p class="text-lg font-medium text-gray-700">15</p>
                            </div>
                            <img src="./public/img/practitioner-red.png" alt="users" class="w-10">
                        </div>
                        <div class="shadow rounded border-t border-gray-200 px-5 py-5 bg-white flex items-center justify-between">
                            <div class="flex flex-col">
                                <h2 class="text-base font-medium">POSTPARTUM MOTHERS</h2>
                                <p class="text-lg font-medium text-gray-700">42</p>
                            </div>
                            <img src="./public/img/mother-pink.png" alt="users" class="w-10">
                        </div>
                        <div class="shadow rounded border-t border-gray-200 px-5 py-5 bg-white flex items-center justify-between">
                            <div class="flex flex-col">
                                <h2 class="text-base font-medium">ADMINS</h2>
                                <p class="text-lg font-medium text-gray-700">3</p>
                            </div>
                            <img src="./public/img/admin.png" alt="users" class="w-10">
                        </div>
                        <div class="shadow rounded border-t border-gray-200 px-5 py-5 bg-white flex items-center justify-between">
                            <div class="flex flex-col">
                                <h2 class="text-base font-medium">POSTPARTUM COMPLETERS</h2>
                                <p class="text-lg font-medium text-gray-700">12</p>
                            </div>
                            <img src="./public/img/check.png" alt="users" class="w-10">
                        </div>
    
                    </div>
                </div> 
            </div>
        </div> 
    </div>

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
    </script>
</body>
</html>