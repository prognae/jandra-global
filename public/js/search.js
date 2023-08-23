
const search = document.querySelector('#search');
const table = document.querySelector('.table-data');
const tr = table.getElementsByTagName('tr');

search.addEventListener('input', () => {
    var searchQuery = search.value.toUpperCase();

    for (var i = 1; i < tr.length; i++) {
        var tds = tr[i].getElementsByTagName("td");
        var flag = false;
        for (var j = 0; j < tds.length; j++) {
            var td = tds[j];
            if (td.innerText.toUpperCase().indexOf(searchQuery) > -1) {
                flag = true;
                break; // No need to continue searching if found in any cell of the row
            }
        }
        if (flag) {
            tr[i].style.display = ""; // Show the row if the search query is found
        } else {
            tr[i].style.display = "none"; // Hide the row if the search query is not found
        }
    }

    // Send the search query to the server using AJAX
    $.ajax({
        url: "{{ route('product.search') }}",
        method: 'GET',
        data: { search_string: search.value },
        success: function (response) {
            // Update the table with the search results
            $('.table-data').html(response);
        },
        error: function (xhr, status, error) {
            // Handle AJAX errors if necessary
            //console.log(xhr.status + ': ' + xhr.statusText);
        }
    });
});