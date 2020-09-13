<?php
$this->title = 'Map | '. Yii::$app->name;
?>
<div id="map"></div>
<?php 
$script =<<<JS
$().ready(function(){
    demo.initGoogleMaps();
});
JS;

$this->registerJs($script);