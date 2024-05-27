function backdropRemove() {
    $('.modal-backdrop').not(':first').remove();
}

function viewPassword(event) {
    if(event.target.checked) {
        $('.input-password').attr('type', 'text');
    }
    else {
        $('.input-password').attr('type', 'password');
    }
}

$(window).on('modal-create-hide', function() {
    $('#modalCreate').modal('hide');
    $('.modal-backdrop').remove();
})

$(window).on('modal-edit-hide', function() {
    $('#modalEdit').modal('hide');
    $('.modal-backdrop').remove();
})




