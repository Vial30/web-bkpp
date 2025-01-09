<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\DB;

class ExcelImportController extends Controller
{

    public function showImportForm()
    {
        return view('admin/import');
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'excelFile' => 'required|file|mimes:xlsx,xls',
        ]);

        try {
            $file = $request->file('excelFile');
            $spreadsheet = IOFactory::load($file->getPathname());
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray(null, true, true, true);

            foreach ($rows as $index => $row) {
                // Skip header row
                if ($index === 1) continue;

                DB::table('arsip_buku')->insert([
                    'nama' => $row['A'] ?? '',
                    'opd' => $row['B'] ?? '',
                    'jabatan' => $row['C'] ?? '',
                    'judul' => $row['D'] ?? '',
                    'kegiatan' => $row['E'] ?? '',
                    'tahun' => $row['F'] ?? '',
                    'angkatan' => $row['G'] ?? '',
                ]);
            }

            return redirect()->route('import.form')->with('success', 'Data imported successfully!');
        } catch (\Exception $e) {
            return redirect()->route('import.form')->withErrors(['error' => $e->getMessage()]);
        }
    }
}
