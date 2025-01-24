$(document).on('click', '.editBtn', function(){
    let id = $(this).data("id");
    let taskForm = $(this).closest(".taskForm");

    let title = taskForm.find('#titleTask').val();
    let desc = taskForm.find('#descTask').val();

    // console.log(title + " " + desc);
    window.location.href = `models/updateTask.php?id=${id}&title=${encodeURIComponent(title)}&desc=${encodeURIComponent(desc)}`;
});
