<?php

require_once(ROOT_PATH.'/item.php');

class Db 
{
	private $dbh = null;

	public function __construct() 
	{
		try 
		{
			$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);
		} 
		catch(PDOException $e) 
		{
			echo $e->getMessage();
		}
	}

  private $item_sql = "select * from portfolio_items";

  public function getItems() 
  {
    $sth = $this->dbh->query($this->item_sql);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'item');

    $objects = array();

    while($obj = $sth->fetch()) 
    {
      $objects[] = $obj;
    }

    
    return $objects;
  }

  public function getItem($id) 
  {
    $sql = $this->item_sql." where id = :id";
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'item');
    $sth->execute();

    $objects = array();

    while($obj = $sth->fetch()) 
    {
      $objects[] = $obj;
    }

    if (count($objects) > 0) 
    {
      return $objects[0];
    }
    else 
    {
      return null;
    }
  }

}



?>