<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "партнерство, выгода, сотрудничество.");
$APPLICATION->SetPageProperty("description", "Партнерам. Выгодное сотрудничество с лидером отрасли.");
$APPLICATION->SetTitle("Архив");
?>
<div class="side">
	 <?   $APPLICATION->IncludeComponent(
		"bitrix:menu",
		"left",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "left",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(""),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "left",
			"USE_EXT" => "N"
		)
	);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>