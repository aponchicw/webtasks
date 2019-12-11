<a href="Task2.php?category=sport">Sport news</a> |
<a href="Task2.php?category=politics">Politic news</a><br/><br/>
<a href="Task2.php?category=sport&format=json">Sport news (JSON)</a> |
<a href="Task2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["Kazakhstan consistently performs in Olympic competitions.","This has brought some attention to the Central Asian nation, and increased world awareness of its athletes."],
"politics"=>["Nazarbayev's overwhelming victory notwithstanding, change is taking place in Kazakhstan.","The politics of Kazakhstan takes place in the framework of a presidential republic."]];

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    if (isset($_GET['format'])) {
        $format = $_GET['format'];
        print json_encode($news[$category]);
    }
    else {
        foreach($news[$category] as $new) {
            print $new . "<hr>";
        }
    }
}
?>
