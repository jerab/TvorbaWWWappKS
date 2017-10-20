<?php
class View
{
	/**
	 * @var Model
	 */
	private $model;
	/**
	 * @var Controller
	 */
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

	/**
	 * @deprecated
	 * @return string
	 */
    public function output_title() {
    	return "<h1>" . $this->model->string . "</h1>";
    }

	/**
	 * @deprecated
	 * @return string
	 */
    public function output_body() {
    	$body = "<p> Stavba obsahu stránky</p>";
    	$body .= "<a href=\"index.php?step=" . $this->model->get_nextstep(). "\">Další krok</a>";

    	return $body;
    }

	public function output_html() {
		$data = $this->model->get_data_for_output();
		include $this->model->get_template();
	}
}