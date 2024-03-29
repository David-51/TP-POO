<?php
namespace App\Table;
use App\App;

class Article{

    public static function getLast(){

        return App::getDb()->query('SELECT * FROM articles', __CLASS__);
    }

    public function __get($key){        
        $method = 'get' . ucfirst($key);

        $this->$key = $this->$method();
        
        return $this->$key;
        
    }

    public function getUrl(){
        return 'index.php?p=article&id=' . $this->id;
    }
    public function getExtrait(){
        $html = '<p>' . substr($this->contenu, 0, 200) . ' ...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '">Voir la suite</a></p>';
        return $html;
    }
}