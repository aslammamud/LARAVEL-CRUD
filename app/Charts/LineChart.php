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

      $dataArr = Data::where('id','=','31933')->where('trade_code','=','1JANATAMF')->get();

      foreach($dataArr as $data){
        $date = $data->date;
        $trade_code = $data->trade_code;
        $high = $data->high;
        $low = $data->low;
        $open = $data->open;
        $close = $data->close;
        $volume = str_replace(',','',$data->volume);
        $totals = [$high,$low,$open,$close,$volume];
        $labels = ['High','Low','Open','Close','Volume'];
      }
      $MyChart =  Chartisan::build()
            ->labels($labels)
            ->dataset($trade_code, $totals);
      return $MyChart;
    }
}
