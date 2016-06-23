<section id="contentbody">
    <div class="container">
        <?php foreach ($teams as $teams): ?>
            <div class="single_stuff wow fadeInDown">
                <div class="single_stuff_img">
                    <h2><?= h($teams->name) ?></h2>
                </div>
                <div class="single_stuff_article">
                    <div class="single_sarticle_inner">
                        <div class="stuff_article_inner">
                            <span class="stuff_date"><strong><?= h($teams->modified) ?> </strong>
                                <h2><?= h($teams->title) ?></a></h2>
                                    <p><?= h($teams->description) ?></p>
                        </div>
                        <a href="#"><?= $this->Html->link(__('View Details'), ['action' => 'view', $teams->id]) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>