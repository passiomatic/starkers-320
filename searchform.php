<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
   <input type="text" value="<?php the_search_query(); ?>" name="s" id="s">
   <button type="submit" class="btn" id="searchsubmit" value="">Search</button>
</form>