<?php

require_once(ROOT_PATH.'/classes/item.php');
require_once(ROOT_PATH.'/classes/category.php');


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

  private $item_sql = "select portfolio_items.id, portfolio_items.title, portfolio_items.url, 
            portfolio_items.category_id,portfolio_items.bild,portfolio_items.bild_2,portfolio_items.bild_3,
            portfolio_items.description,Categories.name as category_name
            from portfolio_items inner join Categories on portfolio_items.category_id =Categories.id";

  private $category_sql = "select * from Categories";

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
    $sql = $this->item_sql." where portfolio_items.id = :id";
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
    $data = array($item->title, $item->url, $item->description, $item->category_id, $item->bild, $item->id);
    $sth = $this->dbh->prepare("update portfolio_items set title = ?, url = ?, description = ?, category_id = ?, bild = ? where id = ?");
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
    $data = array($item->title, $item->url, $item->description, $item->category_id, $item->bild);
    $sth = $this->dbh->prepare("insert INTO portfolio_items (title, url, description, category_id, bild) VALUES (?, ?, ?, ?, ?)");
    if ($sth->execute($data)) 
    {
      return true;
    } 
    else 
    {
      return false;
    }
  }

 public function createCategory($category) 
  {
    $data = array($category->name);
    $sth = $this->dbh->prepare("insert INTO Categories (name) VALUES (?)");
    if ($sth->execute($data)) 
    {
      return true;
    } 
    else 
    {
      return false;
    }
  }

  public function getCategories() 
  {
    $sth = $this->dbh->query("select * FROM Categories");
    $sth->setFetchMode(PDO::FETCH_CLASS, 'category');

    $objects = array();

    while($obj = $sth->fetch()) 
    {
      $objects[] = $obj;
    }

    return $objects;
  }


  public function getCategory($id) 
  {
    $sql = $this->category_sql." where id = :id";
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->setFetchMode(PDO::FETCH_CLASS, 'category');
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

  public function updateCategory($category) 
  {
    $data = array($category->name, $category->id);
    $sth = $this->dbh->prepare("update Categories set name = ? where id = ?");
    if ($sth->execute($data)) 
    {
      return true;
    } 
    else 
    {
      return false;
    }
  }

  public function deleteCategory($id) 
  {
    $data = array($id);
    $sth = $this->dbh->prepare("delete FROM Categories WHERE id = ?");
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