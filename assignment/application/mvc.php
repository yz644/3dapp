<?php
include 'controller/MyViewController.php';

class MVC {
    private $controller;

    public function __construct() {
        $this->controller = new MyViewController();
    }

    public function run() {
        $page = isset($_GET['page']) ? $_GET['page'] : 'myview';
        switch ($page) {
            case 'myview':
                $this->controller->showView();
                break;
            default:
                // 添加错误处理或默认行为
                $this->controller->showView(); // 保留默认行为
        }
    }
}

// 运行MVC
$mvc = new MVC();
$mvc->run();
?>