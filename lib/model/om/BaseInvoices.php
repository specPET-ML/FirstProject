<?php

/**
 * Base class that represents a row from the 'invoices' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sat Nov 21 03:15:55 2015
 *
 * @package    lib.model.om
 */
abstract class BaseInvoices extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        InvoicesPeer
	 */
	protected static $peer;

	/**
	 * The value for the invoice_id field.
	 * @var        int
	 */
	protected $invoice_id;

	/**
	 * The value for the company_id field.
	 * @var        int
	 */
	protected $company_id;

	/**
	 * The value for the issued_date field.
	 * @var        string
	 */
	protected $issued_date;

	/**
	 * The value for the service_name field.
	 * @var        string
	 */
	protected $service_name;

	/**
	 * The value for the sold_date field.
	 * @var        string
	 */
	protected $sold_date;

	/**
	 * The value for the customer_id field.
	 * @var        int
	 */
	protected $customer_id;

	/**
	 * The value for the price_netto field.
	 * @var        string
	 */
	protected $price_netto;

	/**
	 * The value for the price_brutto field.
	 * @var        string
	 */
	protected $price_brutto;

	/**
	 * The value for the value_tax field.
	 * @var        string
	 */
	protected $value_tax;

	/**
	 * The value for the tax field.
	 * @var        string
	 */
	protected $tax;

	/**
	 * @var        Companies
	 */
	protected $aCompanies;

	/**
	 * @var        Customers
	 */
	protected $aCustomers;

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

	// symfony behavior
	
	const PEER = 'InvoicesPeer';

	/**
	 * Get the [invoice_id] column value.
	 * 
	 * @return     int
	 */
	public function getInvoiceId()
	{
		return $this->invoice_id;
	}

	/**
	 * Get the [company_id] column value.
	 * 
	 * @return     int
	 */
	public function getCompanyId()
	{
		return $this->company_id;
	}

	/**
	 * Get the [optionally formatted] temporal [issued_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getIssuedDate($format = 'Y-m-d')
	{
		if ($this->issued_date === null) {
			return null;
		}


		if ($this->issued_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->issued_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->issued_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [service_name] column value.
	 * 
	 * @return     string
	 */
	public function getServiceName()
	{
		return $this->service_name;
	}

	/**
	 * Get the [optionally formatted] temporal [sold_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getSoldDate($format = 'Y-m-d')
	{
		if ($this->sold_date === null) {
			return null;
		}


		if ($this->sold_date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->sold_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->sold_date, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [customer_id] column value.
	 * 
	 * @return     int
	 */
	public function getCustomerId()
	{
		return $this->customer_id;
	}

	/**
	 * Get the [price_netto] column value.
	 * 
	 * @return     string
	 */
	public function getPriceNetto()
	{
		return $this->price_netto;
	}

	/**
	 * Get the [price_brutto] column value.
	 * 
	 * @return     string
	 */
	public function getPriceBrutto()
	{
		return $this->price_brutto;
	}

	/**
	 * Get the [value_tax] column value.
	 * 
	 * @return     string
	 */
	public function getValueTax()
	{
		return $this->value_tax;
	}

	/**
	 * Get the [tax] column value.
	 * 
	 * @return     string
	 */
	public function getTax()
	{
		return $this->tax;
	}

	/**
	 * Set the value of [invoice_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setInvoiceId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->invoice_id !== $v) {
			$this->invoice_id = $v;
			$this->modifiedColumns[] = InvoicesPeer::INVOICE_ID;
		}

		return $this;
	} // setInvoiceId()

	/**
	 * Set the value of [company_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setCompanyId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->company_id !== $v) {
			$this->company_id = $v;
			$this->modifiedColumns[] = InvoicesPeer::COMPANY_ID;
		}

		if ($this->aCompanies !== null && $this->aCompanies->getCompanyId() !== $v) {
			$this->aCompanies = null;
		}

		return $this;
	} // setCompanyId()

	/**
	 * Sets the value of [issued_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setIssuedDate($v)
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
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->issued_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->issued_date !== null && $tmpDt = new DateTime($this->issued_date)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->issued_date = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = InvoicesPeer::ISSUED_DATE;
			}
		} // if either are not null

		return $this;
	} // setIssuedDate()

	/**
	 * Set the value of [service_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setServiceName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_name !== $v) {
			$this->service_name = $v;
			$this->modifiedColumns[] = InvoicesPeer::SERVICE_NAME;
		}

		return $this;
	} // setServiceName()

	/**
	 * Sets the value of [sold_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setSoldDate($v)
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
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->sold_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->sold_date !== null && $tmpDt = new DateTime($this->sold_date)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->sold_date = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = InvoicesPeer::SOLD_DATE;
			}
		} // if either are not null

		return $this;
	} // setSoldDate()

	/**
	 * Set the value of [customer_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setCustomerId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->customer_id !== $v) {
			$this->customer_id = $v;
			$this->modifiedColumns[] = InvoicesPeer::CUSTOMER_ID;
		}

		if ($this->aCustomers !== null && $this->aCustomers->getCustomerId() !== $v) {
			$this->aCustomers = null;
		}

		return $this;
	} // setCustomerId()

	/**
	 * Set the value of [price_netto] column.
	 * 
	 * @param      string $v new value
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setPriceNetto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->price_netto !== $v) {
			$this->price_netto = $v;
			$this->modifiedColumns[] = InvoicesPeer::PRICE_NETTO;
		}

		return $this;
	} // setPriceNetto()

	/**
	 * Set the value of [price_brutto] column.
	 * 
	 * @param      string $v new value
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setPriceBrutto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->price_brutto !== $v) {
			$this->price_brutto = $v;
			$this->modifiedColumns[] = InvoicesPeer::PRICE_BRUTTO;
		}

		return $this;
	} // setPriceBrutto()

	/**
	 * Set the value of [value_tax] column.
	 * 
	 * @param      string $v new value
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setValueTax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->value_tax !== $v) {
			$this->value_tax = $v;
			$this->modifiedColumns[] = InvoicesPeer::VALUE_TAX;
		}

		return $this;
	} // setValueTax()

	/**
	 * Set the value of [tax] column.
	 * 
	 * @param      string $v new value
	 * @return     Invoices The current object (for fluent API support)
	 */
	public function setTax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tax !== $v) {
			$this->tax = $v;
			$this->modifiedColumns[] = InvoicesPeer::TAX;
		}

		return $this;
	} // setTax()

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

			$this->invoice_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->company_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->issued_date = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->service_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->sold_date = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->customer_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->price_netto = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->price_brutto = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->value_tax = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->tax = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 10; // 10 = InvoicesPeer::NUM_COLUMNS - InvoicesPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Invoices object", $e);
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

		if ($this->aCompanies !== null && $this->company_id !== $this->aCompanies->getCompanyId()) {
			$this->aCompanies = null;
		}
		if ($this->aCustomers !== null && $this->customer_id !== $this->aCustomers->getCustomerId()) {
			$this->aCustomers = null;
		}
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
			$con = Propel::getConnection(InvoicesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = InvoicesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aCompanies = null;
			$this->aCustomers = null;
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
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InvoicesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseInvoices:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			
			    return;
			  }
			}

			if ($ret) {
				InvoicesPeer::doDelete($this, $con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseInvoices:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$this->setDeleted(true);
				$con->commit();
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
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
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InvoicesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseInvoices:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			    $con->commit();
			
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseInvoices:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				InvoicesPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCompanies !== null) {
				if ($this->aCompanies->isModified() || $this->aCompanies->isNew()) {
					$affectedRows += $this->aCompanies->save($con);
				}
				$this->setCompanies($this->aCompanies);
			}

			if ($this->aCustomers !== null) {
				if ($this->aCustomers->isModified() || $this->aCustomers->isNew()) {
					$affectedRows += $this->aCustomers->save($con);
				}
				$this->setCustomers($this->aCustomers);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = InvoicesPeer::INVOICE_ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = InvoicesPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setInvoiceId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += InvoicesPeer::doUpdate($this, $con);
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aCompanies !== null) {
				if (!$this->aCompanies->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCompanies->getValidationFailures());
				}
			}

			if ($this->aCustomers !== null) {
				if (!$this->aCustomers->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCustomers->getValidationFailures());
				}
			}


			if (($retval = InvoicesPeer::doValidate($this, $columns)) !== true) {
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
		$pos = InvoicesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getInvoiceId();
				break;
			case 1:
				return $this->getCompanyId();
				break;
			case 2:
				return $this->getIssuedDate();
				break;
			case 3:
				return $this->getServiceName();
				break;
			case 4:
				return $this->getSoldDate();
				break;
			case 5:
				return $this->getCustomerId();
				break;
			case 6:
				return $this->getPriceNetto();
				break;
			case 7:
				return $this->getPriceBrutto();
				break;
			case 8:
				return $this->getValueTax();
				break;
			case 9:
				return $this->getTax();
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
		$keys = InvoicesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getInvoiceId(),
			$keys[1] => $this->getCompanyId(),
			$keys[2] => $this->getIssuedDate(),
			$keys[3] => $this->getServiceName(),
			$keys[4] => $this->getSoldDate(),
			$keys[5] => $this->getCustomerId(),
			$keys[6] => $this->getPriceNetto(),
			$keys[7] => $this->getPriceBrutto(),
			$keys[8] => $this->getValueTax(),
			$keys[9] => $this->getTax(),
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
		$pos = InvoicesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setInvoiceId($value);
				break;
			case 1:
				$this->setCompanyId($value);
				break;
			case 2:
				$this->setIssuedDate($value);
				break;
			case 3:
				$this->setServiceName($value);
				break;
			case 4:
				$this->setSoldDate($value);
				break;
			case 5:
				$this->setCustomerId($value);
				break;
			case 6:
				$this->setPriceNetto($value);
				break;
			case 7:
				$this->setPriceBrutto($value);
				break;
			case 8:
				$this->setValueTax($value);
				break;
			case 9:
				$this->setTax($value);
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
		$keys = InvoicesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setInvoiceId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCompanyId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setIssuedDate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setServiceName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSoldDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCustomerId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPriceNetto($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPriceBrutto($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setValueTax($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTax($arr[$keys[9]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(InvoicesPeer::DATABASE_NAME);

		if ($this->isColumnModified(InvoicesPeer::INVOICE_ID)) $criteria->add(InvoicesPeer::INVOICE_ID, $this->invoice_id);
		if ($this->isColumnModified(InvoicesPeer::COMPANY_ID)) $criteria->add(InvoicesPeer::COMPANY_ID, $this->company_id);
		if ($this->isColumnModified(InvoicesPeer::ISSUED_DATE)) $criteria->add(InvoicesPeer::ISSUED_DATE, $this->issued_date);
		if ($this->isColumnModified(InvoicesPeer::SERVICE_NAME)) $criteria->add(InvoicesPeer::SERVICE_NAME, $this->service_name);
		if ($this->isColumnModified(InvoicesPeer::SOLD_DATE)) $criteria->add(InvoicesPeer::SOLD_DATE, $this->sold_date);
		if ($this->isColumnModified(InvoicesPeer::CUSTOMER_ID)) $criteria->add(InvoicesPeer::CUSTOMER_ID, $this->customer_id);
		if ($this->isColumnModified(InvoicesPeer::PRICE_NETTO)) $criteria->add(InvoicesPeer::PRICE_NETTO, $this->price_netto);
		if ($this->isColumnModified(InvoicesPeer::PRICE_BRUTTO)) $criteria->add(InvoicesPeer::PRICE_BRUTTO, $this->price_brutto);
		if ($this->isColumnModified(InvoicesPeer::VALUE_TAX)) $criteria->add(InvoicesPeer::VALUE_TAX, $this->value_tax);
		if ($this->isColumnModified(InvoicesPeer::TAX)) $criteria->add(InvoicesPeer::TAX, $this->tax);

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
		$criteria = new Criteria(InvoicesPeer::DATABASE_NAME);

		$criteria->add(InvoicesPeer::INVOICE_ID, $this->invoice_id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getInvoiceId();
	}

	/**
	 * Generic method to set the primary key (invoice_id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setInvoiceId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Invoices (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCompanyId($this->company_id);

		$copyObj->setIssuedDate($this->issued_date);

		$copyObj->setServiceName($this->service_name);

		$copyObj->setSoldDate($this->sold_date);

		$copyObj->setCustomerId($this->customer_id);

		$copyObj->setPriceNetto($this->price_netto);

		$copyObj->setPriceBrutto($this->price_brutto);

		$copyObj->setValueTax($this->value_tax);

		$copyObj->setTax($this->tax);


		$copyObj->setNew(true);

		$copyObj->setInvoiceId(NULL); // this is a auto-increment column, so set to default value

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
	 * @return     Invoices Clone of current object.
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
	 * @return     InvoicesPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new InvoicesPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Companies object.
	 *
	 * @param      Companies $v
	 * @return     Invoices The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCompanies(Companies $v = null)
	{
		if ($v === null) {
			$this->setCompanyId(NULL);
		} else {
			$this->setCompanyId($v->getCompanyId());
		}

		$this->aCompanies = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Companies object, it will not be re-added.
		if ($v !== null) {
			$v->addInvoices($this);
		}

		return $this;
	}


	/**
	 * Get the associated Companies object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Companies The associated Companies object.
	 * @throws     PropelException
	 */
	public function getCompanies(PropelPDO $con = null)
	{
		if ($this->aCompanies === null && ($this->company_id !== null)) {
			$this->aCompanies = CompaniesPeer::retrieveByPk($this->company_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCompanies->addInvoicess($this);
			 */
		}
		return $this->aCompanies;
	}

	/**
	 * Declares an association between this object and a Customers object.
	 *
	 * @param      Customers $v
	 * @return     Invoices The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCustomers(Customers $v = null)
	{
		if ($v === null) {
			$this->setCustomerId(NULL);
		} else {
			$this->setCustomerId($v->getCustomerId());
		}

		$this->aCustomers = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Customers object, it will not be re-added.
		if ($v !== null) {
			$v->addInvoices($this);
		}

		return $this;
	}


	/**
	 * Get the associated Customers object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Customers The associated Customers object.
	 * @throws     PropelException
	 */
	public function getCustomers(PropelPDO $con = null)
	{
		if ($this->aCustomers === null && ($this->customer_id !== null)) {
			$this->aCustomers = CustomersPeer::retrieveByPk($this->customer_id);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCustomers->addInvoicess($this);
			 */
		}
		return $this->aCustomers;
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

			$this->aCompanies = null;
			$this->aCustomers = null;
	}

	// symfony_behaviors behavior
	
	/**
	 * Calls methods defined via {@link sfMixer}.
	 */
	public function __call($method, $arguments)
	{
	  if (!$callable = sfMixer::getCallable('BaseInvoices:'.$method))
	  {
	    throw new sfException(sprintf('Call to undefined method BaseInvoices::%s', $method));
	  }
	
	  array_unshift($arguments, $this);
	
	  return call_user_func_array($callable, $arguments);
	}

} // BaseInvoices
