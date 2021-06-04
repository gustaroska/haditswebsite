<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tathbiq extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'ayat_id' => [
				'type' => 'VARCHAR',
				'constraint' => 10,
			],
			'user_id' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
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
		$this->forge->addKey('ayat_id', true);
		$this->forge->addForeignKey('user_id', 'users', 'id');
		$this->forge->createTable('tathbiq');
	}
	
	//--------------------------------------------------------------------
	
	public function down()
	{
		$this->forge->dropTable('tathbiq');
	}
}
