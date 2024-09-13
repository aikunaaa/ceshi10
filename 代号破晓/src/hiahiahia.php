<?php
error_reporting(0);
include "flllllllllllllag.php";
header("Content-type:text/html;charset=UTF-8");
function GetIP() {
    // 检查 X-Remote-IP 并同时检查是否存在 X-Forwarded-For
    if (!empty($_SERVER["HTTP_X_REMOTE_IP"])) {
        $ip = $_SERVER["HTTP_X_REMOTE_IP"];
    } else if (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
        // 如果存在 X-Forwarded-For，返回特殊标志
        $ip = 'XFF_DETECTED';
    } else if (!empty($_SERVER["REMOTE_ADDR"])) {
        $ip = $_SERVER["REMOTE_ADDR"];
    } else {
        $ip = "0.0.0.0";
    }
    return $ip;
}

if ($_GET['kun'] !== 'dongfang') {
    die("检测到宿主位于操场附近,请即刻通过get方法将八卦盘的kun字位对准dongfang,它要靠近了!!wrong!!warning!!请即刻撤离!!!");
}

if ($_POST['shengjian'] !== 'zhenyan') {
    die("检测到宿主已暂时脱离危险,请立刻前往礼堂前的广场护源大阵中,并即刻通过post方法将shengjian插入到zhenyan中,迷雾浓度持续上升,!!warning!!系统检测到未知存在正在攻击大阵,请立刻再次撤离!!");
}

if ($_COOKIE['xueqing'] !== 'sanqing') {
    die("系统监测到宿主位于食堂,迷雾浓度有所降低它们好像睡着了,!!warning!!检测到宿主体内毒素达到max请立刻收集xueqing饼干并刻上sanqing法环维持正常行动,检测到黎明之门踪迹,信号紊乱~它们醒了!!快拿出火种之炬!!");
}

// 新增步骤：检查 HTTP_REFERER 是否等于 'xianzhezhishi'
if ($_SERVER['HTTP_REFERER'] !== 'xitong') {
    die("!!!!warning!! 检测到火炬被破坏!!检测到宿主存活率为%0,启动破晓Z计划,冒险者,请立刻将xitong晶核插入未知生物的心脏Referer内核中!!!计算到这可能是人族唯一幸存者的出路..幸存者,最后的目的地只能你自己走了,记住实验室的黎明之门才是踏出黑暗的唯一之地,记住一直往前跑,不要回头!!等你跑出了黑暗希望下辈子这世间再无苦难,此去莫念...");
}


$GetIPs = GetIP();

// 检测 IP 是否通过 X-Forwarded-For 伪造
if ($GetIPs === 'XFF_DETECTED') {
    die("吾为黎明之门,神说世间应有光明,我便至此守护万族幸存者数亿年,幸存者你的编号必须是本地编号,'操作错误!!无法打开黎明之门!!!或许XRI可帮到你'");
} elseif ($GetIPs !== "127.0.0.1") {
    die("吾为黎明之门,神说世间应有光明,我便至此守护万族幸存者数亿年,幸存者你的编号必须是本地编号");
} else {
    show_flag();
}


?>
