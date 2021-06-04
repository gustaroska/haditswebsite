<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Chapters extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 3,
			],
			'revelation_place' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'bismillah_pre' => [
				'type' => 'ENUM',
				'constraint' => ['false', 'true'],
				'default' => 'false',
			],
			'name_complex' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'name_arabic' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'verses_count' => [
				'type' => 'INT',
				'constraint' => 5,
			],
			'translated_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'created_at' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'updated_at' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'deleted_at' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
		
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('chapters');
	}
	
	//--------------------------------------------------------------------
	
	public function down()
	{
		$this->forge->dropTable('chapters');
	}
}
