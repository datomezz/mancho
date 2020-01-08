<?php get_header() ?>
<section class="row mx-0 my-3">
    <div class="slider col-lg-8 col-12 carousel slide my-lg-0 p-0" data-ride="carousel" id="slider">
        <ol class="carousel-indicators">
            <li data-target="slider" data-slide-to="0" class="active slider__dot"></li>
            <li data-target="slider" data-slide-to="1" class="slider__dot"></li>
            <li data-target="slider" data-slide-to="2" class="slider__dot"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php bloginfo('template_directory');?>/img/slider_img_1.jpg" class="slider__img" alt="slider_img_1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider__headText">Lorem ipsum dolor sit amet expedita tenetur quis eum </h5>
                    <p class="slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Accusantium, libero ea necessitatibus ipsa numquam iste sed harum repudiandae consequatur 
                        facere quasi dicta eum cum qui debitis et aliquam modi similique.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo('template_directory');?>/img/slider_img_2.jpg" class="slider__img" alt="slider_img_1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider__headText">Lorem ipsum dolor sit amet expedita tenetur quis eum </h5>
                    <p class="slider__text">Lorem ipsum dolor sita numquam iste sed harum repudiandae consequatur 
                        facere quasi dicta eum cum qui debitis et aliquam modi similique.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo('template_directory');?>/img/slider_img_3.jpg" class="slider__img" alt="slider_img_1">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="slider__headText">Lorem ipsum dolor sit amet expedita tenetur quis eum </h5>
                    <p class="slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Accusantium, libero ea necess.</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Prev</span>
            </a>
            <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Prev</span>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-12 p-0">
        <div class="topnews col-lg-11 offset-lg-1 col-12 offset-0 mt-lg-0 mt-3 h-100 p-0 bg-light">
            <p class="topnews__header pl-2 m-0">დღის სიახლე</p>
            <img src="<?php bloginfo('template_directory');?>/img/rickandmorty.jpg" alt="topnews" class="topnews__img">
            <div class="topnews__body p-2">
                <h5 class="topnews__body-title">Lorem ipsum</h5>
                <p class="topnews__body-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam possimus incidunt aliquid a dolores dolorum fuga quas, nisi doloremque .Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam possimus incidunt aliquid a dolores dolorum fuga quas, nisi doloremque .</p>
            </div>
        </div>
    </div>
</section>
<div class="hr-category row mt-5 mb-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">სიახლეები</a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <div class="col-12 d-flex flex-row justify-content-center mx-0 mt-5">
        <a href="#" class="see-more rounded-pill bg-main px-4 py-2">მეტის ნახვა</a>
    </div>
</section>
<div class="hr-category row mt-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">საზოგადოება</a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
</section>
<div class="hr-category row mt-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">ეკონომიკა</a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
</section>
<div class="hr-category row mt-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">პოლიტიკა</a>
</div>
<section class="row mx-0 mb-5 px-md-2 px-0">
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
</section>
<div class="hr-category row mt-3 mx-0">
    <a href="#" target="_blank" class="hr-category__text m-0">კულტურა</a>
</div>
<section class="row mx-0 px-md-2 px-0">
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
    <article class="col-lg-4 col-md-6 col-12 px-md-3 px-0 my-2">
        <div class="article-news card">
            <div class="img-container">
                <img src="<?php bloginfo('template_directory');?>/img/article-news.jpg" alt="article-news" class="article-news__img card-img-top">
                <a href="#" target="_blank" class="img-container__category">სიახლეები</a>
            </div>
            <div class="article-news__body card-body">
                <a href="https://datomezz.github.io/media-project/post.html" class="article-news__title card-title h6">Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !Lorem ipsum dolor sit amet !</a>
                <p class="article-news__text card-text text-muted">Lorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consecteturLorem ipsum dolor, sit amet consectetur adipisicing elit. Odio ab dolores hic illo quo distinctio, error veniam dicta ipsam a amet fugiat.</p>
            </div>
            <div class="article-news__footer d-flex flex-row justify-content-between align-items-end px-3 py-2">
                <p class="article-news__footer-data m-0">15 დეკემბერი 2019</p>
                <p class="article-news__footer-view m-0"><i class="fas fa-eye main-color mr-1"></i>3213</p>
            </div>
        </div>
    </article>
</section>
<?php get_footer() ?>