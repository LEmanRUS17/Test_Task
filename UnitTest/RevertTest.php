<?php

require_once 'Class/Revert.php';

class RevertTest extends Revert
{
	public $testStr    = "Hel,lo! World!";
	public $testResult = "Oll,eh! Dlrow!";

	public function revTest()
	{
		$result = $this->revertCharacters($this->testStr);

		if($result == $this->testResult) {
			return true;
		}

		return false;
	}
}
