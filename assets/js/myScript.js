let editBtn = document.querySelectorAll('editBtn');
editBtn.forEach(() => {
    
});


// Klikom na dugme 'editBtn' pregaziti div sa klasom 'task' sa sledecim kodom:
{/* 
    <form action="models/createNewTask.php" method="post" class="d-flex flex-column">
        <input type="text" id="titleTask" name="titleTask" class="text-body-secondary border-0 fs-4" placeholder="Task title" />
        <hr class="my-2 my-hr" />
        <textarea name="descTask" id="descTask" maxlength="1000" minlength="3" class="text-body-secondary border-0" placeholder="Type here..." rows="5" draggable="no"></textarea>
        <button type="submit" class="btn btn-dark align-self-end mt-auto">Create</button>
    </form>
*/}

$(document).on("click", ".editBtn", function () {
    // Selektovanje parent `div` elementa sa klasom `task`
    const taskDiv = $(this).closest(".task");

    // HTML koji će zameniti sadržaj
    const formHTML = `
        <form action="models/createNewTask.php" method="post" class="d-flex flex-column">
            <input type="text" id="titleTask" name="titleTask" class="text-body-secondary border-0 fs-4" placeholder="Task title" />
            <hr class="my-2 my-hr" />
            <textarea name="descTask" id="descTask" maxlength="1000" minlength="3" class="text-body-secondary border-0" placeholder="Type here..." rows="5" draggable="no"></textarea>
            <button type="submit" class="btn btn-dark align-self-end mt-auto">Create</button>
        </form>
    `;

    // Pregaziti sadržaj `task` elementa
    taskDiv.html(formHTML);
});
