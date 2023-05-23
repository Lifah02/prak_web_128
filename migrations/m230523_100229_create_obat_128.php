<?php

use yii\db\Migration;

/**
 * Class m230523_100229_create_obat_128
 */
class m230523_100229_create_obat_128 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230523_100229_create_obat_128 cannot be reverted.\n";

        return false;
    }
    public function safeDown()
    {
        $this->createTable('obat_128', [
            'id' ->$this->primaryKey(),
            'kode_obat' =>$this->string()->notNull(),
            'harga' =>$this->decimal(10, 0)->notNull(),
            'stok_obat' =>$this->integer()->notNull(),
        ]);

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230523_100229_create_obat_128 cannot be reverted.\n";

        return false;
    }
    */
}
