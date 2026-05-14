<?php


use Bpjs\Framework\Helpers\SchemaBuilder;

class CreateLabelsTable
{
    public function up(\PDO $pdo)
    {
        $table = new SchemaBuilder('labels');
        $table->id();
        $table->bigInteger('workspace_id')->notNullable();
        $table->string('name',50)->notNullable();
        $table->string('color',20)->default('#4299e1');
        $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP');
        $sql = $table->buildCreateSQL();
        try {
             $pdo->exec($sql);
             echo "Table 'labels' berhasil dibuat\n";
        } catch (\PDOException $e) {
             echo "Gagal membuat tabel: ".$e->getMessage()."\n";
             echo "SQL:".$sql;
        }
    }

    public function down(PDO $pdo)
    {
        $table = new SchemaBuilder('labels');
        $pdo->exec($table->buildDropSQL());
    }
}
