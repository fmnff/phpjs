<?php
require_once 'SearchAdapter.php';
class MyFinderAdapter implements SearchAdapter {
    private $finder = null;
    /**
     * @param: MySimpleFinder $finder 
     */
    public function __construct($finder) {
        $this->finder = $finder;
    }
    /** 
     * @param: string $word
     * @return: bool
     */
    public function search($word) {
        if (strcmp("i am find it!", $this->finder->iAmLookingFor($word)) == 0) {
            return true;
        } else {
            return false;
        }
    }
}
