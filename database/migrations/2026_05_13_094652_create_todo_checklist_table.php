<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateTodoChecklistTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('todo_checklist');
        $table->id();
        $table->bigInteger('todo_id')->notNullable();
        $table->string('title')->notNullable();
        $table->integer('is_done')->default(0);
        $table->integer('position')->default(0);
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'todo_checklist' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('todo_checklist');
        $pdo->exec($table->buildDropSQL());
    }
}
