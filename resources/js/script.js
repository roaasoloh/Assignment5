$(document).ready(function() {
                                //change input were used to support numeric input up/down
    $('#searchName, #ageFilter').on('keyup change input', function() {
        performSearch();
    });
    performSearch();

});
function performSearch() {
    let name = $('#searchName').val();
    let age = $('#ageFilter').val();

    $.ajax({
        url: "students/search",
        method: 'GET',
        data: {
            name: name,
            age: age
        },
        success: function(response) {
            $('#students-table-body').html(response); 
        },
        error: function(msg) {
            console.error("An error occurred:", msg.statusText);
        }
    });
}
