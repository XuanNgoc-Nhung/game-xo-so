<?php

namespace App\Console\Commands;

use App\loMotPhut;
use App\Helpers\RandomHelper;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class chenKetQuaLoMotPhut extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chenKetQua:motPhut';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function getKq($length)
    {
        return RandomHelper::getRandomCharacters($length);
    }

    public function renderKetQua($count, $length): ?string
    {
//        count: Số lượng kết quả; $length: Độ dài của mỗi kết quả
        Log::info('Sinh ra: ' . $count . ' kết quả. Mỗi kết quả dài: ' . $length);
        $res = null;
        if ($count == 1) {
            $res = $this->getKq($length);
        } else {
            for ($i = 1; $i <= $count; $i++) {
                $res = $res.','.$this->getKq($length) ;
            }
            $res = substr($res, 1, mb_strlen($res));
        }
        return $res;
    }

    public function handle()
    {
        $data = [
            'giai_nhat' => $this->renderKetQua(1, 5),
            'giai_nhi' => $this->renderKetQua(5, 2),
            'giai_ba' => $this->renderKetQua(5, 6),
            'giai_tu' => $this->renderKetQua(4, 4),
            'giai_nam' => $this->renderKetQua(6, 4),
            'giai_sau' => $this->renderKetQua(3, 3),
            'giai_bay' => $this->renderKetQua(4, 2),
            'dac_biet' => $this->renderKetQua(1, 5),
        ];

        loMotPhut::create($data);
        Log::info('Kết quả lô 1 phút được tạo:');
        Log::info($data);
        $this->info('Sinh kết quả game lô 1 phút');
    }
}
