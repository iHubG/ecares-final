<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
   <div class="container z-0 sticky border-r border-gray-200 dark:border-0 dark:drop-shadow-lg dark:bg-sky-950 w-fit px-5 py-5 h-screen">
        <a href="/ecares-final/admin-dashboard">
            <div class="hs-tooltip [--placement:right]">
                <button type="button" class="hs-tooltip-toggle">
                    <div id="navContainer" class="flex gap-2 hover:bg-sky-100 px-2 py-2 rounded w-56 text-nowrap dark:hover:bg-gray-700 mb-2 items-center">
                        <img src="./public/img/monitor.png" alt="monitor" class="w-6">
                        <p id="navText" class="dark:text-gray-300">Dashboard</p>
                    </div>
                    <span id="tooltip" class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:invisible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    Dashboard
                    </span>
                </button>
            </div>
        </a>
        <a href="/ecares-final/admin-facilities">
            <div class="hs-tooltip [--placement:right]">
                <button type="button" class="hs-tooltip-toggle">
                    <div id="navContainer" class="flex gap-2 hover:bg-sky-100 px-2 py-2 rounded w-56 text-nowrap flex-row dark:hover:bg-gray-700 mb-2 items-center">
                        <img src="./public/img/facility.png" alt="monitor" class="w-6">
                        <p id="navText" class="dark:text-gray-300">Healthcare Facilities</p>
                    </div>
                    <span id="tooltip" class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:invisible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    Healthcare Facilities
                    </span>
                </button>
            </div>
        </a>
        <a href="">
            <div class="hs-tooltip [--placement:right]">
                <button type="button" class="hs-tooltip-toggle">
                    <div id="navContainer" class="flex gap-2 hover:bg-sky-100 px-2 py-2 rounded w-56 text-nowrap flex-row dark:hover:bg-gray-700 mb-2 items-center">
                        <img src="./public/img/practitioner.png" alt="monitor" class="w-6">
                        <p id="navText" class="dark:text-gray-300">Health Practitioners</p>
                    </div>
                    <span id="tooltip" class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:invisible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    Health Practitioners
                    </span>
                </button>
            </div>
        </a>
        <a href="">
            <div class="hs-tooltip [--placement:right]">
                <button type="button" class="hs-tooltip-toggle">
                    <div id="navContainer" class="flex gap-2 hover:bg-sky-100 px-2 py-2 rounded w-56 text-nowrap flex-row dark:hover:bg-gray-700 mb-2 items-center">
                        <img src="./public/img/mother.png" alt="monitor" class="w-6">
                        <p id="navText" class="dark:text-gray-300">Postpartum Mothers</p>
                    </div>
                    <span id="tooltip" class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:invisible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    Postpartum Mothers
                    </span>
                </button>
            </div>
        </a>
        <a href="">
            <div class="hs-tooltip [--placement:right]">
                <button type="button" class="hs-tooltip-toggle">
                    <div id="navContainer" class="flex gap-2 hover:bg-sky-100 px-2 py-2 rounded w-56 text-nowrap flex-row dark:hover:bg-gray-700 mb-2 items-center">
                        <img src="./public/img/logs.png" alt="monitor" class="w-6">
                        <p id="navText" class="dark:text-gray-300">Activity Logs</p>
                    </div>
                    <span id="tooltip" class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:invisible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    Activity Logs
                    </span>
                </button>
            </div>
        </a>
        <a href="">
            <div class="hs-tooltip [--placement:right]">
                <button type="button" class="hs-tooltip-toggle">
                    <div id="navContainer" class="flex gap-2 hover:bg-sky-100 px-2 py-2 rounded w-56 text-nowrap flex-row dark:hover:bg-gray-700 mb-2 items-center">
                        <img src="./public/img/backup.png" alt="monitor" class="w-6">
                        <p id="navText" class="dark:text-gray-300">Database Backup</p>
                    </div>
                    <span id="tooltip" class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:invisible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700" role="tooltip">
                    Database Backup
                    </span>
                </button>
            </div>
        </a>
        <div class="flex items-center mt-3 gap-2">
            <input type="checkbox" id="hs-xs-switch" class="relative w-[35px] h-[21px] bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600
            before:inline-block before:size-4 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-neutral-400 dark:checked:before:bg-blue-200">
            <p id="navText" class="dark:text-gray-300 text-xs">Switch to Icons</p>
            
        </div>
   </div>

   <script>
         // Function to handle toggle changes
         function handleToggleChange() {
            var isChecked = document.getElementById('hs-xs-switch').checked;
            var navTexts = document.querySelectorAll('#navText');
            var navItems = document.querySelectorAll('#navContainer');
            var tooltips = document.querySelectorAll('#tooltip');

            // Toggle visibility for all nav-text elements
            navTexts.forEach(function(navText) {
                navText.classList.toggle('hidden', isChecked);
            });

            // Toggle width for all nav-items
            navItems.forEach(function(navItem) {
                if (isChecked) {
                    navItem.classList.remove('w-56');
                    navItem.classList.add('w-fit');
                } else {
                    navItem.classList.remove('w-fit');
                    navItem.classList.add('w-56');
                }
            });

            tooltips.forEach(function(tooltip) {
                if (isChecked) {
                    tooltip.classList.remove('hs-tooltip-shown:invisible');
                    tooltip.classList.add('hs-tooltip-shown:visible');
                } else {
                    tooltip.classList.remove('hs-tooltip-shown:visible');
                    tooltip.classList.add('hs-tooltip-shown:invisible');
                }
            });
        }

        // Attach the function to the checkbox change event
        document.getElementById('hs-xs-switch').addEventListener('change', handleToggleChange);
   </script>

<script src="https://cdn.jsdelivr.net/npm/preline@2.4.1/dist/preline.min.js"></script>
</body>
</html>