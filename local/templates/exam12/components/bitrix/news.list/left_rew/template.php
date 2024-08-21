<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="item-wrap">
    <div class="rew-footer-carousel">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <?php
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => $arItem['EDIT_CONFIRM']));
            ?>
            <div class="item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <div class="side-block side-opin">
                    <div class="inner-block">
                        <div class="title">
                            <div class="photo-block">
                                <img src="<?= $arItem['IMAGE'] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
                            </div>
                            <div class="name-block">
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                    <?= $arItem["NAME"] ?>
                                </a>
                            </div>
                            <div class="pos-block">
                                <?= $arItem["POSITION"] ?>,
                                <?= $arItem["COMPANY"] ?>
                            </div>
                        </div>
                        <div class="text-block"><?= $arItem["PREVIEW_TEXT"] ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
