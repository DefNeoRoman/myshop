<?php

// модель для таблицы продукции

function getLastProducts($limit=null)
{
	$sql = "SELECT * FROM products ORDER BY id DESC";

	if($limit) {
		$sql .= " LIMIT {$limit}";
	}

	$rs = mysql_query ($sql);
	
	return createSmartyRsArray($rs);

}
// Получить продукты для категорий 

	function getProductsByCat($itemId) {

		$itemId = intval($itemId);

		$sql="SELECT * FROM products WHERE category_id = '{$itemId}'";

		$rs = mysql_query($sql);

		return createSmartyRsArray($rs);
	}

	function getProductById($itemId)
	{
		$itemId = intval ($itemId);
		$sql = "SELECT * FROM products WHERE id = '$itemId'";
		$rs = mysql_query($sql);
		return mysql_fetch_assoc($rs);
	}

	// Получить список продуктов из массива идентификаторов (ids)

	function getProductsFromArray($itemsIds)

	{

		$strIds = implode($itemsIds, ', ');
	
		$sql = "SELECT * 
				FROM products
				WHERE id in ({$strIds})";
				
		$rs = mysql_query($sql);

		return createSmartyRsArray($rs);
	}
?>
