let nums=document.querySelectorAll(".num")
let sec=document.querySelector('.four');

   




let started=false;
window.onscroll=function(){

    if(window.scrollY  >= sec.offsetTop){
       
        if(!started){
            console.log("jjj")
             nums.forEach((num)=> startcount(num));
        }
        started=true

    
          
    }
    
};

function startcount(e){
    let goal=e.dataset.goal;
    let count=setInterval(() => {
        e.textContent++;
        if(e.textContent==goal){
            clearInterval(count)
        }
        
    }, 9000/goal);
}
let o=document.getElementById("menu-toggle");
o.onclick(function(e) {
    e.preventDefault();
    o.classList.toggle("toggled");
});