<?php
require_once 'SearchAdapter.php';
class GoogleSearchAdapter implements SearchAdapter {
    private $finder = null;
    /**
     * @param: GoogleFinder $finder 
     */
    public function __construct($finder) {
        $this->finder = $finder;
    }
    /** 
     * @param: string $word
     * @return: bool
     */
    public function search($word) {
        return $this->finder->search($word)['result'];
    }
}
