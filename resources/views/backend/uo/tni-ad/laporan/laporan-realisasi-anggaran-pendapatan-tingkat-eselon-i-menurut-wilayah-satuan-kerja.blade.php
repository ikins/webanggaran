@extends('layout.backend')

@section('extra-css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ URL('public/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL('public/datatables.net/css/jquery.dataTables.min.css') }}">
@endsection

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">
        
        <div class="box">
            <div class="box-header padding-bottom-10 text-right with-border panel-heading"></div>
            <div class="box-header padding-bottom-10 text-center">
              <h4 class="box-title report-title">Laporan Realisasi Anggaran Pendapatan</h4><br>
              <h4 class="box-title report-title">Tingkat Eselon I</h4><br>
              <h4 class="box-title report-title">Menurut Wilayah Satuan Kerja</h4><br>
              <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
              <h3 class="box-title report-title">UNTUK PERIODE YANG BERAKHIR 31 DESEMBER 2019</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box box-solid">
                <div class="box-body">
                  <div class="row">
                  <div class="col-md-7">
                      <div class="box-body">
                        <table class="table table-border">
                          <tr>
                            <td style="padding: 0px;">KEMENTERIAN NEGARA/LEMBAGA</td>
                            <td style="padding: 0px;">: 012 - {{Session::get('status_user')}}</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">ESELON</td>
                            <td style="padding: 0px;">: 01 - KEMENTERIAN PERTAHANAN</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <div class="col-md-5">
                      <div class="box-body">
                        <table class="table table-border">
                          <tr>
                            <td style="padding: 0px;">Kode Lap</td>
                            <td style="padding: 0px;">: LRA.P.E1.2</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Tanggal</td>
                            <td style="padding: 0px;">: 11/02/19 11:30 PM</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Halaman</td>
                            <td style="padding: 0px;">: 2</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px;">Prg ID</td>
                            <td style="padding: 0px;">: lap_09</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                  </div>
                  
                </div>

                </div>


                <table id="tablelist" class="table table-striped table-bordered table-hover">
                  <thead>
                  <tr>
                    <th rowspan="2">KODE</th>
                    <th rowspan="2">URAIAN</th>
                    <th rowspan="2">ESTIMASI PENDAPATAN</th>
                    <th colspan="3" class="text-center">REALISASI PENDAPATAN</th>
                    <th rowspan="2">%REALISASI PENDAPATAN</th>
                  </tr>
                  <tr>
                    <th class="text-center">PENDAPATAN</th>
                    <th class="text-center">PENGEMBALIAN PENDAPATAN</th>
                    <th class="text-center">PENDAPATAN NETTO</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>                
                  </tr>
                <tr>
                  <td>Q100</td>
                  <td>DKI Jakarta</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>461390</td>
                  <td>Badan instalasi strategis nasional</td>
                  <td>0</td>
                  <td>146.768</td>
                  <td>0</td>
                  <td>146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>561390</td>
                  <td>Kementerian pertahanan</td>
                  <td>0</td>
                  <td>43.618.146.768</td>
                  <td>0</td>
                  <td>43.18.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661390</td>
                  <td>Roren setjen kemhan</td>
                  <td>0</td>
                  <td>792.768</td>
                  <td>0</td>
                  <td>792.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661391</td>
                  <td>Ropeg setjen kemhan</td>
                  <td>0</td>
                  <td>9.146.768</td>
                  <td>0</td>
                  <td>9.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661392</td>
                  <td>RO. hukum setjen kemhan</td>
                  <td>0</td>
                  <td>446.768</td>
                  <td>0</td>
                  <td>446.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661393</td>
                  <td>Itjen kemhan</td>
                  <td>0</td>
                  <td>2.146.768</td>
                  <td>0</td>
                  <td>2.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661394</td>
                  <td>Ditjen strahan kemhan</td>
                  <td>0</td>
                  <td>3.146.768</td>
                  <td>0</td>
                  <td>3.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661395</td>
                  <td>Ditjen renhan kemhan</td>
                  <td>0</td>
                  <td>7.146.768</td>
                  <td>0</td>
                  <td>7.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661396</td>
                  <td>Ditjen pothan kemhan</td>
                  <td>0</td>
                  <td>1.146.768</td>
                  <td>0</td>
                  <td>1.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661397</td>
                  <td>Ditjen kuthan kemhan</td>
                  <td>0</td>
                  <td>17.146.768</td>
                  <td>0</td>
                  <td>146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661398</td>
                  <td>Baramahan kemhan</td>
                  <td>0</td>
                  <td>17.146.768</td>
                  <td>0</td>
                  <td>146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661399</td>
                  <td>Badiklat kemhan</td>
                  <td>0</td>
                  <td>7.146.768</td>
                  <td>0</td>
                  <td>7.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661310</td>
                  <td>Balitbang kemhan</td>
                  <td>0</td>
                  <td>5.146.768</td>
                  <td>0</td>
                  <td>5.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661311</td>
                  <td>Roum setjen kemhan</td>
                  <td>0</td>
                  <td>1.146.768</td>
                  <td>0</td>
                  <td>1.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661312</td>
                  <td>Pusrehan kemhan</td>
                  <td>0</td>
                  <td>3.981.146.768</td>
                  <td>0</td>
                  <td>3.981.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>Jumlah Pendapatan (1000) - DKI Jakarta</td>
                  <td>0</td>
                  <td>118.146.768</td>
                  <td>0</td>
                  <td>118.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>0205</td>
                  <td>Kab. Bogor</td>
                  <td>0</td>
                  <td>72.146.768</td>
                  <td>0</td>
                  <td>72.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>661314</td>
                  <td>Universitas Pertahanan</td>
                  <td>0</td>
                  <td>501.146.768</td>
                  <td>0</td>
                  <td>501.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>Jumlah Pendapatan (0205) - Kab Bogor</td>
                  <td>0</td>
                  <td>501.146.768</td>
                  <td>0</td>
                  <td>501.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>42</td>
                  <td>Pendapatan penerimaan negara bukan pajak</td>
                  <td>0</td>
                  <td>321.146.768</td>
                  <td>0</td>
                  <td>321.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>4251</td>
                  <td>Pendapatan dari penjualan, pengelolaan BMN, Iuran badan usaha</td>
                  <td>0</td>
                  <td>2.321.146.768</td>
                  <td>0</td>
                  <td>2.321.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425129</td>
                  <td>Pendapatan dari pemindahtanganan BMN Lainnya</td>
                  <td>0</td>
                  <td>1.146.768</td>
                  <td>0</td>
                  <td>1.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425130</td>
                  <td>Pendapatan sewa tanah, gedung, dan bangunan</td>
                  <td>0</td>
                  <td>1.321.146.768</td>
                  <td>0</td>
                  <td>1.321.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425131</td>
                  <td>Pendapatan sewa peralatan dan mesin</td>
                  <td>0</td>
                  <td>33.146.768</td>
                  <td>0</td>
                  <td>33.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425132</td>
                  <td>Pendapatan dari KSP Tanah, gedung, dan bangunan</td>
                  <td>0</td>
                  <td>223.146.768</td>
                  <td>0</td>
                  <td>223.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>Jumlah sub kelompok pendapatan 4251</td>
                  <td>0</td>
                  <td>3.146.768</td>
                  <td>0</td>
                  <td>3.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425134</td>
                  <td>Pendapatan kesehatan, perlindungan sosial, dan keagamaan</td>
                  <td>0</td>
                  <td>421.146.768</td>
                  <td>0</td>
                  <td>421..146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425135</td>
                  <td>Pendapatan dari badan penyelenggaraan jaminan sosial (BPJS)</td>
                  <td>0</td>
                  <td>4.321.146.768</td>
                  <td>0</td>
                  <td>4.321.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425136</td>
                  <td>Pendapatan dari BJS kesehatan pada fasilitas kesehatan tingkat</td>
                  <td>0</td>
                  <td>3.321.146.768</td>
                  <td>0</td>
                  <td>3.321.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425137</td>
                  <td>Pendapatan layanan fasilitas kesehatan</td>
                  <td>0</td>
                  <td>12.146.768</td>
                  <td>0</td>
                  <td>12.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>Jumlah sub kelompok pendapatan 4257</td>
                  <td>0</td>
                  <td>8.146.768</td>
                  <td>0</td>
                  <td>8.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>4253</td>
                  <td>Pendapatan denda</td>
                  <td>0</td>
                  <td>3.146.768</td>
                  <td>0</td>
                  <td>3146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425311</td>
                  <td>Pendapatan denda penyelesaian pekerjaan pemerintah</td>
                  <td>0</td>
                  <td>4.146.768</td>
                  <td>0</td>
                  <td>4.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425312</td>
                  <td>Jumlah sub kelompok pendapatan 4258</td>
                  <td>0</td>
                  <td>8.146.768</td>
                  <td>0</td>
                  <td>8.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>4259</td>
                  <td>Pendapatan lain-lain</td>
                  <td>0</td>
                  <td>1.146.768</td>
                  <td>0</td>
                  <td>1.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425911</td>
                  <td>Penerimaan kembali belanja pegawai tahun anggaran yang lalu</td>
                  <td>0</td>
                  <td>7.321.146.768</td>
                  <td>0</td>
                  <td>7.321.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425912</td>
                  <td>Penerimaan kembali belanja barang tahun anggaran yang lalu</td>
                  <td>0</td>
                  <td>21.321.146.768</td>
                  <td>0</td>
                  <td>21.321.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425913</td>
                  <td>Penerimaan kembali belanja modal tahun anggaran yang lalu</td>
                  <td>0</td>
                  <td>2.321.146.768</td>
                  <td>0</td>
                  <td>2.321.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425914</td>
                  <td>Pendapatan setoran dari sisa utang non TP/TGR pensiunan PNS</td>
                  <td>0</td>
                  <td>421.146.768</td>
                  <td>0</td>
                  <td>421.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425915</td>
                  <td>Pendapatan setoran dari sisa utang non TP/TGR pensiunan prajurit</td>
                  <td>0</td>
                  <td>22.146.768</td>
                  <td>0</td>
                  <td>22.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>425916</td>
                  <td>Pendapatan anggaran lain-lain</td>
                  <td>0</td>
                  <td>44.146.768</td>
                  <td>0</td>
                  <td>44.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>Jumlah sub kelompok pendapatan 4259</td>
                  <td>0</td>
                  <td>45.146.768</td>
                  <td>0</td>
                  <td>23.146.768</td>
                  <td>0</td>
                </tr>
                <tr>
                  <td>#</td>
                  <td>Jumlah kelompok pendapatan 42</td>
                  <td>0</td>
                  <td>111.146.768</td>
                  <td>0</td>
                  <td>111.146.768</td>
                  <td>0</td>
                </tr>
                </tbody>
                <tfoot>
                  <tr>
                  <td>#</td>
                  <td>Jumlah Pendapatan</td>
                  <td>551392146000</td>
                  <td>127873791917</td>
                  <td>423518354083</td>
                  <td>23.19</td>
                  <td></td>
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('extra-js')
<!-- DataTables -->
<script src="{{ URL('public/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL('public/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js') }}"></script>
<script src="{{ URL('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL('https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {

    var APP_URL = {!! json_encode(url('/')) !!};

    $('#tablelist').DataTable(

        { 
          "paging": false,
          "searching": false,
          "ordering": false,
          "bLengthChange": false,
          dom: 'lBfrtip',
                buttons: [
                    {
                      text: '<i class="fa fa-filter"></i> Buat Laporan Baru',
                      className: 'btn btn-success',
                      action: function ( e, dt, node, config ) {
                          window.location = APP_URL + '/cms/kemhan/uo/form-filter-laporan-realisasi-anggaran-pendapatan-tingkat-eselon-i-menurut-wilayah-satuan-kerja';
                      }
                    },
                    {   
                        text: '<i class="fa fa-file-excel-o"></i> Excel',
                        extend: 'excelHtml5',
                        className: 'btn btn-success',
                        footer: true,
                        filename: 'Laporan Realisasi Anggaran Pendapatan {{Session::get('status_user')}} PERIODE 31 Desember 2019',
                        title:'',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        customize: function (xlsx) {
                          console.log(xlsx);
                          var sheet = xlsx.xl.worksheets['sheet1.xml'];
                          var downrows = 8;
                          var clRow = $('row', sheet);
                          //style
                          

                          var mergeCells = $('mergeCells', sheet);
 
                          mergeCells[0].appendChild( _createNode( sheet, 'mergeCell', {
                            attr: {
                              ref: 'A1:G1'
                            }
                          } ) );

                          mergeCells.attr( 'count', mergeCells.attr( 'count' )+1 );
 
                          function _createNode( doc, nodeName, opts ) {
                            var tempNode = doc.createElement( nodeName );
           
                            if ( opts ) {
                              if ( opts.attr ) {
                                $(tempNode).attr( opts.attr );
                              }
           
                              if ( opts.children ) {
                                $.each( opts.children, function ( key, value ) {
                                  tempNode.appendChild( value );
                                } );
                              }
           
                              if ( opts.text !== null && opts.text !== undefined ) {
                                tempNode.appendChild( doc.createTextNode( opts.text ) );
                              }
                            }
           
                            return tempNode;
                          }
                          //update Row
                          clRow.each(function () {
                              var attr = $(this).attr('r');
                              var ind = parseInt(attr);
                              ind = ind + downrows;
                              $(this).attr("r",ind);
                          });
                   
                          // Update  row > c
                          $('row c ', sheet).each(function () {
                              var attr = $(this).attr('r');
                              var pre = attr.substring(0, 1);
                              var ind = parseInt(attr.substring(1, attr.length));
                              ind = ind + downrows;
                              $(this).attr("r", pre + ind);
                          });

                          function AddrowHead(index,data) {
                              msg='<row r="'+index+'">'
                              for(i=0;i<data.length;i++){
                                  var key=data[i].k;
                                  var value=data[i].v;
                                  msg += '<c t="inlineStr" r="' + key + index + '" s="51">';
                                  msg += '<is>';
                                  msg +=  '<t>'+value+'</t>';
                                  msg+=  '</is>';
                                  msg+='</c>';
                              }
                              msg += '</row>';
                              return msg;
                          }
                   
                          function Addrow(index,data) {
                              msg='<row r="'+index+'">'
                              for(i=0;i<data.length;i++){
                                  var key=data[i].k;
                                  var value=data[i].v;
                                  msg += '<c t="inlineStr" r="' + key + index + '" s="">';
                                  msg += '<is>';
                                  msg +=  '<t>'+value+'</t>';
                                  msg+=  '</is>';
                                  msg+='</c>';
                              }
                              msg += '</row>';
                              return msg;
                          }
                   
                          //insert
                          var r1 = AddrowHead(1, [{ k: 'A', v: 'Laporan Realisasi Anggaran Pendapatan' }]);
                          var r2 = Addrow(3, [{ k: 'A', v: 'KEMENTERIAN NEGARA/LEMBAGA : 012' }]);
                          var r3 = Addrow(4, [{ k: 'A', v: 'ESELON : 01 - KEMENTERIAN PERTAHANAN' }]);
                          var r4 = Addrow(4, [{ k: 'G', v: 'Kode Lap : LRA.P.E1.2' }]);
                          var r5 = Addrow(5, [{ k: 'G', v: 'Tanggal : 11/02/19 11:30 PM' }]);
                          var r6 = Addrow(6, [{ k: 'G', v: 'Halaman : 2' }]);
                          var r7 = Addrow(7, [{ k: 'G', v: 'Prg ID : lap_09' }]);
                           
                          sheet.childNodes[0].childNodes[1].innerHTML = r1+ r2+ r3+ r4+ r5+ r6+ r7+  sheet.childNodes[0].childNodes[1].innerHTML;

                      }
                    },
                    { 
                        text: '<i class="fa fa-file-pdf-o"></i> PDF',
                        extend: 'pdfHtml5',
                        className: 'btn btn-success',
                        footer: true,
                        filename: 'Laporan Realisasi Anggaran Pendapatan {{Session::get('status_user')}} PERIODE 31 Desember 2019',
                        title:'Laporan Realisasi Anggaran Pendapatan' + '\n' + '{{Session::get('status_user')}}' + '\n' + ' PERIODE 31 Desember 2019',
                        orientation: 'landscape',
                        pageSize: 'A4',
                        pageMargins: [ 150, 150, 150, 150 ],
                        margin: [ 150, 150, 150, 150 ],
                        messageTop : 'KEMENTERIAN NEGARA/LEMBAGA : 012 - {{Session::get('status_user')}} \n ESELON : 01 - KEMENTERIAN PERTAHANAN \n \n Kode Lap : LRA.P.E1.2 \n Tanggal : 11/02/19 11:30 PM \n Halaman : 2 \n Prg ID : lap_09',

                        /*customize: function (doc) {
                          doc['header']=(function() {
                          return {
                            columns: [
                              {
                                alignment: 'center',
                                fontSize: 12,
                                text: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI'
                              
                              }
                            ],
                            margin: 20
                          }
                        });
                        }*/

                        customize: function ( doc ) {

                          var a = new Date();
                          var year = a.getFullYear();

                          //footer
                           var cols = [];
                           cols[0] = {text: 'Kementerian Pertahanan', alignment: 'left', margin:[20] };
                           cols[1] = {text: year, alignment: 'right', margin:[0,0,20] };
                           var objFooter = {};
                           objFooter['columns'] = cols;
                           doc['footer']=objFooter;

                          //header
                          /*doc['header']=(function() {
                            return {
                              columns: [
                                {
                                  alignment: 'center',
                                  fontSize: 12,
                                  text: 'LAPORAN PELAKSANAAN ANGGARAN BELANJA PEGAWAI'
                                
                                }
                              ],
                              margin: 20
                            }
                          });*/
                          
                          //content header
                          /*doc.content.splice(0, 0,
                            {
                                margin: [0, 0, 0, 5],
                                alignment: 'right',
                                text : 'Abcd Right'
                            }
                           );

                           doc.content.splice(0, 0,
                            {
                                margin: [0, 0, 0, 0],
                                alignment: 'left',
                                text : 'Abcd Left'
                            }
                           );*/

                          doc.styles.title = {
                            color: 'black',
                            fontSize: '16',
                            alignment: 'center'
                          }

                        }
                    }

                    ]
        }

      );

      $("#tablelist_wrapper > .dt-buttons").appendTo("div.panel-heading");
  })
</script>
@endsection