let cards = (() => {
    let handleCardInsert = () => {
        $('#insert-todo-form').submit(function (event) {
            let insertTodoForm = $(this).serialize();

            event.preventDefault();
            $.ajax({
                url: '/kanban/insert',
                type: 'POST',
                data: insertTodoForm,
                success: function (data) {
                    location.reload();
                },
                error: function (data) {
                    alert("Dados incorretos!")
                }
            });
        })
    }
    let handleCardRemove = () => {
        $("span#card-remove").click(function (e) {
            let objectiveId = $(this).data('id');

            $.ajax({
                url: '/kanban/delete',
                type: 'POST',
                data: 'id=' + objectiveId,
                success: function (response) {
                    location.reload();
                },
                error: function (error) {
                    alert(error);
                }
            });
        });
    }

    let handleCardUpdate = () => {
        const draggables = document.querySelectorAll(".task");
        const droppables = document.querySelectorAll(".swim-lane");

        draggables.forEach((task) => {
            task.addEventListener("dragstart", () => {
                task.classList.add("is-dragging");
            });
            task.addEventListener("dragend", (e) => {
                task.classList.remove("is-dragging");

                let id = task.dataset.id;
                let lane = task.parentElement.dataset.lane;
                $.ajax({
                    url: '/kanban/update',
                    type: 'POST',
                    data: {
                        "id": id,
                        "lane": lane
                    },
                    success: function (response) {
                    },
                    error: function (error) {
                        alert(error);
                    }
                });
            });
        });

        droppables.forEach((zone) => {
            zone.addEventListener("dragover", (e) => {
                const curTask = document.querySelector(".is-dragging");
                zone.appendChild(curTask);
            });
        });
    }

    return {
        init: () => {
            handleCardInsert();
            handleCardRemove();
            handleCardUpdate();
        }
    }
})();

$(document).ready(() => {
    cards.init();
});