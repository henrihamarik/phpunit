<?php
namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\Receipt;

class ReceiptTest extends TestCase {
	public function testTotal() {
		// loome reciepi objekti
		$Receipt = new Receipt();
		// php uniti testi meetod
		$this->assertEquals(
			// oodatav väärtus
			15,
			// reaalne väärtus 
			$Receipt->total([0,2,5,8]),
			// vastus 
			'When summing the total should equal 15'
		);
	}
}