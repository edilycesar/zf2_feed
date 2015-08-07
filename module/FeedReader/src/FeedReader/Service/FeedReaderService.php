<?php
namespace FeedReader\Service;

class FeedReaderService{
    
    public function getNoticias() {
        $content = file_get_contents("http://g1.globo.com/dynamo/ciencia-e-saude/rss2.xml");
        $xml = simplexml_load_string($content);            
        return $xml;
    }    
}