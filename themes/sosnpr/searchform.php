<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<!-- <fieldset> -->
		
		<button class="search-submit">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
		<label><a href="#">
			<input type="search" class="search-field" placeholder="Type and Hit Enter" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" style="padding-left:3px, font-family:$miriam, text-transform:uppercase"/></a>
		</label>
	<!-- </fieldset> -->
</form>
