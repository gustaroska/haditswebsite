<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IndexAyat extends Migration
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
			'id_master' => [
				'type' => 'INT',
				'constraint' => 3,
			],
			'level' => [
				'type' => 'INT',
				'constraint' => 3,
			],
			'index' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'ayat' => [
				'type' => 'TEXT',
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
		$this->forge->createTable('index_ayat');
	}
	
	//--------------------------------------------------------------------
	
	public function down()
	{
		$this->forge->dropTable('index_ayat');
	}
}
