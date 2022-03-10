document.querySelector('#exibird').addEventListener('click', exibirdownload)

function exibirdownload(){
    document.querySelector('#downloadbtn').style.display="block";
    document.querySelector('#exibird').style.display="none";
    document.querySelector('#esconderd').style.display="block";
}


document.querySelector('#esconderd').addEventListener('click',esconderdownload)

function esconderdownload(){
    document.querySelector('#downloadbtn').style.display="none";
    document.querySelector('#exibird').style.display="block";
    document.querySelector('#esconderd').style.display="none";
}


const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animar';






const debounce = function(func, wait, immediate){
    let timeout;
    return function(...args){
        const context = this;
        const later = function(){
            timeout = null;
            if (!immediate)func.apply(context, args);   
        };
     const callNow = immediate && !timeout;
     clearTimeout(timeout);
     timeout = setTimeout(later, wait);
     if(callNow) func.apply(context, args);
    };
};


function animateScroll(){
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) /3);
    target.forEach(function(element){           
        if((windowTop) > element.offsetTop){
            element.classList.add(animationClass);
        }else{
            element.classList.remove(animationClass);
        }
        
    })
}

animateScroll();
if (target.length){
window.addEventListener('scroll', debounce(function(){
    animateScroll();

}, 200));
}