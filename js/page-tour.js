function openOrClose(block) {
    if(!block.classList.contains('day-open')){
        console.log("работает");
        block.classList.add('day-open');
    } else{
        block.classList.remove('day-open');
    }
}
function openOrCloseFlex(block,main) {
    if(!block.classList.contains('q-open')){
        console.log("работает");
        block.classList.add('q-open');
        main.style.height = "30%";
    } else{
        block.classList.remove('q-open');
        main.style.height = "10%";
    }
}