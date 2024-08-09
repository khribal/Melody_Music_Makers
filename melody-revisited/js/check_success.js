// alerts.js
document.addEventListener('DOMContentLoaded', () => {
    // Function to get URL parameters
    function getQueryParams() {
        const params = {};
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        for (const [key, value] of urlParams.entries()) {
            params[key] = value;
        }
        return params;
    }

    // Get the query parameters
    const params = getQueryParams();

    // Check for success message
    if (params.message === 'success') {
        alert('Student added successfully!');
    }
});
