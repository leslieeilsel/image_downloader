<?php
require('class/ReadJson.php');
require('class/Spider.php');

// 读取json文件，获取图片地址
echo '- Read JSON file...', PHP_EOL;
$read = new ReadJson();
$json = $read->json('earthview.json');
$images = array_column($json, 'image');

// 下载图片
$spider = new Spider();
$total = count($images);
echo '- Total ' . $total . ' images', PHP_EOL;
echo '- Downloading...', PHP_EOL;
foreach ($images as $k => $url) {
    $spider->downloadImage($url);
    echo '- Downloaded ( ' . ($k + 1) . '/' . $total . ' )', PHP_EOL;
}

function info()
{
    // TODO
    // 1. cli color
    // 2. simple message
}