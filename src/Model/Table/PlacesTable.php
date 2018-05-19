<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Places Model
 *
 * @property \App\Model\Table\PlaceReservationsTable|\Cake\ORM\Association\HasMany $PlaceReservations
 *
 * @method \App\Model\Entity\Place get($primaryKey, $options = [])
 * @method \App\Model\Entity\Place newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Place[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Place|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Place patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Place[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Place findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlacesTable extends Table
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

        $this->setTable('places');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('PlaceReservations', [
            'foreignKey' => 'place_id'
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        $validator
            ->scalar('name')
            ->maxLength('name', 32)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 128)
            ->requirePresence('address', 'create')
            ->notEmpty('address')
            ->add('address', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('size')
            ->requirePresence('size', 'create')
            ->notEmpty('size');

        $validator
            ->integer('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        $validator
            ->integer('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->time('time_open')
            ->requirePresence('time_open', 'create')
            ->notEmpty('time_open');

        $validator
            ->time('time_close')
            ->requirePresence('time_close', 'create')
            ->notEmpty('time_close');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['address']));

        return $rules;
    }
}
