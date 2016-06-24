<section id="contentbody">
    <div class="container">
        <?php foreach ($players as $players): ?>
            <div class="single_stuff wow fadeInDown">
                <div class="single_stuff_img">
                    <h2><?= h($players->name) ?></h2>
                </div>
                <div class="single_stuff_article">
                    <div class="single_sarticle_inner">
                        <div class="stuff_article_inner">
                            <span class="stuff_date"><strong><?= h($players->modified) ?> </strong>
                            <h4><?= __('Team : ') ?><?= h($players->team->name) ?></h4>
                            <p><?= h($players->description) ?></p>
                        </div>
                        <?= $this->Html->link(__('View Details'), ['action' => 'view', $players->id]) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>