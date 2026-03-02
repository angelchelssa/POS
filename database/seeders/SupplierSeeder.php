    <?php
    
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class SupplierSeeder extends Seeder
    {
        public function run(): void
        {
            $data = [
                [
                    'supplier_kode' => 'SUP1',
                    'supplier_nama' => 'Supplier A',
                    'supplier_alamat' => 'Jl. Supplier A No.1'
                ],
                [
                    'supplier_kode' => 'SUP2',
                    'supplier_nama' => 'Supplier B',
                    'supplier_alamat' => 'Jl. Supplier B No.2'
                ],
                [
                    'supplier_kode' => 'SUP3',
                    'supplier_nama' => 'Supplier C',
                    'supplier_alamat' => 'Jl. Supplier C No.3'
                ],
            ];
            DB::table('m_supplier')->insert($data);
        }
    }
