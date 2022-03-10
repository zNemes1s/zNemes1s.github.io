

number = 1;
function go(){
    
    
    var circle = document.querySelector('#circleprogress');
    document.querySelector(".numero").innerHTML = number + '%'
    circle.style.strokeDashoffset = 400 - (400 * number) / 100;
    
}


