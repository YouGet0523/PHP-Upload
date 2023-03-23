<?php


/**
 * 显示目录
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
            echo $item;
            echo PHP_EOL;
            echo '<br>';
          // unlink($item);
           continue;
       }
      
       delDir($item);
   }
   //echo $path;
   return rmdir($path);
   
}

$path='./upload';
//echo $path;
delDir($path);
echo '加载成功';
