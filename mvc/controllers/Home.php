<?php
    class Home extends Controller{
        function SayHi() {
            // models
            $SinhVien = $this->model("SinhVienModel");
            echo $SinhVien->GetSV();

            // views
            
        }
        function Show() {
            $SinhVien = $this->model("SinhVienModel");
            $name = $SinhVien->GetSV();
            $view = $this->view("Layout1", [
                "SinhVien" => $name,
                "Page" => "news",
                ]);
            echo $view;
        }
    }
?>