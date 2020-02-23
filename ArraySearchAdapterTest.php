<?php
require_once 'ArraySearchAdapter.php';
require_once 'arraySearch.php';

/* I failed to get PHPUnit to work on my machine so I've neither executed this
 * test nor coded other ones
 */

class ArraySearchAdapterTest extends PHPUnit_Framework_TestCase {
    public function testSearch($word, $match) {
        $finder = new ArraySearchAdapter(new ArraySearch());
        $this->assertEquals($match, $finder->search($word));
    }
    public function providerSearch() {
        return array(
            array('torrent', true),
            array('hello?', false),
            array('', false)
        );
    }
}
