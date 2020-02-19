<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LeavePeriod extends BaseLeavePeriod
{
	public function getStartDateValue() {
		return $this->_getDateValue('d');
	}
	
	public function getStartMonthValue() {
		return $this->_getDateValue('m');
	}

	public function getDescription() {
		return $this->getStartDate() . ' to ' . $this->getEndDate();
	}
	
	public function getEndDateFormatted($format = 'Y-m-d') {
		$timestamp = strtotime($this->getEndDate());
			return date($format, $timestamp);
	}

	private function _getDateValue($format) {
		$timestamp = strtotime($this->getStartDate());
		return (int) date($format, $timestamp);
	}

}