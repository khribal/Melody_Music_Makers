function changeTable() {
    //Get value from dropdown
    const selectedValue = document.getElementById('instruments').value;

    //AJAX Request
    const xhr = new XMLHttpRequest();

    xhr.open('POST', '../processing/instrument_form.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


    xhr.onload = function () {
        if (xhr.status === 200) {
            // Update the tableContainer with the response
            document.getElementById('tableContainer').innerHTML = xhr.responseText;
        } else {
            console.error('Error fetching data');
        }
    };

    xhr.send('instrument_type=' + encodeURIComponent(selectedValue));
}