<div class="players form large-9 medium-8 columns content">
    <?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('Edit Player') ?></legend>
        <?php
            echo $this->Form->input('name', ['class' => 'form-control']);
            echo $this->Form->input('team_id', ['options' => $teams, 'class' => 'form-control']);
            echo $this->Form->input('transfer_rate', ['class' => 'form-control']);
            echo $this->Form->input('description', ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>