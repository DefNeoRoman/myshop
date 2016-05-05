<?php

// модель для таблицы категорий

// получить дочерние категории

	function getChildrenForCat($CatId) {

		$sql = "SELECT * FROM categories WHERE parent_id='{$CatId}'";

		

		$rs = mysql_query($sql);



		return createSmartyRsArray($rs);

	}
// получить главные категории с привязками

function getAllMainCatsWithChildren() {
	$sql = "SELECT * FROM categories WHERE parent_id=0";

	$rs = mysql_query($sql);

	$smartyRs=array();

	while ($row = mysql_fetch_assoc($rs)) {

		$rsChildren=getChildrenForcat($row['id']);

		if ($rsChildren) {

			$row['children'] = $rsChildren;
		}

		$smartyRs[]=$row;
	}
	
	return $smartyRs;
}

// получить данные категории по id

function getCatById ($catId) {

	$catId = intval($catId);

	$sql = "SELECT * FROM categories WHERE id='{$catId}'";

	$rs = mysql_query($sql);

	return mysql_fetch_assoc($rs);


}