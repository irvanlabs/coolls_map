<? define('ROOT', realpath('.'));
 # Requiring the system init file
require_once ROOT.'/system/init.php';

# Initialize the class
new system\core\Config();
new system\core\Model();
new system\core\Controller();
new system\core\Routes();

# Requiring the aplication loader file
require_once APP_PATH.'/loader.php';