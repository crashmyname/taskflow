<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateTodoLabelsTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('todo_labels');
        // $table->id();
        $table->bigInteger('todo_id')->notNullable()->primary();
        $table->bigInteger('label_id')->notNullable()->primary();
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'todo_labels' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('todo_labels');
        $pdo->exec($table->buildDropSQL());
    }
}
