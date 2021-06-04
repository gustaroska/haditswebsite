<?php namespace App\Models;


use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'id';
	protected $allowedFields = ['id', 'name', 'photo', 'email', 'status', 'is_admin'];
	protected $useSoftDeletes = true;
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';
	
	function getUser($token): array
	{
		$builder = $this->builder();
		return $builder->where('id', $token)->get()->getResult();
	}
	function getUsers(): array
	{
		$builder = $this->builder();
		return $builder->get()->getResult();
	}
	
	function getUserActive($token): array
	{
		$builder = $this->builder();
		$builder->where('status', 'true');
		return $builder->where('id', $token)->get()->getResult();
	}
	
	function activeAccount($token): bool
	{
		$builder = $this->builder();
		$builder->select('token');
		$row = $builder->where('token', $token)->get()->getResult();
		if (count($row) > 0) {
			$data = array('status' => 'aktif', 'token' => '');
			$builder->update($data, array('token' => $token));
			return true;
		} else
			return false;
	}
	
	
	function set_action($user, $action): bool
	{
		$logModel = new LogModel();
		$builder = $this->builder();
		$row = $builder->where('id', $user)->get()->getRow();
		$value = "";
		if ($action == "is_admin")
			$value = $row->is_admin == "true" ? "false" : "true";
		if ($action == "status")
			$value = $row->status == "true" ? "false" : "true";
		$update = $builder->update(array($action => $value), array('id' => $user));
		if ($update) {
			$userData = $builder->where('id', session('id'))->get()->getRow();
			$logModel->insert(
				[
					'action' => "$userData->name mengubah $row->name $action ke $value",
					'created_at' => now('Asia/Jakarta'),
					'user_id' => session('id')
				]);
			return true;
		} else
			return false;
	}
	
	protected function _get_datatables_query($table, $column_order, $column_search, $order)
	{
		$this->builder = $this->db->table($table);
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
		$this->builder->from($table);
		return $this->builder->countAll();
	}
}