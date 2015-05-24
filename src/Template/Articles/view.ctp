<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->idarticles]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->idarticles], ['confirm' => __('Are you sure you want to delete # {0}?', $article->idarticles)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="articles view large-10 medium-9 columns">
    <h2><?= h($article->idarticles) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Articles Title') ?></h6>
            <p><?= h($article->articles_title) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Idarticles') ?></h6>
            <p><?= $this->Number->format($article->idarticles) ?></p>
            <h6 class="subheader"><?= __('Categories Idcategories') ?></h6>
            <p><?= $this->Number->format($article->categories_idcategories) ?></p>
            <h6 class="subheader"><?= __('User Id') ?></h6>
            <p><?= $this->Number->format($article->user_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($article->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($article->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Articles Body') ?></h6>
            <?= $this->Text->autoParagraph(h($article->articles_body)); ?>

        </div>
    </div>
</div>
