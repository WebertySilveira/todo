let insertTodo = (() => {
    let handleForm = () => {
        $('#insert-todo-form').submit(function (event) {
            event.preventDefault();
            let insertForm = $(this).serialize();

            $.ajax({
                url: '/kanban/insert',
                type: 'POST',
                data: insertForm,
                success: function (data) {
                    alert("OK")
                    window.location.href = "";
                },
                error: function (data){
                    alert("Dados incorretos!")
                }
            });
        });
    }

    return {
        init: () => {
            handleForm();
        }
    }
})();

$(document).ready(() => {
    insertTodo.init();
});