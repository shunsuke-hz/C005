<?php
// Your code here!
// // 標準入力から値を取得してinput_lineに入れる
$input_line = fgets(STDIN);
$ipAddresses = [];
$judge = '';

while ($input = fgets(STDIN)) {
    $ipAddresses[] = trim($input);
}
// fuga
foreach ($ipAddresses as $value) {
    $ipAddress = explode(".", $value);
    if (count($ipAddress) === 4) {
        foreach ($ipAddress as $ip) {
            if ($ip < 0 || $ip > 255) {
                $judge = 'False' . "\n";
                echo $judge;
                continue 2;
            }
        }
        $judge = 'True' . "\n";
    } else {
        $judge = 'False' . "\n";
    }
    echo $judge;
//    hogehoge
}

?>
