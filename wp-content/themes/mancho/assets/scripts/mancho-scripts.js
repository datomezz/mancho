
window.onscroll = function(){
    let cursor = document.querySelector(".go-top");
    if(document.body.scrollTop > 600 || document.documentElement.scrollTop > 600){
        cursor.style.opacity= "1";

    } else {
        cursor.style.opacity = "0";
    }
}

//Carousel
	let post = document.querySelectorAll(".carousel-item");
	post[0].classList.add("active");

//AJAX

let loadMoreBtn = document.querySelector("#load_more");
let postsContainer = document.querySelector("#section_news");

let loadMoreCounter = 1;

loadMoreBtn.onclick = function(){
    ajaxLoadMore();
    loadMoreCounter++;
}

function ajaxLoadMore(){
    let req = new XMLHttpRequest();
    let data = document.querySelector(".ajax-link");

    if(loadMoreCounter > 1){
        data = data.innerText + "_second";
        loadMoreBtn.className = "d-none";
    } else {
        data = data.innerText;
    }
    console.log(loadMoreCounter);
	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            postsContainer.innerHTML = req.response;
            let text = document.querySelectorAll("#section_news .article-news__text");
            for(let i = 0; i < text.length; i++){
                threeDot(text[i]);
            }
		}
	}
	req.open("GET", data, true);
    req.send();


}

// Disable all buttons exept one

loadMoreBtn_arr = document.querySelectorAll("#load_more");

for(let x = 1; x < loadMoreBtn_arr.length; x++){
    loadMoreBtn_arr[x].className = "d-none";
}

//index.php Post Show
$(window).on("load", function(){
    $("#section_").prev().remove();
    $("#section_").remove();
});

// three Dots
function threeDot(str){
    let strText = str;
    strText = strText.innerText;
    let sibling = str.previousElementSibling.offsetHeight;
    let parent = str.parentNode.offsetHeight;

    let currentWidth = str.clientWidth;
    let sum = (currentWidth / 10) * ((parent - sibling) / 30);

    if(sum < strText.length){
        strText = strText.split("").reverse().join("");
        strText = strText.slice(strText.length - sum);
        strText = strText.split("").reverse().join("");
    } 
    
    str.innerText = strText + "...";
    
}

let excerptText = document.querySelectorAll(".article-news__text");
let excerptTitle = document.querySelector(".article-news__title");

window.addEventListener("load", function(){
    for(let i = 0; i < excerptText.length; i++){
        threeDot(excerptText[i]);
    }
});
