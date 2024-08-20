<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<nav class="nav">
	<div class="inner-wrap">
		<div class="menu-block popup-wrap">
			<a href="" class="btn-menu btn-toggle"></a>
			<div class="menu popup-block">
				<?if (!empty($arResult)):?>
				<ul class = "">

				<?
				$previousLevel = 0;
				foreach($arResult as $arItem):?>
				
					<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
						<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
					<?endif?>
					<?if ($arItem["IS_PARENT"]):?>
				
						<?if ($arItem["DEPTH_LEVEL"] == 1):?>
							<li <?if (isset($arItem['PARAMS']['ICON'])):?> 
							class = "<?=$arItem['PARAMS']['ICON'];?>" <?endif;?>>
							<a
							<?if (isset($arItem['PARAMS']['ITEM_COLOR'])):?> 
								class = "<?=$arItem['PARAMS']['ITEM_COLOR'];?>" 
								<?endif;?>
								href="<?=$arItem["LINK"]?>"
							>
								<?=$arItem["TEXT"]?>
							</a>
							<ul>
							<?if (isset($arItem['PARAMS']['TEXT_SUBITEM'])):?>
								<div class="menu-text">
									<?=$arItem['PARAMS']['TEXT_SUBITEM'];?>
								</div>
							<?endif;?>
						<?else:?>
							<?if (isset($arItem['PARAMS']['TEXT_SUBITEM'])):?>
								<div class="menu-text">
									<?=$arItem['PARAMS']['TEXT_SUBITEM'];?>
								</div>
							<?endif;?>
							<li>
							<a 
								<?if (isset($arItem['PARAMS']['ITEM_COLOR'])):?> 
									class = "<?=$arItem['PARAMS']['ITEM_COLOR'];?>" 
								<?endif;?>
								href="<?=$arItem["LINK"]?>"
							>
								<?=$arItem["TEXT"]?>
							</a>
							<ul>
						<?endif?>

					<?else:?>
				
						<?if ($arItem["PERMISSION"] > "D"):?>
				
							<?if ($arItem["DEPTH_LEVEL"] == 1):?>

								<li 
									<?if (isset($arItem['PARAMS']['ICON'])):?> 
										class = "<?=$arItem['PARAMS']['ICON']?>" 
									<?endif;?>
									>
									<a 
										<?if (isset($arItem['PARAMS']['ITEM_COLOR'])):?> 
											class = "<?=$arItem['PARAMS']['ITEM_COLOR'];?>" 
										<?endif;?>
										href="<?=$arItem["LINK"]?>">
										<?=$arItem["TEXT"]?>
									</a>
								</li>
							<?else:?>
								<li>
									<a 								
										<?if (isset($arItem['PARAMS']['ITEM_COLOR'])):?> 
											class = "<?=$arItem['PARAMS']['ITEM_COLOR'];?>" 
										<?endif;?>
										href="<?=$arItem["LINK"]?>">
											<?=$arItem["TEXT"]?>
										</a>
								</li>
							<?endif?>
				
						<?endif?>
				
					<?endif?>

					<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
				
				<?endforeach?>
				
				<?if ($previousLevel > 1)://close last item tags ?>
					<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
				<?endif?>
				
				</ul>
				<?endif?>
				<a href="" class="btn-close"></a>
			</div>
			<div class="menu-overlay"></div>
		</div>
	</div>
</nav>



<? /**

<!-- nav -->
        <nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
                        <ul class="">
							<? foreach ($arResult as $menuPoint): ?>
							<li class="<? if (!empty($menuPoint['PARAMS']['ICON'])): ?>main-page <? endif; ?>"><a href=""><?=$menuPoint['TEXT']?></a>
                            </li>
							<? endforeach; ?>
                        </ul>
                        <a href="" class="btn-close"></a>
                    </div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>
        <!-- /nav -->
*/?>