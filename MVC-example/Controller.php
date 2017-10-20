<?php
class Controller
{
    /**
     *
     * @var Model
     */
	private $model;

    public function __construct($model) {
        $this->model = $model;
    }

	public function check_step() {
		if (isset($_GET['step'])) {
			$this->model->update_step($_GET['step']);
		}
	}
}
