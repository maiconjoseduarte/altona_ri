<?php

use yii\db\Migration;

/**
 * Handles the creation of table `mercado`.
 */
class m180601_114014_create_Mercado_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Mercado', [
            'id' => $this->primaryKey()->notNull(),
            'descricao' => $this->string()->notNull(),
            'data' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Mercado');
    }
}
