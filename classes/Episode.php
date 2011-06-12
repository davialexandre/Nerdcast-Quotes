<?php

require_once('EpisodeParser.php');

class Episode {
    
    private $number;
    private $title;
    private $picture;
    private $description;
    private $quotes;
    
    const EPISODES_URL = 'http://www.nerdtrack.com.br/episodios/';
    const NERDCAST_URL = 'http://jovemnerd.ig.com.br/nerdcast/';
    
    public function __construct($number, $title, $picture, $description, $quotes) {
        $this->number = $number;
        $this->title = $title;
        $this->picture = $picture;
        $this->description = $description;
        $this->quotes = $quotes;
    }
    
    public function __get($name) {
        if(property_exists($this, $name)) {
            return $this->$name;
        }
    }
    
    public  function __isset($name) {
        return property_exists($this, $name) && !is_null($this->$name);
    }
    
    public function getNerdcastLink() {
        return self::NERDCAST_URL.'nerdcast-'.$this->number;
    }
    
    public function getNerdTrackLink() {
        return self::EPISODES_URL.$this->number;
    }
    
    public function getRandomQuote() {
        $rand = rand(0, count($this->quotes)-1);
        return $this->quotes[$rand];
    }
    
    public static function getEpisode($number) {
        $doc = new DOMDocument();
        $doc->loadHTMLFile(self::EPISODES_URL.$number);
        $episodeParser = new EpisodeParser($doc);
        $episode = new Episode(
            $number,
            $episodeParser->getTitle(),
            $episodeParser->getPicture(),
            $episodeParser->getDescription(), 
            $episodeParser->getQuotes()
        );
        
        return $episode;
    }
    
}

?>
