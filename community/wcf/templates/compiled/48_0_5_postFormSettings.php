<?php
/**
* WoltLab Community Framework
* Template: postFormSettings
* Compiled at: Tue, 13 Aug 2013 11:30:43 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'postFormSettings';
?>
<?php if ($this->v['this']->user->userID) { ?>
	<div class="formField">
		<label><input type="checkbox" name="subscription" value="1" <?php if ($this->v['subscription'] == 1) { ?>checked="checked" <?php } ?>/> Thema abonnieren</label>
	</div>
	<div class="formFieldDesc">
		<p>Fügt dieses Thema der Abonnement-Liste in ihrem Profil hinzu.</p>
	</div>
<?php } ?>
<?php if ($this->v['board']->getModeratorPermission('canCloseThread')) { ?>
	<div class="formField">
		<label><input type="checkbox" name="closeThread" value="1" <?php if ($this->v['closeThread'] == 1) { ?>checked="checked" <?php } ?>/> Thema schließen</label>
	</div>
	<div class="formFieldDesc">
		<p>Das Thema wird nach dem Speichern dieses Beitrags geschlossen.</p>
	</div>
<?php } ?>

<?php if ($this->v['this']->request->form == 'PostAddForm' && MODULE_THREAD_MARKING_AS_DONE && $this->v['board']->enableMarkingAsDone &&  ! $this->v['thread']->isDone && ($this->v['board']->getModeratorPermission('canMarkAsDoneThread') || ($this->v['this']->user->userID && $this->v['this']->user->userID == $this->v['thread']->userID && $this->v['board']->getPermission('canMarkAsDoneOwnThread')))) { ?>
	<div class="formField">
		<label><input type="checkbox" name="markAsDone" value="1" <?php if ($this->v['markAsDone'] == 1) { ?>checked="checked" <?php } ?>/> Thema als erledigt markieren</label>
	</div>
	<div class="formFieldDesc">
		<p>Das Thema wird nach dem Speichern dieses Beitrags als erledigt markiert.</p>
	</div>
<?php } ?>

<?php if (isset($this->v['hideEditNote']) && $this->v['board']->getPermission('canHideEditNote')) { ?>
	<div class="formField">
		<label><input type="checkbox" name="hideEditNote" value="1" <?php if ($this->v['hideEditNote'] == 1) { ?>checked="checked" <?php } ?>/> Editierungshinweis nicht anzeigen</label>
	</div>
	<div class="formFieldDesc">
		<p>Den Hinweis: &raquo;Beitrag editiert von ...&laquo; nicht an den Beitrag anfügen.</p>
	</div>
<?php } ?>
<?php if ($this->v['this']->request->form == 'ThreadAddForm' && $this->v['board']->getModeratorPermission('canEnableThread')) { ?>
	<div class="formField">
		<label><input type="checkbox" name="disableThread" value="1" <?php if ($this->v['disableThread'] == 1) { ?>checked="checked" <?php } ?>/> Thema deaktivieren</label>
	</div>
	<div class="formFieldDesc">
		<p>Das Thema wird nach dem Speichern deaktiviert und muss zunächst von einem Moderator freigeschaltet werden.</p>
	</div>
<?php } ?>
<?php if ($this->v['this']->request->form == 'PostAddForm' && $this->v['board']->getModeratorPermission('canEnablePost')) { ?>
	<div class="formField">
		<label><input type="checkbox" name="disablePost" value="1" <?php if ($this->v['disablePost'] == 1) { ?>checked="checked" <?php } ?>/> Beitrag deaktivieren</label>
	</div>
	<div class="formFieldDesc">
		<p>Der Beitrag wird nach dem Speichern deaktiviert und muss zunächst von einem Moderator freigeschaltet werden.</p>
	</div>
<?php } ?>