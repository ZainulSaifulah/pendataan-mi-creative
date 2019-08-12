<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%participant}}`.
 */
class m190812_115410_create_participant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%participant}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->unique(),
            'name' => $this->string(),
            'gender' => $this->string(),
            'address' => $this->text(),
            'origin' => $this->string(),
            'Whatsapp' => $this->string(),
            'attendance' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%participant}}');
    }
}
