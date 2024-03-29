function openModal(id){
    ids = 'modal'+id;
    console.log(ids);
    var modal = document.getElementById(ids);
    modal.classList.add("team-show-modal");
    modal.classList.remove("hideteammodal");
}
function closeModal(id){
    ids = 'modal'+id;
    console.log(ids);
    var close = document.getElementById(ids);
    close.classList.add("hideteammodal");
    close.classList.remove("team-show-modal");
}

function previous(id, rows) {
    ids = 'modal'+id;
    const teamclose = document.getElementById(ids);
    teamclose.classList.add("hideteammodal");
    row = rows;
    if (id == 1) {
        id = row;
    }
    else {
        id = id - 1;
    }
    openModal(id);
}

function next(id, rows) {

    ids = 'modal'+id;
    const teamclose = document.getElementById(ids);
    teamclose.classList.add("hideteammodal");
    row = rows;
    if (id == rows) {
        id = 1;
    }
    else {
        id = id + 1;
    }
    openModal(id);
}