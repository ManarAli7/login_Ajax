$(document).ready(function() {

    $("div").slideDown(3000);
    $(".send").click(function() {
        $(this).css({ "border": "none", "color": "white", "backgroundColor": "#6699ff" });
    });
    $(".send").hover(function() {
        $(this).css({ "border": "none", "color": "white", "backgroundColor": "#6699ff" });
    }, function() {
        $(this).css({ "border": "2px solid #CCC", "color": "black", "backgroundColor": "white" });
    });

    // Ajax jQuery with php 
    $(document).ready(function() {
        $("#form").submit(function() {
            $.ajax({
                url: "php/connection.php",
                method: "POST",
                data: $("#form").serialize(),
                success: function(data) {
                    console.log("ok");
                }
            })
        });
    });

});