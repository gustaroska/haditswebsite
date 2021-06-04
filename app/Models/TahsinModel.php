<?php namespace App\Models;


use CodeIgniter\Model;

class TahsinModel extends Model
{
	protected $table = 'tahsin';
	protected $primaryKey = 'ayat_id';
	protected $useSoftDeletes = true;
	protected $allowedFields = ['content', 'user_id', 'ayat_id', 'link_youtube'];
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
		$builder->join("chapters", "chapters.id = SUBSTRING_INDEX($this->table.ayat_id,':',1)");
		return $builder->where('ayat_id', $a)->get()->getRow();
	}
	
	function getTahsin()
	{
		$this->builder = $this->builder();
		$this->builder->select("$this->table.ayat_id, $this->table.updated_at as updated, chapters.name_complex as chapter_name");
		$this->builder->select("users.name as user_name,link_youtube");
		$this->builder->join("users", "users.id = $this->table.user_id");
		$this->builder->join("chapters", "chapters.id = SUBSTRING_INDEX($this->table.ayat_id,':',1)");
		$this->builder->orderBy("$this->table.updated_at", "DESC");
		return $this->builder->get()->getResult();

	}
}