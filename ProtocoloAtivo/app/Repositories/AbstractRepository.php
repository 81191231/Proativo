<?php namespace app\Repositories;
	
	abstract class AbstractRepository implements Contracts\RepositoryInterface{

		protected $model;

		public function getAll(){
			return $this->model->all();
		}
		public function find($id){
			return $this->model->find($id);
		} 
		public function create(array $data){
			return $this->model->create($data);
		}
		public function update($id, array $data){
			return $this->model->find($id)->update($data);
		}
	}

?>