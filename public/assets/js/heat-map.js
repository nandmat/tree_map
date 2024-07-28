const cardBody = $('#cardBody');
const btnSubmit = $('#btnSubmit');

btnSubmit.on('click', function () {
    clearErrors();
    validade();
});
function validade() {
    let error = false;
    const data = [
        {
            brand_id: {
                value: $('#brand_id').val(),
                id: 'brand_id'
            },
            start_date: {
                value: $('#start_date').val(),
                id: 'start_date'
            },
            end_date: {
                value: $('#end_date').val(),
                id: 'end_date'
            }
        }
    ]

    data.forEach((element) => {

        if (element.brand_id.value === '') {
            changeVisibilityInvalidMesssage(element.brand_id.id);
            error = true;
        }

        if (element.start_date.value === '') {
            let message = 'Informe a data inicial.';
            changeVisibilityInvalidMesssage(element.start_date.id, message);
            error = true;
        }

        if (element.end_date.value === '') {
            let message = 'Informe a data final.';
            changeVisibilityInvalidMesssage(element.end_date.id, message);
            error = true;
        }

        if (element.start_date.value !== '' && element.end_date.value !== '') {
            let startDate = new Date(element.start_date.value);
            let endDate = new Date(element.end_date.value);

            if (endDate < startDate) {
                let endDateMessage = 'A data final não pode ser menor que a data inicial.';
                let startDateMessage = 'A data inicial não pode ser maior que a data final.'
                changeVisibilityInvalidMesssage(element.end_date.id, endDateMessage);
                changeVisibilityInvalidMesssage(element.start_date.id, startDateMessage);

                error = true;
            }
        }
    });

    if (error) {
        return;
    }


    filter(data);
}

function filter(data) {

    cardBody.html('');
    const spinner = $('.spinner-grow');
    spinner.removeClass('d-none');

    $.ajax({
        url: '/dashboard/historico-de-vendas/tree-map',
        type: 'GET',
        data: {
            _token: $('meta[name="csrf-token"]').val(),
            data
        },
        success: function (response) {

            const row = $('<div></div>');
            row.addClass('my-1 mx-1 text-center');

            setTimeout(() => {
                spinner.addClass('d-none');
                row.html(response.view);
                cardBody.append(row);
            }, 2000);
        },
        error: function (error) {
            console.error(error);
        }
    })
}

function changeVisibilityInvalidMesssage(element_id, message = '') {

    let element = $(`#${element_id}`);
    element.addClass('is-invalid');

    element = element.closest('.form-group').find('.invalid');

    element.removeClass('d-none');

    if (message !== '') {
        element.html(message);
    }
}
function clearErrors() {
    $('.is-invalid').each(function () {

        $(this).removeClass('is-invalid');
    });

    $('.invalid').each(function () {

        $(this).addClass('d-none');
    });
}
