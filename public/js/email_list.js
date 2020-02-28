$(function () {
    $('#email1').on('input', function () {
        let input_data = $(this).val();

        $.ajax({
            url: '/ajax/email_list',
            data: `list=${input_data}`,
            type: 'POST',
            success: (data) => {
                $('#my_data_email').empty()
                for (let obj of data) {
                    $('#my_data_email').append(`<option value="${obj.email}"/>`);
                }
                return 0
            },
            error: (msg) => console.log("ERROR__" + msg)

        })
    });
})