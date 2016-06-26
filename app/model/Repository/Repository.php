<?php

	namespace InteveApp\Model\Repository;

	use LeanMapper;


	abstract class Repository extends LeanMapper\Repository
	{
		use \Inlm\Model\TRepository;
		use \Inlm\Model\TQueryableRepository;
	}
