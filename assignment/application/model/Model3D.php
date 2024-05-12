<?php
class Model3D {
    public function getData() {
        // 从数据库或文件获取数据
        $data = file_get_contents('js/text.json');
        return json_decode($data, true);
    }
}
?>