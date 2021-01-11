@extends('layouts.temp')

@section('content')
<div class="catbar">
    <div class="cattop"></div>
    <div class="catbottom"></div>
 </div>
<div class="midcontent">
    <div class="searchsection">
        <div class="filterspace">
            <div class="prijsfilter">
                <h1>Prijs</h1>
                <!-- <div>
                    <input type="range" id="volume" name="volume" min="0" max="11">
                    <label for="volume">Prijs min</label>
                </div>
                <div>
                    <input type="range" id="cowbell" name="cowbell" min="0" max="100" value="90" step="10">
                    <label for="cowbell">Prijs max</label>
                </div> -->

                <div class="sliderbox">
	                <div class="multi-range-slider">
		                <input type="range" id="input-left" min="0" max="100" value="25">
		                <input type="range" id="input-right" min="0" max="100" value="75">

		                <div class="slider">
                            <div class="track"></div>
                            <div class="range"></div>
                            <div class="thumb left"></div>
                            <div class="thumb right"></div>
                        </div>
                    </div>
                    <div id="minval"><p id="minvaltext">Min</p></div>
                    <div id="maxval"><p id="maxvaltext">Max</p></div>
                </div>

                <button type="button">Filter</button>
            </div>
            <div class="min_spelerfilter choicefilter">
                <h1>Minimaal aantal spelers</h1>
                <div> <!-- Even gejat deze div. Wel nog aanpassen-->
                    <input type="checkbox" id="scales" name="scales">
                    <label for="scales">2</label>
                </div>
                <div> <!-- Even gejat deze div. Wel nog aanpassen-->
                    <input type="checkbox" id="scales" name="scales">
                    <label for="scales">3</label>
                </div>
                <div> <!-- Even gejat deze div. Wel nog aanpassen-->
                    <input type="checkbox" id="scales" name="scales">
                    <label for="scales">4+</label>
                </div>
            </div>
            <div class="max_spelerfilter choicefilter"></div>
            <div class="agefilter choicefilter"></div>
            <button type="button">Filter</button>
        </div>
        <div class="searchresultspace">
            <div class="resulttab">
                <div class="optionsfield"></div>
                <div class="resultpages">
                    <a>1</a>
                    <a>2</a>
                    <a>3</a>
                    <a>4</a>
                    <p>Results: 20-40 / 120</p>
                </div>
            </div>
            <div class="resultblock">
                <img src="images/game_d.jpg">
                <div class="resultdescription">
                    <h1>Eerste game</h1>
                    <h2>500 euro</h2>
                    <p>Dit is een omschrijving van de game in de zoekresultaten.</p>
                </div>
            </div>
            <div class="resultblock">
                <img src="images/game_c.jpg">
                <div class="resultdescription">
                    <h1>Eerste game</h1>
                    <h2>200 euro</h2>
                    <p>Dit is een omschrijving van de game in de zoekresultaten.</p>
                </div>
            </div>
            <div class="resultblock">
                <img src="images/game_b.jpg">
                <div class="resultdescription">
                    <h1>Eerste game</h1>
                    <h2>1 euro</h2>
                    <p>Dit is een omschrijving van de game in de zoekresultaten.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var inputLeft = document.getElementById("input-left");
var inputRight = document.getElementById("input-right");

var thumbLeft = document.querySelector(".slider > .thumb.left");
var thumbRight = document.querySelector(".slider > .thumb.right");
var range = document.querySelector(".slider > .range");

var textFieldLeft = document.getElementById("minvaltext");
var textFieldRight = document.getElementById("maxvaltext");

function setLeftValue() {
	var _this = inputLeft,
		min = parseInt(_this.min),
		max = parseInt(_this.max);

	_this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);

	var percent = ((_this.value - min) / (max - min)) * 100;

	thumbLeft.style.left = percent + "%";
    range.style.left = percent + "%";
    
    textFieldLeft.innerHTML = _this.value;
}
setLeftValue();

function setRightValue() {
	var _this = inputRight,
		min = parseInt(_this.min),
		max = parseInt(_this.max);

	_this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);

	var percent = ((_this.value - min) / (max - min)) * 100;

	thumbRight.style.right = (100 - percent) + "%";
    range.style.right = (100 - percent) + "%";
    
    textFieldRight.innerHTML = _this.value;
}
setRightValue();

inputLeft.addEventListener("input", setLeftValue);
inputRight.addEventListener("input", setRightValue);

inputLeft.addEventListener("mouseover", function() {
	thumbLeft.classList.add("hover");
});
inputLeft.addEventListener("mouseout", function() {
	thumbLeft.classList.remove("hover");
});
inputLeft.addEventListener("mousedown", function() {
	thumbLeft.classList.add("active");
});
inputLeft.addEventListener("mouseup", function() {
	thumbLeft.classList.remove("active");
});

inputRight.addEventListener("mouseover", function() {
	thumbRight.classList.add("hover");
});
inputRight.addEventListener("mouseout", function() {
	thumbRight.classList.remove("hover");
});
inputRight.addEventListener("mousedown", function() {
	thumbRight.classList.add("active");
});
inputRight.addEventListener("mouseup", function() {
	thumbRight.classList.remove("active");
});
</script>

@endsection