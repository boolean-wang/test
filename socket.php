<?php
 $uploadInfo = array(
                'host'=>'',
                'port'=>'80',
                'url'=>'/upload.php'
        );
        $fp = fsockopen($uploadInfo['host'],$uploadInfo['port'],$errno,$errstr);

　　　　$file = '1.jpg';

                $content = file_get_contents($file);
                $boundary = md5(time());
                $out.="--".$boundary."\r\n";
                $out.="Content-Disposition: form-data; name=\"uploadFile\"; filename=\"".$file."\"\r\n";
                $out.="Content-Type: image/jpg\r\n\r\n";
                $out.=$content."\r\n";
                $out.="--".$boundary."\r\n";

 

                fwrite($fp,"POST ".$uploadInfo['url']." HTTP/1.1\r\n");
                fwrite($fp,"Host:".$uploadInfo['host']."\r\n");
                fwrite($fp,"Content-Type: multipart/form-data; boundary=".$boundary."\r\n");
                fwrite($fp,"Content-length:".strlen($out)."\r\n\r\n");
                fwrite($fp,$out);
                while (!feof($fp)){
                        $ret .= fgets($fp, 1024);
                }
                fclose($fp);
                $ret = trim(strstr($ret, "\r\n\r\n"));
                preg_match('/http:.*/', $ret, $match);
                return $match[0];