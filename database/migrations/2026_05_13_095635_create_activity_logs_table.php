<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateActivityLogsTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('activity_logs');
        $table->id();
        $table->bigInteger('workspace_id');
        $table->bigInteger('todo_id')->notNullable();
        $table->bigInteger('user_id')->notNullable();
        $table->string('action',100);
        $table->text('old_data');
        $table->text('new_data');
        $table->string('ip_address',100);
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'activity_logs' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('activity_logs');
        $pdo->exec($table->buildDropSQL());
    }
}
