# Image Downloader

### ReadJson Class

- 此类用来解析json文件，并将结果以数组返回

  ```php
  require('class/ReadJson.php');
  
  $read = new ReadJson();
  $json = $read->json('filename.json');
  ```


### Spider Class

- 根据图片地址下载图片

  ```php
  require('class/Spider.php');
  
  $images = [
    'https://www.gstatic.com/prettyearth/assets/full/1003.jpg',
    'https://www.gstatic.com/prettyearth/assets/full/1004.jpg'
  ];
  $spider = new Spider();
  foreach ($images as $url) {
      $spider->downloadImage($url);
  }
  ```
