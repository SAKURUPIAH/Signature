<?php
 $api_id = "1373"; // api ID merchant anda
 $data_method = "QRIS"; //BCAVA,BRIVA,BNIVA,GOPAY,DANA dll
 $merchant_ref = "d83heuie230948"; //kode unik merchant saat melakukan permintaan invoice baru
 $amount = "20000"; // total pembayaran
 $apikey = "JHDG7338hufr83-88345JI-C734e"; // apikey merchant anda
 
 $signature = hash_hmac('sha256', $api_id.$data_method.$merchant_ref.$amount,$apikey);
 
 //CONTOH OUTPUT
 //Signature: 4110260ce891a1620da506acee93938f905cff43699028d5fd3f8261a996950d
 ?>
