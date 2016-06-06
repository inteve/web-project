<?php

	namespace InteveApp\Forms;

	use InteveApp\Components\Control;


	abstract class FormControl extends Control
	{
		abstract protected function createComponentForm();


		public function render()
		{
			$this['form']->render();
		}
	}
