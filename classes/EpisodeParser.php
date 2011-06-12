<?php
    
    class EpisodeParser {
        
        private $document;
        private $xpath;
        
        public function __construct($document) {
            $this->document = $document;
            $this->xpath = new DOMXPath($this->document);
        }
        
        public function getTitle() {
            return trim($this->xpath->query("//div[@class='contentfull']/h1")->item(0)->nodeValue);
        }
        
        public function getPicture() {
            return trim($this->xpath->query("//div[@class='contentfull']/img")->item(0)->getAttribute('src'));
        }
        
        public function getDescription() {
            return trim($this->xpath->query("//div[@class='contentfull']/div")->item(0)->nodeValue);
        }
        
        public function getQuotes() {
            $quoteList = $this->xpath->query("//div[@class='quote']");
            $quotes = array();
            for($i = 0; $i < $quoteList->length; $i++) {
                $quotes[] = trim($quoteList->item($i)->nodeValue);
            }
            
            return $quotes;
        }
    }
?>
