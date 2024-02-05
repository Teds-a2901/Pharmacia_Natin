const sliderss = document.querySelector(".slider");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;
var slideNumber = 0;


 //image slider next button
    nextBtn.addEventListener("click",() =>{
    slides.forEach((slide) => {
    slide.classList.remove("active")
    });

    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active")
    });

    slideNumber++;

    if(slideNumber >(numberOfSlides -1)){
        slideNumber = 0;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
 });

 //image slider previous button
 prevBtn.addEventListener("click", ()=>{
    slides.forEach((slide) => {
        slide.classList.remove("active")
        });
    
        slideIcons.forEach((slideIcon) => {
            slideIcon.classList.remove("active")
        });
    
        slideNumber--;
    
        if(slideNumber < 0){
            slideNumber = numberOfSlides -1 ;
        }
    
        slides[slideNumber].classList.add("active");
        slideIcons[slideNumber].classList.add("active");
 });

 //image slider auto play
 var playSlider;
 var repeater = () =>{
    playSlider = setInterval(function(){
        slides.forEach((slide) => {
            slide.classList.remove("active")
            });
        
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active")
            });
        
            slideNumber++;
        
            if(slideNumber >(numberOfSlides -1)){
                slideNumber = 0;
            }
        
            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
    }, 4000);
 }
 repeater();

 //stop the image slider autoplay on mouseover
 sliderss.addEventListener("mouseover", () =>{
     clearInterval(playSlider);

 });

 
 //start the image slider autoplay again onmouseout
 sliderss.addEventListener("mouseout", () =>{
    repeater();
});

