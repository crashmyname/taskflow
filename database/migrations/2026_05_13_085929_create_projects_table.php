<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateProjectsTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('projects');
        $table->id();
        $table->bigInteger('workspace_id')->notNullable();
        $table->string('name',150)->notNullable();
        $table->text('description')->nullable();
        $table->string('color',20)->default('#206bc4');
        $table->string('status',15)->default('active');
        $table->bigInteger('created_by');
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'projects' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('projects');
        $pdo->exec($table->buildDropSQL());
    }
}
