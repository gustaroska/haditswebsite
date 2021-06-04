<?php namespace App\Models;


use CodeIgniter\Model;

class AyatHaditsModel extends Model
{
	protected $table = 'ayat_hadits';
	protected $useSoftDeletes = true;
	protected $allowedFields = ['content', 'user_id', 'title'];
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';
	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;
	
	function getData($a)
	{
		$builder = $this->builder();
		return $builder->where('id', $a)->get()->getRow();
	}
	
	function getAyatHadits($id = false)
	{
		$this->builder = $this->builder();
		$this->builder->select("$this->table.updated_at as updated, $this->table.id as id_ayat_hadits, name, title");
		$this->builder->join("users", "users.id =  $this->table.user_id");
		$this->builder->orderBy("$this->table.updated_at", "DESC");
		if ($id) {
			$this->select('content');
			$this->where("$this->table.id", $id);
			return $this->builder->get()->getRow();
		}
		return $this->builder->get()->getResult();
	}
}