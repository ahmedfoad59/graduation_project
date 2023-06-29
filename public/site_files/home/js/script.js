
  
  let rightbtn = document.querySelector(".fa-arrow-left-long");
  let bulltes = document.querySelectorAll(".bulltes a");
  let pages = Array.from(document.querySelectorAll(".landing .box"));
  let bar  = document.querySelector(".fa-bars");

  bar.addEventListener("click" , function(){
    document.querySelector(".hamburger-nav").classList.toggle("top");
  })




  rightbtn.addEventListener("click" , () => {
    document.querySelector(".rigside").classList.toggle("right");
    rightbtn.classList.toggle("move");
  } )
  
  bulltes.forEach((b , j) => {
    b.addEventListener("click" , () => {
        pages.forEach((p) => {
            p.classList.remove("show");
        })

        pages[j].classList.add("show");
    })
})



  let i=0;
  //cahnge background

function movement(){
    pages.forEach((p) => {
        p.classList.remove("show");
    })
    pages[i++].classList.add("show");
    if ( i == pages.length) 
    {
        i=0;
    }
}
let move =  setInterval(movement,4000);
//cahnge class on bulltes
function active() {
    bulltes.forEach((b) => {
        b.classList.remove("active");
    })

    bulltes[i+=0].classList.add("active");
    if ( i == bulltes.length) 
    {
        i=0;
    }   
}

let chang = setInterval(active , 4000)
