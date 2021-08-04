$('.close').on('click', function () {
    $('.description').each(function () {
        if ($(this).hasClass('description showing')) {
            $(this).removeClass('showing')
        }
    })
})

$('#open-register-car').on('click', function () {
    $('#register-car-modal').addClass('register-showing')
})

$('#close-register-car').on('click', function () {
    $('#register-car-modal').removeClass('register-showing')
})

$('#imagem').change(function () {
    const file = $(this)[0].files[0]
    console.log(file)
    const fileReader = new FileReader()
    fileReader.onloadend = function () {
        $('#preview').css('border', 'none')
        $('#preview').css('padding', '0')
        $('#preview').attr('src', fileReader.result)
    }
    fileReader.readAsDataURL(file)
})

$('.card').on('click', function (event) {
    item = $(this);
    if (event.target.nodeName !== 'BUTTON') {
        $('.description').each(function () {
            if ($(this).attr('data-modal') === item.attr('data-veiculo')) {
                $(this).addClass('showing');
            } else {
                $(this).removeClass('showing');
            }
        })
    }
})