<?php
    require_once 'arraySearch.php';
    require_once 'GoogleFinder.php' ;
    require_once 'simple.php';
    require_once 'ArraySearchAdapter.php';
    require_once 'GoogleSearchAdapter.php';
    require_once 'MyFinderAdapter.php';
    $words = require_once 'words.php';
    $arrayFinder = new arraySearch();
    $googleFinder = new GoogleFinder();
    $myFinder = new MySimpleFinder();
    $finderStack = array();
    array_push($finderStack, new ArraySearchAdapter($arrayFinder),
        new GoogleSearchAdapter($googleFinder),
        new MyFinderAdapter($myFinder)
    );
    foreach ($words as &$word) {
        echo "Searching for " . $word . "... ";
        $flag = false;
        foreach ($finderStack as &$finder) {
            if ($finder->search($word)) {
                $flag = true;
                break;
            }
        }
        if ($flag) {
            echo "Found\n";
        } else {
            echo "Not found\n";
        }
    }