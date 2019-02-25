<?php

use yii\db\Migration;

/**
 * Class m190225_121653_table_books
 */
class m190225_121653_table_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'table_books',
            [
                'id'               => $this->primaryKey(),
                'title'            => $this->string(),
                'author'           => $this->string(),
                'date_publication' => $this->dateTime()
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('table_books');
    }

}
