<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->idcategories]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->idcategories], ['confirm' => __('Are you sure you want to delete # {0}?', $category->idcategories)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categories view large-10 medium-9 columns">
    <h2><?= h($category->idcategories) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Categories Name') ?></h6>
            <p><?= h($category->categories_name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Idcategories') ?></h6>
            <p><?= $this->Number->format($category->idcategories) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($category->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($category->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Categories Description') ?></h6>
            <?= $this->Text->autoParagraph(h($category->categories_description)); ?>

        </div>
    </div>
</div>
