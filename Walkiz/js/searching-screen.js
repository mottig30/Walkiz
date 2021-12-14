(function () {// anonymous fun test

    var loading = document.getElementById("animation");//get the animation element
    var load = 0;
    var idValue= setInterval(frame,64);// method that set the interval of how match time the fun wil execute

    function frame() {//fun that transfer us to the html page and set the times
        if (load==100){
            clearInterval(idValue)
            window.open("search.php","_self");
        }

        else {
            load = load + 1;
        }
    }
}
());//calling the fun
