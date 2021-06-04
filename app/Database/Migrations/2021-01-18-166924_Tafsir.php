<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tafsir extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 3,
				'unsigned' => true,
				'auto_increment' => true
			],
			'tafsir_resource_id' => [
				'type' => 'INT',
				'constraint' => 3,
			],
			'user_id' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'ayat_id' => [
				'type' => 'VARCHAR',
				'constraint' => 20,
			],
			'content' => [
				'type' => 'TEXT',
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
		$this->forge->addForeignKey('user_id', 'users', 'id');
		$this->forge->addForeignKey('tafsir_resource_id', 'tafsir_resource', 'id');
		$this->forge->createTable('tafsir');
	}
	
	//--------------------------------------------------------------------
	
	public function down()
	{
		$this->forge->dropTable('tafsir');
	}
}
