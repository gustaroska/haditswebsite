<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AyatHadits extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true
			],
			'user_id' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'title' => [
				'type' => 'TEXT',
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
		$this->forge->createTable('ayat_hadits');
	}
	
	//--------------------------------------------------------------------
	
	public function down()
	{
		$this->forge->dropTable('ayat_hadits');
	}
}
