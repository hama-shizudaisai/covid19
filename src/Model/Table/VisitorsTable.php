<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visitors Model
 *
 * @method \App\Model\Entity\Visitor newEmptyEntity()
 * @method \App\Model\Entity\Visitor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Visitor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Visitor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Visitor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Visitor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Visitor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Visitor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visitor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Visitor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Visitor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VisitorsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('visitors');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('id')
            ->maxLength('id', 127)
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('affiliation')
            ->maxLength('affiliation', 255)
            ->allowEmptyString('affiliation');

        $validator
            ->scalar('student_number')
            ->maxLength('student_number', 63)
            ->allowEmptyString('student_number');

        return $validator;
    }
}
