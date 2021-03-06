<?php

/**
 * Base class that represents a row from the 'multipartinbox' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Jun  6 23:20:50 2010
 *
 * @package    lib.model.sms.om
 */
abstract class BaseMultipartinbox extends BaseObject  implements Persistent {


  const PEER = 'MultipartinboxPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        MultipartinboxPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the number field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $number;

	/**
	 * The value for the smsdate field.
	 * Note: this column has a database default value of: NULL
	 * @var        string
	 */
	protected $smsdate;

	/**
	 * The value for the insertdate field.
	 * Note: this column has a database default value of: (expression) CURRENT_TIMESTAMP
	 * @var        string
	 */
	protected $insertdate;

	/**
	 * The value for the text field.
	 * @var        string
	 */
	protected $text;

	/**
	 * The value for the phone field.
	 * @var        int
	 */
	protected $phone;

	/**
	 * The value for the processed field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $processed;

	/**
	 * The value for the refnum field.
	 * @var        int
	 */
	protected $refnum;

	/**
	 * The value for the maxnum field.
	 * @var        int
	 */
	protected $maxnum;

	/**
	 * The value for the curnum field.
	 * @var        int
	 */
	protected $curnum;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseMultipartinbox object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->number = '';
		$this->smsdate = NULL;
		$this->processed = 0;
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [number] column value.
	 * 
	 * @return     string
	 */
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * Get the [optionally formatted] temporal [smsdate] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or MssqlDateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSmsdate($format = 'Y-m-d H:i:s')
	{
		if ($this->smsdate === null) {
			return null;
		}


		if ($this->smsdate === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new MssqlDateTime($this->smsdate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to MssqlDateTime: " . var_export($this->smsdate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a MssqlDateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [insertdate] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or MssqlDateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getInsertdate($format = 'Y-m-d H:i:s')
	{
		if ($this->insertdate === null) {
			return null;
		}


		if ($this->insertdate === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new MssqlDateTime($this->insertdate);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to MssqlDateTime: " . var_export($this->insertdate, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a MssqlDateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [text] column value.
	 * 
	 * @return     string
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * Get the [phone] column value.
	 * 
	 * @return     int
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * Get the [processed] column value.
	 * 
	 * @return     int
	 */
	public function getProcessed()
	{
		return $this->processed;
	}

	/**
	 * Get the [refnum] column value.
	 * 
	 * @return     int
	 */
	public function getRefnum()
	{
		return $this->refnum;
	}

	/**
	 * Get the [maxnum] column value.
	 * 
	 * @return     int
	 */
	public function getMaxnum()
	{
		return $this->maxnum;
	}

	/**
	 * Get the [curnum] column value.
	 * 
	 * @return     int
	 */
	public function getCurnum()
	{
		return $this->curnum;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = MultipartinboxPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [number] column.
	 * 
	 * @param      string $v new value
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->number !== $v || $v === '') {
			$this->number = $v;
			$this->modifiedColumns[] = MultipartinboxPeer::NUMBER;
		}

		return $this;
	} // setNumber()

	/**
	 * Sets the value of [smsdate] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setSmsdate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new MssqlDateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new MssqlDateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->smsdate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->smsdate !== null && $tmpDt = new MssqlDateTime($this->smsdate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					|| ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
					)
			{
				$this->smsdate = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = MultipartinboxPeer::SMSDATE;
			}
		} // if either are not null

		return $this;
	} // setSmsdate()

	/**
	 * Sets the value of [insertdate] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setInsertdate($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new MssqlDateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new MssqlDateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->insertdate !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->insertdate !== null && $tmpDt = new MssqlDateTime($this->insertdate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->insertdate = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = MultipartinboxPeer::INSERTDATE;
			}
		} // if either are not null

		return $this;
	} // setInsertdate()

	/**
	 * Set the value of [text] column.
	 * 
	 * @param      string $v new value
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setText($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->text !== $v) {
			$this->text = $v;
			$this->modifiedColumns[] = MultipartinboxPeer::TEXT;
		}

		return $this;
	} // setText()

	/**
	 * Set the value of [phone] column.
	 * 
	 * @param      int $v new value
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setPhone($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->phone !== $v) {
			$this->phone = $v;
			$this->modifiedColumns[] = MultipartinboxPeer::PHONE;
		}

		return $this;
	} // setPhone()

	/**
	 * Set the value of [processed] column.
	 * 
	 * @param      int $v new value
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setProcessed($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->processed !== $v || $v === 0) {
			$this->processed = $v;
			$this->modifiedColumns[] = MultipartinboxPeer::PROCESSED;
		}

		return $this;
	} // setProcessed()

	/**
	 * Set the value of [refnum] column.
	 * 
	 * @param      int $v new value
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setRefnum($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->refnum !== $v) {
			$this->refnum = $v;
			$this->modifiedColumns[] = MultipartinboxPeer::REFNUM;
		}

		return $this;
	} // setRefnum()

	/**
	 * Set the value of [maxnum] column.
	 * 
	 * @param      int $v new value
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setMaxnum($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->maxnum !== $v) {
			$this->maxnum = $v;
			$this->modifiedColumns[] = MultipartinboxPeer::MAXNUM;
		}

		return $this;
	} // setMaxnum()

	/**
	 * Set the value of [curnum] column.
	 * 
	 * @param      int $v new value
	 * @return     Multipartinbox The current object (for fluent API support)
	 */
	public function setCurnum($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->curnum !== $v) {
			$this->curnum = $v;
			$this->modifiedColumns[] = MultipartinboxPeer::CURNUM;
		}

		return $this;
	} // setCurnum()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array(MultipartinboxPeer::NUMBER,MultipartinboxPeer::SMSDATE,MultipartinboxPeer::PROCESSED))) {
				return false;
			}

			if ($this->number !== '') {
				return false;
			}

			if ($this->smsdate !== NULL) {
				return false;
			}

			if ($this->processed !== 0) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->number = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->smsdate = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->insertdate = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->text = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->phone = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->processed = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->refnum = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->maxnum = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->curnum = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 10; // 10 = MultipartinboxPeer::NUM_COLUMNS - MultipartinboxPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Multipartinbox object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MultipartinboxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = MultipartinboxPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseMultipartinbox:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MultipartinboxPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			MultipartinboxPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseMultipartinbox:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseMultipartinbox:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MultipartinboxPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseMultipartinbox:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			MultipartinboxPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = MultipartinboxPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = MultipartinboxPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += MultipartinboxPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = MultipartinboxPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MultipartinboxPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getNumber();
				break;
			case 2:
				return $this->getSmsdate();
				break;
			case 3:
				return $this->getInsertdate();
				break;
			case 4:
				return $this->getText();
				break;
			case 5:
				return $this->getPhone();
				break;
			case 6:
				return $this->getProcessed();
				break;
			case 7:
				return $this->getRefnum();
				break;
			case 8:
				return $this->getMaxnum();
				break;
			case 9:
				return $this->getCurnum();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = MultipartinboxPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getNumber(),
			$keys[2] => $this->getSmsdate(),
			$keys[3] => $this->getInsertdate(),
			$keys[4] => $this->getText(),
			$keys[5] => $this->getPhone(),
			$keys[6] => $this->getProcessed(),
			$keys[7] => $this->getRefnum(),
			$keys[8] => $this->getMaxnum(),
			$keys[9] => $this->getCurnum(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MultipartinboxPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setNumber($value);
				break;
			case 2:
				$this->setSmsdate($value);
				break;
			case 3:
				$this->setInsertdate($value);
				break;
			case 4:
				$this->setText($value);
				break;
			case 5:
				$this->setPhone($value);
				break;
			case 6:
				$this->setProcessed($value);
				break;
			case 7:
				$this->setRefnum($value);
				break;
			case 8:
				$this->setMaxnum($value);
				break;
			case 9:
				$this->setCurnum($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MultipartinboxPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setNumber($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSmsdate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setInsertdate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setText($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPhone($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setProcessed($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRefnum($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMaxnum($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCurnum($arr[$keys[9]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(MultipartinboxPeer::DATABASE_NAME);

		if ($this->isColumnModified(MultipartinboxPeer::ID)) $criteria->add(MultipartinboxPeer::ID, $this->id);
		if ($this->isColumnModified(MultipartinboxPeer::NUMBER)) $criteria->add(MultipartinboxPeer::NUMBER, $this->number);
		if ($this->isColumnModified(MultipartinboxPeer::SMSDATE)) $criteria->add(MultipartinboxPeer::SMSDATE, $this->smsdate);
		if ($this->isColumnModified(MultipartinboxPeer::INSERTDATE)) $criteria->add(MultipartinboxPeer::INSERTDATE, $this->insertdate);
		if ($this->isColumnModified(MultipartinboxPeer::TEXT)) $criteria->add(MultipartinboxPeer::TEXT, $this->text);
		if ($this->isColumnModified(MultipartinboxPeer::PHONE)) $criteria->add(MultipartinboxPeer::PHONE, $this->phone);
		if ($this->isColumnModified(MultipartinboxPeer::PROCESSED)) $criteria->add(MultipartinboxPeer::PROCESSED, $this->processed);
		if ($this->isColumnModified(MultipartinboxPeer::REFNUM)) $criteria->add(MultipartinboxPeer::REFNUM, $this->refnum);
		if ($this->isColumnModified(MultipartinboxPeer::MAXNUM)) $criteria->add(MultipartinboxPeer::MAXNUM, $this->maxnum);
		if ($this->isColumnModified(MultipartinboxPeer::CURNUM)) $criteria->add(MultipartinboxPeer::CURNUM, $this->curnum);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MultipartinboxPeer::DATABASE_NAME);

		$criteria->add(MultipartinboxPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Multipartinbox (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setNumber($this->number);

		$copyObj->setSmsdate($this->smsdate);

		$copyObj->setInsertdate($this->insertdate);

		$copyObj->setText($this->text);

		$copyObj->setPhone($this->phone);

		$copyObj->setProcessed($this->processed);

		$copyObj->setRefnum($this->refnum);

		$copyObj->setMaxnum($this->maxnum);

		$copyObj->setCurnum($this->curnum);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Multipartinbox Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     MultipartinboxPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new MultipartinboxPeer();
		}
		return self::$peer;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseMultipartinbox:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseMultipartinbox::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseMultipartinbox
