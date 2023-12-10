<?php
function format_cash($price)
{
    return str_replace(",", ".", number_format($price));
}
function active_sidebar($action)
{
    foreach ($action as $row) {
        if (isset($_GET['page']) && $_GET['page'] == $row) {
            return 'active';
        }
    }
    return '';
}
function check_string($data)
{
    return str_replace(array('<', "'", '>', '?', '/', "\\", '--', 'eval(', '<php'), array('', '', '', '', '', '', '', '', ''), htmlspecialchars(addslashes(strip_tags($data))));
}
function get_row($sql){
    return pdo_query_value($sql);
}
function badge_status_pro($data){
    if($data == "approved"){
        return '<span class="badge badge-success">Đã duyệt</span>';
    }else{
        return '<span class="badge badge-danger">Chưa duyệt</span>';
    }
}
// function DownloadFile($file)
// { 
//     $file = __DIR__."../uploads/document".$file;
//     if (file_exists($file)) {
//         header('Content-Description: File Transfer');
//         header('Content-Type: application/octet-stream');
//         header('Content-Disposition: attachment; filename='.basename($file));
//         header('Content-Transfer-Encoding: binary');
//         header('Expires: 0');
//         header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
//         header('Pragma: public');
//         header('Content-Length: ' . filesize($file));
//         ob_clean();
//         flush();
//         readfile($file);
//         exit;
//     }
// }