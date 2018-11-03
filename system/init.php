<? defined('ROOT') or exit('No direct access alowed !');
# Requiring the core
foreach (scandir(ROOT.'/system/core/') as $core) {
	if ($core != '.' && $core != '..' && $core != 'index.html') {
		require_once ROOT.'/system/core/'.$core;
	}
}