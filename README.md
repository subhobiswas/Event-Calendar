# Event-Calendar
** simple JQuery and PHP bassed event calender 


(https://user-images.githubusercontent.com/51922492/210256444-176387f6-4919-4bb8-8b02-9f5f1bc5d0aa.png "Jquery Event Calender")

## Installation 

clone the repo
event_url='' set this variable to your event url in calender.js

```bash
event_url='http://localhost/calender/event';
it will be like param will set automatically
http://localhost/calender/event?startdate=2023-00-00&enddate=2023-02-02&now=1672673053568


```

## Event Setup
you just need to pass json data for your event or like this in php and set this url to event_url in j
```php
$event=[
        'id' => 1,
        'name' => 'event name',
        'startdate' => '2023-01-02',
        "enddate" => '2023-01-06',
        "starttime" => "12=>00",
        "endtime" => "2=>00",
        "color" => $this->COLOR[1],
        "url" => 'https://google.com' // link for a.href in event
    ],
echo json_encode($event,true);
```
