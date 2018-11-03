<? defined('ROOT') or exit('No direct access alowed');
class config extends system\core\Config
{
	function __consruct()
	{
		$this->setConf('test',[1,2,3,4]);

		var_dump($this->getConf('test'));
	}
}
