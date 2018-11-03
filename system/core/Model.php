<? namespace system\core; defined('ROOT') or exit('No direct access alowed');
class Model
{
	private $connection;
	function __construct()
	{
		$this->connection = new \mysqli('localhost', 'user', 'pass', 'test');
		if ($this->connection->connect_error)
		{
			die('Connect Error ('.$this->connection->connect_errno.') '.$this->connection->connect_error);
		}
	}
}