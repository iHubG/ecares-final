    document.addEventListener('DOMContentLoaded', () => {
        // Function to activate the link based on the current URL path
        function activateLink() {
            // Get current URL path
            let path = window.location.pathname;
            
            // Get all links and remove the active class
            let links = document.getElementsByClassName('dash-nav');
            for (let i = 0; i < links.length; i++) {
                links[i].classList.remove('active'); // Remove Tailwind classes
            }
            
            // Check localStorage for active path
            const activePath = localStorage.getItem('activePath');
            if (activePath) {
                path = activePath;
            }

            // Add active class to the link that matches the current path
            for (let i = 0; i < links.length; i++) {
                const link = links[i];
                const dataPath = link.getAttribute('data-path');
                if (path.includes(dataPath)) {
                    link.classList.add('active'); // Add Tailwind classes
                    break; // Exit loop once the matching link is found
                }
            }
        }

        // Function to handle link clicks and update active state
        function handleLinkClick(event) {
            // Save the clicked link's path in localStorage
            const path = event.currentTarget.getAttribute('data-path');
            localStorage.setItem('activePath', path);

            // Refresh active state
            activateLink();
        }

        // Attach click event listeners to all links
        const links = document.getElementsByClassName('dash-nav');
        for (let i = 0; i < links.length; i++) {
            links[i].addEventListener('click', handleLinkClick);
        }

        // Activate link on page load
        activateLink();
    });



     // Function to handle toggle changes
     function handleToggleChange() {
        var isChecked = document.getElementById('hs-xs-switch').checked;
        var navTexts = document.querySelectorAll('#navText');
        var navItems = document.querySelectorAll('#navContainer');
        var tooltips = document.querySelectorAll('#tooltip');

        // Save the toggle state to localStorage
        localStorage.setItem('toggleState', isChecked);

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
                tooltip.classList.add('hs-tooltip-shown:visible');
                tooltip.classList.remove('invisible');
            } else {
                tooltip.classList.remove('hs-tooltip-shown:visible');
                tooltip.classList.add('invisible');
            }
        });
    }

   // Function to initialize the toggle state based on localStorage
    function initializeToggleState() {
        var savedState = localStorage.getItem('toggleState') === 'true';
        document.getElementById('hs-xs-switch').checked = savedState;
        handleToggleChange(); // Apply the saved state to the UI
    }

    // Attach the function to the checkbox change event
    document.getElementById('hs-xs-switch').addEventListener('change', handleToggleChange);

    // Initialize the toggle state when the page loads
    window.addEventListener('DOMContentLoaded', initializeToggleState);