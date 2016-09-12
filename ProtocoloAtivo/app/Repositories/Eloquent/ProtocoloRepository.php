<?php namespace app\Repositories\Eloquent;
	use app\Protocolo;
	use app\Repositories\AbstractRepository;
	class ProtocoloRepository extends AbstractRepository{
		public function __construct(Protocolo $model){
			$this->model = $model;
		}
	}
?>