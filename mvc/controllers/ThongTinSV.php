<?php
    class ThongTinSV extends Controller{
        function API() {
            $ten = $this->model("SinhVienModel");
            $getTen = $ten->getSV();
            $mang=[];
            while($row = mysqli_fetch_array($getTen)) {
                $arr = array_push($mang, new SinhVien($row["id"],$row["hoten"],$row["namsinh"],$row["diachi"]));
            }
            $json = json_encode($mang, JSON_UNESCAPED_UNICODE);
            echo $json;

        }
    }
    class SinhVien {
        public $Id;
        public $Hoten;
        public $Namsinh;
        public $Diachi;
        public function __construct($id, $hoten, $namsinh, $diachi) {
            $this->Id = $id;
            $this->Hoten = $hoten;
            $this->Namsinh = $namsinh;
            $this->Diachi = $diachi;
        }
    }
?>