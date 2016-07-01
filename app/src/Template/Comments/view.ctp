<div class="comments view large-9 medium-8 columns content">
    <h3><?= h($comment->id) ?></h3>
    <table class="table table-hover">
        <tr>
            <th><?= __('Body') ?></th>
            <td><?= h($comment->body) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td>
                <?= $this->Html->link($comment->user->id, [
                    'controller' => 'Users',
                    'action' => 'view', $comment->user->id
                ]) ?>
            </td>
        </tr>
        <tr>
            <th><?= __('News') ?></th>
            <td>
                <?= $this->Html->link($comment->news->title, [
                    'controller' => 'News',
                    'action' => 'view', $comment->news->id
                ]) ?>
            </td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($comment->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($comment->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($comment->modified) ?></td>
        </tr>
    </table>
</div>
