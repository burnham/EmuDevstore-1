<?php
/**
* WoltLab Community Framework
* Template: redirect
* Compiled at: Sat, 17 Aug 2013 09:25:34 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'redirect';
?>
<?php
$outerTemplateName3c54b12cd45add84e3d59be7a18e67fe3f010dc5 = $this->v['tpl']['template'];
$this->includeTemplate("documentHeader", array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName3c54b12cd45add84e3d59be7a18e67fe3f010dc5;
$this->v['tpl']['includedTemplates']["documentHeader"] = 1;
?>
<head>
	<title>Redirection - <?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langddc082ed662c98bcb5210fedd7ebed68a1f142e4 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langddc082ed662c98bcb5210fedd7ebed68a1f142e4, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></title>
	<?php
$outerTemplateName3aa5745777c25c44723c744772120bf03c05e56c = $this->v['tpl']['template'];
$this->includeTemplate('headInclude', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName3aa5745777c25c44723c744772120bf03c05e56c;
$this->v['tpl']['includedTemplates']['headInclude'] = 1;
?>
	<meta http-equiv="refresh" content="<?php if (isset($this->v['wait'])) { ?><?php echo $this->v['wait']; ?><?php } else { ?>10<?php } ?>;URL=<?php echo StringUtil::encodeHTML($this->v['url']); ?>" />
</head>
<body<?php if (isset($this->v['templateName'])) { ?> id="tpl<?php echo StringUtil::encodeHTML(ucfirst($this->v['templateName'])); ?>"<?php } ?>>
<?php
$outerTemplateNamebf39fae4681919165b2afd933b3a6b8ad27d4875 = $this->v['tpl']['template'];
$this->includeTemplate('header', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNamebf39fae4681919165b2afd933b3a6b8ad27d4875;
$this->v['tpl']['includedTemplates']['header'] = 1;
?>

<div id="main">
	
	<div class="success">
		<p><?php echo $this->v['message']; ?></p>
		<p><a href="<?php echo StringUtil::encodeHTML($this->v['url']); ?>">Please click here if the automatic redirection does not work!</a></p>
	</div>

</div>

<?php
$outerTemplateName19ebb7644aca16b3da18e6c89c4cdd160f91c225 = $this->v['tpl']['template'];
$this->includeTemplate('footer', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName19ebb7644aca16b3da18e6c89c4cdd160f91c225;
$this->v['tpl']['includedTemplates']['footer'] = 1;
?>
</body>
</html>