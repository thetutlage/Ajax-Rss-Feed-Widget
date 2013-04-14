			<?php
			include_once( 'class.Feed.php' );
			$a = new RssFeed;
			$feed = $a->getFeed('http://www.thetutlage.com/rss.xml',5);
			echo '<ul>';
			foreach($feed as $value)
			{
				echo '<article class="item"><h4>'.$value->title.'</h4>';
				echo '<div class="description"><p>'.$value->description.'<p></div>';
				echo '<a href="'.$value->link.'">'.$value->link.'</a></article>';
			}
			echo '</ul>';
	?>
