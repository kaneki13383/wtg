let adviceList = document.querySelector(".advice__list");
let adviceItem = document.querySelectorAll(".advice__item");

let widthItem = adviceItem[0].clientWidth;
let count = 3;

let position = 0;

document.querySelector(".left__btn").addEventListener('click',()=>{
   position += widthItem * count;
   position = Math.min(position,0);
   adviceList.style.transform = `translateX(${position}px)`;
});
document.querySelector(".right__btn").addEventListener("click",()=>{
    position -= widthItem * count;
    position = Math.max(position,-widthItem * (adviceItem.length - count));
    adviceList.style.transform = `translateX(${position}px)`;
});