<?php
require 'vendor/autoload.php';
use Illuminate\Support\Facades\DB;

$users = DB::select('select * from users where active = ?', [1]);

echo 2222;
exit;
