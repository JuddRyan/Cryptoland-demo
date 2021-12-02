<?php

if (has_post_thumbnail()) {
	the_post_thumbnail('hero-image');
} else {
	echo '<img src="/" />';
}