<?php
class Home extends Controller {
    public function index() {
        $data = [
            'title' => 'Trang Chủ',
        ];

        // Gọi header
        $this->view('pages/header', $data);

        // Gọi view trang chủ và truyền dữ liệu vào
        $this->view('pages/Home', $data);

        // Gọi footer
        $this->view('pages/footer');
    }
    public function login() {
        // Redirect to the login page
        header("Location: public/mvc/views/pages/login.php");
        exit();
    }
}
?>