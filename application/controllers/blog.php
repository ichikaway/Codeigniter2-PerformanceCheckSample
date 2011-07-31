<?php

class Blog extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';
	}

	public function view($id) {

		$this->load->model('blog_model');

		if(!empty($id)){
		$data['query'] = $this->blog_model->read_data($id);
		}
		$this->load->view('blog/view',$data);

	}

}