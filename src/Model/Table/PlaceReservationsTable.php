<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlaceReservations Model
 *
 * @property \App\Model\Table\PlacesTable|\Cake\ORM\Association\BelongsTo $Places
 * @property \App\Model\Table\EventsTable|\Cake\ORM\Association\HasMany $Events
 *
 * @method \App\Model\Entity\PlaceReservation get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlaceReservation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlaceReservation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlaceReservation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlaceReservation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlaceReservation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlaceReservation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PlaceReservationsTable extends Table
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

        $this->setTable('place_reservations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Places', [
            'foreignKey' => 'place_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'place_reservation_id'
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
            ->integer('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->dateTime('started')
            ->requirePresence('started', 'create')
            ->notEmpty('started');

        $validator
            ->dateTime('ended')
            ->requirePresence('ended', 'create')
            ->notEmpty('ended');

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
        $rules->add($rules->existsIn(['place_id'], 'Places'));

        return $rules;
    }
}
