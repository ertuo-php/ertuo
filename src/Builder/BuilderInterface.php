<?php

namespace Ertuo\Builder;

use Ertuo\ExportInterface;

interface BuilderInterface
{
	function buildTree(ExportInterface $route) : string;
}
