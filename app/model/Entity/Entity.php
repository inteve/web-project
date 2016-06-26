<?php

	namespace InteveApp\Model\Entity;

	use LeanMapper;


	abstract class Entity extends LeanMapper\Entity
	{
		use \Inlm\Model\TEntity;
		use \Inlm\Model\TQueryableEntity;
	}
