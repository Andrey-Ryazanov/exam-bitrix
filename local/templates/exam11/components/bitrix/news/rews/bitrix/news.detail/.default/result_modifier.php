<?php
// Проверяем, существует ли массив документов
if (empty($arResult["PROPERTIES"]["DOCUMENT"]["VALUE"]) === false) {
    $arResult["DOCUMENTS"] = [];
    $documents = (array)$arResult["PROPERTIES"]["DOCUMENT"]["VALUE"];
    
    foreach ($documents as $documentId) {
        $srcDocument = CFile::GetPath($documentId);
        $obDocument = CFile::GetByID($documentId);
        $arDocument = $obDocument->Fetch();
        
        $arResult["DOCUMENTS"][] = [
            'SRC' => $srcDocument,
            'NAME' => $arDocument["ORIGINAL_NAME"]
        ];
    }
}
?>
