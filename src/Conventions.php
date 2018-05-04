<?php

namespace TomasKarlik\Conventions;

use LogicException;
use Nette\Database\Conventions\DiscoveredConventions;
use Nette\Database\IStructure;


final class Conventions extends DiscoveredConventions
{

	/**
	 * @var array
	 */
	private $tables;


	public function __construct(
		array $tables,
		IStructure $structure
	) {
		parent::__construct($structure);
		$this->tables = $tables;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getPrimary($table)
	{
		if (isset($this->tables[$table])) {
			if ( ! is_string($this->tables[$table])) {
				throw new LogicException(sprintf(
					'Key name of table "%s" must be string, "%s" given!',
					$table,
					gettype($this->tables[$table])
				));
			}
			return $this->tables[$table];
		}

		return parent::getPrimary($table);
	}

}