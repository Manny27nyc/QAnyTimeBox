/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
	require('../../../../includes/configuration/prepend.inc.php');

	class ExampleForm extends QForm {
		protected $at1;
		protected $at2;

		protected function Form_Create() {
			$this->at1 = new QAnyTimeBox($this);

			$this->at2 = new QAnyTimeBox($this);
			$this->at2->Earliest = new QDateTime('2009-01-01');
			$this->at2->Latest = new QDateTime('2012-01-01');
			$this->at2->DateTimeFormat = 'MM/DD/YYYY hh:mm:ss zz';
		}
	}

	ExampleForm::Run('ExampleForm');
?>
