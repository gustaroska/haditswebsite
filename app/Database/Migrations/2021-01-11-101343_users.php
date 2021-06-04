<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '200',
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '200',
			],
			'photo' => [
				'type' => 'VARCHAR',
				'constraint' => '255',
			],
			'is_admin' => [
				'type' => 'ENUM',
				'constraint' => ['true', 'false'],
				'default' => 'false',
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => ['true', 'false'],
				'default' => 'false',
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
		$this->forge->createTable('users');
	}
	
	//--------------------------------------------------------------------
	
	public function down()
	{
		$this->forge->dropTable('users');
	}
}
