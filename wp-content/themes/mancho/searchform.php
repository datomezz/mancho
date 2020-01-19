<form class="search form-group row justify-content-center" action="<?php echo home_url('/'); ?>" method="GET">
    <input type="text" value="<?php the_search_query();?>" name="s" id="search" class="search__input form-control form-control-sm w-50" placeholder="ჩაწერეთ საძიებო სიტყვა">
    <input type="submit" id="search_submit" value="ძებნა" class="search__submit form-control"> 
</form>