<?php
/**
 * Created by PhpStorm.
 * User: frank.liu
 * Date: 2019/11/20
 * Time: 12:30 AM
 * Version: v1.0
 * Email: liuboserehi@gmail.com
 * Description:
 * 代码千万行，注释第一行。
 * 编码不规范，接盘两行泪。
 */
require_once './vendor/autoload.php';
$redis = new \Predis\Client();
$redis->del('luck_money');


function luckmoney($money_sum , $number_sum,$redis) {
    //循环总人数 -1 （最后一个人的红包用剩余的金额）
    for ( $i=1 ; $i < $number_sum ; $i++ ) {
        //每个人红包的上限
        $a = ($money_sum  - ($number_sum-$i)*0.01) / ($number_sum-$i);
        //一定范围的随机
        $money = mt_rand(1,$a*100) / 100;
        //总金额-分给用户的红包 = 下一批还可以分配的金额
        $money_sum -= $money;
        $redis->rpush('luck_money',$money);
    }
    $last_money = $money_sum;//没分完的给最后一个人

    $redis->rpush('luck_money',$last_money);
}
luckmoney(20,10, $redis);

for ( $i=1;$i<=10;$i++ ) {
    $luck_money = $redis->lpop('luck_money');
    echo sprintf("第%s人的红包金额：%s",$i,$luck_money).PHP_EOL;
}
