<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateTodosTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('todos');
        $table->id();
        $table->bigInteger('workspace_id')->notNullable();
        $table->bigInteger('project_id')->notNullable();
        $table->bigInteger('parent_id')->notNullable();
        $table->bigInteger('assigned_to')->notNullable();
        $table->bigInteger('created_by')->notNullable();
        $table->string('title')->notNullable();
        $table->text('description');
        $table->string('status',25)->default('pending');
        $table->string('priority',25)->default('medium');
        $table->integer('progress')->default(0);
        $table->date('start_date')->nullable();
        $table->date('due_date')->nullable();
        $table->date('completed_at')->nullable();
        $table->integer('position')->default(0);
        $table->integer('is_starred')->default(0);
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'todos' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('todos');
        $pdo->exec($table->buildDropSQL());
    }
}
