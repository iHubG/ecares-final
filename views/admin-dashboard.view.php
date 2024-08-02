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
<body>
    <div class="max-h-[400px] overflow-y-auto
    [&::-webkit-scrollbar]:w-2
    [&::-webkit-scrollbar-track]:rounded-full
    [&::-webkit-scrollbar-track]:bg-gray-100
    [&::-webkit-scrollbar-thumb]:rounded-full
    [&::-webkit-scrollbar-thumb]:bg-gray-300
    dark:[&::-webkit-scrollbar-track]:bg-neutral-700
    dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
    </div>
    <?php include "admin-navbar.view.php"; ?>
    <div class="flex">
        <div class="w-auto"><?php include "admin-sidebar.view.php"; ?></div>
        <div id="main-content" class="bg-slate-100 w-full">
            <div class="border-5 p-2">
                <h2>dashboard</h2>
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nemo voluptates aspernatur.
            </div>
        </div> 
    </div>

    <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>