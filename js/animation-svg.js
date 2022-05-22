let isClick = false;
function first() {
    isClick = true;
    document.querySelector(".first-step").style.animation = "dash 2s linear forwards";
    setTimeout(()=>{
        document.querySelector(".circ-one").style.animation = "pulse 3s linear infinite";
    },2000);
}
function second(){
    if(isClick){
        document.querySelector(".after__one").style.animation = "dash 2s linear forwards";
        document.querySelector(".for_circ-one").setAttribute('href','#sec-one');
    }
}
function toFirst() {
    document.querySelector(".first-step").style.animation = "";
    document.querySelector(".after__one").style.animation = "";
}