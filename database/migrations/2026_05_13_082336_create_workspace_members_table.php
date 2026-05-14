<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateWorkspaceMembersTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('workspace_members');
        $table->id();
        $table->bigInteger('workspace_id')->notNullable();
        $table->bigInteger('user_id')->notNullable();
        $table->string('role',15)->default('member');
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'workspace_members' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('workspace_members');
        $pdo->exec($table->buildDropSQL());
    }
}
