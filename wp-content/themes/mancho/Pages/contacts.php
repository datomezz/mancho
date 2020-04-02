<?php 
/*
    Template Name: Contacts
*/
?>
<?php get_header();?>
<div class="page-introduce row justify-content-center mt-3 mx-0">
    <div class="page-introduce__container col-md-6 col-10 p-2">
        <h2 class="page-introduce__container-title">Contact</h2>
        <p class="page-introduce__container-text text-muted">Lorem ipsum dolor sit amet 
            consectetur adipisicing elit. Eos recusandae quibusdam laborum quis 
            possimus voluptate eveniet quos ex ipsam, delectus dolorem vitae architecto 
            deleniti sint ut odit. Provident, dolores officiis.
        </p>
    </div>
</div>
<div class="form-container row m-0 justify-content-center my-3">
    <form class="col-md-6 col-10 p-0" method="post" action="<?php echo admin_url('admin-ajax.php?action=sendMail');?>">
        <div class="form-inline d-flex justify-content-between">
            <input type="text" name="name" class="form-control" id="fname" placeholder="Name">
            <input type="email" name="mail" class="form-control mt-md-0 mt-3" id="fmail" placeholder="Email">
        </div>
        <div class="form-groun my-3">
            <input type="text" name="subject" class="form-control" id="fsubject" placeholder="Subject">
        </div>
        <div class="form-group mt-3 mb-2">
            <textarea class="form-control" name="message" id="ftextarea" placeholder="Message" rows="7"></textarea>
        </div>
        <div class="form-row justify-content-end m-0">
            <button class="btn form__btn " name="submit" id="fsubmit" type="submit">SEND</button>
        </div>
    </form>
</div>

<?php get_footer();?>