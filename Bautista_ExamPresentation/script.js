function playSong(song){
    const player = document.getElementById("player");
    player.src = song;
    player.play();
}

function goToMusic(){
    document.getElementById("music")
    .scrollIntoView({
        behavior:"smooth"
    });
}

function albumInfo(){
    alert("Malibu Nights Album - Released 2018");
}

document.addEventListener("DOMContentLoaded", () => {

    const form =
    document.getElementById("contactForm");

    form.addEventListener("submit", function(e){

        e.preventDefault();

        const name =
        document.getElementById("name").value;

        alert(
            "Thank you, " +
            name +
            "! Your message has been sent successfully."
        );

        form.reset();
    });

});