<?php
<?php
// lấy ra được đường dẫn vật lý trên ổ đĩa của file hiện tại
$site_path = dirname(__FILE__);

// định nghĩa các hằng số ở phần site dùng cho ứng dụng ngoài frontend
define('APP_PATH', $site_path . '/app');
define('CONTROLLER_PATH', $site_path . '/app/controllers');
define('MODEL_PATH', $site_path . '/app/models');
define('VIEW_PATH', $site_path . '/app/views');
define('CORE_PATH', $site_path . '/core');
define('DB_PATH', $site_path . '/core/database');
define('HELPER_PATH', $site_path . '/core/helper');
define('URL', 'http://localhost/phpmvc/');
define('URL_ASSETS', 'http://localhost/phpmvc/assets/');

$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'index';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';

$controller = strtolower($controller);
$action = strtolower($action);

$controllerClass = $controller.'Controller';
$actionName = $action.'Action';