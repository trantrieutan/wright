<?php // @version $Id: default.php$
defined('_JEXEC') or die('Restricted access');
?>

<div class="remind<?php echo $this->escape($this->params->get('pageclass_sfx')) ?>">
	
	<?php if($this->params->get('show_page_title',1)) : ?>
		<h1>
			<?php echo $this->escape($this->params->get('page_title')) ?>
		</h1>
	<?php endif; ?>

	<form action="<?php echo JRoute::_( 'index.php?option=com_user&task=remindusername' ); ?>" method="post" class="josForm form-validate">
		<p><?php echo JText::_('REMIND_USERNAME_DESCRIPTION'); ?></p>

		<label for="email" class="hasTip" title="<?php echo JText::_('REMIND_USERNAME_EMAIL_TIP_TITLE'); ?>::<?php echo JText::_('REMIND_USERNAME_EMAIL_TIP_TEXT'); ?>"><?php echo JText::_('Email Address'); ?>:</label>
		<input id="email" name="email" type="text" class="required validate-email" />

		<div>
		<button type="submit" class="validate"><?php echo JText::_('Submit'); ?></button>
		<?php echo JHTML::_( 'form.token' ); ?>
		</div>
	</form>
</div>