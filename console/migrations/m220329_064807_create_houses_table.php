<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%houses}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m220329_064807_create_houses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%houses}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => 'LONGTEXT',
            'price' => $this->decimal(10,2),
            'status' => $this->tinyInteger(2)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
            'type' => $this->tinyInteger(2)->notNull(),
            'surface' => $this->decimal(10,2),
            'bedrooms'=> $this->integer(2),
            'bathrooms'=> $this->integer(2),
            'floor' => $this->integer(2),
            'has_garage' => $this->tinyInteger(1),
            'address' =>$this->string(255),
            'location' =>$this->string(255),
            'latitude' =>$this->float(10,6),
            'longitude' =>$this->float(10,6),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-houses-created_by}}',
            '{{%houses}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-houses-created_by}}',
            '{{%houses}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-houses-updated_by}}',
            '{{%houses}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-houses-updated_by}}',
            '{{%houses}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-houses-created_by}}',
            '{{%houses}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-houses-created_by}}',
            '{{%houses}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-houses-updated_by}}',
            '{{%houses}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-houses-updated_by}}',
            '{{%houses}}'
        );

        $this->dropTable('{{%houses}}');
    }
}
