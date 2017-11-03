<?php
/**
 * 模型类
 * @author pangxie
 */
class Model{

	//主机
	public $host;
	//用户名
	public $username;
	//密码
	public $password;
	//数据库名
	public $dbname;
	//字符集
	public $charset;

	//mysql连接资源
	public $link;
	//表名
	public $tableName;
	//表中的字段名
	public $fields = array();

	public $where = '';

	//构造方法
	public function __construct($tableName=""){

		$this->host = HOST;
		$this->username = USER;
		$this->password = PASS;
		$this->dbname = DBNAME;
		$this->charset = 'utf8';

		$this->tableName = $tableName;

		//初始化
		$this->init();

		//获到表结构
		if(!empty($tableName)){
			$this->getFields();
		}
	}

	//初始化
	public function init(){

	}

	//获到表字段信息，放入fields属性中
	private function getFields(){

	}


	/**
	 * 新增操作
	 * @param $arr array 关联数组,要保存的值
	 * @return int 成功返回自增id，失败返回false
	 */
	public function insert($arr){

	}


	public function delete($condition=array()){

	}


	public function select(){


	}


	public function update($arr){

	}

	public function where($options=''){

	}


	public function count($str='*'){

	}


	public function __call($method,$params){


	}

	//执行查询类型 的SQL，返回数组
	//select
	public function query($sql)
    {

    }

	//执行 增删改 类型 的SQL，返回受影响行数
	//insert update delete
	public function execute($sql){

	}


	public function find(){

	}

	public function __destruct(){

	}
}