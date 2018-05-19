<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PlaceReservation Entity
 *
 * @property int $id
 * @property int $place_id
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $started
 * @property \Cake\I18n\FrozenTime $ended
 *
 * @property \App\Model\Entity\Place $place
 * @property \App\Model\Entity\Event[] $events
 */
class PlaceReservation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'place_id' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'started' => true,
        'ended' => true,
        'place' => true,
        'events' => true
    ];
}
