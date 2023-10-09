@extends('header')

<div class="container-fluid">
    <div class="card" style="margin: 2rem 0rem;">
        <div class="card-header">
            Venturo - Laporan penjualan tahunan per menu
        </div>
        <div class="card-body">
            <form action="" method="get">
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <select id="my-select" class="form-control" name="tahun">
                                <option value="">Pilih Tahun</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">
                            Tampilkan
                        </button>
                        <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu"
                            class="btn btn-secondary">
                            Json Menu
                        </a>
                        <a href="http://tes-web.landa.id/intermediate/transaksi?tahun={{ $_GET['tahun'] }}"
                            target="_blank" rel="Array Transaksi" class="btn btn-secondary">
                            Json Transaksi
                        </a>
                        <a href="https://tes-web.landa.id/intermediate/download?path=example.php"
                            class="btn btn-secondary">Download Example</a>
                    </div>
                </div>
            </form>
            <hr>

            @if (isset($_GET['tahun']))

                <div class="table-responsive">
                    <table class="table table-hover table-bordered" style="margin: 0;">
                        <thead>
                            <tr class="table-dark">
                                <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu
                                </th>
                                <th colspan="12" style="text-align: center;">Periode Pada {{ $_GET['tahun'] }}
                                </th>
                                <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total
                                </th>
                            </tr>
                            <tr class="table-dark">
                                <th style="text-align: center;width: 75px;">Jan</th>
                                <th style="text-align: center;width: 75px;">Feb</th>
                                <th style="text-align: center;width: 75px;">Mar</th>
                                <th style="text-align: center;width: 75px;">Apr</th>
                                <th style="text-align: center;width: 75px;">Mei</th>
                                <th style="text-align: center;width: 75px;">Jun</th>
                                <th style="text-align: center;width: 75px;">Jul</th>
                                <th style="text-align: center;width: 75px;">Ags</th>
                                <th style="text-align: center;width: 75px;">Sep</th>
                                <th style="text-align: center;width: 75px;">Okt</th>
                                <th style="text-align: center;width: 75px;">Nov</th>
                                <th style="text-align: center;width: 75px;">Des</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-secondary" colspan="14"><b>Makanan</b></td>
                            </tr>
                            @foreach ($menu as $men)
                                @if ($men->kategori == 'makanan')
                                    <tr>
                                        <td>{{ $men->menu }}</td>
                                        @if (substr($transaksi[0]->tanggal, 0, 4) == '2021')
                                            @if ($men->menu == 'Nasi Goreng')
                                                @foreach ($nasigoreng[0] as $ng)
                                                    <td style="text-align: right;">
                                                        {{ $ng }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[0]['nasigoreng'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Mie Freno')
                                                @foreach ($miefreno[0] as $mf)
                                                    <td style="text-align: right;">
                                                        {{ $mf }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[0]['miefreno'] }}</b></td>
                                            @endif
                                            @if ($men->menu == 'Nasi Teriyaki')
                                                @foreach ($nasiteriyaki[0] as $nt)
                                                    <td style="text-align: right;">
                                                        {{ $nt }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[0]['nasiteriyaki'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Nasi Ayam Katsu')
                                                @foreach ($nasiayamkatsu[0] as $nak)
                                                    <td style="text-align: right;">
                                                        {{ $nak }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;">
                                                    <b>{{ $totalmm[0]['nasiayamkatsu'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Nasi Goreng Mawut')
                                                @foreach ($nasigorengmawut[0] as $ngm)
                                                    <td style="text-align: right;">
                                                        {{ $ngm }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;">
                                                    <b>{{ $totalmm[0]['nasigorengmawut'] }}</b>
                                                </td>
                                            @endif
                                        @endif
                                        @if (substr($transaksi[0]->tanggal, 0, 4) == '2022')
                                            @if ($men->menu == 'Nasi Goreng')
                                                @foreach ($nasigoreng[1] as $ng)
                                                    <td style="text-align: right;">
                                                        {{ $ng }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[1]['nasigoreng'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Mie Freno')
                                                @foreach ($miefreno[1] as $mf)
                                                    <td style="text-align: right;">
                                                        {{ $mf }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[1]['miefreno'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Nasi Teriyaki')
                                                @foreach ($nasiteriyaki[1] as $nt)
                                                    <td style="text-align: right;">
                                                        {{ $nt }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[1]['nasiteriyaki'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Nasi Ayam Katsu')
                                                @foreach ($nasiayamkatsu[1] as $nak)
                                                    <td style="text-align: right;">
                                                        {{ $nak }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;">
                                                    <b>{{ $totalmm[1]['nasiayamkatsu'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Nasi Goreng Mawut')
                                                @foreach ($nasigorengmawut[1] as $ngm)
                                                    <td style="text-align: right;">
                                                        {{ $ngm }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;">
                                                    <b>{{ $totalmm[1]['nasigorengmawut'] }}</b>
                                                </td>
                                            @endif
                                        @endif
                                    </tr>
                                @endif
                            @endforeach
                            <tr>
                                <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                            </tr>
                            @foreach ($menu as $men)
                                @if ($men->kategori == 'minuman')
                                    <tr>
                                        <td>{{ $men->menu }}</td>
                                        @if (substr($transaksi[0]->tanggal, 0, 4) == '2021')
                                            @if ($men->menu == 'Teh Hijau')
                                                @foreach ($tehhijau[0] as $th)
                                                    <td style="text-align: right;">
                                                        {{ $th }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[0]['tehhijau'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Teh Lemon')
                                                @foreach ($tehlemon[0] as $tl)
                                                    <td style="text-align: right;">
                                                        {{ $tl }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[0]['tehlemon'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Teh')
                                                @foreach ($teh[0] as $t)
                                                    <td style="text-align: right;">
                                                        {{ $t }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[0]['teh'] }}</b></td>
                                            @endif
                                            @if ($men->menu == 'Kopi Hitam')
                                                @foreach ($kopihitam[0] as $kh)
                                                    <td style="text-align: right;">
                                                        {{ $kh }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[0]['kopihitam'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Kopi Susu')
                                                @foreach ($kopisusu[0] as $ks)
                                                    <td style="text-align: right;">
                                                        {{ $ks }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[0]['kopisusu'] }}</b>
                                                </td>
                                            @endif
                                        @endif
                                        @if (substr($transaksi[0]->tanggal, 0, 4) == '2022')
                                            @if ($men->menu == 'Teh Hijau')
                                                @foreach ($tehhijau[1] as $th)
                                                    <td style="text-align: right;">
                                                        {{ $th }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[1]['tehhijau'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Teh Lemon')
                                                @foreach ($tehlemon[1] as $tl)
                                                    <td style="text-align: right;">
                                                        {{ $tl }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[1]['tehlemon'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Teh')
                                                @foreach ($teh[1] as $t)
                                                    <td style="text-align: right;">
                                                        {{ $t }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[1]['teh'] }}</b></td>
                                            @endif
                                            @if ($men->menu == 'Kopi Hitam')
                                                @foreach ($kopihitam[1] as $kh)
                                                    <td style="text-align: right;">
                                                        {{ $kh }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[1]['kopihitam'] }}</b>
                                                </td>
                                            @endif
                                            @if ($men->menu == 'Kopi Susu')
                                                @foreach ($kopisusu[1] as $ks)
                                                    <td style="text-align: right;">
                                                        {{ $ks }}
                                                    </td>
                                                @endforeach
                                                <td style="text-align: right;"><b>{{ $totalmm[1]['kopisusu'] }}</b>
                                                </td>
                                            @endif
                                        @endif
                                    </tr>
                                @endif
                            @endforeach
                            <tr class="table-dark">
                                <td><b>Total</b></td>
                                @if (substr($transaksi[0]->tanggal, 0, 4) == '2021')
                                    @foreach ($total[0] as $t)
                                        <td style="text-align: right;">
                                            <b>{{ $t }}</b>
                                        </td>
                                    @endforeach
                                    <td style="text-align: right;"><b>{{ $totalall['2021'] }}</b></td>
                                @endif
                                @if (substr($transaksi[0]->tanggal, 0, 4) == '2022')
                                    @foreach ($total[1] as $t)
                                        <td style="text-align: right;">
                                            <b>{{ $t }}</b>
                                        </td>
                                    @endforeach
                                    <td style="text-align: right;"><b>{{ $totalall['2022'] }}</b></td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>

            @endif
        </div>
    </div>
</div>

@extends('footer')
