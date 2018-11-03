<? namespace system\core; defined('ROOT') or exit('No direct access alowed');
class Controller
{
	protected function view($file, $data = [])
	{
		require APP_PATH.'/views/'.$file.'.php';
	}
	protected function model($model)
	{
		require_once APP_PATH.'/models/'.$model.'.php';
		return new $model;
	}
}