<?php

namespace Models;

class _prisma_migrations {
    protected $_id;
    protected $_checksum;
    protected $_finished_at;
    protected $_migration_name;
    protected $_logs;
    protected $_rolled_back_at;
    protected $_started_at;
    protected $_applied_steps_count;

public function __construct($dbRow) {
        $this->_id = $dbRow['id'];
        $this->_checksum = $dbRow['checksum'];
        $this->_finished_at = $dbRow['finished_at'];
        $this->_migration_name = $dbRow['migration_name'];
        $this->_logs = $dbRow['logs'];
        $this->_rolled_back_at = $dbRow['rolled_back_at'];
        $this->_started_at = $dbRow['started_at'];
        $this->_applied_steps_count = $dbRow['applied_steps_count'];
    }

public function getId() {
        return $this->_id;
    }

public function getChecksum() {
        return $this->_checksum;
    }

public function getFinishedAt() {
        return $this->_finished_at;
    }

public function getMigrationName() {
        return $this->_migration_name;
    }

public function getLogs() {
        return $this->_logs;
    }

public function getRolledBackAt() {
        return $this->_rolled_back_at;
    }

public function getStartedAt() {
        return $this->_started_at;
    }

public function getAppliedStepsCount() {
        return $this->_applied_steps_count;
    }
}
