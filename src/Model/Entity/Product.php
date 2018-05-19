<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $product_type_id
 * @property int $product_category_id
 * @property string|resource $image
 * @property string $name
 * @property int $stock
 * @property int $size
 * @property int $cost
 * @property string $description
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProductType $product_type
 * @property \App\Model\Entity\ProductCategory $product_category
 * @property \App\Model\Entity\EventProduct[] $event_products
 * @property \App\Model\Entity\MenuProduct[] $menu_products
 */
class Product extends Entity
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
        'product_type_id' => true,
        'product_category_id' => true,
        'image' => true,
        'name' => true,
        'stock' => true,
        'size' => true,
        'cost' => true,
        'description' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'product_type' => true,
        'product_category' => true,
        'event_products' => true,
        'menu_products' => true
    ];
}
