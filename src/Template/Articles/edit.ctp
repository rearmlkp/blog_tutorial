<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->idarticles],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->idarticles)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="articles form large-10 medium-9 columns">
    <?= $this->Form->create($article); ?>
    <fieldset>
        <legend><?= __('Edit Article') ?></legend>
        <?php
            echo $this->Form->input('articles_title');
            echo $this->Form->input('articles_body');
            echo $this->Form->input('categories_idcategories');
            echo $this->Form->input('user_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
