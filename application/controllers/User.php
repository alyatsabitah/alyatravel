 <?php 

class User extends CI_Controller {
	function index() 
	{
		$this->load->view("form_user_v");
	}
	function add() 
	{
		echo $this->input->post("username") . "<br/>";
		echo $this->input->post("password") . "<br/>";
		echo $this->input->post("fullname") . "<br/>";
		echo $this->input->post("level") . "<br/>";
	}
}