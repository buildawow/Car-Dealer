<?php

use App\Car;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Car::class)->create([
            'brand'         => 'TOYOTA',
            'model'         => 'AGYA',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '825GWF',
            'mileage'	    => '64289',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'TOYOTA',
            'model'         => 'AGYA',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '822GWF',
            'mileage'	    => '99531',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'TOYOTA',
            'model'         => 'AGYA',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '826GWF',
            'mileage'	    => '91897',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'TOYOTA',
            'model'         => 'AGYA',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '823GWF',
            'mileage'	    => '77321',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'TOYOTA',
            'model'         => 'AGYA',
            'year'          => Carbon::parse('2019-01-01'),
            'price'         => '50000',
            'plates'        => '615GYR',
            'mileage'	    => '53731',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'TOYOTA',
            'model'         => 'AGYA',
            'year'          => Carbon::parse('2019-01-01'),
            'price'         => '50000',
            'plates'        => '161GXQ',
            'mileage'	    => '83894',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'TOYOTA',
            'model'         => 'YARIS',
            'year'          => Carbon::parse('2014-01-01'),
            'price'         => '35000',
            'plates'        => '362FRC',
            'mileage'	    => '132672',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '987GTG',
            'mileage'	    => '133801',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '983GTG',
            'mileage'	    => '97546',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '004GTH',
            'mileage'	    => '86678',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '989GTG',
            'mileage'	    => '68247',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '985GTG',
            'mileage'	    => '104402',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '980GTG',
            'mileage'	    => '135704',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '002GTH',
            'mileage'	    => '88982',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '677HKS',
            'mileage'	    => '94414',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '006GTH',
            'mileage'	    => '87520',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '005GTH',
            'mileage'	    => '82722',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '986GTG',
            'mileage'	    => '94286',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '984GTG',
            'mileage'	    => '89849',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '008GTH',
            'mileage'	    => '120576',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '981GTG',
            'mileage'	    => '93397',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '988GTG',
            'mileage'	    => '83382',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '001GTH',
            'mileage'	    => '93937',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '007GTH',
            'mileage'	    => '83654',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '164GLT',
            'mileage'	    => '153490',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '003GTH',
            'mileage'	    => '98615',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'PICANTO',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '45000',
            'plates'        => '145GWH',
            'mileage'	    => '33121',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '561GSD',
            'mileage'	    => '151236',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '562GSD',
            'mileage'	    => '159043',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '600GSD',
            'mileage'	    => '91000',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '579GSD',
            'mileage'	    => '116794',
            'availability'  => 'Disponible'
        ]);
        

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '580GSD',
            'mileage'	    => '114558',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '597GSD',
            'mileage'	    => '120174',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '578GSD',
            'mileage'	    => '139044',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '603GSD',
            'mileage'	    => '125260',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '601GSD',
            'mileage'	    => '116393',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '602GSD',
            'mileage'	    => '144007',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '598GSD',
            'mileage'	    => '98893',
            'availability'  => 'Disponible'
        ]);
        

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '563GSD',
            'mileage'	    => '0',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '596GSD',
            'mileage'	    => '128198',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'KIA',
            'model'         => 'RIO',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '581GSD',
            'mileage'	    => '87520',
            'availability'  => 'Disponible'
        ]);	

        factory(Car::class)->create([
            'brand'         => 'NISSAN',
            'model'         => 'VERSA',
            'year'          => Carbon::parse('2016-01-01'),
            'price'         => '45000',
            'plates'        => '787FWY',
            'mileage'	    => '133324',
            'availability'  => 'Disponible'
        ]);	

        factory(Car::class)->create([
            'brand'         => 'NISSAN',
            'model'         => 'VERSA',
            'year'          => Carbon::parse('2016-01-01'),
            'price'         => '45000',
            'plates'        => '790FWY',
            'mileage'	    => '172003',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '425GMZ',
            'mileage'	    => '178024',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '431GMZ',
            'mileage'	    => '145234',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '263GRZ',
            'mileage'	    => '79929',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '434GMZ',
            'mileage'	    => '145738',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '229GMZ',
            'mileage'	    => '133585',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '077GQM',
            'mileage'	    => '125314',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '426GMZ',
            'mileage'	    => '140099',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '433GMZ',
            'mileage'	    => '137285',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '078GQM',
            'mileage'	    => '161942',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '079GQM',
            'mileage'	    => '144593',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '427GMZ',
            'mileage'	    => '97337',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '428GMZ',
            'mileage'	    => '140064',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '264GRZ',
            'mileage'	    => '70048',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '435GMZ',
            'mileage'	    => '152499',
            'availability'  => 'Disponible'
        ]);
        

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '429GMZ',
            'mileage'	    => '137428',
            'availability'  => 'Disponible'
        ]);
        

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2017-01-01'),
            'price'         => '50000',
            'plates'        => '432GMZ',
            'mileage'	    => '170669',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '064GQM',
            'mileage'	    => '117385',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '303GRZ',
            'mileage'	    => '87896',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '067GQM',
            'mileage'	    => '145429',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '074GQM',
            'mileage'	    => '128350',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '058GQM',
            'mileage'	    => '139194',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '057GQM',
            'mileage'	    => '166514',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '299GRZ',
            'mileage'	    => '87756',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '301GRZ',
            'mileage'	    => '139310',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '065GQM',
            'mileage'	    => '113853',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '270GRZ',
            'mileage'	    => '112011',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '306GRZ',
            'mileage'	    => '105929',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '075GQM',
            'mileage'	    => '149327',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '071GQM',
            'mileage'	    => '125025',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '070GQM',
            'mileage'	    => '149735',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '072GQM',
            'mileage'	    => '146293',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '307GRZ',
            'mileage'	    => '100711',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '280GRZ',
            'mileage'	    => '116879',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '265GRZ',
            'mileage'	    => '145997',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '073GQM',
            'mileage'	    => '124606',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '066GQM',
            'mileage'	    => '163407',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '069GQM',
            'mileage'	    => '135449',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '268GRZ',
            'mileage'	    => '97518',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '266GRZ',
            'mileage'	    => '114264',
            'availability'  => 'Disponible'
        ]);
        

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '308GRZ',
            'mileage'	    => '90971',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '305GRZ',
            'mileage'	    => '142937',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '269GRZ',
            'mileage'	    => '125708',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '304GRZ',
            'mileage'	    => '162660',
            'availability'  => 'Disponible'
        ]);

        factory(Car::class)->create([
            'brand'         => 'HYUNDAI',
            'model'         => 'ACCENT',
            'year'          => Carbon::parse('2018-01-01'),
            'price'         => '55000',
            'plates'        => '068GQM',
            'mileage'	    => '169442',
            'availability'  => 'Disponible'
        ]);	

    }
}
