<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('image');

        $validator
            ->integer('role')
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 32)
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 32)
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->scalar('username')
            ->maxLength('username', 32)
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 128)
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->add('password', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('phone')
            ->maxLength('phone', 32)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone')
            ->add('phone', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['password']));
        $rules->add($rules->isUnique(['phone']));

        return $rules;
    }
}
