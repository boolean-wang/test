<?php header('Content-Type: text/html; charset=utf-8');
     $cookie_file = './cookie.txt'; 
           //$cookie_file = tempnam("tmp","cookie");
                 //先获取cookies并保存
    //  $url = "http://www.boolean.wang/oa";
    // $ch = curl_init($url); //初始化
    // curl_setopt($ch, CURLOPT_HEADER, 0); //不返回header部分
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //返回字符串                    
    // curl_setopt($ch, CURLOPT_COOKIEJAR,  $cookie_file); //存储cookies
    // curl_exec($ch);
    // curl_close($ch);
 //      //使用上面保存的cookies再次访问
 // $url = "http://weixin.sogou.com/websearch/art.jsp?sg=xaXJ7lM8QYSvef6a2OT-dpTeDuk_kzNKHUw_k6laCiYNFavaIsuoBY3UM7e6qrzqhl43LMXzFZ2WdSZXPGWIUUpq9Ak4h2-FLtnHHBCkEYEIisrViuq9rH56cg2pcZ1-2QWbu8zFkdfEqLYGkIRNPg..&url=p0OVDH8R4SHyUySb8E88hkJm8GF_McJfBfynRTbN8whzKqu9Totk7nBHm81fUAKAFJmAPOq06My4b9LVczhkyVMj362uDS1phL7hOx6NZFVYVX8PjSI6gJzk_5jhjP-MKbiy1h3RdctYy-5x5In7jJFmExjqCxhpkyjFvwP6PuGcQ64lGQ2ZDMuqxplQrsbk";
 //          $ch = curl_init($url);
 //        curl_setopt($ch, CURLOPT_HEADER, 0);
 //          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 //  curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); //使用上面获取的cookies
 //       $response = curl_exec($ch);
 //         curl_close($ch);
 //           echo $response; //这样子算是 不拒绝了 但是访问又过期了

$url = "http://weixin.sogou.com/weixin?type=2&query=%E5%A4%B4%E5%8F%91&ie=utf8&w=01019900&sut=13207&sst0=1450254219344&lkt=0%2C0%2C0";

// $url2 = "http://weixin.sogou.com/websearch/art.jsp?sg=CBf80b2xkgZLGvtCTvt_POMksiUvXmQjto10UeCQXGSnzqoKjC78c4Al5LDV_yJl83nVstXyUCvugtshevwwQU20k2hBqshOJKPVL5g36q1azi5f7Tit-zN_8UsK-wRwdzaIMrxHYHPEqLYGkIRNPg..&url=p0OVDH8R4SHyUySb8E88hkJm8GF_McJfBfynRTbN8wiRCx48zExUyNFRQtw9q9fXUW-zPEc5g3xFjsqXKRRgzFLvkvBrfA0sshLBdhXhG5h441XpT-MGJoD8ytjGcEiT9P81rDbp7NhYy-5x5In7jJFmExjqCxhpkyjFvwP6PuGcQ64lGQ2ZDMuqxplQrsbk";



        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  		// curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file); //使用上面获取的cookies 这个地方应该是不能写死的吧 要不然cookie就真的还不会变了
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response; //这样子算是 不拒绝了 但是访问又过期了

// echo file_get_contents($url);
           //weixin.sogou.com/weixin?type=2&query=%E5%A4%B4%E5%8F%91&ie=utf8&w=01019900&sut=13207&sst0=1450254219344&lkt=0%2C0%2C0
           //
           //
 // http://weixin.sogou.com/websearch/art.jsp?sg=TVzWeYH9-rYGWEzZbw-R4mjQbpFdUH0SSP1SLQcRY_y6ISSM44TxEi6R5lE__OO7QcEqxqIoyvTlL28OScfV7aSI0ovD8rSgv9FUKKXHywK1NAZASpPUG08ktySYskAc2yEwcFizKP4vAHj3gnz8R8uqxplQrsbk&url=p0OVDH8R4SHyUySb8E88hkJm8GF_McJfBfynRTbN8wh5HuPc-BIXB5wT5r548i3d4YuPGCMcBlVMY-QaChT5KWQ3JxMQ3374fesPNmo37WpG2LJk8f7ocXK_jAeOKuwnWSBy9AvQ-btYy-5x5In7jJFmExjqCxhpkyjFvwP6PuGcQ64lGQ2ZDMuqxplQrsbk


  //http://weixin.sogou.com/websearch/art.jsp?sg=TVzWeYH9-rYGWEzZbw-R4mjQbpFdUH0SSP1SLQcRY_y6ISSM44TxEi6R5lE__OO7QcEqxqIoyvTlL28OScfV7aSI0ovD8rSgv9FUKKXHywK1NAZASpPUG08ktySYskAc2yEwcFizKP4vAHj3gnz8R8uqxplQrsbk&url=p0OVDH8R4SHyUySb8E88hkJm8GF_McJfBfynRTbN8wh5HuPc-BIXB5wT5r548i3d4YuPGCMcBlVMY-QaChT5KWQ3JxMQ3374fesPNmo37WpG2LJk8f7ocXK_jAeOKuwnWSBy9AvQ-btYy-5x5In7jJFmExjqCxhpkyjFvwP6PuGcQ64lGQ2ZDMuqxplQrsbk