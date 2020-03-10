
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

loadMoreBtn.onclick = function(){
    ajaxLoadMore();
}

function ajaxLoadMore(){
	let req = new XMLHttpRequest();
    let data = document.querySelector(".ajax-link").innerText;

	req.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            postsContainer.innerHTML = req.responseText;
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

//Calendar

