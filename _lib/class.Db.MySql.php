<?php


	/**
	*  Simplejobscript Copyright (©) 2019 Niteosoft s.r.o. (ltd)
	*
	*  @author     Niteosoft s.r.o. (ltd)
	*  @license    MIT
	*  @website    simplejobscript.com
	*
	*  There are no license limitations, modifications nor restrictions placed upon 
	*  and no rights have been transfered to all third-party software parts of this product. You are granted to use these libraries
	*  and sub-parts while following their individual license specifications and terms of service
	*
	*/

/* Create custom exception classes */
class ConnectException extends Exception {}
class QueryException extends Exception {}


class Db 
{
        var $link = null;

	function __construct($host, $username, $passwd, $dbname, $port)
	{
		$this->link = mysql_connect($host . ':' . $port, $username, $passwd);

		/* Throw an error if the connection fails */ 
		if(!$this->link)
		{
			if(ENVIRONMENT == 'dev')
			{
				throw new ConnectException(mysql_error(), mysql_errno());
			} 
			else
			{
				throw new Exception('Cannot connect');   
			}
		}

		if(!mysql_select_db($dbname,$this->link))
		{
			if(ENVIRONMENT == 'dev')
			{
				throw new ConnectException(mysql_error($this->link), mysql_errno($this->link));
			}
			else
			{
				throw new ConnectException('Cannot select db');
			}
		}
	}
	
	public function query($query)
	{
            $result = mysql_query($query,$this->link); 
            if(mysql_error($this->link)) {
                if(ENVIRONMENT == 'dev') {
									throw new QueryException(mysql_error($this->link), mysql_errno($this->link)); 
                } else {
                  throw new Exception('Database query error');
                }
            }
            return new DbRowSet($result);
	}
	
	public function QueryArray($query)
	{
		$result = mysql_query($query,$this->link);
		if(!$result) {
		  return false;
		} 
		$array_result = array();
		while ($line = mysql_fetch_assoc($result))
		{
			$array_result[] = $line;
		}
		unset($result, $line);
		return $array_result;
	}
	
	public function QueryRow($query)
	{
		$result = mysql_query($query,$this->link);
		$line = mysql_fetch_assoc($result);
		return $line;
	}

	// Runs a query and returns result as a single variable
	public function QueryItem($query)
	{
	    if(!$this->link) {
	       return false;
	    }
            $result = mysql_query($query,$this->link);
            if(!$result) {
                return false;
            }

            $line = mysql_fetch_row($result);
            if (!$line) {
                return false;
            }
            return $line[0];
        }

        public function Execute($query)
	{
            $result = mysql_query($query,$this->link); 
            if(mysql_error($this->link)) {
                return false;
            } else {
                return true;
            }
        }
	
	public function GetServerInfo()
	{
		return mysql_get_server_info();
	}
	
	public function ExecuteMultiple($query)
	{
		$result = parent::multi_query($query); 
		if(mysqli_error($this) && ENVIRONMENT == 'dev')
		{
			throw new QueryException(mysqli_connect_error(), mysqli_connect_errno()); 
			return false;
		}
		else
		{
			return true;
		}
	}
	
	public function real_escape_string($string)
	{
	   return mysqli_escape_string($string,$this->link);
	}
	
	public function __get($name)
	{
	   if(isset($this->$name)) {
                return $this->$name;
	   }

	   if(!$this->link) {
	       return null;
	   }

	   switch($name) {
	       case 'insert_id':       return mysql_insert_id($this->link);
	       case 'affected_rows':   return mysql_affected_rows($this->link);
	       case 'error':           return mysql_error($this->link);
	       case 'errno':           return mysql_errno($this->link);
	       case 'client_info':     return mysql_get_client_info($this->link);
	       default:                return null;
	   }
	}
}


class DbRowSet {

    var $result;

    function __construct($result) {
        $this->result = $result;
    }

    function fetch_assoc() {
        if($this->result) {
            return mysql_fetch_assoc($this->result);
        } else {
            return false;
        }
    }
}
?>
