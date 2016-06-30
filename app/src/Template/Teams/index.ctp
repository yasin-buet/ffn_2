<div class="row">
    <div class="col-lg-6">
    </div>
    <div class="col-lg-6">
        <div class="products index large-9 medium-8 columns content">
            <?= $this->Form->create() ?>
            <?= $this->Form->input('keyword', ['class' => 'form-control']) ?>
            <?= $this->Form->button('Search', ['class' => 'btn btn-primary ']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<section id="contentbody">
    <div class="container">
        <?php foreach ($teams as $team): ?>
            <div class="single_stuff wow fadeInDown">
                <div class="single_stuff_img">
                    <h2><?= h($team->name) ?></h2>
                </div>
                <div class="single_stuff_article">
                    <div class="single_sarticle_inner">
                        <div class="stuff_article_inner">
                            <span class="stuff_date">
                                <strong><?= h($team->modified) ?></strong>
                                <h2><?= h($team->title) ?></h2>
                                <h3><?= __('Country Name : ') ?><?= h($team->country->name) ?></h3>
                                <h3><?= __('Continent Name : ') ?><?= h($team->continent->name) ?></h3>
                                <p><?= h($team->description) ?></p>
                            </span>
                        </div>
                        <?= $this->Html->link(__('View Details'), ['action' => 'view', $team->id]) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>