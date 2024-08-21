<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

foreach ($arResult["ITEMS"] as &$arItem) {
    // Подготовка и обработка изображения
    $arItem['IMAGE'] = SITE_TEMPLATE_PATH . '/img/rew/no_photo_left_block.jpg';
    if (isset($arItem["PREVIEW_PICTURE"]["ID"])) {
        $arItem['IMAGE'] = CFile::ResizeImageGet(
            $arItem["PREVIEW_PICTURE"]["ID"],
            ['width' => 39, 'height' => 39],
            BX_RESIZE_IMAGE_EXACT,
            true
        )["src"];
    }

    // Подготовка данных для отображения
    $arItem['EDIT_CONFIRM'] = GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM');
    $arItem['POSITION'] = $arItem["PROPERTIES"]["POSITION"]["VALUE"];
    $arItem['COMPANY'] = $arItem["PROPERTIES"]["COMPANY"]["VALUE"];
}
unset($arItem); // Удаляем ссылку после завершения обработки
