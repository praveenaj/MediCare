<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
        $us = Login::model()->findByAttributes(array('username'=>$this->username,'password'=>$this->password));
        if($us!=null){
            $users[$us->username]=$us->password;
        }

		if(!isset($users[$this->username])){
			$this->errorCode=self::ERROR_USERNAME_INVALID;
        }else if($users[$this->username]!==$this->password){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
        }else{
			$this->errorCode=self::ERROR_NONE;
            $this->setState('level',$us->level);
            if($us->level=="doctor"){
                $this->setState('userid',$us->doctorid);
            }elseif($us->level=="patient"){
                $this->setState('userid',$us->patientid);
            }
        }
		return !$this->errorCode;
	}
}