
let show_notification=document.getElementById("show_notification")
let show_p_comp=document.getElementById("show_p_comp")
let compet=document.getElementById("compet");
let notifactation=document.getElementById("notifactation");
show_p_comp.addEventListener('click', function(e) {
     e.preventDefault();
     if( compet.style.display=="block"){
        compet.style.display="none"
     }else{
        compet.style.display="block"
     }

    
})
show_notification.addEventListener('click', function(e) {
    e.preventDefault();
    if( notifactation.style.display=="block"){
        notifactation.style.display="none"
    }else{
        notifactation.style.display="block"
    }

   
})
 



