<?php
require_once 'SearchAdapter.php';

class ArraySearchAdapter implements SearchAdapter {
    private $finder = null;
    /**
     * @param: arraySearch $finder 
     */
    public function __construct($finder) {
        $this->finder = $finder;
    }
    /** 
     * @param: string $word
     * @return: bool
     */
    public function search($word) {
        return $this->finder->inArray($word);
    }
}
