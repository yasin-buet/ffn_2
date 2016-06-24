<div class="players view large-9 medium-8 columns content">
    <h3><?= h($player->name) ?></h3>
    <table class="table table-hover">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($player->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Team') ?></th>
            <td>
                <?= $player->has('team') ? $this->Html->link($player->team->name, [
                    'controller' => 'Teams',
                    'action' => 'view', $player->team->id
                ]) : '' ?>
            </td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($player->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Transfer Rate') ?></th>
            <td><?= $this->Number->format($player->transfer_rate) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($player->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($player->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($player->description)); ?>
    </div>
</div>
