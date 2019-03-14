<?php

use yii\db\Migration;

/**
 * Class m190313_134652_foreign_key_db
 */
class m190313_134652_foreign_key_db extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->addForeignKey('fk-profil-user',
            '{{%profil}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');


        $this->addForeignKey('fk-agen-user',
            '{{%agen}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-saldo-user',
            '{{%saldo}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');
        
        $this->addForeignKey('fk-mitra-user',
            '{{%mitra}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-kurir-user',
            '{{%kurir}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-stok-barang',
            '{{%stok}}',
            'id_barang',
            '{{%barang}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-stok-mitra',
            '{{%stok}}',
            'id_mitra',
            '{{%mitra}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-stok-satuan',
            '{{%stok}}',
            'id_satuan',
            '{{%satuan}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-transaksi-user',
            '{{%transaksi}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-transaksi_detail-transaksi',
            '{{%transaksi_detail}}',
            'id_transaksi',
            '{{%transaksi}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-transaksi_detail-stok',
            '{{%transaksi_detail}}',
            'id_stok',
            '{{%stok}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-keranjang_belanja-stok',
            '{{%keranjang_belanja}}',
            'id_stok',
            '{{%stok}}',
            'id',
            'CASCADE',
            'CASCADE');
        $this->addForeignKey('fk-keranjang_belanja-user',
            '{{%keranjang_belanja}}',
            'id_user',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE');

        //attribut created_by updated_by
        $this->addForeignKey('fk-satuancreated-user',
            '{{%satuan}}',
            'created_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
            );
        $this->addForeignKey('fk-satuanupdated-user',
            '{{%satuan}}',
            'updated_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->addForeignKey('fk-profilcreated-user',
            '{{%profil}}',
            'created_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
        $this->addForeignKey('fk-profilupdated-user',
            '{{%profil}}',
            'updated_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->addForeignKey('fk-agencreated-user',
            '{{%agen}}',
            'created_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
        $this->addForeignKey('fk-agenupdated-user',
            '{{%agen}}',
            'updated_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->addForeignKey('fk-saldocreated-user',
            '{{%saldo}}',
            'created_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
        $this->addForeignKey('fk-saldoupdated-user',
            '{{%saldo}}',
            'updated_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->addForeignKey('fk-mitracreated-user',
            '{{%mitra}}',
            'created_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
        $this->addForeignKey('fk-mitraupdated-user',
            '{{%mitra}}',
            'updated_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->addForeignKey('fk-kurircreated-user',
            '{{%kurir}}',
            'created_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
        $this->addForeignKey('fk-kurirupdated-user',
            '{{%kurir}}',
            'updated_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->addForeignKey('fk-barangcreated-user',
            '{{%barang}}',
            'created_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
        $this->addForeignKey('fk-barangupdated-user',
            '{{%barang}}',
            'updated_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );

        $this->addForeignKey('fk-stokcreated-user',
            '{{%stok}}',
            'created_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
        $this->addForeignKey('fk-stokupdated-user',
            '{{%stok}}',
            'updated_by',
            '{{%user}}',
            'id',
            'SET NULL',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190313_134652_foreign_key_db cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190313_134652_foreign_key_db cannot be reverted.\n";

        return false;
    }
    */
}
