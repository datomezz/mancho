<?php 
/*
    Template Name: Contacts
*/
?>
<?php get_header();?>
<div class="form-introduce row justify-content-center mt-3 mx-0">
    <div class="form-introduce__container col-md-6 col-10 p-2">
        <h2 class="form-introduce__container-title">Contact</h2>
        <p class="form-introduce__container-text text-muted">Lorem ipsum dolor sit amet 
            consectetur adipisicing elit. Eos recusandae quibusdam laborum quis 
            possimus voluptate eveniet quos ex ipsam, delectus dolorem vitae architecto 
            deleniti sint ut odit. Provident, dolores officiis.
        </p>
    </div>
</div>
<div class="form-container row m-0 justify-content-center my-3">
    <form class="col-md-6 col-10 p-0" action="#">
        <div class="form-inline d-flex justify-content-between">
            <input type="text" class="form-control" id="#" placeholder="Name">
            <input type="email" class="form-control mt-md-0 mt-3" id="#" placeholder="Email">
        </div>
        <div class="form-group mt-3 mb-2">
            <textarea class="form-control" placeholder="Messege" rows="7"></textarea>
        </div>
        <div class="form-row justify-content-end m-0">
            <button class="btn form__btn " type="submit">SEND</button>
        </div>
    </form>
</div>

<?php get_posts();?>
<?php get_footer();?>