<?php


/**
 * 删除目录
 * @param string $path
 * @return bool
 */

function delDir(string $path): bool
{
   if (!is_dir($path)) {
       return false;
   }
   $content = scandir($path);
   foreach ($content as $v) {
       if ('.' == $v || '..' == $v) {
           continue;
       }
       $item = $path . '/' . $v;
       if (is_file($item)) {
           unlink($item);
           continue;
       }
       delDir($item);
   }
   return rmdir($path);
}

$path='./upload';
delDir($path);
echo '删除成功';


// $file = "upload2";
// if (!unlink($file))
// {
// echo ("删除文件时，出现未知错误！");
// }
// else
// {
// echo ("删除成功！");
// }
    
    




if(!is_dir('./upload')){ //需要先判断文件夹是否存

    mkdir('./upload');
    echo '创建成功';
    }







?>