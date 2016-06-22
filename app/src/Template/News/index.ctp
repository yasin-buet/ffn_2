<section id="contentbody">
    <div class="container">
        <?php foreach ($news as $news): ?>
            <div class="single_stuff wow fadeInDown">
                <div class="single_stuff_img">
                    <a href="#"><?= $this->Html->link(__('View'), ['action' => 'view', $news->id]) ?>
                </div>
                <div class="single_stuff_article">
                    <div class="single_sarticle_inner">
                        <div class="stuff_article_inner">
                            <span class="stuff_date"><strong><?= h($news->modified) ?> </strong>
                                <h2><?= h($news->title) ?></a></h2>
                                    <p><?= h($news->body) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>