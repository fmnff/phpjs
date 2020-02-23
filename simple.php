<?php

class MySimpleFinder
{

	private $words = [
		'github',
		'Alpha',
	];

	/**
	 * @param string $toFind
	 * @return string
	 */
	public function iAmLookingFor($toFind)
	{
		if (in_array($toFind, $this->words)) {
			return 'i am find it!';
		}

		return 'sorry. I can\'t find it';
	}

}