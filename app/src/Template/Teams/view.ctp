<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($team->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($team->country->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Continent') ?></th>
            <td><?= h($team->continent->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($team->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($team->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($team->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Players') ?></h4>
        <?php if (!empty($team->players)): ?>
        <table class="table table-hover">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Team Id') ?></th>
                <th><?= __('Transfer Rate') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->players as $players): ?>
            <tr>
                <td><?= h($players->id) ?></td>
                <td><?= h($players->name) ?></td>
                <td><?= h($players->team_id) ?></td>
                <td><?= h($players->transfer_rate) ?></td>
                <td><?= h($players->created) ?></td>
                <td><?= h($players->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Players', 'action' => 'view', $players->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
