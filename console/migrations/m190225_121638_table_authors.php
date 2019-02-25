<?php

use yii\db\Migration;

/**
 * Class m190225_121638_table_authors
 */
class m190225_121638_table_authors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'table_authors',
            [
                'id'        => $this->primaryKey(),
                'full_name' => $this->string(),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('table_authors');
    }

}
