<?php
class pembagian
{
	public $bil1, $bil2;

	public function set_pembagian($bilangan1, $bilangan2)
	{
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}

	public function get_pembagian()
	{
		return $this->bil1 / $this->bil2;
	}
}

?>