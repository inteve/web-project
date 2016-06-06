<?php

	namespace InteveApp\Presenters;

	use Nette;


	abstract class BasePresenter extends Nette\Application\UI\Presenter
	{
		use \Inteve\Application\TFlashMessages;


		protected function beforeRender()
		{
			parent::beforeRender();
			$this->template->production = $this->getContext()->parameters['production'];
		}
	}
