<?php

	namespace InteveApp\Model\Repository;

	use LeanMapper;


	abstract class BaseRepository extends LeanMapper\Repository
	{
		use \Inlm\Model\TRepository;
		use \Inlm\Model\TQueryableRepository;
	}
