<? defined('ROOT') or exit('No direct access alowed');
class about extends system\core\Controller
{
	public function index()
	{
		$data['title'] = __CLASS__;
		$this->view('templates/header',$data);
		$this->view('templates/navbar');
		$this->view('about',$data);
		$this->view('templates/footer');
	}
}