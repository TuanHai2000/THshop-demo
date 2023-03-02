window.addEventListener("load",function(){
    const slideshow = document.querySelector(".slideshow");
    const slideshowMain = document.querySelector(".slideshow-main");
    const nextBtn       = document.querySelector(".slideshow-icon.right");
    const prevBtn       = document.querySelector(".slideshow-icon.left");
    const slideshowItems = document.querySelectorAll(".slideshow-item");
    const dotsItem      = document.querySelectorAll(".slideshow-dots-item");
    const slideshowItemWidth = slideshowItems[0].offsetWidth;
    const slideshowLength = slideshowItems.length;
    
    let positionX = 0;
    let index = 0;

    nextBtn.addEventListener("click",function(){
        handleChangeSlideshow(1);

    });
    prevBtn.addEventListener("click",function(){
        handleChangeSlideshow(-1);
        
    });

    [...dotsItem].forEach((item) => item.addEventListener("click",function(e){
        [...dotsItem].forEach(el => el.classList.remove("active"));
        e.target.classList.add("active");
        const slideIndex = parseInt(e.target.dataset.index);
        index = slideIndex;
        positionX = -1 * index * slideshowItemWidth;
        slideshowMain.style = `transform: translateX(${positionX}px)`;
    }));

    function handleChangeSlideshow(direction){
        if(direction === 1){
            if(index >= slideshowLength - 1) {
                index = slideshowLength - 1;
                return;
            };
            positionX = positionX - slideshowItemWidth; 
            slideshowMain.style = `transform: translateX(${positionX}px)`;
             index++;
            }
        else if(direction === -1){
            if(index <= 0){
                index = 0;
                return;
            }  
            positionX = positionX + slideshowItemWidth; 
            slideshowMain.style = `transform: translateX(${positionX}px)`;
             index--;
        }
        [...dotsItem].forEach(el => el.classList.remove("active"));
        dotsItem[index].classList.add("active");
    }



});


const turnOnMessage = document.querySelector(".message");
const messagePage   = document.querySelector(".message-page");
const onBtn       = document.querySelector(".open_message");
const offBtn      = document.querySelector(".message-icon.fa-solid.fa-x")



// message
onBtn.addEventListener("click",function(){
   handleMessage(2);

});

offBtn.addEventListener("click",function(){
    handleMessage(3);
 
 });

function handleMessage(direction){
    if(direction === 2){
       messagePage.style = `display: flex`;
    }
    else if(direction === 3){
        messagePage.style = `display: none`;
    }
}


