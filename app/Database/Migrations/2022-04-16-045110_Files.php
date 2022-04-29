<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Files extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'report_id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
            ],
            'file'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('report_files');
    }

    public function down()
    {
        $this->forge->dropTable('report_files');
    }
}
