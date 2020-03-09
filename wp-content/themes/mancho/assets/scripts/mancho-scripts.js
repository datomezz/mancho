
window.onscroll = function(){
    let cursor = document.querySelector(".go-top");
    if(document.body.scrollTop > 600 || document.documentElement.scrollTop > 600){
        cursor.style.opacity= "1";

    } else {
        cursor.style.opacity = "0";
    }
}

 //I don't know AJAX, so I do my way
//  let article = document.querySelectorAll(".news-section article");
//  let loadmore_button = document.querySelector(".see-more");
 
//  let loadmore = 6;
 
//  for(let i = loadmore; i < article.length; i++){
//      article[i].style.display = "none";
//  }


//  function loadMore(){
//      loadmore += 6;
//      if(loadmore > article.length){
//          loadmore = article.length;
//          loadmore_button.style.display = "none";
//      }
//      for(let i = 0; i < loadmore; i++){
//          article[i].removeAttribute("style");
//      }
//  }

let article_child = document.querySelectorAll(".news-section__article");
let loadmore_button = document.querySelector(".see-more");

let arr = ["yle", "muteli"];
arr.reverse();

var section_parent = document.querySelectorAll("section")[1]; //unda unikaluri ID

// Delete child
loadmore_button.onclick = function(){
    for(let i = 0; i< 2; i++){
        section_parent.removeChild(article_child[i]);
        console.log("yleo");
    }
}