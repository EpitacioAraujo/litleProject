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

$('#imagem').change(function(){
    const file = $(this)[0].files[0]
    console.log(file)
    const fileReader = new FileReader()
    fileReader.onloadend = function(){
        $('#preview').css('border', 'none')
        $('#preview').css('padding', '0')
        $('#preview').attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)
})