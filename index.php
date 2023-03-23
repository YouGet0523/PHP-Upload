

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件上传</title>
    <link rel="stylesheet" href="base.css">
    <link rel="shortcut icon" href="http://www.youget.vip/usr/themes/default/img/favicon.ico">
</head>
<body>
    
    <div class="ygt">
    <h3>保存好调用链接，即可长期调用。</h3>
    <!-- <h5>上传图片（仅限图片）,上传后保存好调用路径，通过调用路径即可调用图片。</h5> -->
    

  
    
    <?php

// && ($_FILES["file"]["size"] < 20000)
if (($_POST["pw"])=="hacker"
 ) 
{
  


if (($_FILES["file"]["size"] < 200000000)
 )   
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {

    // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    // echo "Type: " . $_FILES["file"]["type"] . "<br />";
    // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    //echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("./upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists.  库存文件已存在，请更改文件名后在上传。 ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "./upload/" . $_FILES["file"]["name"]);
      echo "调用链接: ./upload/"  . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file 无效文件，不支持上传。";
  }

}
else{
  echo "失败";
}

  ?>

    </div>
</body>
</html>


