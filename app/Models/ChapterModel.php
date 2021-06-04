<?php namespace App\Models;


use CodeIgniter\Model;

class ChapterModel extends Model
{
	protected $table = 'chapters';
	protected $allowedFields = ['id', 'revelation_place', 'bismillah_pre', 'name_complex', 'name_arabic', 'verses_count', 'translated_name'];
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';
	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;
}