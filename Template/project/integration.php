<h3><i class="fa fa-slack fa-fw"></i>Slack</h3>
<div class="panel">
    <?= $this->form->label(t('Webhook URL'), 'slack_webhook_url') ?>
    <?= $this->form->text('slack_webhook_url', $values) ?>

    <?= $this->form->label(t('Channel/Group/User (Optional)'), 'slack_webhook_channel') ?>
    <?= $this->form->text('slack_webhook_channel', $values, array(), array('placeholder="#channel"')) ?>

    <p class="form-help"><a href="https://github.com/kanboard/plugin-slack#configuration" target="_blank"><?= t('Help on Slack integration') ?></a></p>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
    </div>
</div>
