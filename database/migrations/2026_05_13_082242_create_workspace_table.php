<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateWorkspaceTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('workspace');
        $table->id();
        $table->string('name',150)->notNullable();
        $table->bigInteger('owner_id')->notNullable();
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'workspace' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('workspace');
        $pdo->exec($table->buildDropSQL());
    }
}
