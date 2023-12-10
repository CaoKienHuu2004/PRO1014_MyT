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