<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view()
	{
		$this->load->view('pages/about');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */