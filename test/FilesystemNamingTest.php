<?php
use PHPUnit\Framework\TestCase;
use stathis\MariaDB\FilesystemNaming\FilesystemNaming;

final class FilesystemNamingTest extends TestCase {
	protected $testStrings = [
		'stathis-2021' => 'stathis@002d2021',
		'greek-αΑβΒγΓ' => 'greek@002d@6l@6L@6m@7W@6n@6N',
	];

	public function testAll(): void {
		foreach ($this->testStrings as $k => $v) {
			$this->assertEquals($v, FilesystemNaming::encode($k));
			$this->assertEquals($k, FilesystemNaming::decode($v));
		}
	}
}

