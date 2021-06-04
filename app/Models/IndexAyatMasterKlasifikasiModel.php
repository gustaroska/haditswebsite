<?php namespace App\Models;


use CodeIgniter\Model;

class IndexAyatMasterKlasifikasiModel extends Model
{
	protected $table = 'index_ayat_master_klasifikasi';
	protected $allowedFields = ['master'];
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';
	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;
}