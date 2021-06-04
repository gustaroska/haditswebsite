<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IndexAyatMasterKlasifikasi extends Migration
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
			'master' => [
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
		$this->forge->createTable('index_ayat_master_klasifikasi');
	}
	
	//--------------------------------------------------------------------
	
	public function down()
	{
		$this->forge->dropTable('index_ayat_master_klasifikasi');
	}
}
