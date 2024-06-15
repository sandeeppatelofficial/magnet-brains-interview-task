<?php
if (!function_exists('get_user_name')) {
    function get_user_name($user_id) {
        $db = \Config\Database::connect();
        $query = $db->table('users')->select('name')->where('id', $user_id)->get();

        if ($query->getNumRows() > 0) {
            return $query->getRow()->name;
        } else {
            return 'User not found';
        }
    }
}
