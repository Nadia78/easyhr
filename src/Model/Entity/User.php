<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 *
 * @property int $id
 * @property int $role
 * @property int $name
 * @property int $firstname
 * @property string $email
 * @property string $password
 * @property string $poste
 * @property string $numberSS
 * @property string $numberFisc
 * @property int $entreprises_id
 * @property \App\Model\Entity\Entreprise $entreprise
 * @property int $profil_id
 * @property \App\Model\Entity\Profil $profil
 */
class User extends Entity
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
        '*' => true,
        'id' => false,
    ];

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
