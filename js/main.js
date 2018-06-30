$(document).ready(function(){

    $(".flashcard").on("click", function(){
        $(this).toggleClass("rotated");
        $(this).toggleClass("unrotated");

        rotateText($(this));
    });

});

function rotateText(card){
    setTimeout(function(){
        card.children().toggleClass("text-rotated");
        card.children().toggleClass("text-unrotated");
        console.log("second event");
    }, 600);

}
