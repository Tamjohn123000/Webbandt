<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. Nhận dữ liệu
    $hoten   = trim($_POST["hoten"] ?? "");
    $sdt     = trim($_POST["sdt"] ?? "");
    $diachi  = trim($_POST["diachi"] ?? "");
    $sanpham = trim($_POST["sanpham"] ?? "");
    $gia     = trim($_POST["gia"] ?? "");

    // 2. Kiểm tra bắt buộc
    if ($hoten === "" || $sdt === "" || $diachi === "" || $sanpham === "" || $gia === "") {
        echo "<script>
            alert('Vui lòng điền đầy đủ thông tin!');
            history.back();
        </script>";
        exit;
    }

    // 3. Chuỗi lưu file
    $dong =
        "Họ tên: $hoten | " .
        "SĐT: $sdt | " .
        "Địa chỉ: $diachi | " .
        "Sản phẩm: $sanpham | " .
        "Giá: $gia | " .
        "Thời gian: " . date("d/m/Y H:i:s") . PHP_EOL;

    // 4. File lưu
    $file = "D:/donhang.txt";

    // 5. Ghi file
    file_put_contents($file, $dong, FILE_APPEND | LOCK_EX);

    // 6. Thông báo
    echo "<script>
        alert('Đặt hàng thành công! Chúng tôi sẽ sớm liên hệ bạn');
        window.location.href='dathang.html';
    </script>";
}
?>
