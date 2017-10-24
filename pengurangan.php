<?php
class pengurangan
{
	public $bil1, $bil2;

	public function set_pengurangan($bilangan1, $bilangan2)
	{
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}

	public function get_pengurangan()
	{
		return $this->bil1 - $this->bil2;
	}
}

?>