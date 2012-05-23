<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?=$this->headMeta()?>
<?=$this->headTitle()?>
<?=$this->headLink()?>
<link rel="stylesheet" type="text/css" href="/css/default.css"/>
<link rel="stylesheet" href="/js/jui/themes/ui-lightness/jquery-ui-1.8.20.custom.css" type="text/css" media="all" />
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="/js/jquery.tablex.js"></script>
<?=$this->headScript()?>
</head>
<body>
<?=$this->layout()->content?>
</body>
<?=JsUtils::ob_flush()?>
</html>