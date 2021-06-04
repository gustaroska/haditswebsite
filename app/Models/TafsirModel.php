<?php namespace App\Models;


use CodeIgniter\Model;

class TafsirModel extends Model
{
	protected $table = 'tafsir';
	protected $primaryKey = 'id';
	protected $allowedFields = ['tafsir_resource_id', 'user_id', 'ayat_id', 'content'];
	protected $useSoftDeletes = true;
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';
	
	function getTafsir($id, $tafsir_resource_id = false): array
	{
		$builder = $this->builder();
		$this->builder->select("$this->table.updated_at as updated, $this->table.id as id_tafsir, $this->table.ayat_id, chapters.name_complex as chapter_name");
		$this->builder->select("users.name as user_name, tafsir_resource.name as tafsir_resource_name, tafsir_resource.name as name, tafsir_resource.id as tafsir_resource_id, $this->table.content");
		$this->builder->join("tafsir_resource", "tafsir_resource.id = $this->table.tafsir_resource_id");
		$this->builder->join("chapters", "chapters.id = SUBSTRING_INDEX($this->table.ayat_id,':',1)");
		$this->builder->join("users", "users.id = $this->table.user_id");
		
		if ($tafsir_resource_id) {
			$builder->where("ayat_id", $id);
			$builder->where("tafsir_resource_id", $tafsir_resource_id);
			return $builder->get()->getResult();
		} else {
			return $builder->where("$this->table.id", $id)->get()->getResult();
			
		}
	}
	
	function getTafsirs()
	{
		$this->builder = $this->builder();
		$this->builder->select("$this->table.updated_at as updated, $this->table.id as id_tafsir, $this->table.ayat_id, chapters.name_complex as chapter_name");
		$this->builder->select("users.name as user_name, tafsir_resource.name as tafsir_resource_name");
		$this->builder->join("users", "users.id = $this->table.user_id");
		$this->builder->join("chapters", "chapters.id = SUBSTRING_INDEX($this->table.ayat_id,':',1)");
		$this->builder->join("tafsir_resource", "tafsir_resource.id = $this->table.tafsir_resource_id");
		$this->builder->orderBy("$this->table.updated_at", "DESC");
		return $this->builder->get()->getResult();
	}
	
	function getTafsirResource($id)
	{
		$this->builder = $this->builder("tafsir_resource");
		return $this->builder->where('id', $id)->get()->getResult();
	}
	
	function getTafsirByResource($ayat_id, $tafsir_resource_id): array
	{
		$builder = $this->builder();
		return $builder->where('ayat_id', $ayat_id)
			->where('tafsir_resource_id', $tafsir_resource_id)
			->get()->getResult();
	}
	
	function getTafsirResources(): array
	{
		$this->builder = $this->builder("tafsir_resource");
		return $this->builder->get()->getResult();
	}
	
	
}