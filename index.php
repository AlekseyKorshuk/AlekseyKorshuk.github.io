<?php
//yandex http-notification
$secret='TKxpFpQDB06MQrS3LRSoLkXt';

if ($_POST) {
$params='notification_type&operation_id&amount&currency&datetime&sender&codepro';

$params=explode('&',$params);
$forHASH=array();
foreach($params as $key=>$p) {
 if (isset($_POST[$p])) array_push($forHASH,$_POST[$p]);
}

if ($secret!="") array_push($forHASH,$secret);
if (isset($_POST['label'])) array_push($forHASH,$_POST['label']);

$forHASH=implode('&',$forHASH);

if ($_POST['sha1_hash']===sha1($forHASH) && $_POST['codepro']!=='true') { //transact ok.
         ////////////////////////////////
         ///////  Платёж прошел /////////
         ////////////////////////////////
           $status="Успешно!";
           $id=$_POST['label'];
           $money=$_POST['amount'];
           $tranid=$_POST["operation_id"];
           $flow="in";
           $paysystem="ym";
           $ymfrom=$_POST['sender'];

          /*что-то делаем....*/

         ////////////////////////////////
  }
}
