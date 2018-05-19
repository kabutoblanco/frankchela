<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Place Entity
 *
 * @property int $id
 * @property string|resource $image
 * @property string $name
 * @property string $address
 * @property int $size
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $time_open
 * @property \Cake\I18n\FrozenTime $time_close
 *
 * @property \App\Model\Entity\PlaceReservation[] $place_reservations
 */
class Place extends Entity
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
        'image' => true,
        'name' => true,
        'address' => true,
        'size' => true,
        'cost' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'time_open' => true,
        'time_close' => true,
        'place_reservations' => true
    ];
}
