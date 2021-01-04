var CategoryArray = document.querySelectorAll(".linkoptions");

function showCategories(CategoryID){
    for(i=0; i<CategoryArray.length; i++){
        CategoryArray[i].classList.replace("vis", "nvis");
    }

    document.getElementById(CategoryID).classList.replace("nvis, vis");
}

// Hoe maak ik een carrousel?
// Ik begin met het idee dat ik een container heb.
// In die container zitten blokken van een bepaalde grootte.
// Die blokken passen niet allemaal in de container dus je hebt een overflow.
// Deze overflow wil ik eigenlijk op de x-as hebben dus ik wil dat de document richting in een row oneindig doorgaat.
// elk onderdeel moet een snappunt hebben waarop we met de pijltjes kunnen bewegen.
// De functie moet bijhouden hoever er is gescrolld, welk punt daarbij hoort en wat het volgende punt is om naartoe te scrollen.
// Daarnaast moet de functie ervoor zorgen dat de bookmark wordt uitgevoerd voor het eerstvolgende element op de carrousel.
//
//Extra:
//
// Mischien moet er een terugloop komen naar het begin waarbij we de scrollinfo tijdelijk een timeout geven.
// Zo zorg je ervoor dat je niet met een lichte beweging direct teruggaat naar het begin. dat is irritant.


var scrollContainerA = document.getElementById("slider_a");
var scrollContainerB = document.getElementById("slider_b");

function scrollLeft(myScrollContainer){
    var scrollposition = myScrollContainer.scrollLeft;
    if(scrollposition === 0){
        return;
    }
    if(scrollposition % 20 === 0){
        scrollposition -= 20
    }
    else{
        scrollposition -= (scrollposition % 20)
    }
}