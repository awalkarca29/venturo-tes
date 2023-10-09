<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PivotController extends Controller
{
    public function index()
    {
        if (isset($_GET['tahun'])) {
            $menu = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/menu"));
            $transaksi = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/transaksi?tahun=" . $_GET['tahun']));
        }

        $nasigoreng = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $miefreno = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $nasiteriyaki = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $nasiayamkatsu = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $nasigorengmawut = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $tehhijau = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $tehlemon = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $teh = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $kopihitam = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $kopisusu = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $totalmm = [
            [
                "nasigoreng" => 0,
                "miefreno" => 0,
                "nasiteriyaki" => 0,
                "nasiayamkatsu" => 0,
                "nasigorengmawut" => 0,
                "tehhijau" => 0,
                "tehlemon" => 0,
                "teh" => 0,
                "kopihitam" => 0,
                "kopisusu" => 0,
            ],
            [
                "nasigoreng" => 0,
                "miefreno" => 0,
                "nasiteriyaki" => 0,
                "nasiayamkatsu" => 0,
                "nasigorengmawut" => 0,
                "tehhijau" => 0,
                "tehlemon" => 0,
                "teh" => 0,
                "kopihitam" => 0,
                "kopisusu" => 0,
            ],
        ];

        $total = [
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
            [
                "januari" => 0,
                "februari" => 0,
                "maret" => 0,
                "april" => 0,
                "mei" => 0,
                "juni" => 0,
                "juli" => 0,
                "agustus" => 0,
                "september" => 0,
                "oktober" => 0,
                "november" => 0,
                "desember" => 0,
            ],
        ];

        $totalall = [
            "2021" => 0,
            "2022" => 0,
        ];

        foreach ($transaksi as $trans) {
            if (substr($trans->tanggal, 0, 4) == '2021') {
                if (substr($trans->tanggal, 5, 2) == '01') {
                    $total[0]["januari"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["januari"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '02') {
                    $total[0]["februari"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["februari"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '03') {
                    $total[0]["maret"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["maret"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '04') {
                    $total[0]["april"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["april"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["april"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '05') {
                    $total[0]["mei"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["januari"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '06') {
                    $total[0]["juni"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["juni"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '07') {
                    $total[0]["juli"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["juli"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '08') {
                    $total[0]["agustus"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["agustus"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '09') {
                    $total[0]["september"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["september"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["september"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '10') {
                    $total[0]["oktober"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["oktober"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '11') {
                    $total[0]["november"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["november"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["november"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '12') {
                    $total[0]["desember"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[0]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[0]["desember"] += $trans->total;
                    }
                }
            } else if (substr($trans->tanggal, 0, 4) == '2022') {
                if (substr($trans->tanggal, 5, 2) == '01') {
                    $total[1]["januari"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["januari"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["januari"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '02') {
                    $total[1]["februari"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["februari"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["februari"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '03') {
                    $total[1]["maret"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["maret"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["maret"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '04') {
                    $total[1]["april"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["april"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["april"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '05') {
                    $total[1]["mei"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["mei"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["januari"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '06') {
                    $total[1]["juni"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["juni"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["juni"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '07') {
                    $total[1]["juli"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["juli"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["juli"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '08') {
                    $total[1]["agustus"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["agustus"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["agustus"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '09') {
                    $total[1]["september"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["september"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["september"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '10') {
                    $total[1]["oktober"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["oktober"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["oktober"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '11') {
                    $total[1]["november"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["november"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["november"] += $trans->total;
                    }
                } else if (substr($trans->tanggal, 5, 2) == '12') {
                    $total[1]["desember"] += $trans->total;
                    if ($trans->menu == 'Nasi Goreng') {
                        $nasigoreng[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Mie Freno') {
                        $miefreno[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Teriyaki') {
                        $nasiteriyaki[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Ayam Katsu') {
                        $nasiayamkatsu[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Nasi Goreng Mawut') {
                        $nasigorengmawut[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Teh Hijau') {
                        $tehhijau[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Teh Lemon') {
                        $tehlemon[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Teh') {
                        $teh[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Hitam') {
                        $kopihitam[1]["desember"] += $trans->total;
                    } else if ($trans->menu == 'Kopi Susu') {
                        $kopisusu[1]["desember"] += $trans->total;
                    }
                }
            }
        }

        foreach ($nasigoreng[0] as $ng) {
            $totalmm[0]["nasigoreng"] += $ng;
        }

        foreach ($miefreno[0] as $mf) {
            $totalmm[0]["miefreno"] += $mf;
        }

        foreach ($nasiteriyaki[0] as $nt) {
            $totalmm[0]["nasiteriyaki"] += $nt;
        }

        foreach ($nasiayamkatsu[0] as $nak) {
            $totalmm[0]["nasiayamkatsu"] += $nak;
        }

        foreach ($nasigorengmawut[0] as $ngm) {
            $totalmm[0]["nasigorengmawut"] += $ngm;
        }

        foreach ($tehhijau[0] as $th) {
            $totalmm[0]["tehhijau"] += $th;
        }

        foreach ($tehlemon[0] as $tl) {
            $totalmm[0]["tehlemon"] += $tl;
        }

        foreach ($teh[0] as $t) {
            $totalmm[0]["teh"] += $t;
        }

        foreach ($kopihitam[0] as $kh) {
            $totalmm[0]["kopihitam"] += $kh;
        }

        foreach ($kopisusu[0] as $ks) {
            $totalmm[0]["kopisusu"] += $ks;
        }

        foreach ($nasigoreng[1] as $ng) {
            $totalmm[1]["nasigoreng"] += $ng;
        }

        foreach ($miefreno[1] as $mf) {
            $totalmm[1]["miefreno"] += $mf;
        }

        foreach ($nasiteriyaki[1] as $nt) {
            $totalmm[1]["nasiteriyaki"] += $nt;
        }

        foreach ($nasiayamkatsu[1] as $nak) {
            $totalmm[1]["nasiayamkatsu"] += $nak;
        }

        foreach ($nasigorengmawut[1] as $ngm) {
            $totalmm[1]["nasigorengmawut"] += $ngm;
        }

        foreach ($tehhijau[1] as $th) {
            $totalmm[1]["tehhijau"] += $th;
        }

        foreach ($tehlemon[1] as $tl) {
            $totalmm[1]["tehlemon"] += $tl;
        }

        foreach ($teh[1] as $t) {
            $totalmm[1]["teh"] += $t;
        }

        foreach ($kopihitam[1] as $kh) {
            $totalmm[1]["kopihitam"] += $kh;
        }

        foreach ($kopisusu[1] as $ks) {
            $totalmm[1]["kopisusu"] += $ks;
        }

        foreach ($total[0] as $tot) {
            $totalall["2021"] += $tot;
        }

        foreach ($total[1] as $tot) {
            $totalall["2022"] += $tot;
        }

        return view('main', [
            'menu' => $menu,
            'transaksi' => $transaksi,
            'total' => $total,
            'totalall' => $totalall,
            'totalmm' => $totalmm,
            'nasigoreng' => $nasigoreng,
            'miefreno' => $miefreno,
            'nasiteriyaki' => $nasiteriyaki,
            'nasiayamkatsu' => $nasiayamkatsu,
            'nasigorengmawut' => $nasigorengmawut,
            'tehhijau' => $tehhijau,
            'tehlemon' => $tehlemon,
            'teh' => $teh,
            'kopihitam' => $kopihitam,
            'kopisusu' => $kopisusu,
        ]);
    }
}
