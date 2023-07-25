// filter.js
$(document).on('change', 'select[name="category"]', function (e) {
    e.preventDefault();
    const category = $(this).val();

    $.ajax({
        url: "{{ url('/admin/dashboard/item/view') }}",
        method: 'GET',
        data: { category: category },
        success: function (res) {
            $('.table-data').html($(res).find('.table-data').html());
        },
        error: function (xhr) {
            // Handle error if needed
        }
    });
});

