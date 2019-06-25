# baiduai
百度ai,支持对5.6的版本支持
# 安装
composer require cym/baiduai

# 使用
$ai = new Ai('app_id', 'api_key', 'api_secret');
$ocr = $ai->Ocr();
