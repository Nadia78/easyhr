<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profil Entity.
 *
 * @property int $id
 * @property string $urlSS
 * @property string $urlFiscalite
 * @property string $urlAttestation
 * @property \App\Model\Entity\User[] $users
 */
class Profil extends Entity
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
}
