<?php
/**
 * @package Simone
 */
?>
<?php
	if (has_post_thumbnail()) {
		echo '<a class="post" href="' . get_permalink() . '" title="' . __('Read ', 'simone') . get_the_title() . '" rel="bookmark">' . "\n";
		echo "<figure>\n";
		echo the_post_thumbnail('stlcc-custom-size'). "\n";
        echo "<figcaption>\n";
        if (get_field('faculty_area'))
        {
            echo get_field('faculty_area') . ' ';
        }

        if (get_field('faculty_position'))
        {
            echo  get_field('faculty_position');
        }
	}
    ?>
        </figcaption>
      </figure>
    </a>