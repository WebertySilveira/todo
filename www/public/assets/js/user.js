let user = (() => {
    let handleUserInsert = () => {
        $('#insert-user-form').submit(function (event) {
            let insertUserForm = $(this).serialize();

            event.preventDefault();
            $.ajax({
                url: '/user/insert',
                type: 'POST',
                data: insertUserForm,
                success: function (data) {
                },
                error: function (data) {
                    alert("Dados incorretos!")
                }
            });
        })
    }

    let handleUserLogin = () => {
        $('#login-user-form').submit(function (event) {
            let insertUserForm = $(this).serialize();

            event.preventDefault();
            $.ajax({
                url: '/user/login',
                type: 'POST',
                data: insertUserForm,
                success: function (data) {
                    window.location.href = "/";
                },
                error: function () {
                    alert("Erro na requisição Ajax!");
                }
            });
        })
    }

    return {
        init: () => {
            handleUserInsert();
            handleUserLogin();
        }
    }
})();

$(document).ready(() => {
    user.init();
});