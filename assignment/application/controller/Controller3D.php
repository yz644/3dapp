<?php

class Controller3D {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function getData() {
        return $this->model->getData();  // 调用模型的方法获取数据
    }
}
?>
