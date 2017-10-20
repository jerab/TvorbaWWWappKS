<?php
class Model
{
	public $string;
	const STRING_DEF = "Vítejte na stránce";
	private $step = 0;

	public function __construct(){
		$this->string = self::STRING_DEF;
	}

	public function get_nextstep() {
		if($this->step >= 3) {
			return 0;
		}
		return $this->step + 1;
	}

	public function get_data_for_output() {
		return (object)array(
			'nadpis' => $this->string,
			'dalsiKrok' => $this->get_nextstep()
			);
	}

	public function update_step($step) {
		$this->step = (int)$step;

		switch ($this->step) {
			case 0 :
			default:
				$this->string = self::STRING_DEF;
				break;
			case 1 :
				$this->string = "Krok 1";
				break;
			case 2 :
				$this->string = "Krok 2";
				break;
			case 3 :
				$this->string = "Krok 3";
				break;
		}
	}

	public function get_template() {
		return 'sablona.php';
	}

}
