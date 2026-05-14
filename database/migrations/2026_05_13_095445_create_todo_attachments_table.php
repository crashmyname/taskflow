<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateTodoAttachmentsTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('todo_attachments');
        $table->id();
        $table->bigInteger('todo_id')->notNullable();
        $table->string('filename');
        $table->string('path');
        $table->string('mime');
        $table->bigInteger('size');
        $table->bigInteger('uploaded_by');
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'todo_attachments' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('todo_attachments');
        $pdo->exec($table->buildDropSQL());
    }
}
