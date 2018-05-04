<?php

namespace TomasKarlik\Conventions\DI;

use Nette\DI\CompilerExtension;
use TomasKarlik\Conventions\Conventions;


final class Extension extends CompilerExtension
{

	/**
	 * {@inheritdoc}
	 */
	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();
		$tables = $this->getConfig();

		$builder->addDefinition($this->prefix('structure'))
			->setClass(Conventions::class, [$tables]);
	}

}
