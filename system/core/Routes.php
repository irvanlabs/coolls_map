<? namespace system\core; defined('ROOT') or exit('No direct access alowed');
class Routes
{
	private $url;
	private $controller = 'home';
	private $method = 'index';
	private $param;
	function __construct()
	{
		$this->parseUrl();
		$this->setCtrl();
		$this->setFunc();
		$this->setParam();
		if (file_exists(APP_PATH.'/controllers/'.$this->controller.'.php')) {
			require_once APP_PATH.'/controllers/'.$this->controller.'.php';
			$this->controller = new $this->controller;
			if (method_exists($this->controller, $this->method)) {
				$func = $this->method;
				$this->controller->$func();
			} else {
				echo $this->err404();
			}
		} else {
			echo $this->err404();
		}
	}
	private function parseUrl()
	{
		$parseUrl = explode('/', preg_replace('/\/+/', '/', rtrim(ltrim($_SERVER['REQUEST_URI'], '/'), '/')));
		unset($parseUrl[0]);
		$this->url = array_values($parseUrl);
	}
	private function setCtrl()
	{
		if (count($this->url) >= 1) {
			$this->controller = $this->url[0];
		}
		unset($this->url[0]);
	}
	private function setFunc()
	{
		if (count($this->url) >= 1) {
			$this->method = $this->url[1];
		}
		unset($this->url[1]);
	}
	private function setParam()
	{
		if (!empty($this->url)) {
			$this->param = array_values($this->url);
		}
		unset($this->url);
	}
	private function err404()
	{
		if (file_exists(APP_PATH.'/views/errors/404.html')) {
			$err = file_get_contents(APP_PATH.'/views/errors/404.html');
		} else {
			$err = file_get_contents(SYS_PATH.'/errors/404.html');
		}
		return $err;
	}
}