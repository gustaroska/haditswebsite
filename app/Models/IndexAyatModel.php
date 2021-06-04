<?php namespace App\Models;


use CodeIgniter\Model;

class IndexAyatModel extends Model
{
	protected $table = 'index_ayat';
	protected $allowedFields = ['id_master', 'level', 'index', 'ayat'];
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';
	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;
}