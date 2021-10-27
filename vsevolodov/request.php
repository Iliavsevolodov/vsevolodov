<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "2006801725:AAHZnoJMBRhAWyZ1ZEeWI2N7jUAgXTIsVls";
$chat_id = "-713563275";
$arr = array(
    'Имя: ' => $name,
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /thanks.html');
} else {
  echo "Error";
}
?>