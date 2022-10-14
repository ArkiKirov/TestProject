<?php
if (isset($_POST['firstName'])):
    echo $_POST['firstName'];

elseif (isset($_POST['firstText'])):
    echo $_POST['firstText'];
elseif (isset($_POST['pos'])):

    if($_POST['pos'] == 'set-pos1' || $_POST['pos'] == 'set-pos2'){
        $result = 'news-status-pos';
    }elseif($_POST['pos'] == 'set-neg1' || $_POST['pos'] == 'set-neg2'){
        $result = 'news-status-neg';
    }elseif($_POST['pos'] == 'set-neu1' || $_POST['pos'] == 'set-neu2'){
        $result = 'news-status-neu';
    }
    echo $result;
elseif(isset($_POST['secondName'])):
    echo $_POST['secondName'];
elseif(isset($_POST['text'])):
    echo $_POST['text'];
elseif(isset($_POST['secondText'])):
    echo $_POST['secondText'];
elseif(isset($_POST['pos'])):
    echo $_POST['pos'];
else:
    echo "Need php error";
endif;