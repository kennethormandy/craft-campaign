<?php

namespace putyourlightson\campaign\migrations;

use craft\db\Migration;

/**
 * m180911_120000_add_import_columns migration.
 */
class m180911_120000_add_import_columns extends Migration
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        if (!$this->db->columnExists('{{%campaign_imports}}', 'emailFieldIndex')) {
            $this->addColumn('{{%campaign_imports}}', 'emailFieldIndex', $this->string()->after('mailingListId'));
        }

        if (!$this->db->columnExists('{{%campaign_imports}}', 'fieldIndexes')) {
            $this->addColumn('{{%campaign_imports}}', 'fieldIndexes', $this->text()->after('emailFieldIndex'));
        }
    }

    /**
     * @inheritdoc
     */
    public function safeDown(): bool
    {
        echo "m180911_120000_add_import_columns cannot be reverted.\n";

        return false;
    }
}
