<?php

class Calendar
{
    private $COLOR;
    public function __construct()
    {
        $this->COLOR =
            [
                '1' => 'red',
                '2' => 'blue',
                '3' => 'green',
                '4' => '#B2BEB5', //for css
            ];
    }

    public function event(string $startdate, string $enddate, string $now)
    {
        // you can filter your data using param

        header('Content-Type: application/json; charset=utf-8');
        $event = [
            [
                'id' => 1,
                'name' => 'event name',
                'startdate' => '2023-01-02',
                "enddate" => '2023-01-06',
                "starttime" => "12=>00",
                "endtime" => "2=>00",
                "color" => $this->COLOR[1],
                "url" => 'https://google.com' // link for a.href in event
            ],
            [
                'id' => 1,
                'name' => 'event name 2',
                'startdate' => '2023-01-03',
                "enddate" => '2023-01-06',
                "starttime" => "12=>00",
                "endtime" => "2=>00",
                "color" => $this->COLOR[3],
                "url" => 'https://google.com' // link for a.href in event
            ], [
                'id' => 1,
                'name' => 'event name 3',
                'startdate' => '2023-01-11',
                "enddate" => '2023-01-19',
                "starttime" => "12=>00",
                "endtime" => "2=>00",
                "color" => $this->COLOR[2],
                "url" => 'https://google.com' // link for a.href in event
            ]

        ];

        return $this->JsonResponse(array('monthly' => $event));
    }
    private function JsonResponse(array $var)
    {
        return json_encode($var, true);
    }
}
