<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<meta charset="utf-8">
</head>
<body>
<?php
//Random placement of images for products from the set of images for OpenCard 2.3
//opencart table prefix
$prefix = 'oc2017';
//array of pictures
$input = array("catalog/image/data/ЖБИ - Плиты перекрытия/img_5021-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5022-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5023-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5029-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5030-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5032-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5033-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5034-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5035-23-01-19-01-50.jpg", "catalog/image/data/ЖБИ - Плиты перекрытия/img_5036-23-01-19-01-50.jpg");
//array id of goods for which you need to randomly arrange pictures
$input_id = array("153","154","155","156","157","158","159","160","161","162","163","164","165","179","180","181","182","183","184","185","186","187","188","189","190","191","192","193","194","195","196","197","198","199","200","201","202","203","204","205","206","207","208","209","210","211","212","213","214","215","216","217","218","219","220","221","222","223","224","225","226","227","228","229","230","231","232","233","234","235","236","166","167","168","169","170","171","172","173","174","175","176","177","178","238","239","240","241","242","243","244","245","246","247","248","249","250","251","252","253","254","255","256","257","258","259","260","261","262","263","264","265","266","267","268","269","270","271","272","273","274","275","276","277","278","279","280","281","282","283","284","285","286","287","288","289","290","291","292","293","294","295");

foreach($input_id as $val){
$rand_keys = array_rand($input, 2);

echo 'INSERT INTO `'.$prefix .'_product_image` (`product_image_id`, `product_id`, `image`, `sort_order`) VALUES (NULL, \''.$val.'\', \''.$input[$rand_keys[0]].'\',\'0\');<br>';
echo 'INSERT INTO `'.$prefix .'_product_image` (`product_image_id`, `product_id`, `image`, `sort_order`) VALUES (NULL, \''.$val.'\', \''.$input[$rand_keys[1]].'\',\'0\');<br>';
}
?>


</body>
</html>



