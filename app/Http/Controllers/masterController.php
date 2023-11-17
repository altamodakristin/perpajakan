<?php

namespace App\Http\Controllers;
use Elibyy\TCPDF\Facades\TCPDF;
use App\Models\transaksi;

use Illuminate\Http\Request;

class masterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master_target.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master_target.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = [
        //     ''
        // ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Ht tp\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function print()
    {
        $transaksi = transaksi::select('*')
        ->orderBy('created_at', 'DESC')
        ->get();

        // dd($transaksi);

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


    $pdf::SetPrintHeader(false);
    $pdf::SetPrintFooter(false);

    $pdf::SetMargins(5, 1, 5, 1); // put space of 10 on top

    $pdf::setImageScale(PDF_IMAGE_SCALE_RATIO);

    if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
        require_once(dirname(__FILE__) . '/lang/eng.php');
        $pdf::setLanguageArray($l);
    }

    $pdf::AddPage('P', array(215.9, 3276));

    $pdf::SetFont('helvetica', '', 10);

    $tbl = "
    <table style=\" font-size:9px; \">
        <tr>
            <td style=\"text-align: center; font-size:12px; font-weight: bold\">Laporan</td>
        </tr>
        <tr>
            <td style=\"text-align: center; font-size:9px;\">Tanggal</td>
        </tr>
        <tr>
            <td style=\"text-align: center; font-size:9px;\">.....</td>
        </tr>
    </table>
    ";
    $pdf::writeHTML($tbl, true, false, false, false, '');
    // $kasir = ucfirst(Auth::user()->name);
    $tblStock1 = "
    <div>--------------------------------</div>
    <table style=\" font-size:9px; \" >
        <tr>
            <td style=\"text-align: center; font-size:9px; font-weight: bold\"></td>
        </tr>
        <tr>
            <td style=\"text-align: left; \" width=\" 50% \">Kasir
            </td>
            <td style=\"text-align: right; \" width=\" 50% \">
            
            </td>
        </tr>
        <tr>
        <td style=\"text-align: left; \" width=\" 50% \">Tanggal
        </td>
        <td style=\"text-align: right; \" width=\" 50% \">
       " . date('d/m/Y'). "
        </td>
    </tr>
    <tr>
    <td style=\"text-align: left; \" width=\" 50% \">Nomor Struk
    </td>
    <td style=\"text-align: right; \" width=\" 50% \">
    
    </td>
</tr>

    </table>
     <div>-------------------------------</div>
    ";

    $tblStock2 = "
    <table style=\" font-size:9px; \" width=\" 100% \" border=\"0\">
    ";

    $tblStock3 = "";
    $items = count($transaksi);
    $no = 1;
    foreach ($transaksi as $key => $val) {
        $tblStock3 .= "
        <tr>
        <td width=\" 100% \" style=\"text-align: left; \"></td>
        </tr>
            <tr>
                <td width=\" 40% \" style=\"text-align: left; \"></td>
                <td width=\" 20% \" style=\"text-align: left; \"></td>
                <td width=\" 40% \" style=\"text-align: left; \"></td>
            </tr>
            <br>
        ";
    }

    $tblStock4 = "
    </table>
     <div>-------------------------------</div>
    <table style=\" font-size:9px; \" width=\" 100% \" border=\"0\">
    <tr>
        <td width=\" 35% \" style=\"text-align: left; font-weight:bold;\"></td>
        <td width=\" 50% \" style=\"text-align: right; font-weight:bold;\">Total : </td>
    </tr>
    ";

    $tblStock5 = "
    </table>
    <div>--------------------------------</div>
    <table style=\" font-size:9px; \" width=\" 100% \" border=\"0\">
        <tr>
            <td width=\" 100% \" style=\"text-align: center;\">Terima Kasih</td>
        </tr>
    </table>
    ";

    $pdf::writeHTML($tblStock1 . $tblStock2 . $tblStock3 . $tblStock4 . $tblStock5, true, false, false, false, '');


    $filename = 'Print_Transaksi.pdf';
    $pdf::Output($filename, 'I');

    }
}
