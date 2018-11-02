$(document).ready(function () {
    console.log('Request.js [LOADED]');
    $('.delete_order').on('click', function (event) {
        let a = event.target.id;
        $.get(
            `/user.php?action=delete_order&id=${a}`,
            function (response, status) {
                console.log(status);
                console.log(response);

            }
        );
        alert('заказ удален')
    });

});