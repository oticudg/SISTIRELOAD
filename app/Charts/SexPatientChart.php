<?php
use Sisti\ { Index, User, State };
namespace Sisti\Charts;
namespace Sisti\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Classes\Highcharts\Chart;

class SexPatientChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

}
