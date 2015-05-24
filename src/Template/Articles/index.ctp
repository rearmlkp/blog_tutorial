<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="articles index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('idarticles') ?></th>
            <th><?= $this->Paginator->sort('articles_title') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('categories_idcategories') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($articles as $article): ?>
        <tr>
            <td><?= $this->Number->format($article->idarticles) ?></td>
            <td><?= h($article->articles_title) ?></td>
            <td><?= h($article->created) ?></td>
            <td><?= h($article->modified) ?></td>
            <td><?= $this->Number->format($article->categories_idcategories) ?></td>
            <td><?= $this->Number->format($article->user_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $article->idarticles]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->idarticles]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->idarticles], ['confirm' => __('Are you sure you want to delete # {0}?', $article->idarticles)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
