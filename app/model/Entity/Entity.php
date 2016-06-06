<?php

	namespace InteveApp\Model\Entity;

	use LeanMapper;


	abstract class BaseEntity extends LeanMapper\Entity
	{
		use \Inlm\Model\TEntity;
		use \Inlm\Model\TQueryableEntity;
	}
