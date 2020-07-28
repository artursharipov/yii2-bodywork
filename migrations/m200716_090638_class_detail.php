<?php

use yii\db\Migration;

/**
 * Class m200715_090638_img
 */
class m200716_090638_class_detail extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%class_detail}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'status' => $this->smallInteger()->Null(),
            'count_side' => $this->smallInteger()->Null(),
            'class_auto_id' => $this->integer()->notNull(),
            'd' => $this->text()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%class_detail}}');
    }

}
