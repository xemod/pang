<?php
/**
* @descr $_performant to save (insert,update) data to table
* @auther Boon (nukboon@gmail.com)
* @remake require activeRecord & adodb Database abstrac layer!
* @credit http://adodb.sourceforge.net
*
* !! important
* Must Add Line 576
* Add: if(!isset($this->$name)) continue;
* for ignore set null column in update case
*/

/*Load Active record class*/
require_once( ltxt::getCfg( 'cfg.absplugins' ).DS.'adodb'.DS.'adodb-active-record.inc.php' );

class dbActiveRecord
{
	var $_db;
	var $_arec;
	var $_tbName;
	var $_Pkeys;

	/*construct PHP4*/
	function dbActiveRecord( &$db )
	{
		dbActiveRecord::__construct( $db );
	}

	/*construct PHP5*/
	function __construct( &$db )
	{
		ADOdb_Active_Record::SetDatabaseAdapter( $db );
	}

	function &activeRecord()
	{
		return $this->_arec;
	}
	/**
	* @descr set instant ADODB
	* @param Strint table name to set it to instant name
	**/
	function setInstant( $tableName )
	{
		$this->_tbName = $tableName;
		$this->_arec = new ADOdb_Active_Record( $tableName );
		$this->_db = $this->_arec->DB();
		$this->_Pkeys = $this->_arec->GetPrimaryKeys( $this->_db, $tableName );
	}

	/**
	* @descr $__
	**/

	function setActiveTable( $tableName )
	{
		$this->setInstant( $tableName );
	}

	/**
	* @descr $__
	**/

	function getActiveTable()
	{
		return $this->_tbName;
	}

	function insert_id()
	{
		$k = $this->_Pkeys[0];
		return $this->_arec->$k;
	}

	/**
	* @descr $__
	**/

	function setActiveDatas( $datas=NULL )
	{
		$datas = ($datas) ? $datas : (($_POST) ? $_POST : $_GET);

		if(is_object($datas)){
			jimport('packages.jrc3.utilities.array');
			$datas = JArrayHelper::fromObject($datas);
		}

		/*Switch to update if PKey exist*/
		if(in_array($this->_Pkeys[0],array_keys($datas))) {
			if(!$datas[$this->_Pkeys[0]]){
				unset($datas[$this->_Pkeys[0]]);
			}else{
				$this->_arec->_saved = true;
				unset($datas['create_by']);
				unset($datas['create_date']);
				unset($datas['CreateBy']);
				unset($datas['CreateDate']);
			}
		}

		$fields = $this->_arec->getAttributeNames();

		foreach( $fields as $f ) {
			if(in_array($f,array_keys($datas))){
				$this->_arec->$f = (get_magic_quotes_gpc() ? stripslashes($datas[$f]) : $datas[$f]);
			}else{
				unset($this->_arec->$f);
			}

			if($f == $this->_options['ordering'] && !$this->_arec->_saved){
				$rec = $this->_db->GetCol("SELECT MAX(".$this->_options['ordering'].") FROM ".$this->getActiveTable());
				$this->_arec->$f = $rec[0]+1;
			}

		}
	}


	/**
	* @descr $__
	* @return 1 if successfull, return NULL if field
	**/

	function Save($table,$datas,$options=array())
	{
		$options['ordering'] = $options['ordering'] ? $options['ordering'] : 'Ordering';
		$this->_options = $options;
		$this->setActiveTable( $table );
		$this->setActiveDatas( $datas );
		if ($this->_arec->_saved) {

			$ok = $this->_arec->Update();
		}else{
			$ok = $this->_arec->Insert();
		}
		return $ok;
	}

}

?>
