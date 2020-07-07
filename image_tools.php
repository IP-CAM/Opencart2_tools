<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<meta charset="utf-8">
</head>
<body>
<?php
  /**
  * @author Dima Kuzmin
  * 
  */
//Random placement of images for products from the set of images for OpenCard 2.3
//opencart table prefix

$prefix = 'oc2017';
//image Directory
$img_cat = 'ЖБИ - Перемычки';


//array of pictures
$input = array("catalog/image/data/$img_cat/IMG_7263-06-40.jpg", "catalog/image/data/$img_cat/IMG_7264-06-40.jpg", "catalog/image/data/$img_cat/IMG_7267-06-40.jpg", "catalog/image/data/$img_cat/IMG_7268-06-40.jpg", "catalog/image/data/$img_cat/IMG_7269-06-40.jpg", "catalog/image/data/$img_cat/IMG_7270-06-40.jpg");
//array id of goods for which you need to randomly arrange pictures
//sql for get product_id by category_id
//UPDATE `oc2017_product_image` SET `image` = replace(image, 'image/data/ЖБИ - Перемычки', 'data/ЖБИ - Перемычки')
//SELECT GROUP_CONCAT(`product_id`) FROM `oc2017_product_to_category` WHERE `category_id` = '80'
$input_id = array("317","318","319","320","322","323","324","325","326","327","330","331","332","333","334","778","779","780","922","923","924","925","926","927","928","929","930","931","932","933","934","935","936","937","938","939","940","941","942","943","944","945","946","947","948","949","950","951","952","953","954","955","956","957","958","959","960","961","962","963","964","965");

foreach($input_id as $val){
$rand_keys = array_rand($input, 2);

echo 'INSERT INTO `'.$prefix .'_product_image` (`product_image_id`, `product_id`, `image`, `sort_order`) VALUES (NULL, \''.$val.'\', \''.$input[$rand_keys[0]].'\',\'0\');<br>';
echo 'INSERT INTO `'.$prefix .'_product_image` (`product_image_id`, `product_id`, `image`, `sort_order`) VALUES (NULL, \''.$val.'\', \''.$input[$rand_keys[1]].'\',\'0\');<br>';
}
?>
</body>
</html>
