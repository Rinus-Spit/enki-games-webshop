// Tab Control

var categoryArray = document.querySelectorAll(".linkoptions");
var buttonArray = document.querySelectorAll(".linktab button");

for(let i=0; i<buttonArray.length; i++){
    buttonArray[i].addEventListener("click", function(){showCategoriesIndex(i); setActiveIndex(i);});
}

function showCategoriesIndex(myIndex){
    console.log("aangevraagd");
    for(j=0; j<categoryArray.length; j++){
        categoryArray[j].classList.replace("vis", "nvis");
    }
    console.log(categoryArray[myIndex]);
    categoryArray[myIndex].classList.replace("nvis", "vis");
}


function setActiveIndex(myIndex){
    console.log("aangevraagd");
    for(i=0; i<buttonArray.length; i++){
        buttonArray[i].classList.replace("act", "nact");
    }

    buttonArray[myIndex].classList.replace("nact", "act");
}

// Slider Control

var scrollContainerArray = document.querySelectorAll(".slidecontent");
var nextArrowArray = document.querySelectorAll(".next_arrow");
var prevArrowArray = document.querySelectorAll(".prev_arrow");
var scrollposition;
var scrollOpen = true;

for(let i=0; i<nextArrowArray.length; i++){
    nextArrowArray[i].addEventListener("click", function(){scrollRight(scrollContainerArray[i])});
}

for(let j=0; j<prevArrowArray.length; j++){
    prevArrowArray[j].addEventListener("click", function(){scrollLeft(scrollContainerArray[j])});
}



function scrollLeft(myScrollContainer){
    if (scrollOpen === true){
        scrollOpen = false;
        scrollposition = myScrollContainer.scrollLeft;
        if(scrollposition === 0){
            scrollOpen=true;
            return;
        }
        if(scrollposition % 200 === 0){
            for (i=0; i<19; i++){
                setTimeout(function(){myScrollContainer.scrollLeft -= 10;}, (i*10))
            }
            setTimeout(function(){myScrollContainer.scrollLeft -= 10; scrollOpen=true;}, 210);
        }
        else{
            myScrollContainer.scrollLeft -= (scrollposition % 200);
            scrollOpen=true;
        }
    }
}

function scrollRight(myScrollContainer){
    if (scrollOpen === true){
        scrollOpen = false;
        scrollposition = myScrollContainer.scrollLeft;
        if(scrollposition % 200 === 0){
            for (i=0; i<19; i++){
                setTimeout(function(){myScrollContainer.scrollLeft += 10;}, (i*10))
            }
            setTimeout(function(){myScrollContainer.scrollLeft += 10; scrollOpen=true;}, 210);
        }
        else{
            myScrollContainer.scrollLeft += 200 - (scrollposition % 200);
            scrollOpen=true;
        }
    }    
}