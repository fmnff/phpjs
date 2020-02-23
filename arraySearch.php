<?php

class arraySearch
{

	private $array = [
		'torrent',
	];

	/**
	 * @param string $word
	 * @return bool
	 */
	public function inArray($word)
	{
		return in_array($word, $this->array);
	}

}