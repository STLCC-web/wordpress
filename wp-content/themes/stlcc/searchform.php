

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
	</label>
	<button type="submit" class="search-submit">
        <svg class="menu-icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 36 36">
	<style>.a{fill:none;stroke-width:4;}</style>
	<circle cx="14.6" cy="12.9" r="10.1" class="a"/>
	<line x1="21.3" y1="20.9" x2="32.6" y2="32.3" stroke-linecap="round" class="a"/>
</svg> Search</button>

	<?php //<input type="submit" class="search-submit" value="Search" /> 
		/* check this out: https://jsfiddle.net/XPYWB/631/ */
	?>
</form>
