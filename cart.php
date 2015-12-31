<?php
session_start(); 
class Cart{
	static protected $ins;//实例变量 单例做
	protected $item = array();//商品容器
	
	final protected function __construct(){
		//禁止外部调用
	}

	final protected function __clone(){
		//禁止克隆
	}

	static protected function GetIns(){
		if(!self::$ins instanceof self){
			self::$ins = new Cart();//slef::$ins = new self();
		}
		return self::$ins;
	}

	/**
	 * 为了能使商品跨页面保存 把对象放入session里
	 */
	public function Getcat(){
		if(!$_SESSION['cat'] || !($_SESSION['cat'] instanceof self)){
			$_SESSION['cat'] = self::GetIns();//把实例化好的对象放入 session当中 想要谁跨脚本 就将谁保存在session当中
		}
		return $_SESSION['cat'];
	}

	/**
	 * 入列时的检测 是否在$item当中存在
	 * @param [type] $goods_id [description]
	 */
	public function Initem($goods_id){
		if($this->Gettype() == 0){
			return false;
		}
		if(!(array_key_exists($goods_id, $this->item))){
			return false;
		}else{
			return $this->item[$goods_id]['num'];//返回商品的个数
		}
	}

	/**
	 * 添加商品
	 */
	public function Additem($goods_id,$name,$num,$price){
		if($this->Initem($goods_id) != false){
			$this->item[$goods_id]['num'] += $num;
			return;
		}
		$this->item[$goods_id] = array();//一个商品为一个数组
		$this->item[$goods_id]['num'] = $num;
		$this->item[$goods_id]['name'] = $name;
		$this->item[$goods_id]['price'] = $price;
	}

	/**
	 * 减少商品
	 */
	public function Reduceitem($goods_id,$num){
		if($this->Initem($goods_id) == false){
			return;
		}
		if($num > $this->Getnum($goods_id)){
			unset($this->item[$goods_id]);//如果删除的数量大于商品的数量 就接触这个商品
		}else{
			$this->item[$goods_id]['num'] -= $num;
		}
	}

	/**
	 * 去掉一个商品
	 */
	public function Delitem($goods_id){
		if($this->Initem[$goods_id]){
			unset($this->item[$goods_id]);
		}
	}

	/**
	 * 返回购买商品列表
	 */
	public function Itemlist(){
		return $this->item;
	}

	/**
	 * 一个有多少种商品
	 */
	public function Gettype(){
		return count($this->item);
	}

	/**
	 * 获得一个商品的总数
	 */
	public function Getnum($goods_id){
		return $this->item[$goods_id]['num'];
	}

	/**
	 * 查询购物车当中有多少个商品
	 */
	
	public function Getnumber(){
		$num = 0;
		if($this->Gettype() == 0){
			return 0;
		}
		foreach ($this->item as $key => $value) {
			$num +=$value['num'];
		}
		return $num;
	}

	/**
	 * 计算总价格
	 */
	public function GetPrice(){
		$price = 0;
		if($this->Gettype() == 0){
			return false;
		}
		foreach($this->item as $key=>$value){
			$price += $value['num'] * $value['price'];
		}
		return $price;
	}

	/**
	 * 清空购物车
	 */
	public function Emptyitem(){
		$this->item = array();
	}


}