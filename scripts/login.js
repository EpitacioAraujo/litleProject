$("#cadastrar").on("click", function(){
    $(".form-container").addClass("cadastrando");
});

$("#close-cadastrar").on("click", function(){
    $(".form-container").removeClass("cadastrando");
});