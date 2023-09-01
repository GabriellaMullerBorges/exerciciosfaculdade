function carregarImagens() {
    $.ajax({
        url: "https://dog.ceo/api/breeds/image/random",
        success: function(result) {
            $("#img_dog").attr("src", result.message);
        },
        error: function() {
            $("#img_dog").attr("src", "erro.jpg");
        }
    });
}