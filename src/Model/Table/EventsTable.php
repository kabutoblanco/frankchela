<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\PlaceReservationsTable|\Cake\ORM\Association\BelongsTo $PlaceReservations
 * @property \App\Model\Table\EventTypesTable|\Cake\ORM\Association\BelongsTo $EventTypes
 * @property \App\Model\Table\ThematicsTable|\Cake\ORM\Association\BelongsTo $Thematics
 * @property \App\Model\Table\EventMenusTable|\Cake\ORM\Association\HasMany $EventMenus
 * @property \App\Model\Table\EventProductsTable|\Cake\ORM\Association\HasMany $EventProducts
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('PlaceReservations', [
            'foreignKey' => 'place_reservation_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EventTypes', [
            'foreignKey' => 'event_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Thematics', [
            'foreignKey' => 'thematic_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('EventMenus', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('EventProducts', [
            'foreignKey' => 'event_id'
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
            ->scalar('name')
            ->maxLength('name', 64)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 32)
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->integer('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        $validator
            ->integer('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->dateTime('started')
            ->requirePresence('started', 'create')
            ->notEmpty('started');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['place_reservation_id'], 'PlaceReservations'));
        $rules->add($rules->existsIn(['event_type_id'], 'EventTypes'));
        $rules->add($rules->existsIn(['thematic_id'], 'Thematics'));

        return $rules;
    }
}
