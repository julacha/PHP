<?php
class View{
    public function render(){
        //todo print all of the page.
    }
    public function printSongs($songs){//esli public, to model.php dolzhen videtj
    require_once "../src/template/head.php";
    echo "<h1>My Music</h1><hr>";
    echo "<hr>Printing songs</br>";
    /*     foreach ($songs as $song){
            echo "<br>";
            print_r($song); 
        }*/
        include "../src/template/song_filter_form.php";
        echo "<hr>";
        $areColumnSet = false;
        
        foreach ($songs as $index => $row){
            if (!$areColumnSet){
                echo "<div class='tracks-cont'>";
                foreach ($row as $colname => $cell){ 
                    echo "<span class='col-fields'>$colname</span>";  
            }
            echo "</div>";
            $areColumnSet = true;
        }
            echo "<div class='track-cont'>";
            echo "Row: $index";
            //print_r($index);
            foreach ($row as $colname => $cell){
                echo "<span class='track-cell'>$cell</span>";
            }
            echo "</div>";
        }
    }
}