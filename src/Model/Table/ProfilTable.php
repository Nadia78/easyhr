<?php
namespace App\Model\Table;

use App\Model\Entity\Profil;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profil Model
 *
 * @property \Cake\ORM\Association\HasMany $Users
 */
class ProfilTable extends Table
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

        $this->table('profil');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'profil_id'
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
            ->requirePresence('urlSS', 'create')
            ->notEmpty('urlSS');

        $validator
            ->requirePresence('urlFiscalite', 'create')
            ->notEmpty('urlFiscalite');

        $validator
            ->requirePresence('urlAttestation', 'create')
            ->notEmpty('urlAttestation');

        return $validator;
    }
}
