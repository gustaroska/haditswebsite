<?php namespace App\Models;


use CodeIgniter\Model;

class LogModel extends Model
{
	protected $table = 'logs';
	protected $allowedFields = ['action', 'user_id'];
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	
	function makeLog($id, $action)
	{
		$this->builder = $this->db->table($this->table);
		$data = array(
			'user_id' => $id,
			'action' => $action
		);
		$this->builder->insert($data);
	}
	
	protected function _get_datatables_query($table, $column_order, $column_search, $order)
	{
		$this->builder = $this->db->table($table);
		$this->builder->select("$table.created_at as waktu, name, action");
		$this->builder->join("users", "users.id = $table.user_id");
		$i = 0;
		foreach ($column_search as $item) {
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->builder->groupStart();
					$this->builder->like($item, $_POST['search']['value']);
				} else {
					$this->builder->orLike($item, $_POST['search']['value']);
				}
				if (count($column_search) - 1 == $i)
					$this->builder->groupEnd();
			}
			$i++;
		}
		if (isset($_POST['order'])) {
			$this->builder->orderBy($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($order)) {
			$this->builder->orderBy(key($order), $order[key($order)]);
		}
		
	}
	
	public function get_datatables($table, $column_order, $column_search, $order, $data = '')
	{
		$this->_get_datatables_query($table, $column_order, $column_search, $order);
		if ($_POST['length'] != -1)
			$this->builder->limit($_POST['length'], $_POST['start']);
		if ($data) {
			$this->builder->where($data);
		}
		$query = $this->builder->get();
		
		
		return $query->getResult();
	}
	
	public function count_all($table, $data = '')
	{
		if ($data) {
			$this->builder->where($data);
		}
		$this->builder->join("users", "users.id = $table.user_id");
		$this->builder->from($table);
		return $this->builder->countAll();
	}
}