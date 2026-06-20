<?php

class SinhVien {
    private $mssv;
    private $hoTen;
    private $gioiTinh;
    private $ngaySinh;
    private $diemTB;

    public function __construct(
        $mssv = "",
        $hoTen = "",
        $gioiTinh = "",
        $ngaySinh = "",
        $diemTB = 0
    ) {
        $this->mssv = $mssv;
        $this->hoTen = $hoTen;
        $this->gioiTinh = $gioiTinh;
        $this->ngaySinh = $ngaySinh;
        $this->diemTB = $diemTB;
    }

    public function getMssv() {
        return $this->mssv;
    }

    public function setMssv($mssv) {
        $this->mssv = $mssv;
    }

    public function getHoTen() {
        return $this->hoTen;
    }

    public function setHoTen($hoTen) {
        $this->hoTen = $hoTen;
    }

    public function getGioiTinh() {
        return $this->gioiTinh;
    }

    public function setGioiTinh($gioiTinh) {
        $this->gioiTinh = $gioiTinh;
    }

    public function getNgaySinh() {
        return $this->ngaySinh;
    }

    public function setNgaySinh($ngaySinh) {
        $this->ngaySinh = $ngaySinh;
    }

    public function getDiemTB() {
        return $this->diemTB;
    }

    public function setDiemTB($diemTB) {
        $this->diemTB = $diemTB;
    }


    public function hienThiThongTin() {
        echo "MSSV: " . $this->getMssv() . "<br>";
        echo "Họ tên: " . $this->getHoTen() . "<br>";
        echo "Giới tính: " . $this->getGioiTinh() . "<br>";
        echo "Ngày sinh: " . $this->getNgaySinh() . "<br>";
        echo "Điểm TB: " . $this->getDiemTB() . "<br>";
    }
}


$mangSinhVien = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $mssv = $_POST['mssv'];
    $hoTen = $_POST['hoTen'];
    $gioiTinh = $_POST['gioiTinh'];
    $ngaySinh = $_POST['ngaySinh'];
    $diemTB = $_POST['diemTB'];


    $sv = new SinhVien($mssv, $hoTen, $gioiTinh, $ngaySinh, $diemTB);


    $mangSinhVien[] = $sv;

    echo "<h2>Thông tin sinh viên đã lưu</h2>";

    foreach ($mangSinhVien as $item) {
        $item->hienThiThongTin();
        echo "<hr>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên</title>
</head>
<body>

<h1>Nhập thông tin sinh viên</h1>

<form method="post">

    MSSV:
    <input type="text" name="mssv" required><br><br>

    Họ tên:
    <input type="text" name="hoTen" required><br><br>

    Giới tính:
    <select name="gioiTinh">
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
    </select><br><br>

    Ngày sinh:
    <input type="date" name="ngaySinh" required><br><br>

    Điểm TB:
    <input type="number" step="0.1" name="diemTB" required><br><br>

    <button type="submit">Lưu</button>

</form>

</body>
</html>