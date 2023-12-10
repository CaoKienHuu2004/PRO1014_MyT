<?php
// Đường dẫn đến file zip trên hệ thống
$zipFilePath = 'uploads/document/test.zip';

// Kiểm tra xem file có tồn tại hay không
if (file_exists($zipFilePath)) {
    // Thiết lập các headers để tải xuống file zip
    header('Content-Type: application/zip');
    header('Content-disposition: attachment; filename=' . basename($zipFilePath));
    header('Content-Length: ' . filesize($zipFilePath));

    // Đọc và xuất nội dung của file zip
    readfile($zipFilePath);

    exit;
} else {
    // Nếu file không tồn tại, bạn có thể xử lý thông báo lỗi hoặc chuyển hướng người dùng đến một trang thông báo khác.
    echo 'File không tồn tại';
}
?>
