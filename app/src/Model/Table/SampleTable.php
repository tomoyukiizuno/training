<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sample Model
 *
 * @method \App\Model\Entity\Sample get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sample newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sample[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sample|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sample patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sample[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sample findOrCreate($search, callable $callback = null, $options = [])
 */
class SampleTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('sample');
        $this->setDisplayField('name');
        $this->setPrimaryKey('ID');
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
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->integer('score')
            ->allowEmpty('score');

        $validator
            ->allowEmpty('name');

        return $validator;
    }
}
