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

  public function updateItem($item) 
  {
    $data = array($item->title, $item->url, $item->description, $item->category, $item->bild, $item->id);
    $sth = $this->dbh->prepare("update portfolio_items set title = ?, url = ?, description = ?, category = ?, bild = ? where id = ?");
    if ($sth->execute($data)) 
    {
      return true;
    } 
    else 
    {
      return false;
    }
  }

  public function deleteItem($id) 
  {
    $data = array($id);
    $sth = $this->dbh->prepare("delete FROM portfolio_items WHERE id = ?");
    if ($sth->execute($data)) 
    {
      return true;
    } 
    else 
    {
      return false;
    }
  }

  public function createItem($item) 
  {
    $data = array($item->title, $item->url, $item->description, $item->category, $item->bild);
    $sth = $this->dbh->prepare("insert INTO portfolio_items (title, url, description, category, bild) VALUES (?, ?, ?, ?, ?)");
    if ($sth->execute($data)) 
    {
      return true;
    } 
    else 
    {
      return false;
    }
  }

}



?>