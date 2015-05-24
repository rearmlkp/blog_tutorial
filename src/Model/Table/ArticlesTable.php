<?php
namespace App\Model\Table;

use App\Model\Entity\Article;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Articles Model
 */
class ArticlesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('articles');
        $this->displayField('idarticles');
        $this->primaryKey('idarticles');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('idarticles', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idarticles', 'create');
            
        $validator
            ->requirePresence('articles_title', 'create')
            ->notEmpty('articles_title');
            
        $validator
            ->requirePresence('articles_body', 'create')
            ->notEmpty('articles_body');
            
        $validator
            ->add('categories_idcategories', 'valid', ['rule' => 'numeric'])
            ->requirePresence('categories_idcategories', 'create')
            ->notEmpty('categories_idcategories');

        return $validator;
    }
    public function isOwnedBy($articleId, $userId)
{
    return $this->exists(['id' => $articleId, 'user_id' => $userId]);
}
}
