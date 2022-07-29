<?php
namespace d17030752\Suggestions\models;
require_once 'src/models/Database.php';
use d17030752\Suggestions\models\Database;
use PDO;
class Suggestion extends Database
{
    public function __construct()
    {

    }
    public static function saveSearch($q)
    {
        $db = new Database();
        $arr =['de','el','a','para'];
        $words = explode(' ', $q);
        foreach ($words as $word) {
            if (!array_search($word,$arr)) {
                # code...
                $query = $db->connect()->prepare("INSERT INTO search (q , session_id) VALUES (:q,:session_id)");
                $query->execute(['q' => $word, 'session_id' => $_SESSION['session_id']]);
            }
        }
    }
    public static function getSuggestions(){
        
        $ids=[];
        $res=[];
        $db= new Database();
        $query=$db->connect()->prepare("SELECT * FROM search JOIN products on products.categories LIKE concat('%',search.q,'%') WHERE session_id = :session_id LIMIT 0,10");
        $query->execute(['session_id'=>$_SESSION['session_id']]);

        $r = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($r as $suggestion) {
            # code...
            $exists = array_search($suggestion['id'],$ids);
            if($exists === FALSE){
                array_push($ids,$suggestion['id']);
                array_push($res,$suggestion);
            }
        }
        return $res;
    }
}
