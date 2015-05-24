<?php
namespace App\Model\Table;

use App\Model\Entity\Category;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categories Model
 */
class CategoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('categories');
        $this->displayField('idcategories');
        $this->primaryKey('idcategories');
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
            ->add('idcategories', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idcategories', 'create');
            
        $validator
            ->requirePresence('categories_name', 'create')
            ->notEmpty('categories_name');
            
        $validator
            ->requirePresence('categories_description', 'create')
            ->notEmpty('categories_description');

        return $validator;
    }
}
