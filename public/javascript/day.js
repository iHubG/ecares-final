// Function to get the current day of the 42-day postpartum cycle
function getPostpartumDay(startDate) {
    const today = new Date();
    const timeDiff = today - startDate;
    const daysPassed = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
    const currentDay = (daysPassed % 42) + 1; // +1 to make it 1-based index
    return currentDay;
}

// Function to initialize and update the postpartum day display
function updatePostpartumDay() {
    const postpartumDayElement = document.getElementById('postpartumDay');
    
    // Retrieve the start date from the data attribute
    const startDateString = postpartumDayElement.getAttribute('data-start-date');
    const startDate = new Date(startDateString);

    // Get the current day in the 42-day postpartum cycle
    const currentDay = getPostpartumDay(startDate);
    
    // Update the content of the element with the current day
    if (currentDay === 42) {
        postpartumDayElement.innerText = 'Congrats! You have completed the 42-day postpartum period';
    } else {
        postpartumDayElement.innerText = `Day ${currentDay} of 42 days postpartum`;
    }
}

// Call the function to update the postpartum day on page load
document.addEventListener('DOMContentLoaded', updatePostpartumDay);
