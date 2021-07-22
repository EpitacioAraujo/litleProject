$('.card').on('click', function() {
    $('.description').addClass('showing')
})

$('#close-description').on('click', function() {
    $('.description').removeClass('showing')
})

$('#open-register-car').on('click', function() {
    $('#register-car-modal').addClass('register-showing')
})

$('#close-register-car').on('click', function() {
    $('#register-car-modal').removeClass('register-showing')
})