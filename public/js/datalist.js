$(function () {
    $('#myinput').on('input', function () {
        let input_data = $(this).val();

        $.ajax({
            url: '/ajax/datalist',
            data: `list=${input_data}`,
            type: 'POST',
            success:(data) => {
                $('#mydata').empty()
                for (let obj of data) {
                    $('#mydata').append(`<option value="${obj.name}"/>`);
                }
                return 0
            },
            error:  (msg) =>  console.log(msg)
        })
    });
})