<?php

use yii\db\Migration;

/**
 * Class m190313_120349_init_db
 */
class m190313_120349_init_db extends Migration
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

        $this->createTable('{{%user}}',[
            'id'=>$this->primaryKey(),
            'username'=>$this->string(50),
            'email'=>$this->string(),
            'password_hash'=>$this->string(64),
            'auth_key'=>$this->string(32),
            'password_reset_token'=>$this->string(),
            'access_token'=>$this->string(),
            'level_access'=>"ENUM('admin, mitra, kurir, customer','agen')",
            'status'=>$this->boolean(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),

        ],$tableOptions);

        $this->createTable('{{%profil}}',[
            'id'=>$this->primaryKey(),
            'id_user'=>$this->integer(),
            'prefix'=>$this->string(),
            'nama_depan'=>$this->string(30),
            'nama_belakang'=>$this->string(30),
            'tempat_lahir'=> $this->string(),
            'tanggal_lahir'=>$this->integer(),
            'latitude'=>$this->string(),
            'langitude'=>$this->string(),
            'alamat_1'=>$this->string(),
            'alamat_2'=>$this->string(),
            'kecamatan'=>$this->string(),
            'kota'=>$this->string(),
            'provinsi'=>$this->string(),
            'kode_pos'=>$this->string(),
            'foto_profil'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),
        ],$tableOptions);
        $this->createTable('{{%agen}}',[
            'id'=>$this->primaryKey(),
            'id_user'=>$this->integer(),
            'kode_agen'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),


        ],$tableOptions);

        $this->createTable('{{%saldo}}',[
            'id'=>$this->primaryKey(),
            'saldo'=>$this->bigInteger(),
            'id_user'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),
        ],$tableOptions);


        $this->createTable('{{%mitra}}',[
            'id'=>$this->primaryKey(),
            'id_user'=>$this->integer(),
            'kode_mitra'=>$this->string(),
            'nama_mitra'=>$this->string(),
            'latitude'=>$this->string(),
            'langitude'=>$this->string(),
            'alamat_1'=>$this->string(),
            'alamat_2'=>$this->string(),
            'kecamatan'=>$this->string(),
            'kota'=>$this->string(),
            'provinsi'=>$this->string(),
            'kode_pos'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),

        ],$tableOptions);

        $this->createTable('{{%kurir}}',[
            'id'=>$this->primaryKey(),
            'id_user'=>$this->integer(),
            'kode_kurir'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer()

        ],$tableOptions);
        $this->createTable('{{%satuan}}',[
            'id'=>$this->primaryKey(),
            'nama'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),
        ],$tableOptions);

        $this->createTable('{{%barang}}',[
            'id'=>$this->primaryKey(),
            'kode'=>$this->string(),
            'nama'=>$this->string(),
            'barcode'=>$this->string(),
            'deskripsi'=>$this->text(),
            'foto'=>$this->string(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),
        ],$tableOptions);

        $this->createTable('{{%stok}}',[
            'id'=>$this->primaryKey(),
            'id_barang'=>$this->integer(),
            'id_mitra'=>$this->integer(),
            'qty'=>$this->integer(),
            'harga'=>$this->bigInteger(),
            'id_satuan'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
            'created_by'=>$this->integer(),
            'updated_by'=>$this->integer(),

        ],$tableOptions);

        $this->createTable('{{%transaksi}}',[
            'id'=>$this->primaryKey(),
            'id_user'=>$this->integer(),
            'jumlah_bayar'=>$this->bigInteger(),
            'bayar'=>$this->bigInteger(),
            'is_lunas'=>$this->boolean(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),

        ],$tableOptions);
        $this->createTable('{{%transaksi_detail}}',[
            'id'=>$this->primaryKey(),
            'id_transaksi'=>$this->integer(),
            'id_stok'=>$this->integer(),
            'qty'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),

        ],$tableOptions);

        $this->createTable('{{%keranjang_belanja}}',[
            'id'=>$this->integer(),
            'id_stok'=>$this->integer(),
            'id_user'=>$this->integer(),
            'qty'=>$this->integer(),
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),

        ],$tableOptions);

        $this->createTable('antar',[
            'id'=>$this->primaryKey(),
            'id_kurir'=>$this->integer(),
            'id_transaksi'=>$this->integer(),
            'status'=>"ENUM('jemput','antar','selesai')",
            'created_at'=>$this->integer(),
            'updated_at'=>$this->integer(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%keranjang_belanja}}');
        $this->dropTable('{{%transaksi_detail}}');
        $this->dropTable('{{%transaksi}}');
        $this->dropTable('{{%supplier}}');
        $this->dropTable('{{%stok}}');
        $this->dropTable('{{%barang}}');
        $this->dropTable('{{%satuan}}');
        $this->dropTable('{{%kurir}}');
        $this->dropTable('{{%mitra}}');
        $this->dropTable('{{%profil_backend}}');
        $this->dropTable('{{%saldo_backend}}');
        $this->dropTable('{{%saldo_frontend}}');
        $this->dropTable('{{%agen}}');
        $this->dropTable('{{%profil_frontend}}');
        $this->dropTable('{{%user_frontend}}');
        $this->dropTable('{{%user_backend}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190313_120349_init_db cannot be reverted.\n";

        return false;
    }
    */
}
