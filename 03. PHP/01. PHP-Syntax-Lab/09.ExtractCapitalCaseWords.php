<?php
    $result = "";
    $capitalWords = [];

    if(isset($_GET['text'])){
        $lines = explode("\n",$_GET['text']);
        foreach ($lines as $line){
            $words = preg_split("/\W/", $line);
            $words = array_filter($words, function ($w){
                return $w != '';
            });
            foreach ($words as $word){
                if($word === strtoupper($word)){
                    $capitalWords[] = $word;
                }
            }
        }
        $result = implode(", ", $capitalWords);
    }
?>
<form>
    <textarea rows="10" name="text"><?= $result ?></textarea> <br>
<input type="submit" value="Extract">
</form>