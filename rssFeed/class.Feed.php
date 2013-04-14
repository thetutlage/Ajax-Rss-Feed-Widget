<?php
	class RssFeed{
		public $feed;
		function getFeed($url,$item){
			$rss = simplexml_load_file($url);
			foreach($rss->channel->item as $feedData)
			{
				$title = (string)$feedData->title;
				$description = strip_tags((string)$feedData->description);
				$link = (string)$feedData->link;
				$date = (string)$feedData->PubDate;
				$local_feed[] = (object)array('title' => $title,'description' => $description, 'link' => $link, 'date' => $date);
			}
			for($x=0; $x<=$item; $x++)
			{
				$this->feed[] = $local_feed[$x];
			}
			return $this->feed;
		}
	}
?>