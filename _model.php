<?php
	class SettingsManager {
		public function get_link () {
			global $DB_ADDRESS;
			global $DB_USER;
			global $DB_PASS;
			global $DB_NAME;

			return $link = DB_Connect($DB_ADDRESS, $DB_USER, $DB_PASS, $DB_NAME);
		}

		public function getRecord ($id) {
			$link = SettingsManager::get_link();
			$USER_ID = $_SESSION['USER_ID'];

			$sql = <<<EOD
	SELECT *
	FROM `settings`
	WHERE `SETTING_ID`='$id'
EOD;
			$data = $link->query($sql);
			return mysqli_fetch_array( $data );
		}

		public function addRecord ($key, $value) {
			$link = SettingsManager::get_link();
			$USER_ID = $_SESSION['USER_ID'];

			$sql = <<<EOD
	INSERT INTO `sarah`.`settings` (
		`key`,
		`value`
	) VALUES (
		'$key',
		'$value'
	);
EOD;

			return $link->query($sql);
		}

		public function deleteRecord ($id) {
			$link = SettingsManager::get_link();
			$USER_ID = $_SESSION['USER_ID'];

			$sql = <<<EOD
	DELETE FROM `sarah`.`settings`
	WHERE `SETTING_ID`='$id'
EOD;

			return $link->query($sql);
		}

		public function getAllRecords () {
			$link = SettingsManager::get_link();
			$USER_ID = $_SESSION['USER_ID'];

			$sql = <<<EOD
	SELECT *
	FROM `settings`
EOD;
			$data = $link->query($sql);

			return $data;
		}

		public function updateRecord ($id, $key, $value) {
			$link = SettingsManager::get_link();
			$USER_ID = $_SESSION['USER_ID'];

			$sql = <<<EOD
	UPDATE `sarah`.`settings`
	SET `key` = '$key',
		`value` = '$value'
	WHERE `SETTING_ID`='$id'
EOD;
			
			return $link->query($sql);
		}
	}