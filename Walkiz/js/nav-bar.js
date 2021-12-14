

var arrow=document.getElementsByClassName("arrow"); //arrow sign to close bar
var array2=document.getElementsByClassName("hours");//array that hold all hours bar id
var array1=document.getElementsByClassName("days-input");//array that hold all days id

/*all the events clicks aa*/

array1[0].addEventListener('click', function(){openBar(0)});
arrow[0].addEventListener('click', function(){closeBar(0)});

array1[1].addEventListener('click', function(){openBar(1)});
arrow[1].addEventListener('click', function(){closeBar(1)});

array1[2].addEventListener('click', function(){openBar(2)});
arrow[2].addEventListener('click', function(){closeBar(2)});

array1[3].addEventListener('click', function(){openBar(3)});
arrow[3].addEventListener('click', function(){closeBar(3)});

array1[4].addEventListener('click', function(){openBar(4)});
arrow[4].addEventListener('click', function(){closeBar(4)});

array1[5].addEventListener('click', function(){openBar(5)});
arrow[5].addEventListener('click', function(){closeBar(5)});

array1[6].addEventListener('click', function(){openBar(6)});
arrow[6].addEventListener('click', function(){closeBar(6)});

array1[7].addEventListener('click', function(){openBar(7)});
arrow[7].addEventListener('click', function(){closeBar(7)});

array1[8].addEventListener('click', function(){openBar(8)});
arrow[8].addEventListener('click', function(){closeBar(8)});


function openBar(ind) {//fun that open the bar
    if (array2[ind].style.display = "none") {
        array2[ind].style.display="block";
        arrow[ind].style.display = "inline";
    }
}

function closeBar(ind) {//fun that close the bar
    array2[ind].style.display = "none";
    arrow[ind].style.display = "none";
}
