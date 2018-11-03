<? namespace system\core; defined('ROOT') or exit('No direct access alowed');
define('APP_PATH', ROOT.'/application');
define('SYS_PATH', ROOT.'/system');
define('PUB_PATH', $_SERVER['HTTP_HOST'].'/MVC/public');
class Config
{
	protected $conf = [];
    protected function setConf($name,$val)
    {
		$this->conf[$name] = $val;
    }
    protected function getConf($name)
    {
		return $this->conf[$name];
    }
}