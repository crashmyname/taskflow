<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateTodoCommentsTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('todo_comments');
        $table->id();
        $table->bigInteger('todo_id')->notNullable();
        $table->bigInteger('user_id')->notNullable();
        $table->text('comment')->notNullable();
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'todo_comments' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('todo_comments');
        $pdo->exec($table->buildDropSQL());
    }
}
