<form role="search" class="SearchContainerForm" method="get" action="<?php echo home_url( '/' );?>" >
    <input class="SearchBar" type="search" placeholder="<?php echo esc_attr_x( ' Buscar...', 'placeholder') ?>" value="<?php echo get_search_query(); ?>" name="s">
    <button class="SearchButton">
        <img class="SearchButtonImg" src="<?= get_template_directory_uri() .'/dist/assets/img/search.png' ?>" alt="buscar">
    </button>
</form>