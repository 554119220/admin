<?php
/**
*查询用户购买的app
*/

class SbyUserAppGetRequest {

    private $isCompatible = 0;
    
	private $apiParas = array();
		
	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function getApiMethodName()
	{
		return "yhd.sby.user.app.get";
	}
	
	/**sby用户id*/
	private  $sbyUserId; 

	public function getSbyUserId(){
		return $this->sbyUserId;
	}

	public function setSbyUserId($sbyUserId){
		$this->sbyUserId = $sbyUserId;
		$this->apiParas["sbyUserId"] = $sbyUserId;
	}

	public function getIsCompatible(){
		return $this->isCompatible;
	}
}
