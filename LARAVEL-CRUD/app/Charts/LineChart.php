<?php

declare(strict_types = 1);

namespace App\Charts;
use App\Models\Data;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class LineChart extends BaseChart
{
    public function handler(Request $request): Chartisan
    {
      $trade = "Sample";
      $dataArr = Data::all();
      foreach($dataArr as $data){
        $trade_code = $data->trade_code;
        $high = $data->high;
        $low = $data->low;
        $open = $data->open;
        $close = $data->close;
        $volume = $data->volume;

        $totals = [$high,$low,$open,$close,$volume];
      }
      $MyChart =  Chartisan::build()
            ->labels(['High','Low','Open','Close','Volume'])
            ->dataset($trade_code, $totals);
      return $MyChart;
    }
}
