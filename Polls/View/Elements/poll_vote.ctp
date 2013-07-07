<?php if (!empty($data['Poll']['title'])): ?>
    <?= $this->Form->create('Poll', array('class' => 'poll-vote')) ?>

    <?= $this->Form->input('option', array(
        'options' => $data['options'],
        'type' => 'radio',
        'legend' => $data['Poll']['title']
    )) ?>

    <?= $this->Form->submit('Vote', array(
        'div' => false,
        'class' => 'pull-left'
    )) ?>
    <?= $this->Html->link('View Results', '#', array(
        'class' => 'pull-right results',
        'data-block-title' => $data['Block']['title']
    )) ?>
    <?= $this->Form->hidden('id', array('value' => $data['Poll']['id'])) ?>

    <div class="clearfix"></div>
    <?= $this->Form->end() ?>
<?php endif ?>