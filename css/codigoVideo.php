
<?php
    $API_KEY = "atsyZcjMpsI";
    $CHANNRL_ID ="UC5ZiUaIJ2b5dYBYGf5iEUrA";
    $MAX_RESULTS = 10;

    $videoLista  = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channerId='.CHANNEL_ID.'&maxResults='
    .$MAX_RESULTS.'&key ='.$API_KEY.''));

    foreach($videoLista->items as $item) {
        if(isset($item->id->videoId)){
            echo '<div class="youtube-video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/atsyZcjMpsI" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
            clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h2>'.$item->snippet->title.'</h2>
            </div>';
        }
    }
?>