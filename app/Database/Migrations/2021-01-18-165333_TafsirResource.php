<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TafsirResource extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 3,
				'auto_increment' => true
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'author_name' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'created_at' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'updated_at' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'deleted_at' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tafsir_resource');
	}
	
	//--------------------------------------------------------------------
	
	public function down()
	{
		$this->forge->dropTable('tafsir_resource');
	}
}
