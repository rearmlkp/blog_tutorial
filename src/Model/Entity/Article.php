<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity.
 */
class Article extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'articles_title' => true,
        'articles_body' => true,
        'categories_idcategories' => true,
    ];
}
