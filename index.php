<?php
  if(isset($_POST['button'])){
    $imgUrl = $_POST['imgurl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $downloadImg = curl_exec($ch);
    curl_close($ch);
    header('Content-type: image/jpg');
    header('Content-Disposition: attachment;filename="thumbnail.jpg"');
    echo $downloadImg;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form class="from" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <h1>PHP YouTube Video Thumbnail Downloader</h1>
   <input type="text" class="link" placeholder="https://youtu.be/ggqO0ws7pFw"/>
   <input class="hidden-input" type="hidden" name="imgurl">
   <br/>
    <div class="contentbox" onclick="preview()">
      <div class="label"><p>Preview Thumbnail</p></div>
      <div class="content">
      <div class="result2">
      <span>Paste Video Url To See Preview</span>
    </div>
      </div>
    </div>
    <button class="download-btn" type="submit" name="button">Download Thumbnail</button>
   </form>
  <!-- Project -->
  <script src="main.js"></script>
</body>
</html>
