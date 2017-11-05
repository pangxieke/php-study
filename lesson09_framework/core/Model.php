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

	//查询结果ID
    private $queryID = null;

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
	}

    /**
     * 数据库初始化，设置字符集
     */
    public function init()
    {
        //连接数据库
        $this->link = new \mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->link->connect_errno) {
            echo "Failed to connect to MySQL: (" . $this->link->connect_errno . ") " . $this->link->connect_error;
            exit;
        }
        //设置字符集
        if (! $this->link->set_charset($this->charset)) {
            printf("Error loading character set utf8: %s\n", $this->link->error);
        }
    }

    /**
     * 查询sql获取结果数组
     * @param string $query 查询语句
     * @return array
     */
    public function query($query)
    {
        $this->queryID && $this->free();

        $this->queryID = $this->link->query($query);
        if($this->queryID === false){
            printf("Error: %s\n",$this->link->error);
            exit;
        }

        $this->numRows = $this->queryID->num_rows;
        $this->numCols = $this->queryID->field_count;
        return $this->getAll();
    }

    /**
     * 获得所有的查询数据
     * @return array
     */
    private function getAll()
    {
        //返回数据集
        $result = array();
        if($this->numRows > 0) {
            for($i=0; $i<$this->numRows; $i++ ){
                $result[$i] = $this->queryID->fetch_assoc();
            }
            //指针初始化
            $this->queryID->data_seek(0);
        }
        return $result;
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

	//执行 增删改 类型 的SQL，返回受影响行数
	//insert update delete
	public function execute($sql){

	}


	public function find(){

	}



    /**
     * 释放查询结果
     */
    public function free()
    {
        $this->queryID = null;
    }

    /**
     * 关闭数据库
     * @return type
     */
    public function close()
    {
        $this->link && $this->link->close();
        $this->link = null;
    }

    public function __destruct()
    {
        $this->close();
    }
}