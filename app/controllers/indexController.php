<?php
class indexController {

    /**
     * Đây là phương thức khởi tạo của 1 class
     * sẽ luôn được chạy ngay khi class được khởi tạo qua từ khóa
     * new
     * ví dụ : $controller = new indexController();
     *
     * indexController constructor.
     */
    public function __construct()
    {

    }

    public function indexAction() {

        echo '<br> tôi là indexAction đây';
        echo '<br>' . __METHOD__;
    }

}