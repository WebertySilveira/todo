let insertTodo = (() => {
    let handleForm = () => {
        $('#insert-todo-form').submit(function (event) {
            let insertTodoForm = $(this).serialize();

            event.preventDefault();
            $.ajax({
                url: '/kanban/insert',
                type: 'POST',
                data: insertTodoForm,
                success: function (data) {
                    alert("OK")
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