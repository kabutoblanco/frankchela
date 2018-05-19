<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property int $place_reservation_id
 * @property int $event_type_id
 * @property int $thematic_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property int $cost
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $started
 *
 * @property \App\Model\Entity\PlaceReservation $place_reservation
 * @property \App\Model\Entity\EventType $event_type
 * @property \App\Model\Entity\Thematic $thematic
 * @property \App\Model\Entity\EventMenu[] $event_menus
 * @property \App\Model\Entity\EventProduct[] $event_products
 */
class Event extends Entity
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
        'place_reservation_id' => true,
        'event_type_id' => true,
        'thematic_id' => true,
        'name' => true,
        'phone' => true,
        'email' => true,
        'cost' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'started' => true,
        'place_reservation' => true,
        'event_type' => true,
        'thematic' => true,
        'event_menus' => true,
        'event_products' => true
    ];
}
