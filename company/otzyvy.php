<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("test", "Тестовое значение");
$APPLICATION->SetPageProperty("title", "Отзывы");
$APPLICATION->SetPageProperty("keywords", "мебель, отзывы, компания");
$APPLICATION->SetPageProperty("description", "Отзывы о компании");
$APPLICATION->SetTitle("Отзывы");
if ($APPLICATION->GetTitle() == 'Отзывы') {
    $APPLICATION->ShowTitle();
}
?>

Text here....

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>