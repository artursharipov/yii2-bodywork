<?php

use yii\db\Migration;

/**
 * Class m200715_090638_img
 */
class m200715_090638_class_auto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%class_auto}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'viewbox' => $this->string()->notNull(),
            'status' => $this->smallInteger()->Null(),
            'sort' => $this->smallInteger()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%class_auto}}');
    }

}
